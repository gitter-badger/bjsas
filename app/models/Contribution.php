<?php

class Contribution extends Eloquent {

	public function contributions()
	{
		return $this->morphMany('CashFlow', 'source');
	}

	public function payrolls() {
		return $this->belongsTo('Payroll', 'payroll_id');
	}
}
