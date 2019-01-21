Users list
==========

This is a simple Symfony 3 application for managing users. Has been written as a test task.

Installation
============

1. First you want to install symfony framework. You can do it with following command:
```composer install```
2. Then you need to configure you DB connection. This app uses PostgreSQL. You can specify your settings such as db_name, port, etc in ```app/config/parameters.yml```
3. To keep your DB statement up-to-date you need to use Doctrine migrations. Just type following command and it will run migrations.
```php bin/console doctrine:migrations:migrate```
4. To insert first admin user you can load it via DoctrineFixture or with console command. If you want to load default admin user type ```php bin/console doctrine:fixtures:load``` in your command line. Also you can specify email, username and password properties for admin with ```php bin/console admin:update "username" "email" "password"```
5. That's all. Now you can run built-in php web server with ```php bin/console server:start``` and use it.
