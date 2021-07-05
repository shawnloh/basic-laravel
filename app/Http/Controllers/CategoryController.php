<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function AllCat()
    {
        return view('admin.category.index');
    }
}
