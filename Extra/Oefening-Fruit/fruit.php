<?php

class Fruit
{
    // properties
    public $name;
    public $color;
    private $price;

    // methods
    public function showName()
    {
        echo "<br> De naam van het object: " . $this->name . "<br>";
        echo "<br> De Kleur van het object: " . $this->color . "<br>";
        echo "<br> De prijs van het object: " . $this->price . "<br>";
    }

    public function setPrice($setPrice)
    {
        $this->price = $setPrice;
    }
    public function getPrice()
    {
        return $this->price;
    }
}

    // Aanmaken object Fruit
    $appel = new Fruit();
    $appel->name = "Elstar";
    $appel->color = "red";
    $appel->setPrice(1.99);

    // print price
    echo "de prijs is: " . $appel->getPrice();
    
    // var_dump($appel);
    $appel->showName();


    // Aanmaken object Fruit
    $banaan = new Fruit();
    $banaan->name = "Banaan";
    $banaan->color = "yellow";
    $banaan->setPrice(1.19);

    
    // var_dump($banaan);
    $banaan->showName();