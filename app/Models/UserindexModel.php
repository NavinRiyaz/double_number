<?php

namespace App\Models;

use CodeIgniter\Model;

class UserindexModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'double_number.cpsindex';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"cpsnumber",
		"mname",
		"minitial",
		"mdob",
		"mdoj",
		"cdistrict",
		"cddo",
		"last_activity_date",
		"msufix",
		"retireon",
		"new_retireon",
		"phone",
		"mobile",
		"emailid",
		"aadhar_no",
		"scaleofpay"
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
