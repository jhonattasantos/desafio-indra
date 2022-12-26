<?php

namespace Indra\Hamming;

class HammingService
{
    public function compute($strand1, $strand2)
    {
        if (strlen($strand1) != strlen($strand2)) {
            throw new \InvalidArgumentException('DNA strands must be of equal length.');
        }

        $distance = 0;
        for ($i = 0; $i < strlen($strand1); $i++) {
            if ($strand1[$i] != $strand2[$i]) {
                $distance++;
            }
        }

        return $distance;
    }
}