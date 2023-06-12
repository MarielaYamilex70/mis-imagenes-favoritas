<h1 align="center"> Mis imágenes Favoritas</h1> 

Este repositorio almacena un proyecto full-stack de gestión de imágenes.


## Tecnologías🛠️  

- Laravel
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
