Feature: Positions endpoint

  Scenario: Check that endpoint returns positions resource if provided id exists
    When I am on "/positions/1"
    Then the response status code should be 200
    And Position should be equal {"id":1,"jobTitle":"Senior PHP Developer","seniorityLevel":"Senior","country":"DE","city":"Berlin","salary":747500,"currency":"SVU","requiredSkills":"PHP, Symfony, REST, Unit-testing, Behat, SOLID, Docker, AWS","companySize":"100-500","companyDomain":"Automotive"}