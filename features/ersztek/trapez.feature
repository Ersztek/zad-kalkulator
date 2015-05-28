Feature: Obliczenia

  Scenario: Kalkulator pole trapez...
    Given I am on homepage
    When I follow "Kalkulator pole trapez by Ersztek..."
    And I fill in "A" with "5"
    And I fill in "B" with "7"
    And I fill in "H" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 24"