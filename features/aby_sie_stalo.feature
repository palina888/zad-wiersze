Feature: Web pages

  Scenario: Aby sie stalo
    Given I am on homepage
    When I fallow "Aby sie stalo"
    Then I should see "Gwiazdy by ciemniej było"
