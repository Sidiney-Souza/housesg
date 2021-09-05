<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $produto = Produto::all();

        return view('produtos.produto', ['produto' => $produto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->all();
        
        $request->validate([
            'nome' => 'required',
            'qtd' => 'required',
            'preco' => 'required',
            
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->foto->store('produto');
        }else{
            $data['foto'] = "produto/padrao.jpg";
        }
            
        if (Produto::create($data)){
            return redirect()->route("produto.create")->with('msg', ["o produto {$request->nome} foi cadastrado com secesso", 'blue']);
        }else {
            return redirect()->route("produto.create")->with('msg', ["o produto {$request->nome} foi cadastrado com secesso", 'red']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto) {
        return view('produtos.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto) {
        return view('produtos.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto) {
        $produto->update($request->all());

        $msg = "produto {$produto->nome} alterado com sucesso";

        return redirect()->route("produto.index")->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto) {


        $nome = $produto->nome;
        if ($produto->delete()) {
            \Session::flash('msg', "O Produto {$nome} removido");
        } else {
            \Session::flash('msg', "O produto {$nome} não foi removido");
        }
        return redirect()->route("produto.index");
    }

    public function search(Request $request) {
        if ($request->nome) {
            $produto = (new Produto())->buscaPorNome($request->nome);
        } else {
            $produto = Produto::all();
        }

        return view('produtos.produto', ['produto' => $produto]);
    }

}
