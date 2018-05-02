<?php

namespace Shop\Products;
abstract class Product
{
    private $id = '';
    private static $static_id;
    private $name = '';
    protected $price = 0;
    protected $ostatok = 0;
    protected $discount = 0;

    public function __construct($name, $price, $ostatok)
    {
        $this->name = $name;
        $this->price = $price;
        $this->ostatok = $ostatok;
        Product::$static_id++;
        $this->id = Product::$static_id;
    }

    public function GetId()
    {
        return $this->id;
    }

    public function GetName()
    {
        return $this->name;
    }

    public abstract function SetDiscount($discount);

    public abstract function GetSalePrice();

}

