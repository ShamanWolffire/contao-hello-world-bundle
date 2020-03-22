# Contao Hello World Bundle

This bundle is just a test and not developed for usage in production.

## Install

Download the skeleton bundle:

```bash
wget https://github.com/ShamanWolffire/contao-hello-world-bundle/archive/master.zip
unzip master.zip
mv contao-hello-world-bundle [package name]
cd [package name]
```

## Customize

First adjust the following files:

 * `.php_cs.php`
 * `composer.json`
 * `phpunit.xml.dist`
 * `README.md`

Then rename the following files and/or the references to `ContaoHelloWorldBundle` in
the following files:

 * `src/ContaoManager/Plugin.php`
 * `src/DependencyInjection/ContaoHelloWorldBundleExtension.php`
 * `src/ContaoHelloWorldBundle.php`
 * `tests/ContaoHelloWorldBundleTest.php`

Finally add your custom classes and resources.

## Release

Run the PHP-CS-Fixer and the unit test before you release your bundle:

```bash
vendor/bin/php-cs-fixer fix -v
vendor/bin/phpunit
```

[1]: https://contao.org
