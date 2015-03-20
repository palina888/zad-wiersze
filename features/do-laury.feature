Feature: Web pages

  Scenario: Do Laury
    Given I am on homepage
    When I follow "Do Laury"
    Then I should see "Ledwiem ciebie zobaczył, jużem się zapłonił,"
