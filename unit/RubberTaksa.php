<?php
use PHPUnit\Framework\TestCase;

require 'dog.php';

class RubberTaksaTest extends TestCase {
    public function testRubberTaksaIsToy() {
        $rubberTaksa = new RubberTaksa();
        $this->assertTrue($rubberTaksa->isToy());
    }

    public function testRubberTaksaSqueak() {
        $rubberTaksa = new RubberTaksa();
        $this->assertEquals("Squeak!", $rubberTaksa->squeak());
    }

    public function testRubberTaksaHunt() {
        $rubberTaksa = new RubberTaksa();
        $this->assertEquals("This Rubber Taksa
