Feature: Endpoint /countries/{country}/positions

  Scenario: Check that endpoint returns the list of positions in certain contry
    When I am on "/countries/IE/positions"
    Then the response status code should be 200
    And body should be equal [{"id":3,"jobTitle":"Junior PHP Developer","seniorityLevel":"Junior","country":"IE","city":"Dublin","salary":517500,"currency":"SVU","requiredSkills":"PHP, HTML, LAMP, CSS, SQL","companySize":"100-500","companyDomain":"Communication"}]

    Scenario: Check that endpoint returns the list of positions in certan country sorted by salary
      When I am on "countries/PT/positions?orderBy=salary"
      Then the response status code should be 200
      And body should be equal [{"id":4,"jobTitle":"Senior PHP Developer","seniorityLevel":"Senior","country":"PT","city":"Lisbon","salary":800000,"currency":"SVU","requiredSkills":"PHP, Unit-testing, Symfony, SOLID","companySize":"100-500","companyDomain":"Automotive"},{"id":1,"jobTitle":"Senior PHP Developer","seniorityLevel":"Senior","country":"PT","city":"Lisbon","salary":747500,"currency":"SVU","requiredSkills":"PHP, REST, Symfony, Unit-testing, SOLID, Behat, Docker, AWS","companySize":"100-500","companyDomain":"FinTech"}]

