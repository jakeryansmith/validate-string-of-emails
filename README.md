# A validation rule for checking a string of delimiter separated emails.


You can install the package via composer:

```bash
composer require jakeryansmith/laravel-validate-emails
```

You can validate a string of emails separated by a comma.

```php
$request['emails'] = 'dwightschrute@dundermifflin.com,jimhalpert@dundermifflin.com';
$request->validate([
    'emails' => [new StringOfEmails()],
]);
```

You can also pass in your own delimiter if needed. In this example we are using the '|' pipe character.

```php
$request['emails'] = 'dwightschrute@dundermifflin.com|jimhalpert@dundermifflin.com';
$request->validate([
    'emails' => [new StringOfEmails('|')],
]);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
