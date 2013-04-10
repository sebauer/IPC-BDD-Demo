Feature: Did-you-mean for Wikipedia Search

  Background:
    Given A user is on the English Wikipedia

    	# Negative Example
	  Scenario: Did-you-mean for search without results
	    When he searches for "wurstschnecke"
	    Then there should be no results
	    And there should be a Did-you-mean suggestion for "fürsteneck"
	
	  # Positive Example  
	  Scenario Outline: Search results for successful search
	    When he searches for "german brewery"
	    Then he should find "<result>" on position "<position>"
	    
	    Examples:
	    | position | result                   |
	    |     1    | Deutsches Brauereimuseum |
	    |     8    | Beer in Germany          |
	    |     5    | Paulaner Brewery         |
	    |     6    | Veltins                  |
	    |     2    | Beck's Brewery           |
	    
