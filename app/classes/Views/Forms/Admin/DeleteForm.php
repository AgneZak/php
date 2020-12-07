<?php


namespace App\Views\Forms\Admin;


use Core\Views\Form;

class DeleteForm extends Form
{
    public function __construct($value = null)
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST'
            ],
            'fields' => [
                'id' => [
                    'type' => 'hidden',
                    'value' => $value,
                    'validators' => [
                        'validate_row_exists'
                    ]
                ]
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Delete',
                    'type' => 'submit',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn'
                        ]
                    ]
                ],
            ]
        ]);
    }

}