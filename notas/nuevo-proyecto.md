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





