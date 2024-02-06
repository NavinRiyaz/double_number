<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class UserController extends BaseController
{
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        helper(['url', 'form', 'text']);
    }
	public function index()
	{
		return view('User/dashboard');
	}

	public function doubleNumberMerger()
	{
		$data = [];

		if($this->request->getMethod() == "post")
		{
			$old_number = $this->request->getVar('old_cps_number');
			$new_number = $this->request->getVar('new_cps_number');

			$rules = [
				'old_cps_number' => 'required|min_length[4]|max_length[10]',
				'new_cps_number' => 'required|min_length[4]|max_length[10]|checkCPS[old_cps_number]|getDetails[old_cps_number]'
			];

			$errors = [
				'old_cps_number' => [
					'required' => 'Old CPS Number is missing!',
					'min_length' => 'Enter Correct CPS Number!',
					'max_length' => 'CPS Number Cannot be exceed 10 Digits'
				],
				'new_cps_number' => [
					'required' => 'New CPS Number is missing!',
					'min_length' => 'Enter Correct CPS Number',
					'max_length' => 'CPS Number Cannot be exceed 10 Digits',
					'checkCPS' => 'Old and New CPS Number are Same!',
					'getDetails' => 'Subscribers Details are not matched Or Numbers Already Merged'
				],
			];

			if (!$this->validate($rules, $errors)) 
			{
				return view('user/double_number_entry', [
                    "validation" => $this->validator,
                ]);

			} else {
				$connect = \Config\Database::connect();
				$sql = "(SELECT mname, minitial, mdob, 'Old' as position, cpsnumber as corrected_number FROM double_number.cpsindex WHERE cpsnumber = ?)
						UNION ALL
						(SELECT mname, minitial, mdob, 'New' as position, cpsnumber as corrected_number FROM double_number.cpsindex WHERE cpsnumber = ?)";

				$data = $connect->query($sql, [$old_number, $new_number])->getResultArray();

				return view("User/double_number_entry", [
					"detailes" => $data,
				]);
			}
		} else {
			return view("User/double_number_entry", [
				"detailes" => $data,
			]);
		}
	}

	public function doubleNumberInsert()
	{
		
	}

	private function debug($array = [])
	{
		return "<pre>" . htmlspecialchars(var_dump($array, true)) . "</pre>";
	}
}
