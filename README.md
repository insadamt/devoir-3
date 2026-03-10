## Installation

```bash
git clone https://github.com/insadamt/devoir-3.git
cd devoir-3
composer install
cp .env.example .env
php artisan key:generate
```

Configure your database in `.env`, then:

```bash
php artisan migrate
php artisan db:seed
php artisan serve
```
