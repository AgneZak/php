<?php


namespace Core;


use App\App;

class Session
{
    private ?array $user = null;

    public function __construct()
    {
        session_start();
        $this->loginFromCookie();

    }

    public function loginFromCookie(): bool
    {
        if ($_SESSION) {
            $this->login($_SESSION['email'], $_SESSION['password']);
        }

        return false;
    }

    /**
     * Checks if there is such email and password in the database.
     *
     * If there is such user and password is the same as in database returns true
     * and sets $_SESSION and $user.
     * If email or password are not in the database, returns false.
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function login(string $email, string $password): bool
    {
        $user = App::$db->getRowWhere('users', [
            'email' => $email,
            'password' => $password
        ]);

        if ($user) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            $this->user = $user;

            return true;
        }

        $this->user = null;

        return false;
    }

    /**
     * Get $user variable.
     *
     * @return array|null
     */
    public function getUser(): ?array
    {
        return $this->user;
    }

    /**
     * Ends session.
     * Makes session data clean and destroys server side cookie
     * If it is written redirects to location
     *
     * @param string|null $redirect
     */
    public function logout(?string $redirect = null)
    {
        $_SESSION = [];
        session_destroy();

        if ($redirect) {
            header("Location: $redirect");
        }
    }
}