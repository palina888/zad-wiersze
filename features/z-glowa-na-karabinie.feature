Feature: Web pages

  Scenario: Z głową na karabinie...
    Given I am on homepage
    When I follow "Z głową na karabinie..."
    Then I should see "Nocą słyszę, jak coraz bliżej"
