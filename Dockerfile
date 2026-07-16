FROM wordpress:php8.3-apache

# Copier le thème dans la source WordPress de l'image.
# Au premier démarrage de chaque nouveau conteneur,
# l'image officielle copie ce contenu dans /var/www/html.
COPY . /usr/src/wordpress/wp-content/themes/centun-demo

RUN chown -R www-data:www-data \
    /usr/src/wordpress/wp-content/themes/centun-demo

EXPOSE 80