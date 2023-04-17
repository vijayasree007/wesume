# Wesume Documentation

Create Your Perfect Resume in Minutes with Wesume - The Ultimate Resume Builderusing Laravel and stylized with bootstrap 5!

# Setup

To setup Mysume in your local machine, simply run this command below where 'app' is the name of the folder of the project.

```shell
git clone https://github.com/vijayasree007/wesume.git
```

Run this command below in your project directory to install all required vendor files .

```shell
cd wesume
composer update
composer install
```

Make changes in the .env file (ie: setup your database and SMTP services)

```shell
cp .env.example .env
```

Generate key in .env file.

```shell
php artisan key:generate
```

To enable Mysume to function properly, it is necessary to configure your email settings in the .env file. During development, you can utilize mailtrap.io and incorporate its SMTP integration codes in the .env file.

Additionally, a database must be created using a Database Management System, and the corresponding configurations for the database should be established in the .env file.

After configuring, run.

```shell
php artisan config:cache
```

Migrate the tables to your database using the command below.

```shell
php artisan migrate --seed
```

Setup link for storage files

```markdown
php artisan storage:link
```

To view the live app in local server, run.

```shell
php artisan serve
```

You may view the app live [here]()

Congratulations! Your very own Mysume application is now complete.