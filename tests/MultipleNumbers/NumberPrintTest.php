<?php

namespace Indra\MultipleNumbers;

use PHPUnit\Framework\TestCase;

class NumberPrintTest extends TestCase
{
    public function testPrint()
    {
        $numberPrint = new NumberPrint([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]);
        $expected = [
            1,
            2,
            'Indra',
            4,
            'Minsait',
            'Indra',
            7,
            8,
            'Indra',
            'Minsait',
            11,
            'Indra',
            13,
            14,
            'Indra Minsait'
        ];
        $this->assertEquals($expected,$numberPrint->display());
    }
}