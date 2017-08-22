Use this repo as a skeleton for your new channel, once you're done please submit a Pull Request on [this repo](https://github.com/laravel-notification-channels/new-channels) with all the files.

Here's the latest documentation on Laravel 5.3 Notifications System: 

https://laravel.com/docs/master/notifications

# A Boilerplate repo for contributions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-notification-channels/46Elks.svg?style=flat-square)](https://packagist.org/packages/laravel-notification-channels/46Elks)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/laravel-notification-channels/46Elks/master.svg?style=flat-square)](https://travis-ci.org/laravel-notification-channels/46Elks)


[![Quality Score](https://img.shields.io/scrutinizer/g/laravel-notification-channels/46Elks.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-notification-channels/46Elks)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/laravel-notification-channels/46Elks/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-notification-channels/46Elks/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-notification-channels/46Elks.svg?style=flat-square)](https://packagist.org/packages/laravel-notification-channels/46Elks)

This package makes it easy to send notifications using [46Elks](link to service) with Laravel 5.3.




This is where your description should go. Add a little code example so build can understand real quick how the package can be used. Try and limit it to a paragraph or two.



## Contents

- [Installation](#installation)
	- [Setting up the 46Elks service](#setting-up-the-46Elks-service)
- [Usage](#usage)
	- [Available Message methods](#available-message-methods)
- [Changelog](#changelog)
- [Testing](#testing)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


## Installation

Please also include the steps for any third-party service setup that's required for this package.

### Setting up the 46Elks service

You must install the service provider:

```
// config/app.php
'providers' => [
    ...
    NotificationChannels\FourtySixElks\FourtySixElksServiceProvider::class,
],
```
## Usage

Some code examples, make it clear how to use the package

### Available Message methods

A list of all available options

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email emil@dalnix.se instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Emil Österlund](https://github.com/larsemil)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
