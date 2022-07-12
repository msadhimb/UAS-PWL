<?php

namespace App\Controllers;

use App\Models\LoginModel;


class Login extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        if (!session()) {
            return view('login\login');
        } else {
            $data = [
                'validation' => \Config\Services::validation()
            ];
            return view('login\login', $data);
        }
    }

    public function Register()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('login\register', $data);
    }

    public function home()
    {
        $data = [
            'session' => \Config\Services::session(),
        ];

        return view('home\home', $data);
    }

    public function registerAction()
    {
        if (!$this->validate([
            'username' => 'required|is_unique[member.username]',
            'pass' => 'required',
            'cpass' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('Login/register')->withInput()->with('validation', $validation);
        }

        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        if ($pass == $cpass) {
            $passHash = password_hash($pass, PASSWORD_DEFAULT);
            $data = [
                'username' => $username,
                'password' => $passHash
            ];
            $loginModel = new LoginModel();
            $loginModel->insert($data);
            return view('login\login');
        }
    }

    public function loginAction()
    {
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $builder = $this->db->table('member');
        $builder->select('*');
        $builder->where("username", $username);
        $data = $builder->get()->getResult();

        if (!$this->validate([
            'username' => 'required',
            'pass' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('Login/login')->withInput()->with('validation', $validation);
        }

        foreach ($data as $row) {
            if ($row->username == $username) {
                if (password_verify($pass, $row->password)) {
                    $dataSession = [
                        'sesUser' => $row->username,
                    ];
                    $this->session->set($dataSession);
                    return redirect()->to('login/home');
                }
            }
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('login/home');
    }
}
