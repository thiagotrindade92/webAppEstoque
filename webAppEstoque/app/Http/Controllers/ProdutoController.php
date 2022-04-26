<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {

    public function lista(){

        $produtos = DB::select('SELECT * FROM produtos');

        return view('listagem')->with('produtos', $produtos);
    }
}
