<?php

namespace App\Controllers\Admin;

use App\App;
use App\Controllers\Base\AuthController;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use Core\View;

class AddController extends AuthController
{
    protected AddForm $form;
    protected BasePage $page;

    public function __construct()
    {
        parent::__construct();
        $this->form = new AddForm();
        $this->page = new BasePage([
            'title' => 'Add Items',
        ]);
    }

    public function add(): ?string
    {
        if ($this->form->validate()) {
            $clean_inputs = $this->form->values();

            App::$db->insertRow('items', $clean_inputs);

            $p = 'You added an item';
        }

        $content = new View([
            'title' => 'Add',
            'form' => $this->form->render(),
            'message' => $p ?? null
        ]);

        $this->page->setContent($content->render(ROOT . '/app/templates/content/forms.tpl.php'));

        return $this->page->render();
    }

}