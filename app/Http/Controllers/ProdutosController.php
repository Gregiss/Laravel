<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public $pesquisa;

    public function index() {
        $pesquisa = $this->pesquisa;
        $produtos = Produto::all();
        // $produto = new Produto();
        // $produto->nompro = "Teclado";
        // $produto->estpro = 120;
        // $produto->save();

        return view('produtos.index', compact('produtos', 'pesquisa'));
    }

    public function add() {
        $pesquisa = $this->pesquisa;
        return view('produtos.add', compact('pesquisa'));
    }

    public function editar(Request $request) {
        $produto = Produto::find($request->get('id'));
        $pesquisa = $this->pesquisa;
        if($produto){
            return view('produtos.editar', compact('produto', 'pesquisa'));
        } else{
            return view('produtos.404', compact('pesquisa'));
        }
    }

    public function update(Request $request){
        $produto = Produto::find($request->get('id'));
        if($produto){
            $produto->nompro = $request->get("nompro");
            $produto->estpro = $request->get("estpro");
            $produto->save();
        }
        return redirect()->route('lista-produtos');
    }

    public function store(Request $request) {
        $produto = new Produto();
        $produto->nompro = $request->get("nompro");
        $produto->estpro = $request->get("estpro");
        $produto->save();
        return redirect()->route('lista-produtos');
    }

    public function destroy(Request $request) {
        $produto = Produto::find($request->get('codpro'));
        if($produto){
            $produto->delete();
        }
        return redirect()->route('lista-produtos');
    }

    public function find(Request $request){
        $nome = $request->get('nome');
        $produtos = Produto::where('nompro','LIKE','%'.$request->get("nome").'%')->get();
        $pesquisa = $nome;
        $this->pesquisa = $pesquisa;
        if($produtos->count() > 0){
            return view("produtos.search", compact('produtos', 'nome', 'pesquisa'));
        } else{
            return view("produtos.404", compact('pesquisa'));
        }
    }
}
