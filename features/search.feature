Feature: Did-you-mean for Wikipedia Search

# Negativtest
Scenario: Did-you-mean for search without results
  Given A user is on the English Wikipedia
  When he searches for "wurstschnecke"
  Then there should be no results
  And there should be a Did-you-mean suggestion for "fürsteneck"

# Positivtest
Scenario: Search results for successful search
  Given A user is on the English Wikipedia
  When he searches for "german brewery"
  Then he should find "Deutsches Brauereimuseum"
  And he should find "Beer in Germany"