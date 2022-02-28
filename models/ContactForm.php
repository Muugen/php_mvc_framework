<?php

namespace app\models;

use anthonyhuynh\PhpMvcFramework\Model;

/**
 * Class ContactForm
 * 
 * @author Anthony HUYNH <anthonyhuynh1204@gmail.com>
 * @package app\models
 */

class ContactForm extends Model
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $body = '';

    public function rules():array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'subject' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
            'name' => 'Votre nom',
            'email' => 'Votre email',
            'subject' => 'Objet',
            'body' => 'Votre message'
        ];
    }

    public function send()
    {
        return true;
    }
}