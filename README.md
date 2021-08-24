# Laravel Microservice E-mail

### Instalação
Clonar Projeto
```sh
git clone https://github.com/ezequieldhonatan/laravel-microservice-email
```

Acessar o projeto
```sh
cd laravel-microservice-email
```

Criar o Arquivo .env
```sh
cp .env.example .env
```

Atualizar as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Laravel Microservice Email"
APP_URL=http://localhost:8005

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Subir os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec micro_mail bash
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Acessar o projeto
[http://localhost:8005](http://localhost:8005)

