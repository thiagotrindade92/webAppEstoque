<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use Request;
use Illuminate\Support\Facades\DB;
use	Illuminate\Http\Response;
use App\Models\Produto;
use GuzzleHttp\Psr7\Request as Psr7Request;

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

  public function adiciona(ProdutoRequest $request){

	$validated = $request->validated();
	$validated = $request->safe()->only(['name', 'descricao', 'valor', 'quantidade']);
    $validated = $request->safe()->except(['name', 'descricao', 'valor', 'quantidade']);
		Produto::create($request->all());

	    //return redirect()->action([ProdutoController::class, 'produto.adicionado']);
	    return view('produto.adicionado');
  }

  public function listaJson(){
  	$produtos = Produto::all();
   		return response()->json($produtos);
 	}

  public function remove($id){
    $produto = Produto::find($id);
    $produto->delete();

			return redirect()->back();
  }

}
