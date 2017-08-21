<?php

namespace Core;

class Response
{
    private $view;
    private $params;

    public function __construct($view, array $params = [])
    {
        $this->view = $view;
        $this->params = $params;
    }

    public function render()
    {
        extract($this->params);
        ob_start();
        include __DIR__ . "\\..\\views\\" . $this->view;
        echo ob_get_clean();
    }
}