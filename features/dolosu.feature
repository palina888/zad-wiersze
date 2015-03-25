Feature: Web pages

  Scenario: Do Losu
    Given I am on homepage
    When I follow "Do Losu"
    Then I should see "Edypowski losie!"
