<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom;

use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\MertekegysegValto;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;

class BogreToMilliliter extends MertekegysegValto
{
    #[\Override] public function canValt(string $mertekegyseget, string $mertekegysegre): bool
    {
        return $mertekegyseget === Mertekegyseg::BOGRE
               && $mertekegysegre === Mertekegyseg::ML;
    }

    #[\Override] protected function getMultiplier(): float
    {
        return 250.0;
    }
}