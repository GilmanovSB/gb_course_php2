<?php

class Sale extends Goods{
    protected $sale;

    public function __construct(string $name, string $description, string $price, string $image, float $sale){
        parent::__construct($name, $description, $price, $image);
        $this->sale = $sale;
        
    }

    public function getGoods()
    {
        $this->price = $this->price * $this->sale;
        return parent::getGoods();
    }
}