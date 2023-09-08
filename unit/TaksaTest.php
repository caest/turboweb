<?php
use PHPUnit\Framework\TestCase;

require 'dog.php';

class TaksaTest extends TestCase {
    public function testTaksaMakeSound() {
        $taksa = new Taksa();
        $this->assertEquals("Wooof!", $taksa->makeSound());
    }

    public function testTaksaHunt() {
        $taksa = new Taksa();
        $this->assertEquals("This Taksa is hunting object1!", $taksa->hunt());
    }
}
