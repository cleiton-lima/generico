
# Projeto base para aplicação do SOLID no Laravel

## Foi usado o Laravel Sail para subir os contâiners do projeto

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/cleiton-lima/generico
```

```sh
cd generico/
```

Crie o Arquivo .env
```sh
Dentro do diretório raiz, execute o comando abaixo
cp .env.example .env
```

Caso esteja usando o Ubuntu e afins, verifique o ip local da tua máquina
```sh
ifconfig

---provável saída---
wlp0s20f3: flags=4163<UP,BROADCAST,RUNNING,MULTICAST>  mtu 1500
        inet 192.168.1.99  netmask 255.255.255.0  broadcast 192.168.1.255
```
Instalar as dependências do projeto
```sh
composer install ou
composer update
```

Configurações do docker-compose.yml
```sh
porta que roda o projeto
    ports:
    - 8888:80
    
mysql
    ports:
    - 33060:3306
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Projeto
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=ip_local
DB_PORT=33060
DB_DATABASE=nome_db
DB_USERNAME=root
DB_PASSWORD=root

```


Suba os containers do projeto
```sh
./vendor/bin/sail up -d
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Rode o migrate para criar as tabelas
```sh
php artisan migrate
```
Popule o banco com dados fictícios através de seeders. Rode o seguinte comando:
```sh
php artisan db:seed
```

Acesse a API na ferramenta de preferência, Postman, por exemplo
```
http://localhost:8888
```


