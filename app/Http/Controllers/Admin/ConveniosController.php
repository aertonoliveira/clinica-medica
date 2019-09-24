<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConveniosController extends Controller
{
    public function index ()
    {
        return view('admin.convenios.index');
    }
}
