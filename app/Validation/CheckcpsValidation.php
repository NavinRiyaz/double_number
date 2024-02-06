<?php

namespace App\Validation;

class CheckcpsValidation
{
	public function checkCPS(string $str, string $fields, array $data)
	{
		if ($data['old_cps_number'] == $data['new_cps_number']) {
			return false;
		} else {
			return true;
		}
	}
}
