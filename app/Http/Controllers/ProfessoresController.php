<?php

namespace App\Http\Controllers;

use App\Professores;
use Illuminate\Http\Request;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadastros.professores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.professores.create');
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
     * @param  \App\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function show(Professores $professores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function edit(Professores $professores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professores $professores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professores  $professores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professores $professores)
    {
        //
    }
}
