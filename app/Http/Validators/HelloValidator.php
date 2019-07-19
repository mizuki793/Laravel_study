<?php
namespace App\Htpp\Validators;

use Illuminate\Validation\validator;

class HelloValidator extends Validator
{
    public function ValidateHello($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
}