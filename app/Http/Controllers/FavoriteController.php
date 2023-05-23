<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorits = DB::table('favorites')->where('user_id',auth()->id())->get();
    //   dd($favorits);
        $orders=  auth()->user()->favorites;
        // dd($orders);
        return view('favourite.index',compact('favorits' ,'orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFavoriteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavoriteRequest $request)
    {
        //
    }
    public function delete ($id)
    {
    //    dd($id);
     DB::table('favorites')->where('order_id',$id)->delete();
     return view('favourite.index');
    }
}