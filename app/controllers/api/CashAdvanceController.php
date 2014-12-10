<?php

class CashAdvanceController extends Controller {
	public function index()
	{
		return 'Hello, to Cash Advance - BJS API!';
	}
	public function show( $id = null ) {
		return Response::json(TransactionQuery::getEmployeeCurrentSalary( $id ));
	}
	public function store( ) {
		return Response::json(TransactionQuery::addSalary( Input::get('emp_id') ));
	}
	public function destroy( $id ) {
		return Response::json(TransactionQuery::removeSalary( $id ));
	}
}
