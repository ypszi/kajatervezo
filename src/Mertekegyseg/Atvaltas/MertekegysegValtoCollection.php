<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas;

use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Csirkemell\DarabToDekagram as CsirkemellDarabToDekagram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Csirkemell\DarabToKilogram as CsirkemellDarabToKilogram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Csirkemell\DekagramToDarab as CsirkemellDekagramToDarab;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Csirkemell\KilogramToDarab as CsirkemellKilogramToDarab;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Exception\UnknownUnitOfMeasureException;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\EvoKanalToDeciliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\EvoKanalToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\KavesKanalToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\KisKanalToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\MilliliterToEvoKanal;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\MilliliterToKavesKanal;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\MilliliterToKisKanal;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\MilliliterToMokkasKanal;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\MilliliterToTeasKanal;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\MokkasKanalToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Kanal\TeasKanalToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Liszt\BogreToDekagram as LisztBogreToDekagram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Liszt\BogreToGram as LisztBogreToGram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Liszt\BogreToKilogram as LisztBogreToKilogram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Liszt\EvokanalToDekagram as LisztEvokanalToDekagram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Liszt\EvokanalToGram as LisztEvokanalToGram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Liszt\EvokanalToKilogram as LisztEvokanalToKiloGram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\DekagramToGram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\DekagramToKilogram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\GramToDekagram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\GramToKilogram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\KilogramToDekagram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Tomeg\KilogramToGram;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\BogreToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\CentiliterToDeciliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\CentiliterToLiter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\CentiliterToMilliliter;
use PeterPecosz\Kajatervezo\Mertekegyseg\Atvaltas\Urtartalom\CseszeToMilliliter;
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
            new CsirkemellDarabToDekagram(),
            new CsirkemellDarabToKilogram(),
            new CsirkemellDekagramToDarab(),
            new CsirkemellKilogramToDarab(),
            new BogreToMilliliter(),
            new CentiliterToDeciliter(),
            new CentiliterToLiter(),
            new CentiliterToMilliliter(),
            new CseszeToMilliliter(),
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
            new EvoKanalToDeciliter(),
            new EvoKanalToMilliliter(),
            new KavesKanalToMilliliter(),
            new KisKanalToMilliliter(),
            new MilliliterToEvoKanal(),
            new MilliliterToKavesKanal(),
            new MilliliterToKisKanal(),
            new MilliliterToMokkasKanal(),
            new MilliliterToTeasKanal(),
            new MokkasKanalToMilliliter(),
            new TeasKanalToMilliliter(),
            new LisztBogreToDekagram(),
            new LisztBogreToGram(),
            new LisztBogreToKilogram(),
            new LisztEvokanalToDekagram(),
            new LisztEvokanalToGram(),
            new LisztEvokanalToKiloGram(),
        ];
    }

    public function get(Hozzavalo $hozzavalo, Hozzavalo $hozzaadottHozzavalo): MertekegysegValto
    {
        foreach ($this->elements as $element) {
            if ($element->canValt($hozzavalo, $hozzaadottHozzavalo)) {
                return $element;
            }
        }

        throw new UnknownUnitOfMeasureException(sprintf('Cannot convert %s to %s', $hozzavalo, $hozzaadottHozzavalo));
    }
}
