**To run you need**
<p> php </p>
<p> database </p>
<p> composer </p>

**Optional**
<p> selenium (for behat tests) </p>

**Setting up**
1. composer install (in cloned directory)
2. configure .env file with your data (like in .env.example)

**Running app**
1. navigate to root folder of an app
2. php artisan serve --port=8000

**Running tests**
1. Unit: \bin\phpunit
2. Behat: \bin\behat NOTE: Behat test configuration is stored in behat.yml (for additional suites, env changes, ect.)
    -- running with selenium (webdriver-manager start):
    --to set up--
        npm install -g webdriver-manager :selenium install pt1
        webdriver-manager update         :selenium install pt2
    2.1 uncomment lines in behat.yml
    2.2 change base url to your url
    
**Setting up database**
1. Run migrations (php artisan migrate)
2. Run database seeder (php artisan db:seed)

**Running code in shell**
1. php artisan runShell -- {longitude} {latitude}
(for testing: php artisan runShell -- 19.43295600 51.742503 )

**UPDATE NOTES**
1. DB seeds wasn't hardcoded. I used .csv to sql converter, made type changes (column variable types), then
   reverse migrated and ran inverse seed using "orangehill/iseed". I mean, why write .csv values reading scripts (and 
   they don't work good enough without extensions, for example: description has commas, ect.). Why write code when you
   can use tools? Of course, I can do it, if I have to, but all I wanted to say, that none of this was hardcoded.
2. snake_case and camelCase. My bad, I was used to use snake_case for database.
3. Re-made queries (added relations to models, added foreign key constraints, updated functions accordingly);
4. Re-made services: added new ones to simplify logic. Also, I've split some methods: some logic was taken out 
   to private functions.
5. Changes to Geocodes DB seeder: some geocodes don't have valid breweryId, so I turned foreign_key_check off.
   Just for that table.
6. Created TripControllerException to handle possible errors thrown.
7. Re-made tests: now they are using mocks, so tests look much cleaner and tests focus only on one class per test
   (as it should be).
   