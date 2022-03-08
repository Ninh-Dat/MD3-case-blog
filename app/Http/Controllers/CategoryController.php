<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categoryModel;

    public function __construct(CategoryModel $categoryModel)
    {
        $this->categoryModel= $categoryModel;
    }

    public function index()
    {
        $categories = $this->categoryModel->index();
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $category= $this->categoryModel->show($id);
        return view('backend.category.detail', compact('category'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $this->categoryModel->destroy($id);
        return redirect()->route('categories.index');
    }
}
