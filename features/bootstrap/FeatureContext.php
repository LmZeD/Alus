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
use Illuminate\Support\Facades\Config;
use PHPUnit\Framework\Assert;
use Behat\MinkExtension\Context\RawMinkContext;
use Illuminate\Support\Facades\URL;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am in root page
     */
    public function iAmInRootPage()
    {
        $this->visitPath("/");
    }

    /**
     * @When I provide coordinates: :arg1 :arg2
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     */
    public function iProvideCoordinates($arg1, $arg2)
    {
        $this->getSession()->getPage()->fillField('longitude', $arg1);
        $this->getSession()->getPage()->fillField('latitude', $arg2);
        $this->getSession()->getPage()->find('css', '.btn')->click();
    }

    /**
     * @Then I get data of visited breweries
     */
    public function iGetDataOfVisitedBreweries()
    {
        Assert::assertSame(
            'Results',
            $this->getSession()->getPage()->find('css', '.heading')->getText()
        );
    }

    /**
     * @Then I get message that no breweries are nearby
     */
    public function iGetMessageThatNoBreweriesAreNearby()
    {
        Assert::assertSame(
            'No breweries are close enough...',
            $this->getSession()->getPage()->find('css', '.alert-danger')->getText()
        );
    }

    /**
     * @Then I get redirected to root page
     */
    public function iGetRedirectedToRootPage()
    {
        $baseUrl = \config('app.url');
        //workaround 'url/' isn't equal to 'url', but when you add / to second url, first one loses /
        if ($baseUrl != $this->getSession()->getCurrentUrl()) {
            $baseUrl = $baseUrl . '/';
        }
        Assert::assertEquals(
            $baseUrl,
            $this->getSession()->getCurrentUrl()
        );
    }

    /**
     * @Then I get redirected to output page with argument values: :arg1 :arg2
     */
    public function iGetRedirectedToOutputPageWithArgumentValues($arg1, $arg2)
    {
        $baseUrl = \config('app.url') . '/';
        $actualValue = $baseUrl . 'results?longitude=' . $arg1 . '&latitude=' . $arg2;
        Assert::assertSame(
            $actualValue,
            $this->getSession()->getCurrentUrl()
        );
    }
}
