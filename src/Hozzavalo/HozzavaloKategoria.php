<?php

declare(strict_types=1);

namespace PeterPecosz\Kajatervezo\Hozzavalo;

use Override;

enum HozzavaloKategoria: string implements Kategoria
{
    case BOR = 'Bor';
    case CUKRASZ = 'Cukrász';
    case ZOLDSEG_GYUMOLCS = 'Zöldség / Gyümölcs';
    case OLAJ = 'Olaj';
    case ECET = 'Ecet';
    case FUSZER = 'Fűszer';
    case TARTOS_ELELMISZER = 'Tartós élelmiszer';
    case TARTOS_TEJTERMEK = 'Tartós tejtermék';
    case AZSIAI = 'Ázsiai';
    case FELVAGOTT = 'Felvágott';
    case HUS = 'Hús';
    case MIRELIT = 'Mirelit';
    case TEJTERMEK = 'Tejtermék';
    case UDITO = 'Üditő';
    case PEKARU = 'Pékárú';

    #[Override] public function value(): string
    {
        return $this->value;
    }
}
