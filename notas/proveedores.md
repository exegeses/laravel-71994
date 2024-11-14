# proyecto proveedores
> necesitamos crear una tabla proveedores que ya tenga datos de prueba cargados
> creamos la migracion con artisan

    php artisan make:migration create_proveedores_table

> después editamos la migración

    $table->tinyIncrements('idProveedor');
    $table->string('nombre', 45)->unique();
    $table->string('whatsapp', 45);
    $table->string('ciudad', 45);
    $table->string('pais', 45);
    $table->string('direccion', 100); 
 
> despues corremos la migracion

    php artisan migrate  

> Ahora vamos a crear un Factory

    php artisan make:factory ProveedorFactory

> Editamos el Factory

        return [
            'nombre'=>fake()->name(),
            'whatsapp'=>fake()->phoneNumber(),
            'ciudad'=>fake()->city(),
            'pais'=>fake()->country(),
            'direccion'=>fake()->address()
        ];

> Para poder trabajar con este Factory necesitamos un modelo

    php artisan make:model Proveedor

> Configuramos el model

    use HasFactory;
    
    protected $table = 'proveedores';
    protected $primaryKey = 'idProveedor';
    public $timestamps = false;

> Editamos el DatabaseSeeder

    Proveedor::factory(10)->create();

> Ejecutamos el DatabaseSeeder

    php artisan db:seed  
