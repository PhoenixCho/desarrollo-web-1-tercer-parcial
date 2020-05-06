# Configuración del vhosts en apache

Habilitar en httpd.conf la línea
```
Include /usr/local/etc/httpd/extra/httpd-vhosts.conf
```

Agregar a httpd-vhosts.conf
```
<VirtualHost *:80>
    ServerAdmin webmaster@mvcfriends.com
    DocumentRoot "/usr/local/var/www/tercer-parcial/mvc/public"
    ServerName mvcfriends.com
    ServerAlias www.mvcfriends.com
    ErrorLog "/usr/local/var/log/httpd/mvcfriends.com-error_log"
    CustomLog "/usr/local/var/log/httpd/mvcfriends.com-access_log" common
</VirtualHost>
```