Feature: Obliczenia

  Scenario: Kalkulator PPBP
    Given I am on homepage
    When I follow "KalkulatorPPBP by ersztek"
    And I fill in "A" with "2"
    And I fill in "B" with "4"
    And I fill in "H" with "6"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 72"