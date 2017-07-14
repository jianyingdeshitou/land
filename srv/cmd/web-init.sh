#!/bin/bash
rm -rf /etc/nginx/sites-enabled/default
ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

rm -rf /etc/nginx/sites-enabled/land
ln -s /etc/nginx/sites-available/land /etc/nginx/sites-enabled/land
chown -R www-data:www-data /var/www/land/bootstrap/cache
chown -R www-data:www-data /var/www/land/storage

