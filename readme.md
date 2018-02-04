**To run you need**
<p> php </p>
<p> database </p>
<p> composer </p>

**Setting up**
1. composer install (in cloned directory)
2. import database from dump stored in _DB_DUMP
3. configure .env file with your data (like in .env.example)

**Running app**
1. navigate to root folder of an app
2. php artisan serve --port=8000

**Why not**
base64:srQRCVOw7xJbJ5Njoz3uJ3P9QZg4gmJQ1Qm2xMzbcmc=

**Setting up testing environment**
1. setting up selenium: npm install -g webdriver-manager
2. starting selenium: webdriver-manager start
Note tests work without selenium, it just visualises tests

**Running tests**
1. Unit: \bin\phpunit
2. Behat (start up selenium): \bin\behat **NOTE: use older version of firefox**

**Setting up database**
1. Just import alus.sql file from _DB_DUMP folder
    -- Alternative --
1. Run migrations (php artisan migrate)
2. Run database seeder (php artisan db:seed)

**Running code in shell**
1. php artisan runShell {longitude} {latitude}
(for testing: php artisan runShell 19.43295600 51.742503 )