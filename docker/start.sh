#!/bin/sh
php artisan config:cache
php artisan route:cache
php artisan migrate --force
php artisan db:seed --force  ← thêm dòng này
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf