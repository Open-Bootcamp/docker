# !/bin/bash
echo "Inciando container...."
# una vez lanzado el contenedor podremos acceder a localhost:80/ para ver el resultado
echo "INICIADO!!" > /var/www/html/ini.html

apachectl -DFOREGROUND