<?php
use PHPUnit\Framework\TestCase;

require 'dog.php';

class PlushLabradorTest extends TestCase {
    public function testPlushLabradorIsToy() {
        $plushLabrador = new PlushLabrador();
        $this->assertTrue($plushLabrador->isToy());
    }

    public function testPlushLabradorSqueak() {
        $plushLabrador = new PlushLabrador();
        $this->assertEquals("Squeak!", $plushLabrador->squeak());
    }

    public function testPlushLabradorHunt() {
        $plushLabrador = new PlushLabrador();
        $this->assertEquals("This Plush Labrador is a toy and doesn't hunt.", $plushLabrador->hunt());
    }
}
