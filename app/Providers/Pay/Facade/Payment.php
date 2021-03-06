<?php

namespace App\Providers\Pay\Facade;

use Illuminate\Support\Facades\Facade;

class Payment extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'pay.alipayment';
//		parent::getFacadeAccessor(); // TODO: Change the autogenerated stub
	}
	
	public static function alipay()
	{
		return app('alipay');
	}
}