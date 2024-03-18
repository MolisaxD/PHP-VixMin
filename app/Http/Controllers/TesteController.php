<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index() {
        //return 'Minha primeira rota no Laravel';
        //simbolo de dólar significa que é uma variável
        $nome = "Melissa";
        //vetor em PHP
        $minhasDisciplinas = [
            'Desenvolvimento de Sistemas',
            'Banco de dados com MySQL',
            'Lógica de Programação',
            'Modelagem de Sistemas',
            'Modelagem de Dados',
            'Testes de Software'
        ];
        return view('teste', ['nome' => $nome, 
        'disciplinas' => $minhasDisciplinas]);
    }

    //Abre o formulário para digitar as informações
    public function create(){

    }

    //Envio e armazenamento das informações via POST
    public function store(Request $request) {

    }

    //Exibe um registro cujo id é enviado por parâmetro via GET
    public function show(string $id) {

    }

    //Carrega um formulário para edição de um registro
    public function edit(string $id) {

    }

    //Salva as alterações ao registro especificado
    public function update(Request $request, string $id) {

    }

    //Deleta o registro especificado
    public function destroy(string $id) {

    }
}
