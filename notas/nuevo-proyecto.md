# Creación de un nuevo proyecto

> Cuando trabajamos en equipo, no se hace una instalación por cada uno de los miembros del equipo. 
> Eso quiere decir que solamente uno del equipo se encarga de crear el nuevo proyecto y copiar todo lo que sea necesario (*1) para el Set Up inicial de ese proyecto
> Una vez listo, este miembro del equipo sube el proyecto a un repositorio y el resto del equipo lo descarga con toda la base de archivos inicial preparada (*2)

> 1.- los archivos corresponden a: 

    /public
        /css
        /imagenes
    /views
        /components
        /layouts
    /database
        /migrations
        /seeders

## Instalación

    laravel new catalogo


## Configuración general
> Editar el archivo .env
## Correr las migraciones
## Copiar archivos    
> archivos de /public
> archivos de vistas, componentes y layouts
## Crear migraciones, seeders, modelos y controladores

    php artisan make:model Marca -mscr  
    php artisan make:model Categoria -mscr  
    php artisan make:model Producto -mscr  

## Editar migraciones y seeders
## Chequear si es necesario editar los Models

## Correr migraciones y seeders

## Subir a repositorio

------

## Descarga de un proyecto

> Tenemos dos maneras de descargar el proyecto
> 1.- Si sabemos usar git simplemente clonamos el proyecto y hacemos un pull
> 2.- Si no sabemos usar git vamos a descargar un archivo comprimido y luego descomprimirlo

## Generación de configuracion + configuracion + descarga adicional

> Cuando descargamos un proyecto existente, en ese proyecto no está todo lo necesario para que funcione. 
> Es necesario generar una configuración y descargar archivos adicionales

## Carpeta vendor

    composer update

> Con este comando, Laravel se va a fijar que versión necesitamos descargar y de ese modo va a descargar la carpeta /vendor del sitio oficial de Laravel

## Archivo .env
> Cuando descargamos un proyecto existente no se descarga el archivo.env
> Entonces debemos generar lo renombre ando copiando y pegando el archivo con el nombre .env.example

## Generación de llave

    php  artisan key:generate

> Ahora si ya tenemos nuestro proyecto listo para correr las migraciones ejecutarlos Seeders y comenzar a desarrollar

    php artisan migrate
    php artisan db:seed

