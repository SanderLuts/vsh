### HTTPS paigaldamine

## kasutatud käsud

>mkdir /etc/apache2/ssl
>
>openssl req -x509 -nodes -days 1095 -newkey rsa:2048 -out /etc/apache2/ssl/apache.crt -keyout /etc/apache2/ssl/apache.key
>
>a2enmod ssl
>
>ln -s /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/000-default-ssl.conf
>
>nano /etc/apache2/sites-enabled/000-default-ssl.conf

Lisasin 2 rida

>SSLCertificateFile    /etc/apache2/ssl/apache.crt
>
>SSLCertificateKeyFile /etc/apache2/ssl/apache.key
