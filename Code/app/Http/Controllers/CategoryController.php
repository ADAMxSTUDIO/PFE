<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    /* */
    public function picture($id)
    {
        $pictures = \App\Models\Picture::join('categories', 'pictures.category_id', '=', 'categories.id')->where('category_id', $id)->get();
        return view('categories.x', compact('pictures'));
    }
}