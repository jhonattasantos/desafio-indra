<?php

namespace Indra\MultipleNumbers;

class NumberPrint
{

    private $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function display()
    {
        $multplesThreeAndFive = new CalculateMultiplesThreeAndFive("Indra Minsait", $this->numbers);
        $multiplesFive        = new CalculateMultiplesFive("Minsait",$multplesThreeAndFive->handler());
        $multiplesThree       = new CalculateMultiplesThree("Indra", $multiplesFive->handler());
        return $multiplesThree->handler();
    }
    
}