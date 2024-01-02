<?php

namespace App\Controllers;


use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Shield\Entities\User;


class Admin extends BaseController {

    public function __construct() {
    }

    public function index() {
        $users = auth()->getProvider();

        $user = $users->findById(1);
       # $user->syncGroups('admin');
        echo 'Erlaubt..';
    }
}
