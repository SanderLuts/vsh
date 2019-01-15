### praks5

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

# Run installation

Site title : "vsh-wordpress"

Username : "sanderluts"

password : "qwerty123"

email : "sander.luts@khk.ee"

# mysql Friendly URL

Logisin wordpressi sisse

Valisin Settings -> Permalinks

Valisin "Post Name"

>Save Changes
