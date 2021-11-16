# Definimos el SO
FROM centos

# Instalamos apache para centos (S.O.)
RUN yum install httpd -y

WORKDIR /var/www/html

# ENV <variable-name> <variable-value>
ENV contenido prueba
# RUN echo incluye el valor de la variable dentro 
# del archivo indicado
RUN echo "$contenido"> prueba.html

# Ejecutamos Apache en primer plano
CMD apachectl -DFOREGROUND