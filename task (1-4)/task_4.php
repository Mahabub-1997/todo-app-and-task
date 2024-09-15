<?php
abstract class Animal {
    // Abstract method to be overridden by subclasses
    abstract public function makingSound();
}

class Dog extends Animal {
    public function makingSound() {
        return "Woof!";
    }
}

// Subclass for Cat
class Cat extends Animal {
    public function makingSound() {
        return "Meow!";
    }
}
class Cow extends Animal {
    public function makingSound() {
        return "Hamba!";
    }
}
$animals = [
    new Dog(),
    new Cat(),
    new Cow()
];

// Iterate  display its sound
foreach ($animals as $animal) {
    echo $animal->makingSound() . "\n";
}
?>