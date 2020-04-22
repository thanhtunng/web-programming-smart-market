<?php
namespace App\Controllers;

use \Core\View;

class Posts extends \Core\Controller {
    public function index() {
        View::renderTemplate("Posts/index.html");
    }

    public function addNew() {
        echo 'Hello from the addNew action in the Posts controller!';
    }
}
