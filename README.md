# santosalan/lumen-crud

## Install with Composer
> php composer.phar require santosalan/lumen-crud

## Enable it in _bootstrap/app.php_
> $app->register(SantosAlan\LumenCrud\ServiceProvider::class);

## See Tables
> php artisan make:lumen-crud

## Generate a Basic Lumen-CRUD
> php artisan make:lumen-crud --tables=[ all | table_number ] --path-models='App\Models\' --routes=[ y | n ]

or

> php artisan make:lumen-crud --t=[ all | table_number ] --pm='App\Models\' --r=[ y | n ]


**Caution: All files will be replaced**
    
