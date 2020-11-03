<?php
var_dump($_POST);

$form = [
    'email' => [
        'label' => 'Email:',
        'type' => 'text',
        'placeholder' => 'agne@gmail.com'
    ],
    'password' => [
        'label' => 'Password:',
        'type' => 'password',
        'placeholder' => 'Your password...'
    ]
];

function get_clean_input($form){
    $parameters=[];
    foreach ($form as $key => $input) {
        $parameters[$key] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $parameters);   
}

var_dump(get_clean_input($form));

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
            <?php foreach($form as $key => $input): ?>
                <label>
                    <?php print $input['label']; ?>
                    <input name='<?php print $key; ?>'type='<?php print $input['type']; ?>' placeholder='<?php print $input['placeholder']; ?>'>
                </label>
            <?php endforeach; ?>
            <button type="submit" name='button'>Log in</button>
        </form>
        
    </main>
</body>
</html>