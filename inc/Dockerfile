FROM wordpress:php8.3-apache

# Copie le thème GitHub dans l’image WordPress
COPY . /usr/src/wordpress/wp-content/themes/centun-demo

# Droits du thème
RUN chown -R www-data:www-data \
    /usr/src/wordpress/wp-content/themes/centun-demo

EXPOSE 80