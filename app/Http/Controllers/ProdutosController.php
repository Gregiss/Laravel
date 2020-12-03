<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index() {

        $produtos = Produto::all();
        // $produto = new Produto();
        // $produto->nompro = "Teclado";
        // $produto->estpro = 120;
        // $produto->save();

        return view('produtos.index', compact('produtos'));

    }
}
