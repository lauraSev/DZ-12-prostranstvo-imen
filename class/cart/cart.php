<?php
namespace Shop\Order;
class Cart
{
	private $products = [];
	public function AddProduct ($product)
	{
		$id = $product->GetId();
		$this->products [$id]['P'] = $product;
		$this->products [$id]['Q']++;
		
	}
	public function GetSumm ()
	{
		$summ = 0;
		foreach ($this->products as $CartItem)
		{
			$summ += $CartItem['P']->GetSalePrice()*$CartItem['Q'];
		}
		return $summ;
	}
	public function DelProduct ($id)
	{
		unset ($this->products[$id]);
	}
	public function ChangeQuantity ($id, $q)
	{
		$this->produkts [$id]['Q'] = $q;
	}
}	
