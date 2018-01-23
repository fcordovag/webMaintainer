<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SucursalController extends Controller
{
    public function index()
    {
    	return view('Admin.Sucursal.inicio');
    }
}
