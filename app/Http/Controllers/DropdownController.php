<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Redirect;
use App\Models\{Country, City};
class DropdownController extends Controller
{
    public function index()
    {
        $countries= Country::get(["name", "id"]);
        return view('orders.create', compact('countries'));
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
}
