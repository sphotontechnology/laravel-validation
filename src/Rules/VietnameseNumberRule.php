<?php

namespace Sphoton\Validation\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class VietnameseNumberRule implements ValidationRule
{
    use Traits\IsVietnamese;
    use Traits\ResolveAttribute;

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || ! $this->isVietnamese($value, '0-9')) {
            $fail('sphoton::validation.vietnamese')->translate([
                'attribute' => $this->resolveAttribute($attribute),
            ]);
        }
    }
}
