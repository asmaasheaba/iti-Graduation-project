<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Http\Controllers\Admin\CreateBlogController;

class BlogController extends Controller
{

    public function index(){

        $blogs = blog::all();
        return view('blogs.index' , ['blogs' => $blogs]);
    }



    public function show($id)
    {
        //
        $blog = blog::find($id);
        // $blogs = DB::table('blogs')->where('id', $id)->first();
        return view("blogs.blog", ['blog' => $blog] );
    }


}
