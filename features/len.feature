Feature: Web pages

  Scenario: "Len"
    Given I am on homepage
    When I follow "Leń"
    Then I should see "Na kanapie"