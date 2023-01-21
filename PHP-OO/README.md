# Instalar composer no container docker
Nesta etapa do curso foi mostrado como instalar o [composer](https://getcomposer.org/), no caso como estou utilizando os conteinerers docker realizei os seguintes procedimentos:
Entrei no container
```
docker exec -it poo-web bash
```

Baixei o composer
```
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

Executei o script de instalação
```
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

E por fim, verifiquei a instalação com
```
composer --version
```