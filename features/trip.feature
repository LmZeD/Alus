Feature: Make a route
  In order to make a route
  As user
  I must provide longitude and latitude coordinates

  Scenario: I provide longitude and latitude
    Given I am in root page
    When I provide coordinates: "19.43295600" "51.742503"
    Then I get redirected to output page
    And I get data of visited breweries

  Scenario: I provide latitude and longitude which gives no breweries nearby
    Given I am in root page
    When I provide coordinates: "-85" "-85"
    Then I get redirected to root page
    And I get message that no breweries are nearby

  Scenario: I provide invalid latitude and longitude coordinates
    Given I am in root page
    When I provide coordinates: "500" "500"
    Then I get redirected to root page
    And I get message that no input values are invalid