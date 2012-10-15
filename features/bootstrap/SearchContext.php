<?php

use Behat\MinkExtension\Context\RawMinkContext;

class SearchContext extends RawMinkContext
{
 	/**
     * @When /^he searches for "([^"]*)"$/
     */
    public function heSearchesFor($query)
    {
        $this->getSession()->getPage()->fillField('search', $query);
        $this->getSession()->getPage()->pressButton('searchButton');
    }
    
    /**
     * @Then /^there should be no results$/
     */
    public function thereShouldBeNoResults()
    {
        $this->assertSession()->elementTextContains('css', '.mw-search-nonefound', 'There were no results matching the query.');
    }

    /**
     * @Given /^there should be a Did-you-mean suggestion for "([^"]*)"$/
     */
    public function thereShouldBeADidYouMeanSuggestionFor($word)
    {
        $this->assertSession()->elementTextContains('css', '.searchdidyoumean a em', $word);
    }
    
 	/**
     * @Then /^he should find "([^"]*)"$/
     */
    public function heShouldFind($result)
    {
        $this->assertSession()->elementTextContains('css', '.mw-search-results', $result);
    }
    
    /**
     * @Then /^he should find "([^"]*)" on position "([^"]*)"$/
     */
    public function heShouldFindOnPosition($result, $position)
    {
        $page = $this->getSession()->getPage();
        $cssSelector = sprintf('.mw-search-results>li:nth-of-type(%s) .mw-search-result-heading', $position);
        $this->assertSession()->elementTextContains('css', $cssSelector, $result);
    }
}