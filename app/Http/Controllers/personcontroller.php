<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class personcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = person::all()->sortBy('id');
        return view('person', compact('persons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('create');
        $data = $request->validate([
            'firstname' => "required",
            'lastname' => "required",
            'age' => "required",
            'address' => "required"
        ]);
        person::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = $request->validate(['search' => "required"]);
        $persons = person::select('id','firstname','lastname','age','address')->where('firstname', '=', $data)->get();
        // print_r($persons);
        return view('person', compact('persons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $persons = person::all();
        $datas = $persons->findOrFail($id);
        $datas->delete();
        return redirect()->route('person.index');
        // return view('edit', compact('persons', 'datas'));
    }
}
