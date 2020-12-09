<?php


namespace App\Controllers;

use App\App;
use App\Controllers\Base\GuestController;
use App\Views\BasePage;
use App\Views\Forms\RegisterForm;
use Core\View;

class RegisterController extends GuestController
{
    protected RegisterForm $form;
    protected BasePage $page;

    public function __construct()
    {
        parent::__construct();
        $this->form = new RegisterForm();
        $this->page = new BasePage([
            'title' => 'Register',
        ]);
    }

    public function register(): ?string
    {
        if ($this->form->validate()) {
            $clean_inputs = $this->form->values();

            unset($clean_inputs['password_repeat']);

            App::$db->insertRow('users', $clean_inputs);

            header("Location: /login");
        }

        $content = new View([
            'title' => 'Register',
            'form' => $this->form->render()
        ]);

        $this->page->setContent($content->render(ROOT . '/app/templates/content/forms.tpl.php'));

        return $this->page->render();
    }

}