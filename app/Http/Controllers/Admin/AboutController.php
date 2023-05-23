<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AboutFormRequist;
use App\Models\About;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $aboutData = About::first();
        return view('aboutus.index',compact('aboutData'));
    }
    

   
    public function create()
    {
       
        $aboutData = About::first();
        return view('staticPages.about' ,compact('aboutData'));
    }
    public function store(AboutFormRequist $request)
    {
        $validatedData = $request->validated([
            'about'=>'required',
            'number'=>'required',
            'face'=>'required',
            'snap'=>'required',
            'insta'=>'required',
            'youtuob'=>'required',
        ]);
            $id=1;
            About::updateOrCreate(
               
                ['id'=> $id],
                [
                    'about' =>$request->about,
                    'number' =>$request->number,
                    'face'=>$request->face,
                    'snap'=>$request->snap,
                    'insta'=>$request->insta,
                    'youtuob'=>$request->youtuob
                ]
            );

        return redirect()->back();
    }
}
