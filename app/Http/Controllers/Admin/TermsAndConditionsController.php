<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\termsAndConditionsForm;
use App\Models\TermsAndConditions;

class TermsAndConditionsController extends Controller
{
    public function index()
    {
        $termData =TermsAndConditions::first();
        return view('terms.index' ,compact('termData'));
    } public function create()
    {
        $termData =TermsAndConditions::first();
        return view('staticPages.tearm' ,compact('termData'));
    }
    public function store(termsAndConditionsForm $request)
    {
        $validatedData = $request->validated([
            'termsAndConditions'=>'required',
        ]);
            $id=1;
            TermsAndConditions::updateOrCreate(
               
                ['id'=> $id],
                [
                    'termsAndConditions' =>$request->termsAndConditions,
                ]
            );

        return redirect()->back();
    }
}
