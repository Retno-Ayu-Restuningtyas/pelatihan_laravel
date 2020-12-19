<?php

namespace App\Http\Controllers;

use App\Models\tanaman;
use Illuminate\Http\Request;

class tanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanamans = tanaman::all(); // select * from tanaman

        return view('tanaman.index',compact('tanamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();

        tanaman::create($input); //insert into ... ...

        return redirect()->route('tanaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tanaman=tanaman::find($id);
        return view ('tanaman.show',compact('tanaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function edit(tanaman $tanaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tanaman $tanaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(tanaman $tanaman)
    {
        //
    }
}
