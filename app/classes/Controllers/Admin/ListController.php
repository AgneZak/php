<?php


namespace App\Controllers\Admin;


use App\App;
use App\Controllers\Base\AuthController;
use App\Views\BasePage;
use App\Views\Forms\Admin\DeleteForm;
use App\Views\Tables\Admin\ProductsTable;
use Core\Views\Form;

class ListController extends AuthController
{
    protected DeleteForm $form;
    protected BasePage $page;

    public function __construct()
    {
        parent::__construct();
        $this->form = new deleteForm();
        $this->page = new BasePage([
            'title' => 'Edit Items',
        ]);
    }

    public function editList(): ?string
    {
        if (Form::action()) {
            if ($this->form->validate()) {
                $clean_inputs = $this->form->values();

                App::$db->deleteRow('items', $clean_inputs['id']);
            }
        }

        $table = new ProductsTable();

        $this->page->setContent($table->render());

        return $this->page->render();
    }
}