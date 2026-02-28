<?php
/**
 * Tests for EtherZephyrx
 */

use PHPUnit\Framework\TestCase;
use Etherzephyrx\Etherzephyrx;

class EtherzephyrxTest extends TestCase {
    private Etherzephyrx $instance;

    protected function setUp(): void {
        $this->instance = new Etherzephyrx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Etherzephyrx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
