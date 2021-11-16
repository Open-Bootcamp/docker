FROM nginx
RUN useradd ricardo
# /usr/share/nginx/html ubicación de lectura en nginx (https://hub.docker.com/_/nginx/)
COPY fruit /usr/share/nginx/html
ENV archivo docker
WORKDIR /usr/share/nginx/html
RUN echo "$archivo" > /usr/share/nginx/html/env.html
EXPOSE 90
LABEL version=1
USER ricardo
RUN echo "Yo soy $(whoami)" > /tmp/yo.html
USER root
RUN cp /tmp/yo.html /usr/share/nginx/html/docker.html
VOLUME /var/log/mginx
# podemos dejar el cmd en blanco ya que cogerá en CMD de nginx
CMD nginx -g 'daemon off;'