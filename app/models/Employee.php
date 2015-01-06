<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Employee extends Eloquent {

	use SoftDeletingTrait;

	protected $softDelete = true;
	public $timestamps    = true;

	public static $rules = array(
		'firstName'   => 'required|alpha_spaces|min:2',
		'lastName'    => 'required|alpha_spaces|min:2',
		'homeAddress' => 'required',
		'birthDate'   => 'required',
		'hiredDate'   => 'required',
		'gender'      => 'required|alpha|min:4',
		'amount'      => 'required'
	);

	public function salary_rates() {
		return $this->hasMany('SalaryRate','emp_id');
	}

	public function rates() {
		return $this->belongsToMany('SalaryRate');
	}

	public function users() {
		return $this->hasMany('User');
	}

	public function Agencies()
	{
		return $this->hasMany( 'Agency' );
	}
}
