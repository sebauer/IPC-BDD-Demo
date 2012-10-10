<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;

class SearchContext extends BehatContext
{
    public function __construct(array $parameters)
    {
        
    }
    
    /**
     * @Given /^A user is on the English Wikipedia$/
     */
    public function aUserIsOnTheEnglishWikipedia()
    {
        throw new PendingException();
    }

    /**
     * @When /^he searches for "([^"]*)"$/
     */
    public function heSearchesFor($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^there should be no results$/
     */
    public function thereShouldBeNoResults()
    {
        throw new PendingException();
    }

    /**
     * @Given /^there should be a Did-you-mean suggestion for "([^"]*)"$/
     */
    public function thereShouldBeADidYouMeanSuggestionFor($arg1)
    {
        throw new PendingException();
    }
}