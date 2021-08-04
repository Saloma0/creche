<?php

namespace App\Models;

use CodeIgniter\Model;

class FaleconnoscoModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'faleconnosco';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nomedoresponsavel','iddoaluno','telefone','mensagem'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';


}
