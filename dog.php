<?php

class Dog {
    protected $breed;
    protected $interests;
    
    public function __construct($breed, $interests) {
        $this->breed = $breed;
        $this->interests = $interests;
    }
    
    public function makeSound() {
        return "Dog sound";
    }
    
    public function isToy() {
        return false;
    }
    
    public function squeak() {
        return "This dog doesn't squeak.";
    }
    
    public function hunt() {
        $randomInterest = $this->getRandomInterest();
        return "This " . $this->breed . " is hunting " . $randomInterest . "!";
    }
    
    protected function getRandomInterest() {
        return $this->interests[array_rand($this->interests)];
    }
}

class ShibaInu extends Dog {
    public function __construct() {
        parent::__construct('Shiba Inu', ['duck', 'rabbit', 'lion', 'fox', 'wolf', 'mops', 'rubbertaksa']);
    }
    
    public function makeSound() {
        return "Woof! Woof! Woof!";
    }
}

class Mops extends Dog {
    public function __construct() {
        parent::__construct('Mops', ['duck', 'rabbit', 'lion', 'fox', 'wolf', 'mops', 'rubbertaksa']);
    }
    
    // Override method to produce the sound of a Mops
    public function makeSound() {
        return "Woof!";
    }
    
    public function hunt() {
        if ($this->breed === 'Mops') {
            return "This Mops is too lazy to go hunting!";
        } else {
            return parent::hunt();
        }
    }
}

class Taksa extends Dog {
    public function __construct() {
        parent::__construct('Taksa', ['duck', 'rabbit', 'lion', 'fox', 'wolf', 'mops', 'rubbertaksa']);
    }
    
    public function makeSound() {
        return "Wooof!";
    }
}

class PlushLabrador extends Dog {
    public function __construct() {
        parent::__construct('Plush Labrador', ['duck', 'rabbit', 'lion', 'fox', 'wolf', 'mops', 'rubbertaksa']);
    }
    
    public function isToy() {
        return true;
    }
    
    public function squeak() {
        return "Squeak!";
    }
    
    public function hunt() {
        return "This Plush Labrador is a toy and doesn't hunt.";
    }
}

class RubberTaksa extends Dog {
    public function __construct() {
        parent::__construct('Rubber Taksa with Squeaker', ['duck', 'rabbit', 'lion', 'fox', 'wolf', 'mops', 'rubbertaksa']);
    }
    
    public function isToy() {
        return true;
    }
    
    public function squeak() {
        return "Squeak!";
    }
    
    public function hunt() {
        return "This Rubber Taksa is a toy and doesn't hunt.";
    }
}

$args = $_SERVER['argv'];

if (count($args) !== 3) {
    echo "Enter the command in the format: [breed] sound/squeak/hunt\n";
    exit;
}
$breed = strtolower($args[1]);
$command = strtolower($args[2]);

switch ($breed) {
    case 'shibainu':
        $dog = new ShibaInu();
        break;
    case 'mops':
        $dog = new Mops();
        break;
    case 'taksa':
        $dog = new Taksa();
        break;
    case 'plushlabrador':
        $dog = new PlushLabrador();
        break;
    case 'rubbertaksa':
        $dog = new RubberTaksa();
        break;
    default:
        echo "Unknown breed\n";
        exit;
}

if ($command === 'sound') {
    echo $dog->makeSound() . "\n";
} elseif ($command === 'squeak') {
    if ($dog->isToy()) {
        echo "This toy squeaks!\n";
    } else {
        echo "This dog doesn't squeak.\n";
    }
} elseif ($command === 'hunt') {
    echo $dog->hunt() . "\n";
} else {
    echo "Unknown command\n";
}
