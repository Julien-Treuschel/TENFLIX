<?php

namespace App\Repositories;

use App\User;

class UserRepository
{

    protected $user;

    public function __construct(User $user)
	{
		$this->user = $user;
	}

	private function save(User $user, Array $inputs)
	{
		$user->name = $inputs['name'];
		$user->prenom = $inputs['prenom'];
		$user->email = $inputs['email'];	
		$user->date_naissance = $inputs['date_naissance'];
		$user->ville = $inputs['ville'];
		$user->code_postal = $inputs['code_postal']; 
		$user->num_rue = $inputs['num_rue'];
		$user->rue = $inputs['rue'];
		$user->save();
	}

	public function getPaginate($n)
	{
		return $this->user->paginate($n);
	}

	public function store(Array $inputs)
	{
		$user = new $this->user;		
		$user->password = bcrypt($inputs['password']);

		$this->save($user, $inputs);

		return $user;
	}

	public function getById($id)
	{
		return $this->user->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}