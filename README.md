# logger script
php script to fetch text files like log files in easy way

## requirements
- php version ^8.0 
## Installation

You can install the package via [Composer](https://getcomposer.org).

```bash
composer update
```

## Usage

then change your config from src/config/config.php file
```php
    "ROUTE"  => "http://localhost/logger"  // '127.0.0.1:8000/'
```

open your browser and open main project route index.php like that 
"http://localhost/logger/index.php"

- login with username = admin && password = admin
- put any file path and click view to fetch file data
- you can change number of lines in page from src/Classes/Pagination $limit = 10

## Unit-Test
- you can run unit-test by open project root file in cli and run 
```bash
./vendor/bin/phpunit
```










# loger
