<?php

namespace App\Validation;
use App\Models\UserindexModel;
use CodeIgniter\Database\Database;

class GetdetailsValidation
{
	public function getDetails(string $str, string $fields, array $data)
	{
		$connect = \Config\Database::connect();

		$get_merged_query = "SELECT * FROM double_number.dbl_mg_upto_27122023 WHERE oldno = ? AND newno = ?";
		$merged_execution = $connect->query($get_merged_query, [$data['old_cps_number'], $data['new_cps_number']])->getResultArray();

		if (count($merged_execution) > 0) 
		{
			return false;	
		} else {
			$sql = "SELECT mname, minitial, mdob FROM double_number.cpsindex WHERE cpsnumber = ? OR cpsnumber = ?";
			$result = $connect->query($sql, [$data['old_cps_number'], $data['new_cps_number']])->getResultArray();

			if (count($result) === 2) {
				$result1 = $result[0];
				$result2 = $result[1];

				$nameMatch = array_intersect_assoc(['mname' => $result1['mname']], ['mname' => $result2['mname']]);
				$initialMatch = array_intersect_assoc(['minitial' => $result1['minitial']], ['minitial' => $result2['minitial']]);
				$dobMatch = array_intersect_assoc(['mdob' => $result1['mdob']], ['mdob' => $result2['mdob']]);

				if (!empty($nameMatch) && !empty($initialMatch) && !empty($dobMatch)) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}	
		}
	}
}
