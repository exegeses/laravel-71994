# setup base de datos

> En el archivo .env configuramos que servidor de base de datos vamos a utilizar y el nombre de nuestra base de datos

> Cuando corrimos las migraciones se crearon algunas tablas
> que viene predeterminadas en Laravel 

    php artisan migrate

## Migraciones

### ¿Qué son las migraciones?

> Son clases para crear tablas
> (Aunque también pueden modificar estructura de tablas existentes)
### ¿Dónde están las migraciones?
 
    /database/migrations

### ¿cómo se crean?

    php artisan make:migration create_regiones_table
    php artisan make:migration create_destinos_table

> https://laravel.com/docs/11.x/migrations

## Seeders

### ¿Qué son los Seeders?

> Son clases para insertar datos dentro de nuestras tablas

### ¿Cómo se crean?

    php artisan make:seeder RegionSeeder  
    php artisan make:seeder DestinoSeeder  

### ¿Dónde se ubican los seeders?

> database/seeders/

> Una vez que editamos nuestros Seeders y los tenemos listos 
> lo próximo que tenemos que hacer es correrlos (ejecutarlos)

> Tenemos dos maneras de ejecutar los Seeders

> Una de las dos maneras es hacerlo de modo individual o sea ejecutar cada clase por separado

    php artisan db:seed --class=RegionSeeder  
    php artisan db:seed --class=DestinoSeeder  

> La otra manera es centralizar todos los Cedars y ejecutarlos todos en un solo comando
> Lo primero que debemos hacer es evitar la clase DatabaseSeeder

    php artisan db:seed  
