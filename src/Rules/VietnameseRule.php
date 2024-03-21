<?php

namespace Sphoton\Validation\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class VietnameseRule implements ValidationRule
{
    use Traits\IsVietnamese;

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || ! $this->isVietnamese($value)) {
            $fail('sphoton::validation.vietnamese')->translate([
                'attribute' => $attribute,
            ]);
        }
    }
}
