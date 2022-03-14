<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use App\Models\User;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BlogController extends Controller
{
//    public $blogModel;
//
//    public function __construct(BlogRepository $blogModel)
//    {
//        $this->blogModel=$blogModel;
//    }

    public function index()
    {
        $blogs= Blog::all();
        return view('backend.blog.index', compact('blogs'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Categories::all();
        return view('backend.blog.create', compact(['categories','users']));
    }

    public function store(Request $request)
    {
        $blog= new Blog();
        $blog->name = $request->input('name');
        $blog->title = $request->title;
        $blog->content = $request->input('content');
        $blog->category_id = $request->select;
        $blog->user_id = $request->user;
        $blog->save();
        return redirect()->route('blogs.index');
    }

    public function show($id)
    {
//        $categories = Categories::all();
        $blog = Blog::all()->where('id',$id)->first();
        return view('backend.blog.detail', compact('blog',));
    }

    public function edit($id)
    {
        $users =User::all();
        $categories = Categories::all();
        $blog = Blog::all()->where('id',$id)->first();
        return view('backend.blog.update',compact(['id','blog','categories','users']));
    }

    public function update(Request $request, $id)
    {
        $blog= Blog::all()->where('id',$id)->first();
        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->content = $request->input('content');
        $blog->category_id = $request->select;
        $blog->user_id = $request->user;
        $blog->save();
        return redirect()->route('blogs.index', compact('blog'));
    }

    public function destroy($id)
    {
        Blog::all()->where('id',$id)->first()->delete();
        return redirect()->route('blogs.index');
    }
}
