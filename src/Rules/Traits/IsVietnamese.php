<?php

namespace Sphoton\Validation\Rules\Traits;

use Illuminate\Support\Str;

trait IsVietnamese
{
    protected function isVietnamese(string $value, string $extra = ''): bool
    {
        if (method_exists(Str::class, 'isVietnamese')) {
            return Str::isVietnamese($value, $extra);
        }

        return (bool) preg_match("/^[\p{L}\p{M}$extra ]+$/u", $value);
    }
}
