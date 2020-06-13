<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdateRequest extends Request
{

    public function authorize()
	{
		return true;
	}

	public function rules()
	{
		$id = $this->user;
		return [
			'name' => 'required|max:255|unique:users,name,' . $id,
			'prenom' => 'max:255'. $id,
			'email' => 'required|email|max:255|unique:users,email,' . $id,
			'date_naissance' => 'date_format:Y-m-d|before:today,'. $id,
			'ville' => 'max:255'. $id,
			'code_postal' => 'max:5'. $id,
			'num_rue' => 'max:3'. $id,
			'rue' => 'max:255'. $id,
		];
	}

}