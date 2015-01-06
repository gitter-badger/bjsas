<?php

class PageController extends BaseController {
	protected $layout = "layouts.main";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array(
					'only'=>array(
						'showDashboard',
						'showRegisterForm',
						'showEmployee',
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
	public function showEmployee() {
		$this->layout->content = View::make('pages.employees');
	}
	public function showLoginForm()
	{
		if(Auth::check())
			return Redirect::to('dashboard');
		else
			$this->layout->content = View::make('pages.login');
	}

	public function showSalary() {
		$this->layout->content = View::make('pages.salary');
	}

	public function showCashadvanceForm() {
		$this->layout->content = View::make('pages.cashadvances');
	}
	public function showPayrollForm() {
		$this->layout->content = View::make('pages.payroll');
	}

	public function showRoute() {
		$this->layout->content = View::make('pages.routes');
	}

	public function showRedis() {
		$queue = Queue::push('LogMessage', array('message'=>'Time : ' .time()));
		return $queue;
	}

	public function show404() {
		$this->layout->content = View::make('errors.404');
	}

}

