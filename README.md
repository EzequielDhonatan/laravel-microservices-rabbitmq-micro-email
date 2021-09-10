# Laravel Microservices com RabbitMQ - Micro E-mail

Vamos criar um microservice para centralizar a comunicação da nossa aplicação, trabalhando com Message Broker RabbitMQ.

## Requisitos

Este Micro E-mail depende do Microservice 01, portanto, primeiramente subir o [microservice 01](https://github.com/ezequieldhonatan/laravel-microservices-rabbitmq-micro-01)
e também depende do Microservice 02, portanto, também subir o [microservice 02](https://github.com/ezequieldhonatan/laravel-microservices-rabbitmq-micro-02)

### Instalação

Clonar Projeto
```sh
git clone https://github.com/ezequieldhonatan/laravel-microservices-rabbitmq-micro-email
```

Acessar o projeto
```sh
cd laravel-microservices-rabbitmq-micro-email
```

Criar o Arquivo .env
```sh
cp .env.example .env
```

Subir os containers do projeto
```sh
docker-compose up -d
```

Acessar o container
```sh
docker-compose exec laravel_microservices_rabbitmq_micro_email bash
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
