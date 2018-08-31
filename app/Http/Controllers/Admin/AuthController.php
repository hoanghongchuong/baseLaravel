<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class AuthController extends Controller
{
    public function __contruct(Admins $admin)
    {
    	$this->admin = $admin;
    }
}
