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
        echo 'nova conta';
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
        echo 'esqueci a senha';
    }

    public function forgot_password_submit()
    {
        echo 'esqueci a senha submit';
    }


}
