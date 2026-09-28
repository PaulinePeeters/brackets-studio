FROM php:8.3-fpm-alpine

RUN apk add --no-cache nginx supervisor \
    && mkdir -p /run/nginx /var/log/supervisor

COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/php-prod.ini /usr/local/etc/php/conf.d/zz-prod.ini

WORKDIR /var/www/html
COPY Site/ /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

EXPOSE 8080

HEALTHCHECK --interval=30s --timeout=3s --start-period=10s \
    CMD wget -qO- http://127.0.0.1:8080/ > /dev/null || exit 1

CMD ["supervisord", "-c", "/etc/supervisord.conf"]
