<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Tests\Etel;

use PeterPecosz\Kajatervezo\Etel\Etel;
use PeterPecosz\Kajatervezo\Hozzavalo\Hozzavalo;
use PeterPecosz\Kajatervezo\Mertekegyseg\Mertekegyseg;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class EtelTest extends TestCase
{
    private Etel $testFood;

    protected function setUp(): void
    {
        $this->testFood = new class() extends Etel {
            #[\Override] public static function getName(): string
            {
                return 'test food';
            }

            #[\Override] protected static function listHozzavalok(): array
            {
                return [
                    new Hozzavalo(Hozzavalo::TOJAS, 1, Mertekegyseg::DB),
                ];
            }

            #[\Override] public static function getDefaultAdag(): int
            {
                return 1;
            }

            #[\Override] public function getReceptUrl(): string
            {
                return 'https://online-recept-konyv.hu/test-food';
            }
        };
    }

    #[Test]
    public function testGetName(): void
    {
        $this->assertEquals('test food', $this->testFood::getName());
    }

    #[Test]
    public function testGetReceptUrl(): void
    {
        $this->assertEquals('https://online-recept-konyv.hu/test-food', $this->testFood->getReceptUrl());
    }

    #[Test]
    public function testGetDefaultAdag(): void
    {
        $this->assertEquals(1, $this->testFood::getDefaultAdag());
    }

    #[Test]
    public function testGetHozzavalok(): void
    {
        $this->assertEquals(
            [
                new Hozzavalo(Hozzavalo::TOJAS, 1, Mertekegyseg::DB),
            ],
            $this->testFood->getHozzavalok()
        );
    }

    #[Test]
    public function testStringify(): void
    {
        $this->assertEquals('test food (1 adag)', (string)$this->testFood);
    }
}
