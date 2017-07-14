#!/bin/bash
if [ ! -f "/app/artisan" ]; then
    composer create-project --prefer-dist laravel/laravel /app 5.1.*
fi
tail -f /var/log/lastlog

