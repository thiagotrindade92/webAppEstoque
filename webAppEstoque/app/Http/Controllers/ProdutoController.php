<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {

    public function lista(){

        $produtos = DB::select('SELECT * FROM produtos');

        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra(){

        $id = Request::input('id', '0');

        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        if(empty($resposta)){
            return "Esse produto não existe";
        }
        return view('detalhes')-> with('p', $resposta[0]);
    }
}
