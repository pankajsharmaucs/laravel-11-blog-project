<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AlphabeticTitle implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @param  Closure $fail
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Ensure the value is a string and then check if it contains only alphabetic characters and spaces
        if (!preg_match('/^[a-zA-Z\s]*$/', $value)) {
            $fail('The ' . $attribute . ' must contain only alphabetic characters and spaces.');
        }
    }
}
