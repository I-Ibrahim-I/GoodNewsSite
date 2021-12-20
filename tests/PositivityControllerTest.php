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

    public function testCountGiven1WordShouldReturnNeutre() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("mal");
        // Assert
        $this->assertEquals("neutre",$actual);
    }

    public function testCountGiven2WordShouldReturnNeutre() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("mal mechant");
        // Assert
        $this->assertEquals("neutre",$actual);
    }

    public function testCountGiven3WordShouldReturnNeutre() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("mal mechant debile");
        // Assert
        $this->assertEquals("neutre",$actual);
    }

    public function testCountGiven4WordShouldReturnNeutre() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("je suis pas bete");
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

    public function testCountGiven2WordShouldReturnCorrect() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("bon super");
        // Assert
        $this->assertEquals("correct",$actual);
    }

    public function testCountGiven3WordShouldReturnCorrect() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("bon super mal");
        // Assert
        $this->assertEquals("correct",$actual);
    }

    public function testCountGiven4WordShouldReturnCorrect() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("bon super mal debille");
        // Assert
        $this->assertEquals("correct",$actual);
    }

    public function testCountGiven3WordShouldReturnBon() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("genial parfait super");
        // Assert
        $this->assertEquals("bon",$actual);
    }

    public function testCountGiven4WordShouldReturnBon() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("negatif parfaite parfait beau");
        // Assert
        $this->assertEquals("bon",$actual);
    }

    public function testCountGiven5WordShouldReturnBon() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("genial parfaite parfait mal debile");
        // Assert
        $this->assertEquals("bon",$actual);
    }

    public function testCountGiven6WordShouldReturnBon() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("negatif parfaite parfait super mal mauvais");
        // Assert
        $this->assertEquals("bon",$actual);
    }

    public function testCountGiven7WordShouldReturnBon() {
        // Arrange
        $mot = new PositivityController();
        // Act
        $actual = $mot->countPositiveWords("negatif fantastique parfait incroyable mal mauvais bete");
        // Assert
        $this->assertEquals("bon",$actual);
    }
}
