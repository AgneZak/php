<?php


namespace Core;


class View
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render($template_path)
    {
        if (!file_exists($template_path)){
            throw new \Exception("{$template_path} template does not exist");
        }

        $data = $this->data;

        ob_start();

        require $template_path;

        return ob_get_clean();

    }
}