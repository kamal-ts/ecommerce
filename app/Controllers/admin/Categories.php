<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;

class Categories extends BaseController
{
	protected $perPage = 1;
	protected $categoriesModel;

	public function __construct()
	{
		$this->categoriesModel = new CategoriesModel();
	}

	public function index()
	{
		
		$data = [
			'title' => 'Categories',
			'categories' => $this->categoriesModel->paginate($this->perPage),
			'pager' => $this->categoriesModel->pager,
		];

		return view('/admin/categories/index', $data);
	}
}
