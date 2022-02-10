# Utils 

Utils for help Dev

## Structure Utils

* ValuesObject



## Install

Via Composer

``` bash
$ composer require jtrw/utils
```

## Usage ValuesObject

```php
use Jtrw\Utils\ValuesObject;

class UserValuesObject extends ValuesObject
{
    public function getID()
    {
        return $this->get('id');
    }

    public function getName()
    {
        return $this->get('name');
    }
}

$user = [
    'id'   => 1,
    'name' => 'Test User'
];

$userValuesObject = new UserValuesObject($user);

echo $userValuesObject->getName();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

