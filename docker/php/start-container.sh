#!/usr/bin/env bash

if [ -z "$XDEBUG_HOST" ] ; then
    echo "Warning: XDEBUG_HOST environment variable is not set!" 1>&2
else
    sed -i "s/xdebug\.remote_host \=.*/xdebug\.remote_host \= $XDEBUG_HOST/g" ${_D_EXTRA_INI_FILE}
fi

${_D_FPM_COMMAND}
