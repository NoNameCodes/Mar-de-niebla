# Web de recursos Gijón Oeste

_Proyecto pedagógico propuesto por la organización [Mar de Niebla](https://mardeniebla.es) a [Factoría F5](https://factoriaf5.org/) y asignado al equipo [NoNameCoders](#autores-)._

_La propuesta de proyecto es la siguiente: desarrollar una web en la que las organizaciones socias de Mar de Niebla, puedan registrarse\*, loguearse, añadir, eliminar recursos y reservar recursos disponibles; las cuales podrán decidir con qué otras organizaciones quieren compartir dicho recurso._

_Estos recursos, una vez reservados, no podrán ser reservados por otra organización en la misma fecha._

###### _\* El registro de una nueva organización deberá ser aceptado por un administrador de la web. De esta manera se evitan registros ajenos a las organizaciones._

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **[Despliegue](#despliegue-📦)** para conocer como desplegar el proyecto.

### Pre-requisitos 📋

_Que cosas necesitas para instalar el proyecto y como instalarlas_

```
Clonar el proyecto: https://github.com/NoNameCodes/Mar-de-niebla.git
```

### Instalación 🔧

_Una vez clonado el repositorio instalaremos las dependencias de desarrollo y las ejecutaremos._

_Para instalarlas ejecutaremos los siguientes comandos:_

```
composer install
npm install && run dev
```

_Después necesitarás configurar el archivo .env de la siguiente manera:_

```
APP_NAME=Laravel -> Nombre de la web.
APP_ENV=local -> Tipo de entorno (Local o production).
APP_KEY= -> Key de la app, para obtener dicha key ejecutamos el comando php artisan key:generate en terminal.
APP_DEBUG=true
APP_URL=http://localhost -> Aquí es donde se indica el dominio de la web.


DB_CONNECTION=mysql -> Tipo de base de datos.
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel -> Nombre de la base de datos dedicada a la web
DB_USERNAME=root -> Credenciales para acceder al cliente de base de datos.
DB_PASSWORD=

```

_Para configurar el sistema de Mail deberemos configurar esta sección del .env con los datos adecuados según el servicio de mailing que usemos:_

```
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

```

_Y para ejecutar la web en el servidor de desarrollo local:_

```
npm run watch
php artisan serve
```

_Una vez hecho los pasos anteriores podremos ver la web en local en un ambiente de desarrollo._

## Ejecutando las pruebas ⚙️

_Para ejecutar los tests utiliza:_

```
php artisan dusk
php artisan test
```

## Despliegue 📦

_Para hacer el deploy de la web recomendamos seguir paso a paso la [documentacion de Laravel](https://laravel.com/docs/9.x/deployment#main-content)._

## Construido con 🛠️

<<<<<<< HEAD

-   [Laravel](https://laravel.com/) - El framework usado
-   [Tailwindcss](https://tailwindcss.com/) - Manejador de estilos
-   # [Jetstream](https://jetstream.laravel.com/2.x/introduction.html) - Usado para generar el sistema de Login y Registro
-   [Laravel](https://laravel.com/) - El framework usado para el desarrollo del proyecto.
-   [Tailwindcss](https://tailwindcss.com/) - Manejador de estilos.
-   [Jetstream](https://jetstream.laravel.com/2.x/introduction.html) - Usado para generar el sistema de Login y Registro.
    > > > > > > > develop

## Autores ✒️

**[Alba Azcano](https://github.com/Albazcano)** <br>
**[Sasha Bidardel](https://github.com/SashaBidardel)** <br>
**[Diego Cortina](https://github.com/Cortina17)** <br>
**[Caio Da Silva](https://github.com/caiodstx)** <br>
**[Daniel Gutiérrez](https://github.com/DanielgDiaz)** <br>
**[Irina Petrova](https://github.com/irina-p-d)** <br>

<<<<<<< HEAD
También puedes mirar la lista de todos los [contribuyentes](https://github.com/NoNameCodes/Mar-de-niebla/graphs/contributors) quienes han participado en este proyecto.

## Expresiones de gratitud 🎁

-   Comenta a otros sobre este proyecto 📢.
-   Invita una cerveza 🍺 a alguien del equipo.
-   Da las gracias públicamente 🤓.
-   # Pedirle a cualquier miembro del equipo el número de cuenta de PayPal.

## Expresiones de gratitud 🎁

-   Comenta a otros sobre este proyecto 📢.
-   Invita una cerveza 🍺 a alguien (o a todos los miembros) del equipo.
-   Pedirle a cualquier miembro del equipo el número de cuenta de PayPal 💸.
-   Da las gracias públicamente 🤓.
    > > > > > > > develop
