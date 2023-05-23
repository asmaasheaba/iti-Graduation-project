<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderFormRequest;
use Illuminate\Support\Facades\File;
class SliderController extends Controller
{
    //
    public function index(){
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }


    public function create(){
        return view('admin.slider.create');
    }


    public function store(SliderFormRequest $request){

     $validatedData = $request->validated();
     $file = $request->file('image');
     $ext = $file->getClientOriginalExtension();
     $filename = time().'.'.$ext;
     $file->move('uploads/slider/',$filename);
     $validatedData['image']="uploads/slider/$filename";
    Slider::create(['image' => $validatedData['image']]);
    //  return "added";
    return redirect('admin/slider')->with('message','Slider added Successfuly');

    }


    public function edit(Slider $slider){
        return view('admin.slider.edit',compact('slider'));
    }


    public function update(SliderFormRequest $request,Slider $slider){

        $validatedData = $request->validated();
        $distination = $slider->image;
        if(File::exists($distination)){
            File::delete($distination);
        }
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/slider/',$filename);
        $validatedData['image']="uploads/slider/$filename";
        Slider::where('id',$slider->id)->update(['image' => $validatedData['image']]);
       //  return "added";
       return redirect('admin/slider')->with('message','Slider updated Successfuly');
    }

    public function destroy(Slider $slider){
        if($slider->count() >0){
        $distination = $slider->image;
        if(File::exists($distination)){
            File::delete($distination);
        }

        $slider->delete();
        return redirect('admin/slider')->with('message','Slider Deleted Successfuly');

    }
    return redirect('admin/slider')->with('message','Something went wrong');

    }
}
