<?php

namespace App\Http\Controllers;

use App\models\person;
use Illuminate\Http\Request;

class editcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $persons = person::all();
        $datas = $persons->findOrFail($id);

        return view('edit', compact('persons', 'datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'firstname' => "required",
            'lastname' => "required",
            'age' => "required",
            'address' => "required"
        ]);
        // print_r($data);
        person::where('id',$id)->update($data);
        return redirect()->route('person.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
