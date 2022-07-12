<?php

namespace App\Libraries;

class Database
{
    public function dbase()
    {
        $db = \Config\Database::connect();
        return $db;
    }
}
