Feature: Zamiana małych liter na duże

  Scenario: Zamiana małych liter na duże
    Given I am on homepage
    When I follow "Małe na duże by furtakm"
    And I fill in "Podaj napis" with "ala ma kota"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: ALA MA KOTA"