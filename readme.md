# Laravel Post Link

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]

Post Link Component for Laravel
## Installation

Via Composer

``` bash
$ composer require salehhashemi1992/laravel-post-link
```

## Usage
```html
<x-post-link method="PUT" :url="route('notifications.mark-as-read', $notification->id)"
class="badge bg-danger rounded-pill float-end">
<i class="fe-x text-light"></i>
</x-post-link>
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email salpars2004@gmail.com instead of using the issue tracker.

## Credits

- [Author Name][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/salehhashemi1992/laravel-post-link.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/salehhashemi1992/laravel-post-link.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/salehhashemi1992/laravel-post-link/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/salehhashemi1992/laravel-post-link
[link-downloads]: https://packagist.org/packages/salehhashemi1992/laravel-post-link
[link-travis]: https://travis-ci.org/salehhashemi1992/laravel-post-link
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/salehhashemi1992
[link-contributors]: ../../contributors
