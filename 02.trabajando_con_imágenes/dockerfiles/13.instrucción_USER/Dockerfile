FROM centos
RUN yum install httpd -y

# por defecto el usuario que realiza las tareas es `root`
RUN echo "$(whoami)" > /var/www/html/user1.html

# creamos un nuevo usuario `ricardo`
RUN useradd ricardo

# cambiamos de usuario a `ricardo`
USER ricardo

# incluimos el nombre del usuario en user2.html
RUN echo "$(whoami)" > /tmp/user2.html

# cambiamos de usuario a `root`
USER root

# root copia el archivo en la nueva ruta
RUN cp /tmp/user2.html /var/www/html/user2.html

CMD apachectl -DFOREGROUND
