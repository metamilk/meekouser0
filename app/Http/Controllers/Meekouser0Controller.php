<?php

namespace App\Http\Controllers;

use App\Meekouser0;
use Illuminate\Http\Request;

class Meekouser0Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meekouser0 = Meekouser0::all();
        return view('index', compact('meekouser0'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|max:255|unique:meekouser0s',
            'motdepass' => 'required|max:255',
        ]);
        $meekouser0 = Meekouser0::create($storeData);

        return redirect('/meekouser0s')->with('completed', 'User has been add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meekouser0 = Meekouser0::findOrFail($id);
        return view('edit', compact('meekouser0'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
          'nom' => 'required|max:255',
          'prenom' => 'required|max:255',
          'email' => 'required|max:255',
          'motdepass' => 'required|max:255',
        ]);
        Meekouser0::whereId($id)->update($updateData);
        return redirect('/meekouser0s')->with('completed', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meekouser0 = Meekouser0::findOrFail($id);
        $meekouser0->delete();

        return redirect('/meekouser0s')->with('completed', 'User has been deleted');
    }
}
