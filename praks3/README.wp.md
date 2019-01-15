## Praks3

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

