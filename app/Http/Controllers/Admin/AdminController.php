<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminController extends Controller
{
	/**
	 * [__construct description]
	 * @param Admin $admin [description]
	 */
    public function __construct(Admin $admin)
    {
    	$this->admin = $admin;
    }

    public function index(Request $req)
    {
    	$admins = $this->admin->getList();
    	dd($admins);
    }
}
