#!/usr/bin/env bash

set -e

env=${APP_ENV:-production}

export NPM_CONFIG_CACHE=/home/node/.npm

if ([ "$env" == "local" ] || [ "$env" == "testing" ]); then
    if [ ! -z "$DEV_UID" ]; then
        echo "Changing node UID to $DEV_UID"
        echo "The UID should only be changed in development environments."
        usermod -u $DEV_UID node
    fi 
    if [ ! -z "$DEV_GID" ]; then
        echo "Changing node GID to $DEV_GID"
        echo "The GID should only be changed in development environments."
        groupmod -g $DEV_GID node
    fi

fi

sudo --preserve-env -u node "$@"
