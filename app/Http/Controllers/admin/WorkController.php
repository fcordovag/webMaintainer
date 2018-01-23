<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    //
     public function index()
    {
    	return view('Admin.Trabajador.inicio');
    }
}
