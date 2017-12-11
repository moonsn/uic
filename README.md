## UIC Client For Laravel

## install

```
composer require moonsn1994/uic:dev-master
```

## Config

set the server&key in config/uic.php

### usage

#### Facades

```
use MOONSN1994\Uic\Facades\Uic;
Uic::getUserByUsername('username');
```

#### Container

```
app('uic')->getUserByUsername('username')
```


