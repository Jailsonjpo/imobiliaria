<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Slide;
use App\Tipo;
use App\Cidade;

class HomeController extends Controller
{
   public function index(){

   	$imoveis = Imovel::where('publicar', '=', 'sim')->orderBy('id', 'desc')->paginate(10);
   	$slides = Slide::where('publicado', '=', 'sim')->orderBy('ordem')->get();

   	$direcaoImagem = ['center-align','left-align', 'right-align'];

   	$paginacao = true;

   	$tipos= Tipo::orderBy('titulo')->get();
   	$cidades= Cidade::orderBy('nome')->get();

   	return view('site.home', compact('imoveis', 'slides','direcaoImagem','paginacao','tipos', 'cidades'));

   }


   public function busca(Request $request){

   	$busca = $request->all();

   	$paginacao = false;
   	$tipos= Tipo::orderBy('titulo')->get();
   	$cidades= Cidade::orderBy('nome')->get();

   	if($busca['status'] == 'todos'){

   		$testeStatus = [

   			['status', '<>', null ]

   		];

   	}else{

   		$testeStatus = [

   			['status', '=', $busca['status']]

   		];

   	}

   		if($busca['tipo_id'] == 'todos'){

   		$testeTipo = [

   			['tipo_id', '<>', null ]

   		];

   	}else{

   		$testeTipo = [

   			['tipo_id', '=', $busca['tipo_id']]

   		];

   	}



   	$imoveis = Imovel::where('publicar', '=', 'sim')
   	->where($testeStatus)
   	->where($testeTipo)
   	->orderBy('id', 'desc')->get();

   	return view('site.busca', compact('busca', 'imoveis', 'paginacao','tipos', 'cidades'));


   }  
}
