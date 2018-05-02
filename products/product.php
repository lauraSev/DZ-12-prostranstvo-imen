<?php
namespace Shop\Products;
class Product 
{
	private $id = '';
	private static $static_id;
    private $name = '';
	private $price = 0;
	private $ostatok = 0;
	private $discount = 0;

    public function __construct($name, $price, $ostatok)
    {
		$this->name = $name;
		$this->price = $price;
        $this->ostatok = $ostatok;
		Product::$static_id++;
		$this->id = Product::$static_id;
    }
	public function GetId ()
	{
		return $this->id;
	}
	
	public abstract function SetDiscount($discount);
	public abstract function GetSalePrice(); 

}

