<?php

/**
 *
 * Function checks if user is logged in
 *
 * @return bool
 */
function is_logged_in(): bool
{
    if ($_SESSION) {
        $data = file_to_array(DB_FILE);

        foreach ($data as $entry) {
            if ($_SESSION['email'] === $entry['email'] &&
                $_SESSION['password'] === $entry['password']) {

                return true;
            }
        }
    }

    return false;
}

/**
 *
 * Ends session.
 * Makes session data clean and destroys server side cookie
 * If it is written redirects to location
 *
 * @param string|null $redirect
 */
function logout(string $redirect = null): void
{
    session_unset();
    session_destroy();
    header("Location: /$redirect");
}
