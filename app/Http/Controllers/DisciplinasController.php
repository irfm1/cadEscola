<?php

namespace App\Http\Controllers;

use App\disciplinas;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastros.disciplinas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.disciplinas.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function show(disciplinas $disciplinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function edit(disciplinas $disciplinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, disciplinas $disciplinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\disciplinas  $disciplinas
     * @return \Illuminate\Http\Response
     */
    public function destroy(disciplinas $disciplinas)
    {
        //
    }
}
