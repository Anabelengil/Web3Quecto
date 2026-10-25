<?php
/**
 * Tests for Web3Quecto
 */

use PHPUnit\Framework\TestCase;
use Web3quecto\Web3quecto;

class Web3quectoTest extends TestCase {
    private Web3quecto $instance;

    protected function setUp(): void {
        $this->instance = new Web3quecto(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3quecto::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
