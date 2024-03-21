<?php

namespace Sphoton\Validation\Rules\Traits;

use Illuminate\Support\Str;

trait IsVietnamese
{
    protected function isVietnamese(string $value): bool
    {
        if (method_exists(Str::class, 'isVietnamese')) {
            return Str::isVietnamese($value);
        }

        return preg_match('/^[\pL\pM\s]+/u', $value);
    }
}
