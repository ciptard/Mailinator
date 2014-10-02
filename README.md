# Mailinator

[![Total Downloads](http://img.shields.io/packagist/dt/brnlbs/mailinator.svg?style=flat-square)](https://github.com/brnlbs/mailinator/tags)
[![Latest Version](https://img.shields.io/github/release/brnlbs/mailinator.svg?style=flat-square)](https://github.com/brnlbs/mailinator/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/brnlbs/mailinator/blob/master/LICENSE)


A simple PHP library that wraps around the [Mailinator API](http://mailinator.com/apidocs.jsp) for use in PHP projects.


## Install

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.2+, and [Composer](https://getcomposer.org) are required.

To get the latest version, simply require `"brnlbs/mailinator": "~1.0"` in your `composer.json` file. You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.


## Usage

``` php
$client = new Brnlbs\Mailinator\Client('api_key');

try
{
    $response = $client->publicInbox('mail@to.com');
    echo('<pre>' . print_r($response, true) . '</pre>');
}
catch (Brnlbs\Spacejam\Exception $e)
{
    printf('%d: %s', $e->getCode(), $e->getMessage());
}
```


## Credits

- [Brian O'Sullivan](https://github.com/brnlbs)
- [All Contributors](https://github.com/brnlbs/mailinator/contributors)


## License

The MIT License (MIT). Please see [License File](https://github.com/brnlbs/mailinator/blob/master/LICENSE) for more information.
