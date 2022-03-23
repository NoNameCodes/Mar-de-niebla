# Web recursos Gijón Oeste

<center><img src="https://mardeniebla.es/wp-content/uploads/2019/11/logo_mar-de-niebla-300x156.jpg" width="200">
<img src="https://factoriaf5.org/wp-content/uploads/2021/07/logo-x2.png" width="200"></center>

_Proyecto pedagógico propuesto por la organización [Mar de Niebla](https://mardeniebla.es) a [Factoría F5](https://factoriaf5.org/) y asignado al equipo [NoNameCoders](#autores-✒️)._

_La propuesta de proyecto es la siguiente: desarrollar una web en la que las organizaciones socias de Mar de Niebla, puedan registrarse\*, loguearse, añadir y eliminar recursos; los cuales podrán decidir con qué otras organizaciones pueden compartir dicho recurso. Y reservar dichos recursos._

_Estos recursos una vez reservados no podrán ser reservados por otra organización si las fechas coinciden._

###### _\* El registro de una nueva organización deberá ser aceptado por un administrador de la web. De esta manera se evitan registros ajenos a las organizaciones._

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **[Deployment](#despliegue-📦)** para conocer como desplegar el proyecto.

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

_Y para ejecutar la web en el servidor de desarrollo:_

```
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

-   [Laravel](https://laravel.com/) - El framework usado
-   [Tailwindcss](https://tailwindcss.com/) - Manejador de estilos
-   [Jetstream](https://jetstream.laravel.com/2.x/introduction.html) - Usado para generar el sistema de Login y Registro

## Autores ✒️

**[Alba Azcano](https://github.com/Albazcano)** <br>
**[Sasha Bidardel](https://github.com/SashaBidardel)** <br>
**[Diego Cortina](https://github.com/Cortina17)** <br>
**[Caio Da Silva](https://github.com/caiodstx)** <br>
**[Daniel Gutiérrez](https://github.com/DanielgDiaz)** <br>
**[Irina Petrova](https://github.com/irina-p-d)** <br>
También puedes mirar la lista de todos los [contribuyentes](https://github.com/NoNameCodes/Mar-de-niebla/graphs/contributors) quíenes han participado en este proyecto.

<!-- ## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles -->

## Expresiones de Gratitud 🎁

-   Comenta a otros sobre este proyecto 📢
-   Invita una cerveza 🍺 o un café ☕ a alguien del equipo.
-   Da las gracias públicamente 🤓.
-   etc.
