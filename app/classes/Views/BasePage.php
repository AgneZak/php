<?php


namespace App\Views;


use Core\Views\Page;

class BasePage extends Page
{
    public function __construct($data)
    {
        $nav = new Navigation();

        parent::__construct($data + [
                'css' => [
                    '/media/style.css'
                ],
                'header' => $nav->render()
            ]);
    }

    public function setTitle($title)
    {
        $this->data['title'] = $title;
    }

    public function setHeader($header)
    {
        $this->data['header'] = $header;
    }

    public function setContent($content)
    {
        $this->data['content'] = $content;
    }
}