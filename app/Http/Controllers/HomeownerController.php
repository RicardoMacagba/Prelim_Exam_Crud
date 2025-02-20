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
    public function store(Request $request, Homeowner $homeowner)
    {
        $homeowner = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:homeowners',
            'phone' => 'required|string|max:11',
            'address' => 'required|string|max:255',
        ]);

        //create a token
        // $token = $homeowner->createToken('homeowner_token');

        // return response()->json([
        //     'homeowner' => $homeowner,
        //     'token' => $token->plainTextToken
        // ]);
        return Homeowner::create($request->all())->createToken('homeowner_token')->plainTextToken;
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
