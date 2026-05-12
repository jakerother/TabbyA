<?php
/**
 * Tests for TabbyAPI
 */

use PHPUnit\Framework\TestCase;
use Tabbyapi\Tabbyapi;

class TabbyapiTest extends TestCase {
    private Tabbyapi $instance;

    protected function setUp(): void {
        $this->instance = new Tabbyapi(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tabbyapi::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
