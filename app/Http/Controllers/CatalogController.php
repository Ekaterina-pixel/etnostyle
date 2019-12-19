<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CatalogController extends Controller
{
    public function getIndex(){
		 $objs = Category::all();
		 return view ('category', compact('objs'));
	}
	public function getCategory($id=null){
		 $obj = Category::find($id);
		 return view ('products', compact('obj'));
	}
}
