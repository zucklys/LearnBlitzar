<?php
/**
 * Tests for LearnBlitzar
 */

use PHPUnit\Framework\TestCase;
use Learnblitzar\Learnblitzar;

class LearnblitzarTest extends TestCase {
    private Learnblitzar $instance;

    protected function setUp(): void {
        $this->instance = new Learnblitzar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Learnblitzar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
