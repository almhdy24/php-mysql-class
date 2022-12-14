#  php-mysql-class
This lightweight database class is written with PHP and uses the MySQLi extension, it uses prepared statements to properly secure your queries, no need to worry about SQL injection attacks.

#PHP MySQL Class
This is a simple to use MySQL class that easily bolts on to any existing PHP application, streamlining your MySQL interactions.

# Setup
Firstly, define four constants for the host, database name, username and password:

`$dbhost = 'localhost';

$dbuser = 'root';

$dbpass = '123456';

$dbname = 'example';`


Then, simply require autoload file into your project like so:

`require_once('vendor/autoload.php')`;

Then invoke the class:

`$db = new Database();`

# install
`composer require almhdy/php-mysql-class`

**For  complete documentation visit :**

[https://www.almhdy.sd/posts/Super-fast-PHP-MySQL-Database-Class](https://www.almhdy.sd/posts/Super-fast-PHP-MySQL-Database-Class)
