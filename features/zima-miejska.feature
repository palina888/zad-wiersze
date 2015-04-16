Feature: Web pages

  Scenario: Zima Miejska
    Given I am on homepage
    When I follow "Przeszły dżdże wiosny"
    Then I should see "Przeszły dżdże wiosny, zbiegło skwarne lato"