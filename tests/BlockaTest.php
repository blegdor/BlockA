<?php
/**
 * Tests for BlockA
 */

use PHPUnit\Framework\TestCase;
use Blocka\Blocka;

class BlockaTest extends TestCase {
    private Blocka $instance;

    protected function setUp(): void {
        $this->instance = new Blocka(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocka::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
