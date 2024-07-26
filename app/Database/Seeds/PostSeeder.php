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
        array_push($data, $getPost('Tanyarlfes', '@tanyarlfes'), $getPost('The Educational Tools', '@TheEduTools'), $getPost('Tanyarlfes', '@tanyarlfes'), $getPost('The Educational Tools', '@TheEduTools'), $getPost('Tanyarlfes', '@tanyarlfes'));
        $this->db->table('posts')->insertBatch($data);
    }
}
