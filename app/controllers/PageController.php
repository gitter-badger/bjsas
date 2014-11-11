<?php

class PageController extends BaseController {
	protected $layout = "layouts.main";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array(
					'only'=>array(
						'showDashboard',
						'showRegisterForm',
						'showEmployeeForm',
						'showPayrollForm',
						'showCashadvanceForm',
						'showSalary')));
	}
	public function showIndex() {
		return Redirect::to('login');
	}
	public function showDashboard() {
		$this->layout->content = View::make('pages.dashboard');
	}
	public function showLoginForm()
	{
		if(Auth::check())
			return Redirect::to('dashboard');
		else
			$this->layout->content = View::make('pages.login');
	}

	public function showRoute() {
		$this->layout->content = View::make('pages.routes');
	}
}

