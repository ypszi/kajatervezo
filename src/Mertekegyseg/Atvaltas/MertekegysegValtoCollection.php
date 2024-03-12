<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas;

use LogicException;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\DekagramToGram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\DekagramToKilogram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\GramToDekagram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\GramToKilogram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\KilogramToDekagram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\KilogramToGram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\CentiliterToDeciliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\CentiliterToLiter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\CentiliterToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\DeciliterToCentiliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\DeciliterToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\LiterToCentiliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\LiterToDeciliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\LiterToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\MilliliterToCentiliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\MilliliterToDeciliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\MilliliterToLiter;

class MertekegysegValtoCollection
{
    /** @var MertekegysegValto[] */
    private array $elements;

    public function __construct()
    {
        $this->elements = [
            new CentiliterToDeciliter(),
            new CentiliterToLiter(),
            new CentiliterToMilliliter(),
            new DeciliterToCentiliter(),
            new DeciliterToMilliliter(),
            new LiterToCentiliter(),
            new LiterToDeciliter(),
            new LiterToMilliliter(),
            new MilliliterToCentiliter(),
            new MilliliterToDeciliter(),
            new MilliliterToLiter(),
            new DekagramToGram(),
            new DekagramToKilogram(),
            new GramToDekagram(),
            new GramToKilogram(),
            new KilogramToDekagram(),
            new KilogramToGram(),
        ];
    }

    public function get(string $mertekegyseget, string $mertekegysegre): MertekegysegValto
    {
        foreach ($this->elements as $element) {
            if ($element->canValt($mertekegyseget, $mertekegysegre)) {
                return $element;
            }
        }

        throw new LogicException(sprintf('Cannot convert %s to %s', $mertekegyseget, $mertekegysegre));
    }
}
