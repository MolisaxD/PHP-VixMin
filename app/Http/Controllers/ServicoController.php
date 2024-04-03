<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Item;
use App\Http\Requests\StoreServicoRequest;
use App\Http\Requests\UpdateServicoRequest;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicos = \App\Models\Servico::all();
        return view('servicos.servicos',['servicos' => $servicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicos.form-incluir-servico');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new \App\Models\Item;
        $item->nome = $request->nome;
        $item->descricao = $request->descricao;
        $item->valor = $request->valor;
        $item->tipo_item = 'Serviço'; 
        $item->save();

        $servico = new \App\Models\Servico;
        $servico->provedor = $request->provedor; 
        $servico->item()->associate($item);
        $servico->id_item = $item->id_item;
        $servico->save();

        return Redirect()->route('servicos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicoRequest $request, Servico $servico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servico $servico)
    {
        //
    }
}
