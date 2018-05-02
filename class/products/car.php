<?php
namespace Shop\Products;
class Car extends Product
{
	public function SetDiscount($discount)
	{
		$this->discount = $discount;	
	}
	public function GetSalePrice()
	{
		//print_r ($this);
		$saleprice = $this->price*(1-$this->discount/100);
		return $saleprice;
	}
	
}
 