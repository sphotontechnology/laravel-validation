<p align="center"><a href="https://github.com/sphotontechnology" target="_blank"><img src="https://sphoton.com/wp-content/uploads/2020/12/sphoton-logo-black.png" width="320" alt="Laravel Logo"></a></p>
<p align="center">
    <a href="https://packagist.org/packages/sphoton/validation"><img src="https://img.shields.io/packagist/dt/sphoton/validation" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/sphoton/validation"><img src="https://img.shields.io/packagist/v/sphoton/validation" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/sphoton/validation"><img src="https://img.shields.io/packagist/l/sphoton/validation" alt="License"></a>
</p>

## About
Provide additional validation rules to support Vietnamese testing for Laravel.

## Condition
- Laravel 8.x or later
- PHP 8.1 or later

## Installation
You can install the package via composer:

```bash
composer require sphoton/validation
```

## Available Rules
- `VietnameseRule`: The field under validation must be entirely in Vietnamese.
- `VietnameseNumberRule`: The field under validation must be entirely in Vietnamese and number.

## Usage
You can use the validation rules in your Laravel application like this:

```php
use Sphoton\Validation\Rules\VietnameseRule;
use Sphoton\Validation\Rules\VietnameseNumberRule;

$request->validate([
    'name'      => ['required', 'string', new VietnameseRule],
    'address'   => ['required', 'string', new VietnameseNumberRule],
]);
```

```php
use Sphoton\Validation\Rules\VietnameseRule;
"Nguyen Van A"          // Pass
"Nguyễn Văn A"          // Pass
"Nguyễn Văn A 123"      // Fail
"123 Nguyễn Văn A"      // Fail
"Nguyễn Văn A @"        // Fail
"Nguyễn Văn A 123 @"    // Fail
"Nguyễn Văn 
A"                      // Fail
"Nguyễn Văn \nA"        // Fail

use Sphoton\Validation\Rules\VietnameseNumberRule;
"Nguyen Van A"          // Pass
"Nguyễn Văn A 123"      // Pass
"123 Nguyễn Văn A"      // Pass
"Nguyễn Văn A @"        // Fail
"Nguyễn Văn A 123 @"    // Fail
"Nguyễn Văn
A"                      // Fail
"Nguyễn Văn \nA"        // Fail
```

## Contributors
<table>
    <tr>
        <td align="center" style="word-wrap: break-word; width: 96.0; height: 96.0">
            <a href=https://github.com/hoangkhacphuc>
                <img src=https://avatars.githubusercontent.com/u/63985216?v=4 width="64;"  style="border-radius:50%;align-items:center;justify-content:center;overflow:hidden;padding-top:10px" alt=Hoàng Khắc Phúc/>
                <br />
                <sub style="font-size:12px"><b>Hoàng Khắc Phúc</b></sub>
            </a>
        </td>
        <td align="center" style="word-wrap: break-word; width: 96.0; height: 96.0">
            <a href=https://github.com/ducconit>
                <img src=https://avatars.githubusercontent.com/u/72369814?v=4 width="64;"  style="border-radius:50%;align-items:center;justify-content:center;overflow:hidden;padding-top:10px" alt=DNT/>
                <br />
                <sub style="font-size:12px"><b>DNT</b></sub>
            </a>
        </td>
    </tr>
</table>