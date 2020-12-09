<?php


namespace App\Controllers;


use App\App;
use App\Controllers\Base\GuestController;
use App\Views\BasePage;
use App\Views\Forms\LoginForm;
use Core\View;

class LoginController extends GuestController
{
    protected LoginForm $form;
    protected BasePage $page;

    public function __construct()
    {
        parent::__construct();
        $this->form = new LoginForm();
        $this->page = new BasePage([
            'title' => 'Login',
        ]);
    }

    public function login(): ?string
    {
        if ($this->form->validate()) {
            $clean_inputs = $this->form->values();

            App::$session->login($clean_inputs['email'], $clean_inputs['password']);

            if (App::$session->getUser()) {
                header("Location: add");
                exit();
            }
        }

        $content = new View([
            'title' => 'Prisijunki',
            'form' => $this->form->render()
        ]);

        $this->page->setContent($content->render(ROOT . '/app/templates/content/forms.tpl.php'));

        return $this->page->render();
    }

}