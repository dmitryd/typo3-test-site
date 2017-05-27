FROM debian:jessie

ADD start-container.sh /usr/bin/start-container.sh

RUN apt-get update \
    && apt-get install -y --no-install-recommends --no-install-suggests apt-utils \
    && apt-get install -y --no-install-recommends --no-install-suggests locales curl zip unzip git graphicsmagick patch less ca-certificates \
    && sed -i 's/^# *\(en_US.UTF-8\)/\1/' /etc/locale.gen \
    && locale-gen \
	&& apt-get install -y --no-install-recommends --no-install-suggests php5-curl php5-fpm php5-cli php5-gd php5-mcrypt php5-mysql php5-xdebug \
	&& php -r 'readfile("http://getcomposer.org/installer");' | php -- --install-dir=/usr/bin/ --filename=composer \
	&& mkdir /run/php \
    && apt-get remove -y --purge apt-utils \
	&& apt-get autoremove -y \
	&& apt-get clean \
	&& rm -fR /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && chmod +x /usr/bin/start-container.sh

ENV LANG en_US.UTF-8
ENV LANGUAGE en_US:en
ENV LC_ALL en_US.UTF-8

ADD extra.ini /etc/php5/fpm/conf.d/extra.ini
ADD php-fpm.conf /etc/php5/fpm/php-fpm.conf
ADD www.conf /etc/php5/fpm/pool.d/www.conf

EXPOSE 9000

ENV _D_FPM_COMMAND php5-fpm
ENV _D_EXTRA_INI_FILE /etc/php5/fpm/conf.d/extra.ini

CMD ["start-container.sh"]
