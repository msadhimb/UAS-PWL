<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username',
        'password'
    ];
}
