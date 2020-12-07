<?php


namespace App\Views\Forms\Admin;


use Core\Views\Form;

class DeleteForm extends Form
{
    public function __construct($value)
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST'
            ],
            'fields' => [
                'id' => [
                    'type' => 'hidden',
                    'value' => $value
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