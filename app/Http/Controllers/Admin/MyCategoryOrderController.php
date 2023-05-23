<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\MyCategoryOrderRequest;

class MyCategoryOrderController extends Controller
{
    //
    public function index(){
        $myCategoryOrders = CategoryOrder::all();
        return view('admin.mycategoryOrder.index',compact('myCategoryOrders'));
    }

    public function create(){
        return view('admin.mycategoryOrder.create');
    }
    public function store(MyCategoryOrderRequest $request){

    $validatedData = $request->validated();
    $file = $request->file('image');
    $ext = $file->getClientOriginalExtension();
    $filename = time().'.'.$ext;
    $file->move('uploads/myCategoryOrder/',$filename);
    $validatedData['image']="uploads/myCategoryOrder/$filename";
    CategoryOrder::create(['image' => $validatedData['image'],'name' => $validatedData['name']]);
    return redirect('admin/categoryOrder')->with('message','category added Successfuly');

    }
    public function edit(CategoryOrder $categoryOrder){
        return view('admin.mycategoryOrder.edit',compact('categoryOrder'));
    }


    public function update(MyCategoryOrderRequest $request,CategoryOrder $categoryOrder){

        $validatedData = $request->validated();
        $distination = $categoryOrder->image;
        if(File::exists($distination)){
            File::delete($distination);
        }
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/myCategoryOrder/',$filename);
        $validatedData['image']="uploads/myCategoryOrder/$filename";
        CategoryOrder::where('id',$categoryOrder->id)->update(['image' => $validatedData['image']]);
       //  return "added";
       return redirect('admin/categoryOrder')->with('message','category updated Successfuly');
    }

    public function destroy(CategoryOrder $categoryOrder){
        if($categoryOrder->count() >0){
        $distination = $categoryOrder->image;
        if(File::exists($distination)){
            File::delete($distination);
        }

        $categoryOrder->delete();
        return redirect('admin/categoryOrder')->with('message','Category Deleted Successfuly');

    }
    return redirect('admin/categoryOrder')->with('message','Something went wrong');

    }
}
