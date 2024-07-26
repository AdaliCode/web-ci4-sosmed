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
    public function index()
    {
        $description = $this->postmodel->where('description IS NOT NULL')->findAll();
        $trenWords = [];
        // return print_r($description);
        foreach ($description as $value) {
            $word_count = array_unique(str_word_count($value['description'], 1));
            // return var_dump($word_count);
            array_push($trenWords, $word_count);
        }
        return var_dump($trenWords);
        $data = [
            'title' => 'Beranda / Twittar',
            'posts' => $this->postmodel->findAll()
        ];
        return view('home', $data);
    }
}
