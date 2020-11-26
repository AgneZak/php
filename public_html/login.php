<?php
require '../bootloader.php';

$nav = nav();

$form = [
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
];

$clean_inputs = get_clean_input($form);

if ($clean_inputs) {
    $success = validate_form($form, $clean_inputs);

    if ($success) {
        $p = 'Sveikinu prisijungus';

        $_SESSION = $clean_inputs;

        if (is_logged_in()) {
            header("Location: admin/add.php");
            exit();
        }
    } else {
        $p = 'Eik nx';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/media/style.css">
    <title>Login</title>
</head>
<body>
<main>

    <?php require ROOT . '/app/templates/nav.tpl.php'; ?>

    <article class="wrapper">
        <h1 class="header header--main">Prisijunki</h1>

        <?php require ROOT . '/core/templates/form.tpl.php'; ?>

        <?php if (isset ($p)): ?>
            <p><?php print $p; ?></p>
        <?php endif; ?>

    </article>
</main>
</body>
</html>
