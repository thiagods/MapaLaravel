<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ponto;
use Redirect;
use Session;
use Validator;

class PontosController extends Controller
{
	public function index()
	{
		return view("cadastrar");
	}

	public function salvar(Request $request)
	{
		$valido = Validator::make($request->all(), ['nome' => 'required', 'latitude' => 'required', 'longitude'=>'required',]);

		$verificaLatitude = !is_numeric($request->latitude);
		$verificaLongitude = !is_numeric($request->longitude);

		if($valido->fails())
		{
			Session::flash('mensagem_erro', 'Preencha todos os campos.');
			return Redirect::to("/cadastrar");
		}
		elseif($verificaLatitude or $verificaLongitude)
		{
			Session::flash('mensagem_erro', 'Latitude e Longitude só podem ser números.');
			return Redirect::to("/cadastrar");
		}
		else
		{
			$ponto = new Ponto();

			$nome = $request->nome;
			$tipo  = $request->sel1;
			$latitude = $request->latitude;
			$longitude = $request->longitude;
			
			$ponto->create(['nome' => $nome , 'tipo'=> $tipo , 'latitude' => $latitude, 'longitude' =>$longitude]);

			Session::flash('mensagem', 'Ponto criado com sucesso.');
			return Redirect::to("/cadastrar");
		}
	}
}