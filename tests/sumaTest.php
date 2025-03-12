<?php
use PHPUnit\Framework\TestCase;
require_once "src/index.php";  // Importamos la función a testear

class SumaTest extends TestCase {

    protected function setUp(): void {
    }

    public function testSumaPositivos() {
        $resultado = suma(1, 1);
        $this->assertTrue($resultado, 0);
    }

    protected function tearDown(): void {
      
    }
}
?>
