Feature: Did-you-mean for Wikipedia Search

# Negative Example
Scenario: Did-you-mean for search without results
  Given A user is on the English Wikipedia
  When he searches for "wurstschnecke"
  Then there should be no results
  And there should be a Did-you-mean suggestion for "fürsteneck"