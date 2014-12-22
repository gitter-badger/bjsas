<?php
class UserTableSeeder extends Seeder
{
	public function run()
	{
		$user                = new User;
		$user->email_address = 'alexbacalso@gmail.com';
		$user->password      = Hash::make('test');
		$user->rights        = 'User';
		$user->emp_id        = 1;
		$user->save();
	}
}
