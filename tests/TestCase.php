<?php

namespace Tests;

use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Validator;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function getIlluminateArrayTranslator()
    {
        return new Translator(
            new ArrayLoader(),
            'en'
        );
    }

    public function makeValidator(array $data, array $rule)
    {
        return new Validator($this->getIlluminateArrayTranslator(), $data, $rule);
    }
}
