<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identitas;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function belajarVue()
    {
        return view('kamis');
    }
    public function index()
    {

        $data = Identitas::all();
        // return view('Identitas/index', compact('data'));
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Identitas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->input());
        $save = Identitas::create($request->all());
        return redirect('identitas');
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
    public function edit($nim)
    {
        //  
        $data = Identitas::where(' nim', $nim)->get();
        return view('Identitas/edit', compact('data'));
        // $data = Identitas::where('nim', $nim)->get();
        // return view('Identitas/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        //
        $data = Identitas::where('nim', $nim)->first();
        $data->nama  = $request->nama;
        $data->alamat = $request->alamat;
        $data->nim = $request->nim;
        $data->save();
        return redirect('identitas');
        // $save = Identitas::edit($request->all());
        // $save->save();
        // return redirect('identitas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim) //Delete
    {
        //
        $data = Identitas::where('nim', $nim)->first();
        $data->delete();
        return redirect('identitas');
    }
}
