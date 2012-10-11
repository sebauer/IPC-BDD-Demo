Feature: Did-you-mean for Wikipedia Search

  Background:
    Given A user is on the English Wikipedia

    	# Negative Example
	  Scenario: Did-you-mean for search without results
	    When he searches for "wurstschnecke"
	    Then there should be no results
	    And there should be a Did-you-mean suggestion for "fürsteneck"
	
	  # Positive Example  
	  Scenario: Search results for successful search
	    When he searches for "german brewery"
	    Then he should find "Deutsches Brauereimuseum"
	    And he should find "Beer in Germany"