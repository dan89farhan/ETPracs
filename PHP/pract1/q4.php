<?php
class Dog {
    function Dog() {
        $this->name = "Doggy";
    }
}
$herbie = new Dog();
echo $herbie->name;
?>