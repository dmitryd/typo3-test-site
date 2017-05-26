#!/usr/bin/env bash

if [ -z "$XDEBUG_HOST" ] ; then
    echo "Warning: XDEBUG_HOST environment variable is not set!" 1>&2
else
    sed -i "s/xdebug\.remote_host \=.*/xdebug\.remote_host \= $XDEBUG_HOST/g" /etc/php/7.0/fpm/conf.d/extra.ini
fi

php-fpm7.0
