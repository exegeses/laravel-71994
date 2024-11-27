# Políticas de nombres en Laravel

## Tablas

> Laravel utiliza un sistema de plurales para las tablas y los modelos
> Laravel usume que si yo tengo una tabla que se llama inmuebles el modelo se deberá llamar Inmueble (en singular y mayúscula)
> ¿Qué sucede si yo tengo una tabla que tiene un nombre diferente del modelo?
> En el Model podemos configurar el atributo protegido table

    protected $table = 'nombreTable';


## Claves primarios

> Laravel asume que todas tus tablas tienen un primary key y que se llama 'id'
> ¿Qué sucede si yo le quiero poner otro nombre?
> En el Model podemos configurar el atributo protegido primaryKey

    protected $primaryKey = 'nombreColumnaPK';


## Campos de alta y modificación (timestamps)

> Laravel asume que todas nuestras tablas van a tener dos columnas para las altas y las modificaciones
> Para las altas una columna llamada 'created_at'
> Para las modificaciones una columna llamada 'updated_at'
> ¿Qué sucede si yo no voy a tener estas dos columnas?
> En el Model podemos configurar el atributo público timestamps y un valor asignado false

    public $timestamps = false;
