<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller {

    protected function before() {
        return true;
    }

    protected function after() {
    }

    protected function indexAction() {
        View::renderTemplate("Home/index.html", [
            'name' => 'Đ.N.T',
            'colors' => ['red', 'green', 'yello']
        ]);
    }
}
