## ¿Por dónde empiezo?

😈 No es una tecnologia de virtualización.

👼 [Docker](https://www.docker.com/) es un sistema de contenedores

## 🤔 ¿Que ventajas tiene?

* **Flexible** 💪
* **Ligero** 🏋️
* **Intercambiables** ✨
* **Portátil** 💻
* **Escalable** 🏛️
* **Apilable** 🏗️

## 🤔 ¿Qué diferencia tiene con una máquina virtual?

> 📝 _Digamos que el **contenedor** de [Docker](https://www.docker.com/) toma los recursos más básicos, que no cambian de un ordenador a otro del sistema operativo de la máquina en la que se ejecuta. Y los aspectos más específicos del sistema que pueden dar más problemas a la hora de llevar el software de un lado a otro, se meten en el interior del **contenedor**._

## 🤔 ¿Cómo funciona Docker?

![https://www.josedomingo.org/pledin/assets/wp-content/uploads/2016/02/docker2.png](https://www.josedomingo.org/pledin/assets/wp-content/uploads/2016/02/docker2.png)

## Docker CLI

### Docker `version`

> ⚙️ **sintaxis**, `docker version`

```bash
$ docker --version
Docker version 20.10.8, build 3967b7d
```

## 🚩 docker info

> ⚙️ **sintaxis**, `docker info [OPTIONS]`

```bash
$ docker --info
unknown flag: --info
See 'docker --help'.

Usage:  docker [OPTIONS] COMMAND

A self-sufficient runtime for containers

Options:
      --config string      Location of client config files (default
                           "C:\\Users\\franc\\.docker")
  -c, --context string     Name of the context to use to connect to the
                           daemon (overrides DOCKER_HOST env var and
                           default context set with "docker context use")
  -D, --debug              Enable debug mode
  -H, --host list          Daemon socket(s) to connect to
  -l, --log-level string   Set the logging level
                           ("debug"|"info"|"warn"|"error"|"fatal")
                           (default "info")
      --tls                Use TLS; implied by --tlsverify
      --tlscacert string   Trust certs signed only by this CA (default
                           "C:\\Users\\franc\\.docker\\ca.pem")
      --tlscert string     Path to TLS certificate file (default
                           "C:\\Users\\franc\\.docker\\cert.pem")
      --tlskey string      Path to TLS key file (default
                           "C:\\Users\\franc\\.docker\\key.pem")
      --tlsverify          Use TLS and verify the remote
  -v, --version            Print version information and quit

Management Commands:
  builder     Manage builds
  buildx*     Build with BuildKit (Docker Inc., v0.6.3)
  compose*    Docker Compose (Docker Inc., v2.0.0)
  config      Manage Docker configs
  container   Manage containers
  context     Manage contexts
  image       Manage images
  manifest    Manage Docker image manifests and manifest lists
  network     Manage networks
  node        Manage Swarm nodes
  plugin      Manage plugins
  scan*       Docker Scan (Docker Inc., v0.8.0)
  secret      Manage Docker secrets
  service     Manage services
  stack       Manage Docker stacks
  swarm       Manage Swarm
  system      Manage Docker
  trust       Manage trust on Docker images
  volume      Manage volumes

Commands:
  attach      Attach local standard input, output, and error streams to a running container
  build       Build an image from a Dockerfile
  commit      Create a new image from a container's changes
  cp          Copy files/folders between a container and the local filesystem
  create      Create a new container
  diff        Inspect changes to files or directories on a container's filesystem
  events      Get real time events from the server
  exec        Run a command in a running container
  export      Export a container's filesystem as a tar archive
  history     Show the history of an image
  images      List images
  import      Import the contents from a tarball to create a filesystem image
  info        Display system-wide information
  inspect     Return low-level information on Docker objects
  kill        Kill one or more running containers
  load        Load an image from a tar archive or STDIN
  login       Log in to a Docker registry
  logout      Log out from a Docker registry
  logs        Fetch the logs of a container
  pause       Pause all processes within one or more containers
  port        List port mappings or a specific mapping for the container
  ps          List containers
  pull        Pull an image or a repository from a registry
  push        Push an image or a repository to a registry
  rename      Rename a container
  restart     Restart one or more containers
  rm          Remove one or more containers
  rmi         Remove one or more images
  run         Run a command in a new container
  save        Save one or more images to a tar archive (streamed to STDOUT by default)
  search      Search the Docker Hub for images
  start       Start one or more stopped containers
  stats       Display a live stream of container(s) resource usage statistics
  stop        Stop one or more running containers
  tag         Create a tag TARGET_IMAGE that refers to SOURCE_IMAGE
  top         Display the running processes of a container
  unpause     Unpause all processes within one or more containers
  update      Update configuration of one or more containers
  version     Show the Docker version information
  wait        Block until one or more containers stop, then print their exit codes

Run 'docker COMMAND --help' for more information on a command.

To get more help with docker, check out our guides at https://docs.docker.com/go/guides/
```

### 🔍 docker search

Este comando, `docker search` realiza una búsqueda en el **registry** asociado de las imágenes con nombre parecido: 

> ⚙️ **sintaxis**, `docker search [OPTIONS] TERM`

```bash
$ docker search busybox
NAME                      DESCRIPTION                                     STARS     OFFICIAL   AUTOMATED
busybox                   Busybox base image.                             2387      [OK]
progrium/busybox                                                          70                   [OK]
radial/busyboxplus        Full-chain, Internet enabled, busybox made f…   43                   [OK]
yauritux/busybox-curl     Busybox with CURL                               16
arm32v7/busybox           Busybox base image.                             10
armhf/busybox             Busybox base image.                             6
odise/busybox-curl                                                        4                    [OK]
odise/busybox-python                                                      4                    [OK]
aarch64/busybox           Busybox base image.                             3
arm32v6/busybox           Busybox base image.                             3
arm64v8/busybox           Busybox base image.                             3
prom/busybox              Prometheus Busybox Docker base images           2                    [OK]
i386/busybox              Busybox base image.                             2
p7ppc64/busybox           Busybox base image for ppc64.                   2
s390x/busybox             Busybox base image.                             2
joeshaw/busybox-nonroot   Busybox container with non-root user nobody     2
lqshow/busybox-curl       Busybox image adds a curl binary to /usr/bin    1                    [OK]
mips64le/busybox          Busybox base image.                             1
spotify/busybox           Spotify fork of https://hub.docker.com/_/bus…   1
vukomir/busybox           busybox and curl                                1
ppc64le/busybox           Busybox base image.                             1
arm32v5/busybox           Busybox base image.                             0
concourse/busyboxplus                                                     0
emccorp/busybox           Busybox                                         0
amd64/busybox             Busybox base image.                             0
```

### 📷 Introducción a Imágenes, `docker images`

Este comando, `docker images` lista las imágenes que tenemos localmente descargadas en nuestro registry.

> ⚙️ **sintaxis**, `docker images [OPTIONS] [REPOSITORY[:TAG]]`

> 🏠 Una **imagen** es un objeto que **contiene un SO**, una **aplicación** y las **dependencias** que esta necesita. Si eres desarrollador puedes pensar en una **imagen** como si fuera una clase.

```bash
$ docker pull hello-world

Using default tag: latest
latest: Pulling from library/hello-world
2db29710123e: Pull complete
Digest: sha256:37a0b92b08d4919615c3ee023f7ddb068d12b8387475d64c622ac30f45c29c51
Status: Downloaded newer image for hello-world:latest
docker.io/library/hello-world:latest
```

### 🏃 Ejecutar tu primer contenedor, `docker run`

Este comando, `docker run` arranca un nuevo contenedor a partir del nombre de una imagen.

> ⚙️ **sintaxis**, `docker run [OPTIONS] IMAGE [COMMAND] [ARG...]`

```bash
$ docker run --publish 8080:80 nginx

Unable to find image 'nginx:latest' locally
# ...
/docker-entrypoint.sh: /docker-entrypoint.d/ is not empty, will attempt to perform configuration
/docker-entrypoint.sh: Looking for shell scripts in /docker-entrypoint.d/
/docker-entrypoint.sh: Launching /docker-entrypoint.d/10-listen-on-ipv6-by-default.sh
10-listen-on-ipv6-by-default.sh: info: Getting the checksum of /etc/nginx/conf.d/default.conf
10-listen-on-ipv6-by-default.sh: info: Enabled listen on IPv6 in /etc/nginx/conf.d/default.conf
/docker-entrypoint.sh: Launching /docker-entrypoint.d/20-envsubst-on-templates.sh
/docker-entrypoint.sh: Launching /docker-entrypoint.d/30-tune-worker-processes.sh
/docker-entrypoint.sh: Configuration complete; ready for start up
2021/11/02 15:42:49 [notice] 1#1: using the "epoll" event method
2021/11/02 15:42:49 [notice] 1#1: nginx/1.21.3
2021/11/02 15:42:49 [notice] 1#1: built by gcc 8.3.0 (Debian 8.3.0-6)
2021/11/02 15:42:49 [notice] 1#1: OS: Linux 5.10.47-linuxkit
2021/11/02 15:42:49 [notice] 1#1: getrlimit(RLIMIT_NOFILE): 1048576:1048576
2021/11/02 15:42:49 [notice] 1#1: start worker processes
2021/11/02 15:42:49 [notice] 1#1: start worker process 32
2021/11/02 15:42:49 [notice] 1#1: start worker process 33
2021/11/02 15:42:49 [notice] 1#1: start worker process 34
2021/11/02 15:42:49 [notice] 1#1: start worker process 35
```

```bash
$ docker run -p 8080:80 nginx

/docker-entrypoint.sh: /docker-entrypoint.d/ is not empty, will attempt to perform configuration
/docker-entrypoint.sh: Looking for shell scripts in /docker-entrypoint.d/
/docker-entrypoint.sh: Launching /docker-entrypoint.d/10-listen-on-ipv6-by-default.sh
# ...
2021/11/04 11:03:42 [notice] 1#1: start worker process 34
2021/11/04 11:03:42 [notice] 1#1: start worker process 35
```

### 👻 Ejecutar el contenedor en **detach**, tag `detach`

Si añadimos el flag `--detach` _ejecutaremos el contenedor en segundo plano_, tal que así `docker run --detach --publish <host-port>:<container-port> <image-name>`.

```bash
$ docker run --detach --publish 8080:80 nginx

335a48275ee9369252c91d3b6cb8390f478b635f01d28080acc00dc43ff6f907
```

### ⚙️ Personalizar el nombre de los contenedores, tag `name`

Podemos añadir un nombre al contenedor, evitando el que coloca de forma aleatoria **docker**, usando la bandera `--name`, tal que así `docker run --name <container-name> --publish <host-port>:<container-port> <image-name>`.

```bash
$ docker run --name my-web --publish 8080:80 -d nginx
41aabf7c56dec58b2abd0f9f7cba305353b3c1dc3f097cc9641f0b264bf2529a
```

Podemos renombrar contenedores usando `docker rename [OLD-NAME] [NEW-NAME]`

### Ejecutar un contenedor y lanzar un `shell` interactivo en él, tag `interactive`

Podemos hacer un contenedor _interactivo para conseguir entrar en el y usar su terminal mediante la bandera `-it`_, tal que así `docker run -it <image-name> <shell>` 

* `--interactive` , `-i`
* `--tty` , `-t`

Para los procesos interactivos (como un shell), debe usar `-i -t` conjuntamente, a menudo se escribe `-it` como verás en ejemplos posteriores. 

```bash
$ docker run -it ubuntu 

Unable to find image 'ubuntu:latest' locally
latest: Pulling from library/ubuntu
7b1a6ab2e44d: Downloading [========>                                          ]  4.713MB/28.57MB
# ...

root@c3dd0e3a3cad:/#
```

### Mantener un contenedor abierto sin misión

Si queremos mantener nuestro contenedor abierto en segundo plano podemos usar el siguiente comando de consola, `--detach` (`-d`):

```bash
$ docker run -dt centos

Unable to find image 'centos:latest' locally
latest: Pulling from library/centos
a1d0c7532777: Downloading [==================>                                ]  31.11MB/83.52MB
# ...
```

## Ejecutar comandos desde mi local dentro del contenedor, `docker exec`

El comando `docker exec`  permite acceder a ejecuciones dentro del contenedor. 

> ⚙️ **sintaxis**, `docker exec [OPTIONS] CONTAINER COMMAND [ARG...]`