<?php
namespace Controller;

use Core\ResponseFactory;

class BlogController
{
    public function listAction()
    {
        $pdo = new \PDO('mysql:host=127.0.0.1;port=3306;dbname=cms','root','');

        $results = $pdo->query("SELECT * FROM posts")->fetchAll();

        return ResponseFactory::create('list.php', [
            'test' => 'list - v2',
            'results' => $results
            /** test to check GIT */
        ]);
    }

    public function postAction()
    {
        return ResponseFactory::create('post.php');
    }
}