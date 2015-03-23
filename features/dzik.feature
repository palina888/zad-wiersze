Feature: Web pages

  Scenario: "dzikus"
    Given I am on homepage
    When I follow "Dzik"
    Then I should see "Dzik jest dziki"