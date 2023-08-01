<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sobre el proyecto

Se ha realizado un API con laravel para el consumo, en primer instacia de un usuario el cual cuenta con un tipo de documento, para poder usar este programa es necessario contar con los siguientes programas:

- [Xampp](https://www.apachefriends.org/es/index.html).
- [Composer](https://getcomposer.org/download/).
- Algun editor de codigo como VSCode.


## Proceso de instalación

- Descargar el codigo fuente del repositorio.
- Utiliza algun editor de texto y abrir el proyecto allí.
- Abrir un terminal de comando (con la ruta raiz del proyecto) y ejecuta → composer install.
- Posteriormente, bien puedes copiar el .envexample archivo y renombrarlo a .env ó ejecuta → cp .envexample .env
- Luego, ejecuta Xampp y abre el localhost (http://localhost/dashboard/) en su apartado phpmyadmin
- Una vez alli, dirigete al panel lateral y selecciona nueva. En crear base de datos escribes monkey_test
  
  ![image](https://github.com/lost-l/monkey/assets/97917337/d6c9e10b-6f96-4469-b9c1-b66c1fe11018)

- Nuevamente en la consola de comandos, ejecutas el comando → php artisan key:generate
- Para poblar la base de datos es necesario que ejecutes el siguiente comando → php artisan migrate:fresh --seed
- Para finalizar, ejecuta el comando → php artisan serve

## Documentación Postman
[Documentacion](https://documenter.getpostman.com/view/20075822/2s9XxvTEr5)

### Nota
Para acceder a la base de datos no es necesario utilizar ninguna credencial. En caso de ser requeridos estan pueden ser agregadas en el archivo .env en los apartados respectivos.
