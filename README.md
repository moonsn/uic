## UIC Client For Laravel

tested on laravel 5.5

## install

```
composer require moonsn1994/uic:dev-master
```
and publish the config:

```
php artisan vendor:
```

## Config

set the server&key in config/uic.php

### usage

#### By Facades

```
use MOONSN1994\Uic\Facades\Uic;
Uic::getUserByUsername('username');
```

#### By Container Service

```
app('uic')->getUserByUsername('username')
```

## known bug

* when username dont exist will throw an `E_NOTICE` error.
