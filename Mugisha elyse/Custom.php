<?php
class Product {
    public $name;
    public $price;

    public function equals(Product $other) {
        return $this->name === $other->name;
    }
}

$p1 = new Product();
$p1->name = "Book";
$p1->price = 10;

$p2 = new Product();
$p2->name = "Book";
$p2->price = 15;

var_dump($p1->equals($p2)); // true (same name, price ignored)
?>