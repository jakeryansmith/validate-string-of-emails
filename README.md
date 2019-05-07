# A validation rule for checking an array or string for valid emails

<!-- [![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-validation-rules.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-validation-rules)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-validation-rules.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-validation-rules) -->


You can install the package via composer:

```bash
composer require jakeryansmith/laravel-validate-emails
```

The package will automatically register itself.


Or you can validate a string of emails seperated by the delimeter you choose.

```php
// in a `FormRequest`

public function rules()
{
    $emails = 'jakeryansmith@gmail.com,foo@bar.com';
    return [
        'emails' => [new ValidateEmails($emails)],
    ];
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
