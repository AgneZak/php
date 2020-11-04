<?php

require './functions/html.php';
require './functions/form.php';

$form = [
    'fields' => [
        'email' => [
            'label' => 'Email:',
            'type' => 'text',
            'value' => 'agne@gmail.com',
            'extra' => [
                'attr' => [
                    'placeholder' => 'agne@gmail.com',
                    'class' => 'input-field'
                ]
            ]
        ],
        'password' => [
            'label' => 'Password:',
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Your password...',
                    'class' => 'input-field'
                ]
            ]
        ]
    ],
    'buttons' => [
        'login' => [
            'title' => 'Log in',
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
];



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Forms</title>
<style>

</style>
</head>
<body>
    <main>
        <h1><?php print $isiltruota['email']; ?></h1>
        <form method="post">
            <?php foreach($form['fields'] as $input_name => $input): ?>
                <label>
                    <span><?php print $input['label']; ?></span>
                    <input <?php print input_attr($input_name, $input); ?>>
                </label>
            <?php endforeach; ?>
            <?php foreach($form['buttons'] as $button_name => $button): ?>
                <button <?php print button_attr($button_name, $button); ?>>
                    <?php print $button['title']; ?>
                </button>
            <?php endforeach; ?>
        </form>
    </main>
</body>
</html>