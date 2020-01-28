<?php
// tests/SampleTest.php
namespace Tests;

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testSame(): void
    {
        $this->assertSame(0, "0");
    }
}