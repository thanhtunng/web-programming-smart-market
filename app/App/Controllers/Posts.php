<?php
namespace App\Controllers;

use \Core\View;
use \App\Models\Post;

class Posts extends \Core\Controller {
    public function indexAction() {
        View::renderTemplate("Posts/index.twig",[
            "posts" => Post::getAll()
        ]);
    }

    public function addNew() {
        echo 'Hello from the addNew action in the Posts controller!';
    }
}
