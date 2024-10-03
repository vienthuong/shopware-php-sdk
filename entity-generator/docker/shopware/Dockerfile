FROM mlocati/php-extension-installer:2 AS php_extension_installer_upstream

FROM ghcr.io/it-bens/it-bens/shopware-remote-api-test-runner:6.5.8.12_de-DE_EUR

RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;

RUN service apache2 start && \
    service mariadb start && \
    cd /opt/shopware-remote-api-test-runner && \
    composer require swag/language-pack && \
    php -d memory_limit=-1 bin/console plugin:refresh && \
    php -d memory_limit=-1 bin/console plugin:install SwagLanguagePack && \
    php -d memory_limit=-1 bin/console plugin:activate SwagLanguagePack && \
    php -d memory_limit=-1 bin/console cache:clear && \
    php -d memory_limit=-1 backup_database.php && \
    chown -R www-data:www-data /opt/shopware-remote-api-test-runner

VOLUME /var/www/html
WORKDIR /var/www/html
