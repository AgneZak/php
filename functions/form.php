<?php

function get_clean_input($form){
    $parameters=[];

    foreach ($form as $key => $input) {
        $parameters[$key] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $parameters);
}

$svarus_inputai = get_clean_input($form);

?>