Feature: Sum calculating endpoint

  Scenario: Check that endpoint returns sum of two variables correctly
    When I am on "/sum/3/4"
    Then the response status code should be 200
    And Sum should be equal 7