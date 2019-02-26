<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    //hien thi danh sach bai viet
    public function index(){
        $blogs = Blog::all();
        return view('blogs.list', compact('blogs'));

    }
    //taoj bai viet moi
    public function create(){
        return view('blogs.create');

    }
    public function view($id){
        $blogs = Blog::findOrFail($id);
        return view('blogs.view', compact('blogs'));
    }
    //them moi bai viet
    public function store(Request $request){
        $blog = new Blog();
        $blog->title    = $request->input('title');
        $blog->teaser    = $request->input('teaser');
        $blog->content      = $request->input('content');
        $blog->created      = $request->input('created');
        $blog->save();
         Session:: flash('success', 'Tao moi bai viet thanh cong');
         return redirect()->route('blogs.index');

    }


    //hien thi form sua bai viet
    public function edit($id){
        $blogs = Blog::findOrFail($id);
        return view('blogs.edit', compact('blogs'));

    }


    //sua bai viet
    public function update(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->title    = $request->input('title');
        $blog->teaser    = $request->input('teaser');
        $blog->content      = $request->input('content');
        $blog->created      = $request->input('created');
        $blog->save();
        Session:: flash('success', 'Cap nhat bai viet thanh cong');
        return redirect()->route('blogs.index');

    }
    //xoa bai viet
    public function destroy($id){
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        Session::flash('success', 'Xoa bai viet thanh cong');
        return redirect()->route('blogs.index');

    }
}
