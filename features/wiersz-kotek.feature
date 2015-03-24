Feature: Web pages

  Scenario: Kotek
    Given I am on homepage
    When I follow "Kotek"
  Then I should see "Miauczy kotek: miau!"