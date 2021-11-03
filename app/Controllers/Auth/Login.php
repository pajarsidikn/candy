<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => "Login",

        ];
        echo view('auth/v_login', $data);
    }
    public function regis()
    {
        $data = [
            'judul' => "Register",

        ];
        echo view('auth/v_register', $data);
    }
}
