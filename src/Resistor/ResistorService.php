<?php

namespace Indra\Resistor;

class ResistorService
{
    private $dataSource = [
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

    public function getSelectedColor($code)
    {
        return $this->dataSource[$code];
    }

    public function getData()
    {
        return $this->dataSource;
    }
}