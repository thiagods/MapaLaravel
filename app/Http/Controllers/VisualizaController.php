<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Ponto;
Use GMaps;

class VisualizaController extends Controller
{
    public function index()
	{
		$pontos = Ponto::get();

		$config['center'] = "-22.9035,-43.2096";
		$config['zoom'] = '13';
		$config['map_height'] = '500px';
		$config['scrollwhell'] = false;

		GMaps::initialize($config);

		foreach ($pontos as $ponto)
		{
			$latLong = $ponto->latitude . ',' .  $ponto->longitude;

			$marcador['position'] = $latLong;
			$marcador['title'] = $ponto->nome;

			if($ponto->tipo == "Tipo 1"){
				$marcador['icon'] = 'http://maps.google.com/mapfiles/kml/paddle/grn-circle.png';
			}
			elseif($ponto->tipo == "Tipo 2"){
				$marcador['icon'] = 'http://maps.google.com/mapfiles/kml/paddle/blu-circle.png';
			}
			elseif($ponto->tipo == "Tipo 3"){
				$marcador['icon'] = 'http://maps.google.com/mapfiles/kml/paddle/red-circle.png';
			}
			else{
				$marcador['icon'] = 'http://maps.google.com/mapfiles/kml/paddle/purple-circle.png';
			}			

			GMaps::add_marker($marcador);
		}

		$map = GMaps::create_map();

		return view("visualizar")->with('map', $map);
	}
}