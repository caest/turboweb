<?php
use PHPUnit\Framework\TestCase;

require 'dog.php';

class DogTest extends TestCase {
    public function testDogMakeSound() {
        $dog = new Dog('Breed', ['object1', 'object2']);
        $this->assertEquals("Dog sound", $dog->makeSound());
    }

    public function testDogIsToy() {
        $dog = new Dog('Breed', ['object1', 'object2']);
        $this->assertFalse($dog->isToy());
    }

    public function testDogSqueak() {
        $dog = new Dog('Breed', ['object1', 'object2']);
        $this->assertEquals("This dog doesn't squeak.", $dog->squeak());
    }

    public function testDogHunt() {
        $dog = new Dog('Breed', ['object1', 'object2']);
        $this->assertEquals("This Breed is hunting object1!", $dog->hunt());
    }
}
