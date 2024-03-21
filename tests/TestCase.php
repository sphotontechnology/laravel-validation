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
            $this->translateResource(),
            'en'
        );
    }

    public function makeValidator(array $data, array $rule)
    {
        return new Validator($this->getIlluminateArrayTranslator(), $data, $rule);
    }

    public function translateResource()
    {
        $loader = new ArrayLoader();
        $loader->addMessages('en', 'validation', [
            'vietnamese' => 'The :attribute must be a Vietnamese string.',
        ], 'sphoton');

        return $loader;
    }
}
