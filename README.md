<a href="https://github.com/Lucas-MachadoAlves/netflix-laravel"> <h1 align="center">Netflix</h1></a>
<p align="center"><a href="https://github.com/Lucas-MachadoAlves/netflix-laravel/blob/main/LICENSE"><img src="https://poser.pugx.org/cpriego/valet-linux/license.svg" alt="License"></a>
</p>

## About

Netflix é um projeto clone do Laravel [Netflix](https://netflix.com) usando TALL stack ([Tailwindcss](https://tailwindcss.com/), [Alpinejs](https://github.com/alpinejs/alpine/), [Laravel](https://laravel.com/), [Livewire](https://laravel-livewire.com/) ).

> **Note**
> Work in Progress

## Índice

* [Screenshots](#screenshots)
* [Requisitos](#requirements)
* [Instalação](#installation)
* [Contribuindo](#contributing)
* [Licença](#license)

<a name="screenshots"></a>
## Capturas de tela

![home page](https://raw.githubusercontent.com/Lucas-MachadoAlves/netflix-laravel/main/public/img/home.png)

see full page [here](https://raw.githubusercontent.com/Lucas-MachadoAlves/netflix-laravel/main/public/img/home-full-page.png)

![movies header](https://raw.githubusercontent.com/Lucas-MachadoAlves/netflix-laravel/main/public/img/movies-header.png)

![movies](https://raw.githubusercontent.com/Lucas-MachadoAlves/netflix-laravel/main/public/img/movies.png)

see full page [here](https://raw.githubusercontent.com/Lucas-MachadoAlves/netflix-laravel/main/public/img/movies-full-page.png)

![Detail movies](https://raw.githubusercontent.com/Lucas-MachadoAlves/netflix-laravel/main/public/img/details-movie.png)

<a name="requirements"></a>
## Requirements

Package | Version
--- | ---
[Node](https://nodejs.org/en/) | V14.19.1+
[Npm](https://nodejs.org/en/)  | V6.14.16+ 
[Composer](https://getcomposer.org/)  | V2.2.6+
[Php](https://www.php.net/)  | V8.0.17+
[Mysql](https://www.mysql.com/)  |V 8.0.27+

<a name="installation"></a>
## Instalação

> **Aviso**
> Certifique-se de seguir os requisitos primeiro.

Veja como você pode executar o projeto localmente:
1. Clonar este repositório
    ```sh
    git clone https://github.com/Lucas-MachadoAlves/netflix-laravel.git
    ```

1. Vá para o diretório raiz do projeto
    ```sh
    cd netflix-laravel
    ```

1. Copie o arquivo .env.example para o arquivo .env
    ```sh
    cp .env.example .env
    ```
1. Criar banco de dados `netflix` (você pode alterar o nome do banco de dados)

1. Crie uma conta e obtenha uma chave API themoviedb [ here](https://www.themoviedb.org/settings/api). Certifique-se de copiar `API Read Access Token (v4 auth)`.

1. Ir para o arquivo `.env` 
    - definir credenciais do banco de dados (`DB_DATABASE=netflix`, `DB_USERNAME=root`, `DB_PASSWORD=`)
    - colar `TMDB_TOKEN=(your API key)` 
    > Certifique-se de seguir seu nome de usuário e senha do banco de dados

1. Instale dependências PHP
    ```sh
    composer install
    ```

1. Gerar chave
    ```sh
    php artisan key:generate
    ```

1. instalar dependências front-end
    ```sh
    npm install && npm run build
    ```

1. Executar migração
    ```
    php artisan migrate
    ```
    
1. Executar seeders
    ```
    php artisan db:seed
    ```
    este comando criará 2 usuários (admin e usuário normal):
     > email: admin@gmail.com , password: password

     > email: user@gmail.com , password: password 

1. Executar servidor 

    ```sh
    php artisan serve
    ```  

1. Visite `localhost:8000` no seu navegador.     

    > Certifique-se de seguir o ambiente de desenvolvimento local do Laravel.

<a name="contributing"></a>
## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

<a name="license"></a>
## License
Netflix is an open-sourced software licensed under [the MIT license](https://github.com/Lucas-MachadoAlves/netflix-laravel/blob/main/LICENSE)
