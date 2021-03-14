Feature: Endpoint /countries/{country}/positions

  Scenario: Check that endpoint returns the list of positions in certain contry
    When I am on "/countries/IE/positions"
    Then the response status code should be 200
    And body should be equal [{"id":3,"jobTitle":"Junior PHP Developer","seniorityLevel":"Junior","country":"IE","city":"Dublin","salary":517500,"currency":"SVU","requiredSkills":"PHP, HTML, LAMP, CSS, SQL","companySize":"100-500","companyDomain":"Communication"}]