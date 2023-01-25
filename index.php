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
        if ($category != "Food" && $category != "Shelter" && $category != "Toy" && $category != "Utility") {
            $this->category = NULL;
        } else {
            $this->category = $category;
        }
        
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

        if ($dog != "small" && $dog != "medium" && $dog != "big") {
            $this->dog = NULL;
        }
        else {
            $this->dog = $dog;
        }
        

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
$dog1 = new DogProduct("CucciaPerCaniPiccoli", false, "40", "Shelter", "small");
$dog2 = new DogProduct("CiboPerCaniGrandi", true, "25", "Food", "big");
var_dump($cat1);
echo "<br><br>";
var_dump($cat2);

echo "</h1>";
var_dump($dog1);
echo "<br><br>";
var_dump($dog2);

echo "</h1>";