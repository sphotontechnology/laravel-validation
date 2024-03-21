<?php

namespace Sphoton\Validation\Rules\Traits;

trait ResolveAttribute
{
    public function resolveAttribute($attribute)
    {
        return str_replace('_', ' ', $attribute);
    }
}
