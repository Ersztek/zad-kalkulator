Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by Tomek22811"
    And I fill in "Podaj napis" with "Kot ma Ale"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: kot ma ale"