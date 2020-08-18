<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

	public function index()
	{
		// $user = $this->userModel->where(['email' => session()->get('email')])->first();
		$data = [
			'title' => 'Dashboard'
		];
		return view('/admin/dashboard', $data);
	}
}
