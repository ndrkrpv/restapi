Feature: Positions endpoint

  Scenario: Check that endpoint returns positions resource if provided id exists
    When I am on "/positions/1"
    Then the response status code should be 200
    And Position should be equal {"id":1,"jobTitle":"Senior PHP Developer","seniorityLevel":"Senior","country":"PT","city":"Lisbon","salary":747500,"currency":"SVU","requiredSkills":"PHP, REST, Symfony, Unit-testing, SOLID, Behat, Docker, AWS","companySize":"100-500","companyDomain":"FinTech"}

  Scenario: Check that endpoint returns other position resource if provided id exists
    When I am on "/positions/2"
    Then the response status code should be 200
    And Position should be equal {"id":2,"jobTitle":"Middle PHP Developer","seniorityLevel":"Middle","country":"NL","city":"Amsterdam","salary":632500,"currency":"SVU","requiredSkills":"PHP, Unit-testing, Symfony, SOLID","companySize":"100-500","companyDomain":"Mining"}



