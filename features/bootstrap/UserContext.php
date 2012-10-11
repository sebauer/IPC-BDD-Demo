<?php
use Behat\MinkExtension\Context\RawMinkContext;
use Behat\Behat\Context\BehatContext;

class UserContext extends RawMinkContext
{
	/**
     * @Given /^A user is on the English Wikipedia$/
     */
    public function aUserIsOnTheEnglishWikipedia()
    {
        $this->getSession()->visit('http://en.wikipedia.org/wiki/Main_Page');
    }
}