<?php

class Animal {
    public function breathe() {
        
    }
    
    public function eat() {
        
    }
}

class Fish extends Animal {
    public function swim() {
        
    }
}

class Bird extends Animal {
    public function lay_eggs() {
        
    }
}

class FlyingBird extends Bird {
    public function fly() {
        
    }
}

// Пример
$animal = new Animal();
$fish = new Fish();
$bird = new Bird();
$flyingBird = new FlyingBird();

echo  "Проверка наследования" . "\n";
echo "Animal can breathe: " . (method_exists($animal, 'breathe') ? "yes" : "no") . "\n";
echo "Animal can eat: " . (method_exists($animal, 'eat') ? "yes" : "no") . "\n";
echo "Fish can breathe: " . (method_exists($fish, 'breathe') ? "yes" : "no") . "\n";
echo "Fish can eat: " . (method_exists($fish, 'eat') ? "yes" : "no") . "\n";
echo "Fish can swim: " . (method_exists($fish, 'swim') ? "yes" : "no") . "\n";
echo "Bird can breathe: " . (method_exists($bird, 'breathe') ? "yes" : "no") . "\n";
echo "Bird can eat: " . (method_exists($bird, 'eat') ? "yes" : "no") . "\n";
echo "Bird can lay_eggs: " . (method_exists($bird, 'lay_eggs') ? "yes" : "no") . "\n";
echo "FlyingBird can breathe: " . (method_exists($flyingBird, 'breathe') ? "yes" : "no") . "\n";
echo "FlyingBird can eat: " . (method_exists($flyingBird, 'eat') ? "yes" : "no") . "\n";
echo "FlyingBird can lay_eggs: " . (method_exists($flyingBird, 'lay_eggs') ? "yes" : "no") . "\n";
echo "FlyingBird can fly: " . (method_exists($flyingBird, 'fly') ? "yes" : "no") . "\n";

?>
