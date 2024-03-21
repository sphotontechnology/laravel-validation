<?php

it('should return true if the given string is a Vietnamese string', function () {
    $rule = new \Sphoton\Validation\Rules\VietnameseRule();
    $validator = $this->makeValidator(['name' => 'Nguyễn Văn A'], ['name' => $rule]);
    $this->assertTrue($validator->passes());

    $validator = $this->makeValidator(['name' => 'NguyễnVănA'], ['name' => $rule]);
    $this->assertTrue($validator->passes());

    $validator = $this->makeValidator(['name' => 'Abcdef'], ['name' => $rule]);
    $this->assertTrue($validator->passes());
});

it('should return false if the given string is not a Vietnamese string', function () {
    $rule = new \Sphoton\Validation\Rules\VietnameseRule();
    $validator = $this->makeValidator(['name' => 'Nguyễn Văn A 123'], ['name' => $rule]);
    $this->assertFalse($validator->passes());

    $validator = $this->makeValidator(['name' => 'Nguyễn Văn A 
    lala'], ['name' => $rule]);
    $this->assertFalse($validator->passes());

    $validator = $this->makeValidator(['name' => "Nguyễn Văn A \nlala"], ['name' => $rule]);
    $this->assertFalse($validator->passes());

    $validator = $this->makeValidator(['name' => '123 Nguyễn Văn A'], ['name' => $rule]);
    $this->assertFalse($validator->passes());

    $validator = $this->makeValidator(['name' => 'Nguyễn 123Văn A'], ['name' => $rule]);
    $this->assertFalse($validator->passes());

    $validator = $this->makeValidator(['name' => 'Nguyễn Văn A@'], ['name' => $rule]);
    $this->assertFalse($validator->passes());
});

it('check message failed validation', function () {
    $rule = new \Sphoton\Validation\Rules\VietnameseRule();
    $validator = $this->makeValidator(['name' => 'Nguyễn Văn A 123'], ['name' => $rule]);
    $validator->passes();

    $this->assertEquals('The name must be a Vietnamese string.', $validator->messages()->first());
});