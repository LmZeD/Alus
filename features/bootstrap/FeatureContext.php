<?php

use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Driver\Selenium2Driver;
use Behat\MinkExtension\Context\MinkContext;
use App\Http\Controllers\TripController;
use PHPUnit\Framework\Assert;
use Behat\MinkExtension\Context\RawMinkContext;
use Illuminate\Support\Facades\URL;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{
    private $trip;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->trip = new TripController();
    }


    /**
     * @Given I am in root page
     */
    public function iAmInRootPage()
    {
        $this->visitPath("/");
    }

    /**
     * @When I provide coordinates:
     * @param $long
     * @param $lat
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     */
    public function iProvideCoordinates($long, $lat)
    {
        $this->getSession()->getPage()->fillField('longitude', $long);
        $this->getSession()->getPage()->fillField('latitude', $lat);
        $this->getSession()->getPage()->find('css', '.btn')->click();
    }

    /**
     * @Then I get redirected to output page
     */
    public function iGetRedirectedToOutputPage()
    {
        Assert::assertSame(
            $this->getSession()->getCurrentUrl(),
            'http://127.0.0.1:8000/results?longitude=19.43295600&latitude=51.742503'
        );
    }

    /**
     * @Then I get data of visited breweries
     */
    public function iGetDataOfVisitedBreweries()
    {
        Assert::assertSame(
            $this->getSession()->getPage()->find('css', '.heading')->getText(),
            'Results'
        );
    }

    /**
     * @Then I get redirected to root page
     */
    public function iGetRedirectedToRootPage()
    {
        Assert::assertSame(
            $this->getSession()->getCurrentUrl(),
            'http://127.0.0.1:8000/'
        );
    }

    /**
     * @Then I get message that no breweries are nearby
     */
    public function iGetMessageThatNoBreweriesAreNearby()
    {
        Assert::assertSame(
            $this->getSession()->getPage()->find('css', '.alert-danger')->getText(),
            'No breweries are close enough...'
        );
    }
}
