<?php
class EmployeeUserSalaryTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('employees')->delete();
		$employee               = new Employee;
		$employee->firstname    = 'Alexjander';
		$employee->lastname     = 'Bacalso';
		$employee->birth_date   = date("Y-m-d", strtotime('07/12/1985'));
		$employee->gender       = 'Male';
		$employee->home_address = 'Tungkop South Minglanilla, Cebu';
		$employee->hired_date   = date("Y-m-d H:i:s", strtotime('11/08/2013'));
		$employee->save();

		DB::table('users')->delete();
		$user                = new User;
		$user->email_address = 'janderbacalso@gmail.com';
		$user->password      = Hash::make('test');
		$user->rights        = 'Admin';
		$user->employees()->associate($employee)->save();

		DB::table('agencies')->delete();
		$agency         = new agency;
		$agency->id     = '100111219091';
		$agency->agency = 'SSS';
		$agency->employees( $employee->id )->associate($employee);
		$agency->save();

		$agency         = new agency;
		$agency->id     = '219091322433';
		$agency->agency = 'PhilHealth';
		$agency->employees( $employee->id )->associate($employee);
		$agency->save();

		DB::table('salary_rates')->delete();
		$salaryrate             = new SalaryRate;
		$salaryrate->amount     = 342.23;
		$salaryrate->updateSalaryRate( $employee->id );					// update status of the current salary rate
		$salaryrate->employees()->associate($employee)->save();

		$salaryrate             = new SalaryRate;
		$salaryrate->amount     = 150;
		$salaryrate->updateSalaryRate( $employee->id );					// update status of the current salary rate
		$salaryrate->employees()->associate($employee)->save();

		$employee               = new Employee;
		$employee->firstname    = 'Lassiel';
		$employee->lastname     = 'Bacalso';
		$employee->birth_date   = date("Y-m-d", strtotime('07/26/1984'));
		$employee->gender       = 'Female';
		$employee->home_address = 'Urban Poor (NALUPI), Tabucanal, Pardo, Cebu City';
		$employee->hired_date   = date("Y-m-d H:i:s", strtotime('01/08/2013'));
		$employee->save();
		$salaryrate             = new SalaryRate;
		$salaryrate->amount     = 342.23;
		$salaryrate->updateSalaryRate( $employee->id );					// update status of the current salary rate
		$salaryrate->employees()->associate($employee)->save();
	}
}
