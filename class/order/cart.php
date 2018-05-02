<?php
namespace Shop\Order;
class Cart
{
	private $products = [];
	public function AddProduct ($product)
	{
		$id = $product->GetId();
		$this->products [$id]['P'] = $product;
		if (!isset($this->products [$id]['Q']))$this->products [$id]['Q'] = 0;
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
		$this->products [$id]['Q'] = $q;
	}
	public function PrintCart()
	{
		$ret = '';
		$ret.= '<table border="1">
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>QUANTITY</th>
						<th>PRICE</th>
						<th>SUMM</th>
					</tr>
						';
		foreach ($this->products as $CartItem)
		{
			//$summ += $CartItem['P']->GetSalePrice()*$CartItem['Q'];
			$ret.='<tr>
					  <td>'.$CartItem['P']->GetId().'</td>
					  <td>'.$CartItem['P']->GetName().'</td>
					  <td>'.$CartItem['Q'].'</td>
					  <td>'.$CartItem['P']->GetSalePrice().'</td>
					  <td>'.($CartItem['P']->GetSalePrice()*$CartItem['Q']).'</td>
				</tr>
						';
		}
		$ret.= '</table>';
		return $ret;
	}
}	
