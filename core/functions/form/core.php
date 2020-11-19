<?php

function get_clean_input($form)
{
    $parameters = [];

    foreach ($form['fields'] as $key => $input) {
        $parameters[$key] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $parameters);
}


/**
 * Tikrinama pateikta forma pritaikant kiekvieno laukelio validatorius.
 *
 * @param array $form Formos masyvas.
 * @param array $form_values Išvalytos input'ų vertės.
 * @return bool
 */
function validate_form(array &$form, array $form_values): bool
{
    $is_valid = true;

    foreach ($form['fields'] as $field_id => &$field) {
        foreach ($field['validators'] ?? [] as $function_index => $function_name) {

            if (is_array($function_name)) {
                $params = $function_name;
                $field_is_valid = $function_index($form_values[$field_id], $field, $params);
            } else {
                $field_is_valid = $function_name($form_values[$field_id], $field);
            }

            if (!$field_is_valid) {
                $is_valid = false;
                break;
            }
        }

    }

    foreach ($form['validators'] ?? [] as $validator_name => $validator) {

        if (is_array($validator)) {
            $field_is_valid = $validator_name($form_values, $form, $params = $validator);
        } else {
            $field_is_valid = $validator($form_values, $form);
        }

        if (!$field_is_valid) {
            $is_valid = false;
            break;
        }
    }

    return $is_valid;
}