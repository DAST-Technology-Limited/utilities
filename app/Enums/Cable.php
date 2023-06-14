<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self STARTIMES()
 * @method static self GOTV()
 * @method static self DSTV()
 * @method static self STARTIMESBILL()
 * @method static self GOTVBILL()
 * @method static self DSTVBILL()
 */

class Cable extends Enum
{
    protected static function values(): array
    {
        return [
            'STARTIMES' => 'startimes-u',
            'GOTV' => 'gotvw',
            'DSTV' => 'dstvw',
            'STARTIMESBILL' => 'startimes',
            'GOTVBILL' => 'gotv',
            'DSTVBILL' => 'dstv'
        ];
    }
}
