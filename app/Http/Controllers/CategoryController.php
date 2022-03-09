<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use App\Repositories\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
//    public $categoryModel;
//
//    public function __construct(CategoryModel $categoryModel)
//    {
//        $this->categoryModel= $categoryModel;
//    }

    public function index()
    {
        $categories = Categories::all();
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('backend.category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Categories();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category= Categories::all()->where('id',$id)->first();
        return view('backend.category.detail', compact('category'));
    }

    public function edit($id)
    {

        $category = Categories::all()->where('id',$id)->first();
        return view('backend.category.update', compact(['id','category']));
    }

    public function update(Request $request, $id)
    {
        $categories= Categories::all()->where('id',$id)->first();
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->save();
        return redirect()->route('categories.index', compact('categories'));
    }

    public function destroy($id)
    {
       Categories::all()->where('id',$id)->first()->delete();
        return redirect()->route('categories.index');
    }
}
