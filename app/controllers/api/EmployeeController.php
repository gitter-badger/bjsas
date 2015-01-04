<?php

class EmployeeController extends Controller {
	public function index()
	{
		return 'Hello, to Employee - BJS API!';
	}
	public function show( $id = null ) {
		return Response::json(TransactionQuery::getEmployee( $id ));
	}
	public function store( ) {

		$validator = Validator::make(Input::all(), Employee::$rules);

		$flashMessage = array(
			'type'    => 'error',
			'message' => 'Invalid input!',
			'errors'  => $validator->errors()
		);

		if ( !$validator->passes() ) {
			return $flashMessage;
		}

		$employee               = new Employee;
		$employee->firstname    = Input::get('firstName');
		$employee->lastname     = Input::get('lastName');
		$employee->birth_date   = date("Y-m-d", strtotime(Input::get('birthDate')));
		$employee->gender       = Input::get('gender');
		$employee->home_address = Input::get('homeAddress');
		$employee->hired_date   = date("Y-m-d H:i:s", strtotime(Input::get('hiredDate')));
		$employee->save();

		// add salary rate and update current salary rate
		$salaryrate         = new SalaryRate;
		$isDeleted          = $salaryrate->updateSalaryRate( $employee->id );
		$salaryrate->amount = Input::get('amount');
		$salaryrate->employees()->associate($employee)->save();

		$flashMessage = array(
			'type'    => 'success',
			'message' => 'Employee is successfully added. -- ' . Input::get('amount')
		);

		return Response::json($flashMessage);
	}
	public function destroy( $employee ) {
		return Response::json(TransactionQuery::removeEmployee( $employee ));
	}
}
