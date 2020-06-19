<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        $total = Produto::all()->count();
        return view('listarProdutos', compact('produtos', 'total'));
    }

    public function create() {
        return view('inserirProduto');
    }

    public function store(Request $request) {
        $product = new Produto;
        $product->nome = $request->nome;
        $product->quantidade = $request->quantidade;
        $product->preco = $request->preco;

        $product->save();
        return redirect()->route('product.index')->with('message', 'Produto Inserido Com Sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product = Produto::findOrFail($id);
        return view('editarProduto', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Produto::findOrFail($id); 
        $product->nome = $request->nome;
        $product->quantidade = $request->quantidade;
        $product->preco = $request->preco;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Produto Alterado Com Sucesso!');
    }

    public function destroy($id) {
        $product = Produto::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Produto Excluido Com Sucesso!');
    }
}
