# Admin basico feito em Laravel

Este pacote contém o básico para iniciar um sistema em laravel, ja com o backend, login funcionando.
O framework é baseado no Laravel 5.x  [laravel.com](http://laravel.com)

Segiuntes pacotes já foram adicionados para facilitar o desenvolvimento:

- Spatie Activitylog: [Git](https://github.com/spatie/laravel-activitylog) | [Docs](https://docs.spatie.be/laravel-activitylog/v3/introduction)
- Spatie Medialibrary: [Git](https://github.com/spatie/laravel-medialibrary) | [Docs](https://docs.spatie.be/laravel-medialibrary/v7/introduction)
- Spatie Laravel Menu: [Git](https://github.com/spatie/menu) | [Docs](https://docs.spatie.be/menu/v2/introduction)
- Spatie Permissions]: [Git](https://github.com/spatie/laravel-permission)
- Laravel Datatables: [Git](https://github.com/yajra/laravel-datatables) | [Docs](http://yajrabox.com/docs/laravel-datatables/master)

O tema do admin é baseado no Pixeladmin, qual se encontra no [repositório da Catskillet](http://git.catskillet.com/Catskillet/pixel-admin-catskillet). 

# Ambiente de Desenvolvimento

O ambiente de desenvolvimento é provisionado numa VM (Virtual Machine),
utilizando Vagrant + VirtualBox.

## 1) Pré Requisitos

Os seguintes softwares são necessários para rodar o ambiente de desenvolvimento
local:

 1. Virtual Box - [https://www.virtualbox.org/](https://www.virtualbox.org)
  - **Dica**: Usuários OSX podem instalar via [brew cask](https://github.com/caskroom/homebrew-cask):
    - `brew cask install virtualbox`

 2. Vagrant - [http://www.vagrantup.com/](http://www.vagrantup.com/)
  - **Dica**: Usuários OSX podem instalar via [brew](http://brew.sh/):
    - `brew install vagrant`

## 2) Fluxo - VM

Abaixo seguem alguns comandos básicos para trabalhar com a VM e com o Vagrant,
lembrando que todos devem ser rodados diretamente na pasta do projeto:

 1. **Iniciando a VM**: `vagrant up`
  1. Com a VM iniciada, acesse [http://localhost:8000/](http://localhost:8000/)
  para ver o projeto.
  1. A porta local 8000 é roteada para a porta 80 da VM
  1. Note que a primeira que esse comando for executado será necessário muito
  mais tempo do que o normal pois irá provisionar a VM do zero. Nas demais
  vezes será bem mais rápido.

 1. Para acessar o Banco de Dados MySQL, instale uma IDE de sua preferencia, aconselho o SequelPro para o MAC.
    Os dados de conexão com o bando de DEV são:
   - **HOST**: localhost
   - **PORT**: 33060
   - **DB**: Nome está definido no arquivo `Homestead.yaml`
   - **USER**: homestead
   - **PASS**: secret

 1. **Logando na VM via SSH**: `vagrant ssh`
  1. Ao se logar, você estará utilizando o usuário **vagrant**. Caso precise rodar
  comandos com **sudo**, não será exigido senha para isso -- também é possível virar **sudo**
  diretamente com o comando: `sudo su -`

 1. **Desligando a VM**: `vagrant halt`

## 3) Configurando Projeto - LARAVEL

Abaixo seguem os comandos para serem executados em ordem a primeira vez em que se baixa o projeto,
antes de realizar qualquer comando, você deve logar no vagrant atraves do comando `vagrant ssh`, navegar/entrar até raiz do seu projeto `cd workspace/PASTA-DO-PROJETO/www`:

 1. **Comandos**:
    - **Atualizar o composer**: `composer self-update`
    - **Instalação dos pacotes PHP**: `composer install`
    - **Rodando Migrates**: `php artisan migrate`
    - **Instalação pacotes JS**: `npm install`
    - **Compilar JS e CSS**: `npm run dev`, `npm run prod`, `npm run watch` ou `npm run watch-poll`
