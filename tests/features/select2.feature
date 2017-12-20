Feature: Select2 Feature

    Scenario: Testing simple web access
        Given I am on "/index.html"
        Then I should see "Congratulations, you've correctly set up your apache environment."

    @javascript
    Scenario:
        Given I am on "/select2.html"
        Then I fill in select2 "select_number" with "Four"

    @javascript
    Scenario:
        Given I am on "/select2.html"
        Then I fill in select2 "Two" for "select_number"

    @javascript
    Scenario:
        Given I am on "/select2.html"
        Then I fill in select2 input "select_number" with "T" and select "Three"

    @javascript
    Scenario:
        Given I am on "/select2.html"
        When I fill in select2 input "select_number" with "F"
        Then I should see 2 choice in select2 "select_number"

    @javascript
    Scenario:
        Given I am on "/select2-multiple.html"
        Then I fill in select2 "Two" for "select_number"
        And I fill in select2 "Three" for "select_number"

    @javascript
    Scenario:
        Given I am on "/select2-multiple.html"
        Then I fill in select2 "Two" for "select_number2"
        And I fill in select2 "Three" for "select_number2"

    @javascript
    Scenario:
        Given I am on "/select2-nosearch.html"
        Then I fill in select2 "Thirteen" for "select_number"

    @javascript
    Scenario:
        Given I am on "/select2-ajax.html"
        Then I fill in select2 "France" for "select_number"

    @javascript
    Scenario:
        Given I am on "/select2-ajax.html"
        Then I fill in select2 "France" for "select_number" and wait 6 seconds until results are loaded

    @javascript
    Scenario:
        Given I am on "/select2-ajax.html"
        Then I fill in select2 "select_number" with "France" and wait 6 seconds until results are loaded

    @javascript
    Scenario: Test fill select2 if list already open
        Given I am on "/select2.html"
        When I fill in select2 input "select_number" with "F"
        Then I should see 2 choice in select2 "select_number"

        When I fill in select2 input "select_number" with "F"
        Then I fill in select2 "select_number" with "Four"
