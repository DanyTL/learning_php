<?php

namespace Core;

/**
 * Test commit nr.2
 */
use Controller\BlogController;

class Application
{
    private $blogController;

    public function __construct()
    {
        $this->blogController = new BlogController();
    }

    public function handle()
    {
        $uri = str_replace('/learning/public', '', $_SERVER['REQUEST_URI']); //subiect - referinta
        $path = parse_url($uri)['path'];

        if ($path === '/index.php') {
            $this->blogController->listAction()->render();
        } elseif ($path === '/index.php/post') {
            $this->blogController->postAction()->render();
        } else {
            header("HTTP/1.0 404 Not Found");
        }
    }
}