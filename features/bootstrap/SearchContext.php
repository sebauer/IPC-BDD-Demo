<?php

use Behat\MinkExtension\Context\MinkContext,
    Behat\Behat\Exception\PendingException;

class SearchContext extends MinkContext
{
    public function __construct(array $parameters)
    {
        
    }
    
    /**
     * @Given /^A user is on the English Wikipedia$/
     */
    public function aUserIsOnTheEnglishWikipedia()
    {
        $this->visit('http://en.wikipedia.org/wiki/Main_Page');
    }

    /**
     * @When /^he searches for "([^"]*)"$/
     */
    public function heSearchesFor($query)
    {
        $this->fillField('search', $query);
        $this->pressButton('searchButton');
    }

    /**
     * @Then /^there should be no results$/
     */
    public function thereShouldBeNoResults()
    {
        $this->assertElementContains('.mw-search-nonefound', 'There were no results matching the query.');
    }

    /**
     * @Given /^there should be a Did-you-mean suggestion for "([^"]*)"$/
     */
    public function thereShouldBeADidYouMeanSuggestionFor($word)
    {
        $this->assertElementContainsText('.searchdidyoumean a em', $word);
    }
    
 	/**
     * @Then /^he should find "([^"]*)"$/
     */
    public function heShouldFind($arg1)
    {
        throw new PendingException();
    }
}