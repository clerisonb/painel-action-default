<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function list () {
	    return view('sistema.tables.posts');
	}
	public function add(){
		return view('sistema.formularios.post');
	}
}
