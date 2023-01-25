<?php

class Product
{
    private $name;
    private $perishable;
    private $price;
    private $category;

    public function __construct($name, $perishable, $price, $category)
    {

        $this->name = $name;
        $this->perishable = $perishable;
        $this->price = $price;
        $this->category = $category;
    }

    public function getProductName()
    {

        return $this->name
            . " - " . $this->name
            . " (" . $this->price . ")";
    }
}
class DogProduct extends Product
{
    private $dog;

    public function __construct($name, $perishable, $price, $category, $dog)
    {

        parent::__construct($name, $perishable, $price, $category);
        $this->dog = $dog;

    }
}
class CatProduct extends Product
{
    private $neutered;

    public function __construct($name, $perishable, $price, $category, $neutered)
    {

        parent::__construct($name, $perishable, $price, $category);
        $this->neutered = $neutered;

    }
}

echo "<h1>";

$cat1 = new CatProduct("CiboPerGattiNormali", true, "20", "Food", false);
$cat2 = new CatProduct("CiboPerGattiSterilizzati", true, "22", "Food", true);
var_dump($cat1);
echo "<br><br>";
var_dump($cat2);

echo "</h1>";