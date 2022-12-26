<?php 

namespace Indra\Resistor;

use PHPUnit\Framework\TestCase;
use Indra\Resistor\ResistorService;

class ResistorServiceTest extends TestCase
{
    public function testShouldReturnColorName()
    {
        $resistorService = new ResistorService();
        $this->assertEquals('Preto', $resistorService->getSelectedColor(0));
        $this->assertEquals('Marrom', $resistorService->getSelectedColor(1));
        $this->assertEquals('Vermelho', $resistorService->getSelectedColor(2));
        $this->assertEquals('Laranja', $resistorService->getSelectedColor(3));
        $this->assertEquals('Amarelo', $resistorService->getSelectedColor(4));
        $this->assertEquals('Verde', $resistorService->getSelectedColor(5));
        $this->assertEquals('Azul', $resistorService->getSelectedColor(6));
        $this->assertEquals('Violeta', $resistorService->getSelectedColor(7));
        $this->assertEquals('Cinza', $resistorService->getSelectedColor(8));
        $this->assertEquals('Branco', $resistorService->getSelectedColor(9));
    }

    public function testShouldReturnAllColors()
    {
        $resistorService = new ResistorService();
        $expected = [
            0 => 'Preto',
            1 => 'Marrom',
            2 => 'Vermelho',
            3 => 'Laranja',
            4 => 'Amarelo',
            5 => 'Verde',
            6 => 'Azul',
            7 => 'Violeta',
            8 => 'Cinza',
            9 => 'Branco',
        ];
        $this->assertEquals($expected, $resistorService->getData());
    }
}