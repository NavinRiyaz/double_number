<?php

namespace App\Validation;
use App\Models\UserModel;

class AuthValidation
{
	public function validateUser( string $str, string $fields, array $data)
    {
        $model = new UserModel();
		$user = $model->where('username', $data['username'])
			->first();
		if (!$user) {
			return false;
		}
		return $data['password'] === $user['password'];
    }
}
