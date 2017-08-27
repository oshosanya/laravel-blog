<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$category = Category::all();
    	return view('admin.category')->with([
    			'category' => $category
    		]);
    }

    public function create()
    {
        return view('admin.createCategory');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'categoryName' => 'required|unique:categories,name|max:32',
        ]);

        $category = new Category;
        $category->name = $request->input('categoryName');
        $category->save();

        return redirect('/admin/category')->with('success', 'Category created successfully');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
    	
    }
}
