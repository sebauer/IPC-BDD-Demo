Feature: Did-you-mean for Wikipedia Search

Scenario: Did-you-mean for Wikipedia Search without results
  Given A user is on the English Wikipedia
  When he searches for "wurstschnecke"
  Then there should be no results
  And there should be a Did-you-mean suggestion for "fürsteneck"
