# Wengage Expected Checkin
This package overwrites the expected checkin notification markdown file for Snipe-IT.

## Install with composer
1. Run `composer require ghermans/wengage-expected-checkins`
2. Run `php artisan vendor:publish --tag expected-checkin --force`

## Install without composer
1. Download the files
2. Create a folder inside the Snipe-IT root folder **packages**
3. Open **packages** and create a folder named **Wengage** and subfolder **ExpectedCheckin**
4. Copy all the files to the subfolder **ExpectedCheckin**
5. Open **composer.json** and add the following to the **psr-4** section
```
"Wengage\\ExpectedCheckin\\": "packages/Wengage/ExpectedCheckin/src"
```
6. Run `composer dumpautoload`
7. Open **config/app.php** and add the following custom service provider
```
Wengage\ExpectedCheckin\Providers\ExpectedCheckinServiceProvider::class
```
8. Run `php artisan vendor:publish --tag expected-checkin --force`
