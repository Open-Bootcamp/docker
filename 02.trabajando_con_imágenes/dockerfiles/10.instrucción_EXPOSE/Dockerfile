# Definimos el SO
FROM centos

# Instalamos apache para centos (S.O.)
RUN yum install httpd -y

EXPOSE 80
# expone el puerto 8080 del contenedor

# Ejecutamos Apache en primer plano
CMD apachectl -DFOREGROUND