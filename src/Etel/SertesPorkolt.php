<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Etel;

class SertesPorkolt extends Porkolt
{
    #[\Override] public static function getName(): string
    {
        return 'Sertés pörkölt';
    }
}
