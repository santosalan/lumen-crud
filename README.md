# santosalan/lumen-crud

## Install with Composer
> php composer.phar require santosalan/lumen-crud

## Enable it in _bootstrap/app.php_
```php
$app->withFacades();
$app->withEloquent();
```

## Add it in _bootstrap/app.php_
```php
$app->register(SantosAlan\LumenCrud\ServiceProvider::class);
```

## Doctrine Inflectors - Irregular Plural and Singular
#### Create, if not exists, file _config/app.php_ and register this
```php
return [
    /**
     * Irregulares Words
     */
    'doctrine-inflector' => [
        'plural' => [
            'irregular' => [
                'traducao' => 'traducoes',
            ],
        ],

        'singular' => [
            'irregular' => [
                'traducoes' => 'traducao',
            ],
        ],
    ],
];
```

#### Add it in _bootstrap/app.php_ before _return $app;_
```php
$app->boot();
Inflector::rules('plural', config('app.doctrine-inflector.plural'));
Inflector::rules('singular', config('app.doctrine-inflector.singular'));
```

## See Help
> php artisan make:lumen-crud -h

## See Tables
> php artisan make:lumen-crud

## Generate a Basic Lumen-CRUD
> php artisan make:lumen-crud --tables [ all | table_number ] --path-models 'App\Models\' --routes=[ y | n ] --base-model [ y | n ]

or

> php artisan make:lumen-crud -t [ all | table_number ] -p 'App\Models\' -r [ y | n ] -b [ y | n ]


**Caution: All files will be replaced**

