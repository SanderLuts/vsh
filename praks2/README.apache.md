# praks 2

> sudo apt install apache2

> mv /var/www/html/index.html /var/www/html/index.html.old

> nano /var/www/html/index.html

  index.html -> /var/www/html/index.html

> mkdir /home/it/public_html

> ln -s /home/it/public_html

> a2enmod userdir

> service apache2 restart

  index.php -> /home/it/public_html/index.php

# Praks3

### Installeerin PHP 5 & 7

> sudo apt install php5 libapache2-mod-php5 -y

ja

>sudo nano /etc/apt/sources.list

lisasin

>deb http://packages.dotdeb.org jessie all
>
>deb-src http://packages.dotdeb.org jessie all
>
>sudo apt install php7.0 php7.0-common libapache2-mod-php7.0 -y

### Installeerin Mysql-5.6

>wget https://dev.mysql.com/get/mysql-apt-config_0.8.9-1_all.deb
>
>dpkg -i mysql-apt-config_0.8.9-1_all.deb

Valisin Mysql-5.6

>sudo apt update
>
>sudo apt install mysql-community-server -y

Mysql Root Parool: qwerty

>a2dismod php5
>
>service apache2 restart
>
>a2enmod php7.0
>
>service apache2 restart

### phpmyadmin

>sudo apt install mcrypt -y
>
>sudo service apache2 restart
>
>sudo apt install phpmyadmin

# Praks 4

## HTTPS paigaldamine

### kasutatud käsud

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

# praks5

## wordpressi installimine

>cd /var/www/html/
>
>wget http://wordpress.org/latest.zip
>
>sudo aptitude install unzip
>
>unzip -q latest.zip
>
>chown -R www-data:www-data /var/www/html/wordpress
>
>chmod -R 755 /var/www/html/wordpress
>
>mkdir -p /var/www/html/wordpress/wp-content/uploads
>
>chown -R www-data:www-data /var/www/html/wordpress/wp-content/uploads

## andmebaasi loomine wordpressi jaoks

>mysql -u root -p
>
>CREATE DATABASE wordpress;
>
>CREATE USER wp_user@localhost IDENTIFIED BY 'qwerty';
>
>GRANT ALL PRIVILEGES ON wordpress.* TO wp_user@localhost;
>
>FLUSH PRIVILEGES;
>
>exit;

## wordpressi paigaldamine

läksin 172.23.13.44/wordpress

valisin English(United States)

database name : "wordpress"

username : "wp_user"

password : "qwerty"

database host : "localhost"

Table prefix : "wp_"

### Run installation

Site title : "vsh-wordpress"

Username : "sanderluts"

password : "qwerty123"

email : "sander.luts@khk.ee"

### mysql Friendly URL

Logisin wordpressi sisse

Valisin Settings -> Permalinks

Valisin "Post Name"

>Save Changes
