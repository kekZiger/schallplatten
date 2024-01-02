<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class News extends BaseController {
    public function index() {
        $model = model(NewsModel::class);

        $data = [
            'news' => $model->getNews(),
            'title' => 'News archive',
            'page' => 'news/index',
        ];

        return view('templates/template', $data);
    }

    public function show($slug = null) {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];
        $data['page'] = 'news/view';

        return view('templates/template', $data);
    }

    public function new() {
        helper('form');

        $data['title'] = 'Create a news item';
        $data['page'] = 'news/create';

        return view('templates/template', $data);
    }

    public function create() {
        helper('form');

        $data = $this->request->getPost(['title', 'body']);



        if (!$this->validateData($data, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body' => 'required|max_length[5000]|min_length[10]'
        ])) {
            // Validate fails, back to "new"
            return $this->new();
        }

        $post = $this->validator->getValidated();

        $model = model(NewsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug' => url_title($post['title'], '-', true),
            'body' => $post['body']
        ]);


        $data['title'] = 'Create a news item';
        $data['page'] = 'news/success';

        return view('templates/template', $data);
    }
}
