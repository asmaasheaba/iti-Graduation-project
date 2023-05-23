<?php

namespace App\Http\Controllers;
use App\Models\CategoryOrder;

use Illuminate\Http\Request;

class CategoryOrderController extends Controller
{
    //
    public function index(){
        $myCategoryOrders = CategoryOrder::all();
        return view('categoryorders.index',compact('myCategoryOrders'));
    }
}
