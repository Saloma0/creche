<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FaleconnoscoModel;

class Faleconnosco extends BaseController
{

	private $fale;

	public function __construct()
	{
		$this->fale= new FaleconnoscoModel();
	}

	public function index()
	{
		//
		return view('faleconnosco');
	}

	public function store(){
		if($this->fale->save($this->request->getPost())){
			return view('mensagem',['message'=>'A sua mensagem será visualizada pela nossa equipe!']);
		}else{
			return view('error',['message'=>'Upps Ocorreu um erro! Tente novamente mais tarde.']);
		}
	}
}
