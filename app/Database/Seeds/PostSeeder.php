<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $getPost = fn ($accountName, $accountUserName) => ['post_accountName' => $accountName, 'post_accountUserName' => $accountUserName, 'created_at' => Time::now(), 'updated_at' => Time::now()];

        array_push($data, $getPost('Tanyarlfes', '@tanyarlfes'), $getPost('The Educational Tools', '@TheEduTools'), $getPost('aws𝕏', '@awsiiq'), $getPost('NO CONTEXT HUMANS', '@HumansNoContext'), $getPost('Tanyarlfes', '@tanyarlfes'));
        $this->db->table('posts')->insertBatch($data);
        $this->db->table('posts')->set('description', 'new wallpaper?? bener new kah?')->where('id', 3)->update();
        $this->db->table('posts')->set('description', 'What is he trying to tell us new? 😭')->where('id', 4)->update();
    }
}
