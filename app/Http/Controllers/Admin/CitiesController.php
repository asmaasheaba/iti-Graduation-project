<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Country, City};

class CitiesController extends Controller
{


    public function index()
    {
        $cities = City::all();
        return view('admin.Cities.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('admin.Cities.create', compact('countries'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        City::create($request->all());
        return redirect()->route('cities.index')->with('message', 'City Added successfuly');
    }

    public function edit($id)
    {
        $city = City::find($id);

        return view('admin.Cities.edit', ['city' => $city]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',

        ]);
        $city = city::find($id);
        $city->name = $validatedData['name'];
        $city->update($request->all());
        return redirect()->route('cities.index')->with('message', 'City updated Successfuly');
    }

    public function show($country_id, City $city)
    {
        return view('admin.Cities.show', compact('country_id', 'city'));
    }

    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return redirect()->route('cities.index')->with('message', 'City Deleted Successfuly');
    }
}
