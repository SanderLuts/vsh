#Praks 7

Apache masinas kasutatud kasud:

>wget https://download.dokuwiki.org/src/dokuwiki/dokuwiki-stable.tgz 
>tar xzvf dokuwiki-stable.tgz
>cp -rf dokuwiki-2017-02-19e/* /var/www/html/
>cp dokuwiki-2017-02-19e/.htaccess.dist /var/www/html/
>chown -R www-data:www-data /var/www/html/
##Dokuwiki paigaldamine

Laksin veebibrauseris aadressile http://10.0.2.4/install.php ja installeerisin dokuwiki

>Vt github-is sanderluts/vsh/praks7/dokuwiki_install
##Dokuwikis lehe loomine

Veebibrauseris laksin http://10.0.2.4/doku.php?id=info <-- 'info' tahistab mis lehte dokuwiki hetkel kuvab

Valisin paremalt menuust pliiatsi iikoni ja "Create this page"

>Vt github-is sanderluts/vsh/praks7/info_source & sanderluts/vsh/praks7/dokuwiki_leht
