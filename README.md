# 4M Eventos
Aplicação Web feita com PHP + Laravel com a finalidade de aprender mais sobre esse poderoso framework do ecossistema PHP. 

## Como rodar em sua máquina local? 🤔
### Requisitos 🚩
Primeiramente é necessário possuir os requisitos listados abaixo:
- PHP 8.0 ou superior
- Composer (preferência a versão 2.5.1)
- Laravel 9.5.1
- npm 8.19.3
- MySQL ou MariaDB

### Passo a passo 🚶
**1. Primeiramente, é necessário realizar o git clone do repositório e entrar na pasta do projeto:**

```
git clone https://github.com/goltaraya/4meventos-app.git
cd 4meventos-app
```

**2. Depois disso, é necessário instalar e atualizar as dependências do projeto e gerar a key:**
```
composer install
composer update
php artisan key:generate
```

**3. Feito isso, é hora de criar um arquivo com as variáveis de ambiente (o famoso .env). Como o laravel já disponibiliza uma .env.example, nós iremos apenas copiar e renomear este arquivo:**
```
cp .env.example .env
```

**4. Mudaremos agora as seguintes variáveis correspondentes ao Banco de Dados:**
<br>Antes:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Depois: 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=4meventos
DB_USERNAME=[usuário_admin_do_seu_SQL]
DB_PASSWORD=[senha_do_admin_do_seu_SQL]
```

**5. Com as dependências corretamente instaladas e o arquivo de variáveis configuradas, é hora de "buildar" o Jetstream + Livewire para realizar a autenticação do projeto com npm:**
```
npm install
npm run build
php artisan migrate
```
**6. Com tudo corretamente instalado, é hora de popularmos o Banco de Dados com alguns usuários e livros. Para isso, utilizei o Seeder do Laravel.**
```
php artisan db:seed
```

**7. Realizado todo o passo a passo, agora é a tão esperada hora de rodar a aplicação! 😄**
```
php artisan serve
```

### Usuários
Os usuários possuem a atribuição de realizar o cadastro de eventos e também de realizar a inscrição em eventos que deseja. <br>

Abaixo se encontram as credenciais de cada usuário criado no Seeder.

```
Usuário John
login: john@mail
senha: 1234
```
```
Usuário Maria
login: maria@mail
senha: 1234
```
```
Usuário Alex
login: alex@mail
senha: 1234
```
```
Usuário Lina
login: lina@mail
senha: 1234
```

### Obrigado pela atenção! Qualquer dúvida/erro/bug entre em contato através do email *goltarayago@gmail.com*
