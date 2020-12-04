<?php

namespace App\Views\Forms\Admin;

use Core\Views\Form;

class AddForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST'
            ],
            'fields' => [
                'name' => [
                    'label' => 'Product name',
                    'type' => 'text',
                    'value' => '',
                    'validators' => [
                        'validate_field_not_empty'
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Sock',
                            'class' => 'input-field'
                        ]
                    ]
                ],
                'price' => [
                    'label' => 'Price',
                    'type' => 'number',
                    'value' => '',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => '99',
                            'class' => 'input-field'
                        ]
                    ]
                ],
                'img' => [
                    'label' => 'Product image',
                    'type' => 'text',
                    'value' => '',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Http://url',
                            'class' => 'input-field'
                        ]
                    ]
                ],
                'descr' => [
                    'label' => 'Product Description',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty'
                    ],
                ],
                'vegan' => [
                    'label' => 'Is it vegan?',
                    'type' => 'select',
                    'options' => [
                        'Vegan' => 'Vegan',
                        'Not-Vegan' => 'Not-Vegan'
                    ],
                    'validators' => [
                        'validate_select',
                    ],
                    'value' => 'Not-Vegan'
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
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
            ]
        ]);
    }
}