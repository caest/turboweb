<?php
use PHPUnit\Framework\TestCase;

require 'dog.php';

class MopsTest extends TestCase {
    public function testMopsMakeSound() {
        $mops = new Mops();
        $this->assertEquals("Woof!", $mops->makeSound());
    }

    public function testMopsHunt() {
        $mops = new Mops();
        $this->assertEquals("This Mops is too lazy to go hunting!", $mops->hunt());
    }
}
