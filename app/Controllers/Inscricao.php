<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InscricoesModel;

class Inscricao extends BaseController
{

	private $inscricoes;

	public function __construct()
	{
		$this->inscricoes= new InscricoesModel();
	}

	
	public function index()
	{
		//
		return view('inscricao');
	}

	public function store(){
		if($this->inscricoes->save($this->request->getPost())){
			return view('mensagem',['message'=>'Usuário salvo com sucesso!']);
		}else{
			return view('error',['message'=>'Não foi possível cadastrar']);
		}
	}
}
