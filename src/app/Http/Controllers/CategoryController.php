<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function confirm(Request $request){
        $category = ['content' => $request->content];
    }
    
}