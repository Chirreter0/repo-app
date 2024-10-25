<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Control Documentos Unitropico

Proyecto de control documental universitario con el uso de [Orchid](https://orchid.software/en/) construido en Laravel 11.


## Caracteristicas

En este proyecto buscamos optimizar la generacion de documentos, publicacion y clasificacion en unitropico.

manejo de usuarios, roles y permisos.


## Pasos de instalacion
Se requiere tener instalado:
* PHP
* Composer
* MySql Community

Seguir los siguientes pasos para instalacion:

1. Clonar el repositorio.
    ```bash
    $ git clone https://github.com/Chirreter0/repo-app.git
    ```
2. `$ cd repo-app`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Llenar los datos de configuracion de su **Base de datos** en `.env` y llenar `APP_NAME=Repo-App` y `APP_LOCALE=es`
7. `$ php artisan migrate`
8. `$ php artisan serve`
10. Abrir `https://localhost:8000` con su explorador web.

### Datos Iniciales

Se necesita crear el usuario super admin:
```bash
$ php artisan orchid:admin admin admin@admin.com password
```
esto proporciona las credenciales de acceso
`admin@admin.com` y `password`.
### Direcciones

Vista Administrador
* http://127.0.0.1:8000/admin


## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
