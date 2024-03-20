<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Http\Requests\StoreDisciplinaRequest;
use App\Http\Requests\UpdateDisciplinaRequest;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = \App\Models\Disciplina::all();
        return view('disciplinas',['disciplinas' => $disciplinas]);
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
    public function store(StoreDisciplinaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $disciplina = \App\Models\Disciplina::find($request->id);

        return view('form-disciplinas', ['disciplina' => $disciplina ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
