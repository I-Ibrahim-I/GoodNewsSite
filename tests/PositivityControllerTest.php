<?php
require '../vendor/autoload.php';
require '../controllers/PositivityController.php';
use PHPUnit\Framework\TestCase;

class PositivityControllerTest extends TestCase
{
    public function testCountGiven0WordShouldReturnNeutre() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->neutral();
        // Assert
        $this->assertEquals("neutre",$actual);
    }
}
