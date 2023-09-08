<?php
use PHPUnit\Framework\TestCase;

require 'dog.php';

class ShibaInuTest extends TestCase {
    public function testShibaInuMakeSound() {
        $shibaInu = new ShibaInu();
        $this->assertEquals("Woof! Woof! Woof!", $shibaInu->makeSound());
    }

    public function testShibaInuHunt() {
        $shibaInu = new ShibaInu();
        $this->assertEquals("This Shiba Inu is hunting object1!", $shibaInu->hunt());
    }
}
