<?php

namespace App\Http\Controllers;

use App\Models\Homeowner;
use Illuminate\Http\Request;

class HomeownerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Homeowner::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $homeowner = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|string|email|max:255|unique:homeowners',
            'phone' => 'required|string|max:11',
            'address' => 'required',
        ]);

        return Homeowner::create($homeowner);
    }

    /**
     * Display the specified resource.
     */
    public function show(Homeowner $homeowner)
    {
        return response()->json($homeowner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Homeowner $homeowner)
    {

        $homeowner->update($request->all());

        return response()->json($homeowner);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homeowner $homeowner)
    {
        return response()->json($homeowner->delete());
    }
}
