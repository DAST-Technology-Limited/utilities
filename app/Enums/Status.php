<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self PENDING()
 * @method static self APPROVED()
 * @method static self CANCELLED()
 * @method static self FAILED()
 */

class Status extends Enum
{
    protected static function values(): array
    {
        return [
            'PENDING' => 'pending',
            'APPROVED' => 'approved',
            'CANCELLED' => 'cancelled',
            'FAILED' => 'failed',
        ];
    }
}
