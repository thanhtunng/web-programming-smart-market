<?php

namespace App\Controllers;

class Home extends \Core\Controller {

    protected function before() {
        echo '(before) <br/>';
        return true;
    }

    protected function after() {
        echo '(after)';
    }

    protected function indexAction() {
        echo '<p>Route parameters: <pre>' .
             htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}
