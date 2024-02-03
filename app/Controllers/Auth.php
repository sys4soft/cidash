<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    /* 
    Login
    */
    public function login()
    {
        return view('auth/login_frm');
    }

    public function login_submit()
    {
        echo 'login!!!!!';
    }
    
    /* 
    New account
    */
    
    public function new_account()
    {
        return view('auth/new_account_frm');
    }
    
    public function new_account_submit()
    {
        echo 'nova conta submit';
    }

    /* 
    forgot password
    */

    public function forgot_password()
    {
        return view('auth/forgot_password_frm');
    }

    public function forgot_password_submit()
    {
        echo 'esqueci a senha submit';
    }


}
