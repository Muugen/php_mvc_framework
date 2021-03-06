<?php

namespace app\controllers;

use anthonyhuynh\PhpMvcFramework\Request;
use anthonyhuynh\PhpMvcFramework\Response;
use anthonyhuynh\PhpMvcFramework\Controller;
use anthonyhuynh\PhpMvcFramework\Application;
use app\models\ContactForm;

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

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()){
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Merci de nous avoir contactés, nous vous répondrons très bientôt.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
}