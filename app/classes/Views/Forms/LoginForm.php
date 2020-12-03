<?php

namespace App\Views\Forms;

use Core\Views\Form;

class LoginForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST'
            ],
            'fields' => [
                'email' => [
                    'label' => 'Email',
                    'type' => 'email',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email'
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'email@mail',
                            'class' => 'input-field'
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'password',
                            'class' => 'input-field'
                        ]
                    ]
                ]
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Prisijunk',
                    'type' => 'submit',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn'
                        ]
                    ]
                ],
                'clear' => [
                    'title' => 'Clear',
                    'type' => 'reset',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn'
                        ]
                    ]
                ]
            ],
            'validators' => [
                'validate_login'
            ]
        ]);
    }

}