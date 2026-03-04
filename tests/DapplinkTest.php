<?php
/**
 * Tests for DAppLink
 */

use PHPUnit\Framework\TestCase;
use Dapplink\Dapplink;

class DapplinkTest extends TestCase {
    private Dapplink $instance;

    protected function setUp(): void {
        $this->instance = new Dapplink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dapplink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
