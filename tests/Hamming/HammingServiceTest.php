<?php

namespace Indra\Hamming;

use PHPUnit\Framework\TestCase;
use Indra\Hamming\HammingService;

class HammingServiceTest extends TestCase
{
    public function testCompute()
    {
        $hamming = new HammingService();
        $this->assertEquals(7, $hamming->compute('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT'));
    }

    public function testComputeWithInvalidLength()
    {
        $this->expectException(\InvalidArgumentException::class);
        $hamming = new HammingService();
        $hamming->compute('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCTT');
    } 
}