# CodeIgniter CRUD

Una app con las funcionalidades básicas (CRUD [Create, Read, Update, Delete]), usando [bcit-ci/CodeIgniter](https://github.com/bcit-ci/CodeIgniter).

## ¿Donde Buscar?

En la carpeta [application](application/) esta la estructura de la aplicación, las carpetas que nos interesan a esta instancia son:
- **[config/](application/config)** Aqui estan las configuraciones globales de nuestra app.
- **[core/](application/core)** Esta carpeta es especial, dentro de ella estan clases con la capacidad de alterar el comportamiento de algunas clases provistas por CI *(en este caso, alteramos el comportamiento de CI_Controller).*
- **[controllers/](application/controllers)** Aqui estan las controladores de nuestra aplicacion.
- **[models/](application/models)** Aqui estan las modelos de nuestra app.
- **[views/](application/views)** Aqui estan cada una de las vistas usadas en la app.
- **[public/](application/public)** Aqui estan los recursos "publicos" *(css, imagenes, js, el 99.99% de los casos contenido no-php)*.


## Instalación

1. Crea la base de datos ([db.sql](db.sql) tiene la estructura)

2. Obten el codigo (descarga el zip, o clónalo con `git clone`)
3. luego abre [config/database.php](application/config/database.php)
para editar las credenciales de la base de datos que usaremos:
```php
// linea ~77
	'hostname' => 'localhost', // usualmente localhost
	'username' => 'sistemitax', // usualmente en entorno de desarrollo: root
	'password' => '12345', // un poco obvio...
	'database' => 'sistemitax', // el nombre de la base de datos en el dbms
```

## Aclaratoria
Notarás que el directorio `vendor` esta incluido (que no debería), esto es un pequeño capricho mío para que el proyecto sea mas rapido de implementar. Solo descargar el zip y ya esta todo incluido.