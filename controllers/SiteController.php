<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\controllers
 */

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Anthony HUYNH'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }


    public function handleContact(Request $request)
    {
        return 'handling submitted data';
    }
}