<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request){
        
        $cat = $request->query('cat');

        if(!$cat){
            $all = Service::all();
        }else{
            $all = Service::where('category_id',$cat)->get();
        }

        return view('services.index',compact('all'));
    }

    public function create()
    {
        return view('services.create');
    }
    
    public function store()
    {
        
    }

    // public function categoryServices($cat){
    //     return view('services.index',compact('all'));
    // }

}
