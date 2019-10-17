<?php
/**
 * summary
 */
class Validator {
	/*
		   * check requred filed
	*/
	public function isRequered($filed_array) {
		foreach ($filed_array as $filed) {
			if ($_POST['' . $filed . ''] == '') {
				return false;
			}
		}
		return true;
	}

	/*
		   * validate email field
	*/

	public function isvalidemail($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		} else {
			return false;
		}
	}

	/*
		   * check pass match
	*/
	public function passmatch($pass1, $pass2) {
		if ($pass1 == $pass2) {
			return true;
		} else {
			return false;
		}
	}
}