<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class CreateBlogController extends Controller
{

    public function index()
    {
        //
        $blogs = blog::all();
        return view("admin.blogsCreate.blog", ['blogs' => $blogs]);
    }


    public function create()
    {
        //
        $blogs = blog::all();

        return view('admin.blogsCreate.blogadd', compact('blogs'));

    }


    public function store(Request $request, blog $blog)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png',
        ]);

        $blog = new blog();
        $blog->name = $validatedData['name'];
        $blog->description = $validatedData['description'];
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/blog/',$filename);
        $validatedData['image']="uploads/blog/$filename";
        $blog->image = $validatedData['image'];
        $blog->save();
        return redirect()->route('blogsCreate.index')->with('message','blog Added successfuly');
    }


    public function show($id)
    {
        //
        $blog = blog::find($id);

        // $blogs = DB::table('blogs')->where('id', $id)->first();
        // dd($blog);
        return view("blogs.blog",  ['blog' => $blog]);
    }


    public function edit($id)
    {
        //
        $blog = blog::findOrFail($id);
        return view('admin.blogsCreate.blogedite', ['blog' => $blog]);
    }



    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png',
        ]);
        $blog = blog::find($id);

        $blog->name = $validatedData['name'];
        $blog->description = $validatedData['description'];
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/blog/',$filename);
        $validatedData['image']="uploads/blog/$filename";
        $blog->image = $validatedData['image'];
        blog::where('id',$blog->id)->update(['image' => $validatedData['image']]);
        $blog->save();

        return redirect()->route('blogsCreate.index')->with('message','blog Updated successfuly');

        // $validatedData = $request->validated();
        // $image = $request->file('image');
    }


    public function destroy( $id)
    {
        //
        $blog = blog::find($id);
        $blog->delete();
        return redirect()->route('blogsCreate.index')->with('message','blog Deleted Successfuly');
    }

}
