<?php

c:Windows/System32/drivers/etc/host
#at the bottom of the document

000.000.0.00	domain.name

C:wamp/bin/apache/apache[version]/conf/extra/httpd-vhost.conf
#add this line
#this process tested on wamp server

<VirtualHost *:80>
	ServerName domain.name
	ServerAlias domain.name
	DocumentRoot "c:wamp/www/foldername"
</VirtualHost>
?>