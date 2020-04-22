<?php

namespace App\Controllers\Admin;

class Users extends \Core\Controller {

    protected function before() {
        echo '(before) <br/>';
        // Make sure an admin user is logged in for example
        // return false;
    }

    protected function indexAction() {
        echo 'User admin index';
    }
}
