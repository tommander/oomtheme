# Order of Mass Theme

WordPress theme from the Order of Mass package.

This theme changes the looks of your WordPress site to specifically show an order of mass or a rosary guide.

## Installation

Requirements:

- WordPress 6.6
- PHP 8.2
- Composer 2
- Git
- [OoM Plugin](https://github.com/tommander/oomplugin) (install first before the theme)

```sh
cd /path/to/wordpress/wp-content/themes
git clone https://github.com/tommander/oomtheme.git
cd oomtheme
composer install
```

## Usage

No special setup for the theme, you just might need to manually change the color of Advanced Tabs if you are going to use them (to match the theme colours brown/beige).

## QA

Code is checked by `php_codesniffer` and `psalm` on every push that updates PHP/Composer/GH Workflow files.

It is recommended to run `composer qa` before pushing to the repo.

## Documentation

Under construction.

## License

[MIT License](LICENSE)
