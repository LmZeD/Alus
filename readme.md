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
1. TripMakingServiceTest: is error handling tested properly? In theory it works, but maybe
   there is a better way;
2. Helpers.php: isDistance function is used in two services, but it's very small function.
   Is it bad decision to let it stay there? Should I create service just for this?
3. About geocode table seeds: can't found anything to solve my problem, so I came along with two solutions.
   a) (implemented already) Added static function to geocode model which takes array as argument, goes foreach
   if there are violations, just continues foreach loop.
   b) (maybe bad practice but much much faster) I could take current database (with ignored key checks)
   and delete geocodes which don't have brewery, then run reverse seeds and it would be valid data only
   + it would work fast.
4. Custom exception now named 'NoBreweriesFoundException'. Render method just redirects with message. 
   TripMakingController now catches NoBreweriesFoundException error (thrown in service) and executes
   render method.
5. Added BreweryFactory to generate test data. 
6. Fixed shellRun console command; made private functions for data validation and output;
