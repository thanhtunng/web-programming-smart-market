<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Post;

class Home extends \Core\Controller {

    protected function before() {
        $posts = Post::getAll();
        foreach($posts as $post) {
            echo "$post[id] - $post[content] - $post[title] <br/>";
        }
        return true;
    }

    protected function after() {
    }

    protected function indexAction() {
        echo "<br/> index Action";
        // View::renderTemplate("Home/index.html", [
        //     'name' => 'Đ.N.T',
        //     'colors' => ['red', 'green', 'yello']
        // ]);
    }
}
