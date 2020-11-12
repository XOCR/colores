README.md
=========

### Breve introducción a la aplicación
Se ha creado el proyecto desde cero siguiendo las indicaciones 
enumeradas en la url de Heroku, para poder luego subirlo y probarlo. ([Enlace Heroku][1]).

Elegí la versión del FW [Symfony 4.2][2] porque  es con la versión más reciente del framwork con el que he trabajado (se indica en el composer.json).

Tras la instalación utilizando la misma documentación del Fw de Symfony, ejecuté el comando `composer	require symfony/web-server-bundle –dev` para utilizar el servidor web integrado de PHP ([url][3]) y así no instalar el servidor apache en mi equipo.

La aplicación, tal como indica el enunciado consta de dos html:
  - Uno que dirige a la paleta de colores
  - Uno que muestra la paleta de colores y realiza la funcionalidad especificada

### Listado de las tecnologías o frameworks utilizados
Se ha ejecutado todo en un SO Ubuntu 20.04 TLS, desde la terminal de comandos 
Para el proyecto se está utilizando PHP (v.7.4.3) y Symfony (4.20.1) junto con html y twig y javascript y jquery 
El framework de estilos es [Bootstrap][4]

Nota: Está hecha la versión en javascript al 100% 
Nota2: La versión en jquery la actualizaré en el github en breve


### Cómo instalar las dependencias y correr el proyecto
Desde una terminal (Ubuntu 20.04 TLS) ejecutar los siguientes pasos:

  - `composer create-project symfony/website-skeleton coloresXavierOC`
  - `cd coloresXavierOC/`
  - `git init`
  - `git add .`
  - `git commit -m "coloresXavierOC"`
  - `heroku create`
  - `echo 'web: heroku-php-apache2 public/' > Procfile`
  - `git add Procfile`
  - `git commit -m "Heroku Procfile"`
  - `heroku config:set APP_ENV=prod`
  - `cd coloresXavierOC`
  - `composer require symfony/web-server-bundle –dev`
  - Copiar en coloresXavierOC todo el archivo comprimido sobreescribiendo lo que se haya creado
  - Ejecutar: `$ php bin/console server:start`
  - Acceder desde cualquier navegador a: `http://localhost:8000/`
  - Probar sólamente la opcion Mostrar paleta colores (js)



-------
### URL a producción en caso de haber sido subido
    
    
 [1]: https://devcenter.heroku.com/articles/deploying-symfony4
 [2]: https://symfony.com/releases/4.4
 [3]: https://symfony.com/doc/4.0/setup/built_in_web_server.html
 [4]: https://getbootstrap.com/
 
