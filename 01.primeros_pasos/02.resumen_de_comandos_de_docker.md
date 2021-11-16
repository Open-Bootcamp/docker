> 📝 **NOTA**: _Para acceder al `Document Root de Docker` necesitamos estar logueado como administrador `sudo su`, para posteriormente mediante el comando `docker info | grep -i root` visualizar la carpeta dónde se aloja toda la información de docker `Docker Root Dir: /var/lib/docker`._

## Imágenes

* Listar imágenes, `docker images`
* Listar imágenes con filtro `docker images | grep <filter>`
* Listar imágenes con filtro `docker images -f <tilter>=true`
* Listar imágenes huerfanas, `docker images -f dangling=true`
* Construir imagen, `docker build -t <image-name>:<image-tag> -f <new-dockerfile-name> <location>`

> 📝 **NOTA**: _La memoria caché para las instrucciones RUN no se invalida automáticamente durante la siguiente compilación. La memoria caché para una instrucción como:_

`docker build --no-cache -t <image-name>:<image-tag>`

* Eliminar imagen, `docker rmi <image-name>:<image-tag>` o `docker rmi <image-id>`
* Eliminar todas las imágenes huerfanas `docker images -f dangling=true -q | xargs docker rmi`
* Eliminar todas las imagenes `docker rmi -f $(docker images ps -aq)`

## Contenedores

* Listar contenedores en ejecución, `docker ps`
* Listar contenedores recientes, `docker ps -a`
* Para crear un contenedor:
  * `docker run -d <image-name>:<image-tag>`
  * `docker run -d --name <container-name> -p <por-machine>:<port-container> <image-name>:<image-tag>`
  * `docker run -d --name <container-name> -p <por-machine>:<port-container> -e "<variable-environment-name>=<variable-environment-value>" <image-name>:<image-tag>`
  * `docker run -d --name <container-name> -p <por-machine>:<port-container> -v  <folder-volume-machine>:<folder-volume-container> <image-name>:<image-tag>`
    * `docker run -d --network <network-name> --name <container-name> -p <por-machine>:<port-container> -v  <folder-volume-machine>:<folder-volume-container> <image-name>:<image-tag>`
* Renombrar contenedor, `docker rename <filename-old> <dilename-new>`
* Parar contenedor, `docker stop <container-id>` o `docker stop <container-name>`
* Iniciar Contenedor, `docker start <container-id>` o `docker start <container-name>`
* Reiniciar Contenedor, `docker restart <container-id>` o `docker restart <container-name>`
* Borrar todos los contenedores, `docker rm -fv $(docker ps -aq)`
* Eliminar contenedor, `docker rm -f <container-name>`
* Eliminar contenedor concreto o más, `docker rm -f <container-name> <container-name>`
* Eliminar contenedores que ya hayan sido detenidos
    * `docker ps -a -f status=exited`
    * `docker rm $(docker ps -a -f status=exited -q)`
* Eliminar contenedores según varios filtros
    * `docker ps -a -f status=exited -f status=created`
    * `docker rm $(docker ps -a -f status=exited -f status=created -q)`
* Eliminar contenedores automáticamente al detenerse, `docker run --rm <container-name>`

> 📝 **NOTA**: _Este atributo `--rm`puede ser confuso, ya que aunque la teoría dice que eliminará el contanador si ya existe (con dicho nombre), en realidad lo eliminará si ya está parado, o se podrá usar este atributo para que se elimine una vez cerrado._

* Eliminar volúmenes que no estén siendo usados, `docker volume ls -f dangling=true`
* Eliminar todos los contendores, `docker volume prune`
* Eliminar un contenedor y su volumen, `docker rm -v <container-name>`
* Eliminar Imágenes, Contenedores y Volúmenes, `docker system prune`
* Eliminar Imágenes, Contenedores y Volúmenes (**Parados**), `docker system prune -a`

* Acceder dentro de un contenedor, `docker exec -ti <container-name> bash`
* Pausa un contenedor en ejecución, "congelándolo" en su lugar, `docker pause <container-name>`
* Finalizar la pausa de un contenedor en ejecución, `docker unpause <container-name>`
* Bloquea hasta que se detiene el contenedor en ejecución, `docker wait <container-name>`
* Envía un SIGKILL a un contenedor en ejecución, `docker kill <container-name>`
* Estadísticas de un contenedor, `docker stats <container-name>`
* Conectarse a un contenedor en ejecución, `docker attach <container-name>`
* Limitar recursos contenedor:
  * Limitar memoria, `docker run -d -m <limit-memory> --name <new-container-name> -p <port-machine>:<port-container> <image-name>`, por ejemplo `docker run -d -m "500mb" --name my-mongo-2 -p 8081:27017 mongo`.
  * Limitar cpu, `docker run -d -m <limit-memory> --name <new-container-name> --cpuset-cpus <range-cpu> -p <port-machine>:<port-container> <image-name>`, por ejemplo `docker run -d -m "500mb" --name my-mongo-3 --cpuset-cpus 0-1 -p 8081:27017 mongo`.
* Copiar contenido en el contenedor, `docker cp <file-to-copy> <container-name>:/tmp`
* Docker commit, `docker commit <container-name> <new-image-name>`, por ejemplo `docker commit centos centos-commit`
* Mostrar el estado de la construcción del contenedor `docker logs -f <ontainer-name>`
* Inspeccionar contenedor, `docker inspect <container-name>`
* Ejecutar comando consola en contenedor, `docker exec <container-name> bash -c "<command-container>"`
* Obtienen eventos del contenedor, `docker events <container-name>`
* Muestra el puerto de contenedor que mira al público `docker port <container-name>`
* Muestra los procesos en ejecución en el contenedor, `docker top <container-name>`

## Volúmenes

* Crear volumen `docker volume create <volume-name>`
* Listar volúmenes, `docker volume ls`
* Listar volúmenes anónimos, `docker volume ls -f dangling=true`
* Eliminar todos los volúmenes huérfanos, `docker volume ls -f dangling=true -q | xargs docker volume rm`

## Redes

* Ayuda Network, `docker network --help`
* Inspeccionar Network, `docker inspect network <network-name>`
* Crear una red, `docker network create <network-name>`
* Listar Networks, `docker network ls`
* Listar Networks con filtro, `docker network ls | grep <filter>`
* Agregar contenedores, `docker run -d --name <network-name> <container-name>`
* Conectar contenedor existente a una red distinta, `docker network connect <network-to-connect> <container-name-to-connect>`
* Desconectar red `docker network disconnect <network-name>`
* Eliminar red, `docker network rm <network-name>`