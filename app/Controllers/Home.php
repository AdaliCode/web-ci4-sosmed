<?php

namespace App\Controllers;

use App\Models\PostModel;

class Home extends BaseController
{
    protected $postmodel;
    public function __construct()
    {
        $this->postmodel = new postModel();
    }
    public function index(): string
    {
        $data = [
            'title' => 'Beranda / Twittar',
            'posts' => $this->postmodel->findAll()
        ];
        return view('home', $data);
    }
}
