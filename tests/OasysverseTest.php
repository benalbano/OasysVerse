<?php
/**
 * Tests for OasysVerse
 */

use PHPUnit\Framework\TestCase;
use Oasysverse\Oasysverse;

class OasysverseTest extends TestCase {
    private Oasysverse $instance;

    protected function setUp(): void {
        $this->instance = new Oasysverse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oasysverse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
