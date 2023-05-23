<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Country, City};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountriesController extends Controller
{


    public function index()
    {
        $countries = Country::all();
        return view('admin.Countries.index', ['countries' => $countries]);
    }

    public function create()
    {
        $countries = Country::all();
        return view('admin.Countries.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $country = new Country();
        $country->name = $validatedData['name'];

        $country->save();

        return redirect()->route('countries.index')->with('message', 'ِCountry Added successfuly');
    }

    // public function show($id)
    // {
    //     $country = Country::find($id);
    //     return view('countries.show', ['country' => $country]);
    // }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('admin.Countries.edit', ['country' => $country]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $country = Country::find($id);
        $country->name = $validatedData['name'];

        $country->save();

        return redirect()->route('countries.index')->with('message', 'Country updated Successfuly');
    }

    public function destroy($id)
    {

        $country = Country::find($id);
        $country->delete();
        return redirect()->route('countries.index')->with('message', 'Country Deleted Successfuly');
    }
}
