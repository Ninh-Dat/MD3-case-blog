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
        //
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
        //
    }
}
