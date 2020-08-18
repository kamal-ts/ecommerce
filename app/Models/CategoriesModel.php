<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $table = 'categories';
    protected $useTimestamps = true;
    // tentukan field yg boleh user isi
    protected $allowedFields = ['name', 'slug'];

    protected $validationRules = [
        'name' => 'required|is_unique[categories.name]',
    ];

    // protected $validationMessages = [];
    // protected $skipValidation = false;
}
