FROM debian:stretch

RUN apt-get update \
    && apt-get install -y --no-install-recommends --no-install-suggests apt-utils \
    && apt-get install -y --no-install-recommends --no-install-suggests nginx \
    && apt-get remove -y --purge apt-utils \
    && apt-get clean \
    && apt-get autoremove -y \
    && rm -fR /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && echo "daemon off;" >> /etc/nginx/nginx.conf

ADD default /etc/nginx/sites-available/default

RUN ln -sf /dev/stdout /var/log/nginx/access.log && ln -sf /dev/stderr /var/log/nginx/error.log

CMD ["nginx"]

