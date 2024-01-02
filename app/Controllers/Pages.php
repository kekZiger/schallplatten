<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController {
    public function index() {
        $data['title'] = 'Schallplattensammlung'; // Capitalize the first letter
        $data['page'] = 'welcome_message';

        return view('templates/template', $data);
    }

    public function view($page = 'home') {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['page'] = 'pages/' . $page;

        return view('templates/template', $data);
    }
}
