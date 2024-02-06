<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class AuthController extends BaseController
{

	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        helper(['url', 'form', 'text']);
    }

	public function index()
	{
		$data = [];

		if($this->request->getMethod() == 'post')
		{
			$rules = [
                'username' => 'required|min_length[4]|max_length[12]',
                'password' => 'required|min_length[4]|max_length[12]|validateUser[username,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Password or Username incorrect!",
                ],
            ];

			if (!$this->validate($rules, $errors)) 
			{
                return view('Auth/login', [
                    "validation" => $this->validator,
                ]);

            } else {
				$model = new UserModel();
                $user = $model->where('username', $this->request->getVar('username'))->first();

                $this->setUserSession($user);

                if($user['role'] == "admin")
				{
                    return redirect()
						->to(base_url('admin'))
						->with('status', 'Welcome Administrator');
                }

				if($user['role'] == "user")
				{
					return redirect()
						->to(base_url('user'))
						->with('status', "Welcome {$user['username']}");
				}
			}	
		}

		return view('Auth/login');
	}

	private function setUserSession($user)
	{
		$data = [
            'id' => $user['user_id'],
            'username' => $user['username'],
            'role' => $user['role'],
			'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
	}

	public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
