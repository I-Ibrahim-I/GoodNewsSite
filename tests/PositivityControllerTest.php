<?php
require 'vendor/autoload.php';
require 'controllers/PositivityController.php';
use PHPUnit\Framework\TestCase;

class PositivityControllerTest extends TestCase
{
    public function testCountGiven0WordShouldReturnNeutre() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("");
        // Assert
        $this->assertEquals("neutre",$actual);
    }

    public function testCountGiven1WordShouldReturnCorrect() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("bon");
        // Assert
        $this->assertEquals("correct",$actual);
    }


}
