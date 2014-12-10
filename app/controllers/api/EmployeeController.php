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
		return Response::json(TransactionQuery::addEmployee( ));
	}
	public function destroy( $employee ) {
		return Response::json(TransactionQuery::removeEmployee( $employee ));
	}
}
