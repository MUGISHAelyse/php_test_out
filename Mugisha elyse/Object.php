<?php
class Car {
    public $make;
    public function __construct($make) {
        $this->make = $make;
    }
}

$a = new Car("Toyota");
$b = new Car("Toyota");
$c = $a;

var_dump($a == $b);  // true (same properties)
var_dump($a === $b); // false (different instances)
var_dump($a === $c); // true (same instance)
?>