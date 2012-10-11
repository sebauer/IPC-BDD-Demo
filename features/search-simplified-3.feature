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
	    |     0    | Deutsches Brauereimuseum |
	    |     1    | Beer in Germany          |
	    |     2    | Paulaner Brewery         |
	    |     3    | Veltins                  |
	    |     4    | Beck's Brewery           |
	    