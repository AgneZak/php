<?php
/**
 * Iš duoto duomenų masyvo sukuria atributus
 * deklaruojantį tekstą HTML elementui. (pavadinimas="vertė")
 * @param array $attr masyvas HTML atributų porų.
 * @return string HTML atributai.
 */

function html_attr(array $attr): string{
    $string = '';
    foreach ($attr as $name => $value) {
        $string .= "$name=\"$value\" ";
    }
    return $string;
}

/**
 * Iš duoto duomenų masyvo sukuria atributus
 * deklaruojantį tekstą skirtą HTML input elementui.
 *
 * Sumuojami atributai yra name, type, value ir visi likę
 * atributai iš $field['extra']['attr'] masyvo.
 *
 * @param string $field_name HTML input'o pavadinimas.
 * @param array $field masyvas HTML input atributų.
 * @return string input elemento atributai.
 */

function input_attr(string $field_name, array $field): string{
    $attributes = [
        'name' => $field_name,
        'type' => $field['type'],
        'value' => $field['value'] ?? '',
    ] + ($field['extra']['attr'] ?? []);

    return html_attr($attributes);
}

/**
 * Iš duoto duomenų masyvo sukuria atributus
 * deklaruojantį tekstą HTML button elementui.
 *
 * name atributas visad turi likti 'action'.
 *
 * @param string $button_id HTML button'o value atributas.
 * @param array $button masyvas HTML button atributų.
 * @return string input elemento atributai.
 */

function button_attr(string $button_id, array $button): string{
    $attributes = [
        'name' => 'action',
        'type' => $button['type'] ?? 'submit',
        'value' => $button_id,
    ] + ($button['extra']['attr'] ?? []);

    return html_attr($attributes);
}
?>