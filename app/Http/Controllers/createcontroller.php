<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class createcontroller extends Controller
{
    public function index()
    {
        return view('create');
    }
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
        return redirect()->route('person.index');
    }
    public function edit(string $id)
    {
        $persons = person::all();
        $datas = $persons->findOrFail($id);
        return view('create', compact('persons','datas'));
    }
}
