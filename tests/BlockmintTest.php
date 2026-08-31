<?php
/**
 * Tests for BlockMint
 */

use PHPUnit\Framework\TestCase;
use Blockmint\Blockmint;

class BlockmintTest extends TestCase {
    private Blockmint $instance;

    protected function setUp(): void {
        $this->instance = new Blockmint(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockmint::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
