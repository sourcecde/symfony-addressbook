Address Book
==========

This is a  Symfony 3 application for managing addressbook. Has been written as a test task.

Following Technique Used
=========================

- Symfony 3.4
- Doctrine with SQLite
- Twig
- PHP 7.0

Installation
============

1. First you want to install symfony framework. You can do it with following command:
```composer install```
2. To keep your DB statement up-to-date you need to use Doctrine migrations. Just type following command and it will run migrations.
```php bin/console doctrine:migrations:migrate```
3. DB will create automatically after run previuos command and will store in root directory. 
4. That's all. Now you can run built-in php web server with ```php bin/console server:start``` and use it.
