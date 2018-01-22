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
Note tests work without selenium, it just visualises test

**Running tests**
1. Unit: \bin\phpunit
2. Behat (start up selenium if you want): \bin\behat