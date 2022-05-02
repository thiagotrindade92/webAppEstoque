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

        //$id = Request::route('id', '0');

        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        if(empty($resposta)){
            return "Esse produto não existe";
        }
        return view('produto.detalhes')-> with('p', $resposta[0]);
    }

    public function novo(){

        return view('produto.formulario');
    }

    public function adiciona(){
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        DB::table('produtos')->insert(
            ['nome' => $nome,
                'valor' => $valor,
                'descricao' => $descricao,
                'quantidade' => $quantidade
            ]
        );

        return redirect('/produtos')-> withInput(Request::only('nome'));
    }

    public function login(){
        return view('produto.login');
    }
}
