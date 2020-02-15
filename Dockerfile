FROM oumarsalamata/apachephpmysql
RUN mkdir /var/www/public
RUN rm -r /var/www/html/index.html
ADD index.html /var/www/html
ADD loginserv.php /var/www/html
ADD inscription.php /var/www/html
