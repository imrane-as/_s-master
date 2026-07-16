FROM wordpress:php8.3-apache

# Installer WP-CLI pour vider le cache après déploiement
RUN apt-get update \
    && apt-get install -y --no-install-recommends curl \
    && curl -fsSL \
       https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
       -o /usr/local/bin/wp \
    && chmod +x /usr/local/bin/wp \
    && rm -rf /var/lib/apt/lists/*

# Le thème est placé dans le répertoire source WordPress.
# L'image officielle le copie ensuite vers /var/www/html au démarrage initial.
COPY . /usr/src/wordpress/wp-content/themes/centun-demo

RUN chown -R www-data:www-data \
    /usr/src/wordpress/wp-content/themes/centun-demo

EXPOSE 80