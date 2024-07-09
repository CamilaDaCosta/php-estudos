# Configurar virtual-host name
Entrei no container
```
docker exec -it poo-web bash
```
Instalei o nano no container para poder alterar o arquivo de virtual hosts
```
apt-get update
apt-get install nano -y
nano --version
```

Arquivo a ser editado
```
nano /etc/apache2/sites-available/000-default.conf
```

Adicionei as seguintes linhas
```
    ServerName poo

    ServerAdmin webmaster@poo
    DocumentRoot /var/www/html

    <Directory /var/www/html>
        AllowOverride All
        Require all granted
    </Directory>
```