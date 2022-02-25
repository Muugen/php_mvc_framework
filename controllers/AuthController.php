<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class AuthController
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\controllers
 */

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()){
            return 'Handle submitted data';
        }
        return $this->render('register');
    }
}