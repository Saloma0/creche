<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InscricoesModel;

class Admin extends BaseController
{

	private $inscricoes;

	public function __construct()
	{
		$this->inscricoes= new InscricoesModel();
	}

	public function index()
	{
		//
		return view('admin',['inscricoes' => $this->inscricoes->findAll()]);
	}

	public function delete($id){
		if($this->inscricoes->delete($id)){
			echo view('mensagem', ['message' => 'Usuário Excluido com sucesso!!']);
		}else{
			echo view('error', ['message' => 'Upss ocorreu um erro!']);
		}
	}

	public function edit($id){

		return view('editar', ['insc'=> $this->inscricoes->find($id)]);

	}
}
