<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsDigit implements Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, $value)
    {
        return ctype_digit($value);
    }

    /**
     * Get the validation error message.
     */
    public function message()
    {
        return 'The :attribute must contain only digits.';
    }
}