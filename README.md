<h1 align="center"> Mis imágenes Favoritas</h1> 

Este repositorio almacena un proyecto full-stack de gestión de imágenes. 

## Requisitos Cumplidos:

- Se desarrolló el CRUD de imágenes.
- Se desarrollaron las vista necesarias para la gestión y listado de imáges favoritas por usuarios.
- Se desarrollaron pruebas.

## Requisitos extras:

- Se desarrolló la gestion de imágenes en el local storage.
- Sistema de autentificación.  


## Tecnologías🛠️  

- Laravel
- Bootstrap
- MySQL


## Podrías considerar usar: 

- XAMPP- para ejecutar la aplicación localmente.


## Instalación 💻
Una vez haya clonado este repositorio de Github , debe seguir estos pasos para ejecutar la aplicación:

- Instalar dependecias con: `composer install`  `npm install` 
- Cree una base de datos MySQL (puede usar PHPMyAdmin o la línea de comandos para hacerlo)
- Cree el archivo .env (como referencia, podría usar "env.example" en la raíz del proyecto)
- Migre la base de datos con:  `php artisan migrate`  `php artisan migrate:fresh` (este comando es para actualizar los cambios a migraciones anteriores)  `php artisan migrate:fresh --seed` (el último comando es para para eliminar y recrear todas las tablas de la base de datos y luego poblarlas con datos de prueba utilizando las semillas)
- Cree un enlace al directorio public/storage con:  `php artisan storage:link` (para poder gestionar las imágenes)
- Inicie el servidor con: `npm run dev` `php artisan serve`


## Test 🧾
- Si la tabla de usuarios no tiene 2 registros, migrar la base de datos para poblarla con datos de prueba utilizando las semillas ` php artisan migrate:fresh --seed`.
- Para lanzar los test, utiliza el comando ` php artisan test`.


## Principales razones por las que se elegió Laravel para el desarrollo de la aplicación web:

- Su motor de plantilla, llamado `Blade`, da numerosas posibilidades para hacer unas páginas visualmente muy potentes y eficaces, capaz de utilizar sus propias variables y reutilizarlas.

- Su arquitectura es conocida como `MVC` (Modelo-Vista-Controlador)  da muchas facilidades para relacionar de manera clara y sencilla todas las partes de una aplicación. 

- `Eloquent ORM`, es muy intuitivo para escribir consultas en PHP sobre objetos. 

- `Artisan`, su sistema de comandos otorga al framework gran poder y a los programadores grandes facilidades y posibilidades, para crear controladores, entidades o actualizar la base de datos por ejemplo entre muchísimas cosas.

- `Base de datos y migraciones`. Permite actualizar y migrar la base de datos una vez que el desarrollo ya está comenzado y hay cambios en el código conforme se requiera sin necesidad de borrarla y volverla a crear, gracias a esto el riesgo de perder datos que sean del valor es mínimo. Además, gracias a su Schema Builder hace que no requiera usar el SQL, cuenta con un sistema intuitivo en PHP para hacerlo más fácil.

