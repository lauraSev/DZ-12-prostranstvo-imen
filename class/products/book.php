<?php
namespace Shop\Products;
class Book extends Product
{
	public function SetDiscount($discount)
	{
		$this->discount = $discount;
		$this->ostatok	=$ostatok;
	}
	public function GetSalePrice()
	{
		if ($this->ostatok>100)
		return $this->price;
		$saleprice = $this->price*(1-$this->discount/100);
		return $saleprice;
	}
	
}
 