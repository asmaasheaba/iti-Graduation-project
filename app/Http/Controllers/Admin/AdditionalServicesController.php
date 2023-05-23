<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdditionalService;
use Illuminate\Http\Request;
use App\Http\Requests\AdditionalServicesRequest;

class AdditionalServicesController extends Controller
{
    //
    public function index(){
    $additional_services = AdditionalService::all();
    return view('admin.additionalService.index',compact('additional_services'));
    }
    public function create(){
        return view('admin.additionalService.create');
    }
    public function store(AdditionalServicesRequest $request){
        $validatedData = $request->validated();
        AdditionalService::create(['name' => $validatedData['name']]);
        // return 'added';
        return redirect('admin/additionalService')->with('message','Service Added successfuly');
    }
    public function edit(AdditionalService $additionalService){
        // return $additionalService;
        return view('admin.additionalService.edit',compact('additionalService'));
    }

    public function update(AdditionalServicesRequest $request,AdditionalService $additionalService){

        $validatedData = $request->validated();

        AdditionalService::where('id',$additionalService->id)->update(['name' => $validatedData['name']]);
       //  return "added";
       return redirect('admin/additionalService')->with('message','Service updated Successfuly');
    }

    public function destroy($id){
    //     if($additional_service->count() >0){
    //   $additional_service->delete();
    //   return redirect('admin/additionalService')->with('message','Service Deleted Successfuly');
    //     }
    //     return redirect('admin/additionalService')->with('message','Something went wrong');
    // return $additional_service;
    $question = AdditionalService::find($id);
    $question ->delete();
     return redirect('admin/additionalService')->with('message','Service Deleted Successfuly');

    }
}
