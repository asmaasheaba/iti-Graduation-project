<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BankAccountForm;
use App\Models\BankAccount;
class BankAccountController extends Controller
{
    public function index()
    {
        $bankData= BankAccount::first();
        return view('bankAcount.index', compact('bankData'));
    }
    public function create()
    {
        $bankData= BankAccount::first();
        return view('staticPages.bank' , compact('bankData'));
    }
    public function store(BankAccountForm $request)
    {
        $validatedData = $request->validated([
            'about'=>'required',
            'number'=>'required',
            'name'=>'required',
        ]);
            $id=1;
            BankAccount::updateOrCreate(
               
                ['id'=> $id],
                [
                    'about' =>$request->about,
                    'number' =>$request->number,
                    'name'=>$request->name
                ]
            );

        return redirect()->back();
    }
}
