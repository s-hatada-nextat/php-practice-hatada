<?php
abstract class Animal{
    protected string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public abstract function makeSound();
}

class Dog extends Animal{
    public function makeSound(){
        echo $this->name . "の鳴き声はワンワン\n";
    }
}

class Cat extends Animal{
    public function makeSound(){
        echo $this->name . "の鳴き声はニャー\n";
    }
}

$dog = new Dog('ポチ');
$dog->makeSound();

$cat = new Cat('タマ');
$cat->makeSound();