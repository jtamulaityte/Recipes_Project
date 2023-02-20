<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        // select * from categories
        $categories = Category::all();
        return view('admin/categories', [
            'categories' => $categories
        ]);
        
    }
}
