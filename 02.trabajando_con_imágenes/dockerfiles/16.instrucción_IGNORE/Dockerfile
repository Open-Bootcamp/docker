FROM centos
RUN yum install httpd -y
# Copia run sh dentro del container en la ubicación /run.sh
COPY run.sh /run.sh
# Ejecuta run.sh
CMD sh /run.sh