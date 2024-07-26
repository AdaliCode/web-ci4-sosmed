<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [];
    protected $useTimestamps = true;
}
