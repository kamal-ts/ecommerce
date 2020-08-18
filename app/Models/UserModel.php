<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = true;
    
    // tentukan field yg boleh user isi
    protected $allowedFields = ['name', 'email', 'image', 'password', 'role_id', 'is_active'];


    // public function getProduct($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->join('subcategory', 'subcategory.id = product.category_id')->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }
}
