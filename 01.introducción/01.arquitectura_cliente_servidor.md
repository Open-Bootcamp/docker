A lo largo de esta lección haremos una breve introducción a PHP, tocando los siguientes temas:

1. [Arquitectura Cliente Servidor]()
2. [Introducción a PHP]()
  1. [Características de PHP]()
  2. [¿Qué puede hacer?]()
  3. [¿Qué se necesita?]()
  4. [Antes de empezar: Arquitectura]()
  5. [Xampp]()
  6. [phpMyAdmin]()
  7. [MySQL y MariaDB]()

## Arquitectura Cliente Servidor

Los desarrollos web complejos necesitan tener un soporte oculto al usuario que les permita realizar tareas más avanzadas o simplemente almacenar los diferentes datos que se vayan acumulando durante el proceso.

La arquitectura **cliente-servidor** implementa la relación existente entre el **cliente** y el proveedor de servicios o **servidor**.

El cliente sería el encargado de crear la petición, darle forma y asignarle propiedades específicas para posteriormente enviarlo al servidor, el cual, recibe este mensaje, lo procesa y genera una respuesta adecuada al envío y al receptor.

Este modelo se puede implementar en una sola máquina, de forma local, pero siempre es más ventajosa si se utiliza a través de una red de computadoras.

Todas las gestiones a realizar se deben centralizar en el servidor, dejando la parte del cliente simplemente para mostrar los datos obtenidos de esta petición y para formar la interfaz con la que va a interactuar el usuario.

La separación entre cliente y servidor se realiza de forma lógica, pudiendo el servidor estar alojado en diferentes máquinas, incluso puede que esté conformado por varios programas.

Los servidores, dependiendo del tipo que sean (web, correo, archivo...), tendrán funciones diferentes de cara al cliente, pero siempre manteniendo una misma estructura.

Para un buen desarrollo de nuestros programas, debemos intentar no mezclar las tareas de clientes y servidores, cada uno debe utilizarse siguiendo sus propósitos.

### El cliente

Se encarga de iniciar las peticiones, por lo que se le asigna un papel activo en la comunicación.

Se queda a la espera de las respuestas del servidor y es el encargado de recibirlas y dales forma.

Puede estar conectado a varios servidores a la vez.

Es el encargado de soportar la interfaz que, directamente muestra al  usuario final, pudiendo realizar diferentes tipos de interactuaciones.

### El servidor

Como norma general, se mantiene a la espera de las peticiones lanzadas por parte del cliente.

Tras recibir una de esas peticiones, la procesan y, dependiendo del contenido devuelven una respuesta adecuada al cliente.

Aunque el número de peticiones puede estar limitado, suelen recibir las peticiones de grandes números de clientes.

Para completar una correcta arquitectura cliente-servidor, desde la parte del servidor no se debería interactuar de ninguna forma con el usuario final, eso es tarea del cliente.

### Un ejemplo

Una página web creada a través de HTML y CSS, en la que podemos encontrar un formulario, conformaría la parte del **cliente**.

El usuario visualizaría esta página en cualquier navegador y podría interactuar con ella.

Cuando este usuario rellena el formulario, al pulsar el botón, estos datos son enviados al servidor.

El **servidor** recibe los datos del formulario y los almacena en una base de datos que él mismo aloja. En este momento, y si todo ha ido como se espera, envía una respuesta afirmativa al cliente.

El cliente recibe la respuesta del servidor y le muestra al usuario un mensaje confirmando que todo ha ido según lo esperado.

En nuestro caso, la interactuación con el servidor la vamos a realizar a través de **PHP**, el cual pasaremos a analizar a continuación.

La respuesta, la mostraremos en el cliente a través de HTML y utilizaremos CSS para mejorar el aspecto del contenido.