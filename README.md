# Welcome to my Vegan Q&A!

*** 

To replicate the app, simply clone, install, migrate and serve!

```
git clone https://github.com/meghan-kradolfer/vegan-qna.git
cd vegan-qna
composer install
```

Create a new database and update details in the .env.example file, rename to .env, then run:
```
php artisan key:generate
php artisan migrate
php artisan serve
```