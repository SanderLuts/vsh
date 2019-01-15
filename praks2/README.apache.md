  sudo apt install apache2

  mv /var/www/html/index.html /var/www/html/index.html.old

  nano /var/www/html/index.html

  index.html -> /var/www/html/index.html

  mkdir /home/it/public_html

  ln -s /home/it/public_html

  a2enmod userdir

  service apache2 restart

  index.php -> /home/it/public_html/index.php
