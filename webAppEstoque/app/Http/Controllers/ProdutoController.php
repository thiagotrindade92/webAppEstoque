<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;

class ProdutoController extends Controller {


    	public function lista(){
    		$produtos = Produto::all();
    		return view('produto.listagem')->with('produtos', $produtos);
    	}

    	public function mostra($id){
    		$produto = Produto::find($id);
    		if(empty($produto)) {
    			return "Esse produto não existe";
    		}
    		return view('produto.detalhes')->with('p', $produto);
    	}

    	public function novo(){
    		return view('produto.formulario');
    	}

        public function adiciona(){

             $nome = Request::input('nome');
             $descricao = Request::input('descricao');
             $valor = Request::input('valor');
             $quantidade = Request::input('quantidade');

             DB::insert('insert into produtos(nome, valor, descricao, quantidade) values (?,?,?,?)',
                array($nome, $valor, $descricao, $quantidade));


             return view('produto.adicionado')->with('nome', $nome);
        }

    	public function listaJson(){
    		$produtos = Produto::all();
    		return response()->json($produtos);
    	}

    	public function remove($id){
            $produto = Produto::find($id);
            $produto->delete(null);
            return redirect()->back();
    	}

    }
