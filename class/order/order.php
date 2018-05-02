<?php
namespace Shop\Order;
class Order
{
	public static function Save($cart, $email)
	{
		$filename = __DIR__.'/../../Orders/'.date('Y-m-d H-i-s').'.txt';
		//die($filename);
		file_put_contents($filename, $email."\n",FILE_APPEND);
		file_put_contents($filename, $cart->PrintCart(),FILE_APPEND);
	}
}