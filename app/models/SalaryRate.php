<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class SalaryRate extends Eloquent {
	use SoftDeletingTrait;

	protected $softDelete = true;

	public static $rules = array(
		'emp_id' => 'required',
		'amount' => 'required'
	);

	public function updateSalaryRate( $id ) {
		$salary = SalaryRate::where( 'emp_id', '=', $id );
		return $salary->delete();
	}

	public function employees( ) {
		return $this->belongsTo('Employee', 'emp_id');
	}

	public function getEmployeeInfo( ) {
		return $this->employees->firstname . ' ' . $this->employees->lastname;
	}

}
