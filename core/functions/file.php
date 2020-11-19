<?php
function array_to_file($array, $file_name)
{
    $data = json_encode($array);
    $coded = file_put_contents($file_name, $data);

    return $coded !== false;
}

/**
 *
 * Gets file and decodes it back to array.
 *
 * @param $file_name
 * @return array|false|mixed
 */
function file_to_array($file_name)
{
    if (file_exists($file_name)) {
        $data = file_get_contents($file_name);
        if ($data !== false) {
            return json_decode($data, true) ?? [];
        }
        return [];
    }

    return false;
}

