Feature: Formstone Feature

    Scenario: Testing simple web access
        Given I am on "/index.html"
        Then I should see "Congratulations, you've correctly set up your apache environment."

    @javascript
    Scenario:
        Given I am on "/formstone.html"
        Then I fill in dropdown "select_number" with "Four"

    @javascript
    Scenario:
        Given I am on "/formstone.html"
        Then I fill in dropdown "Two" for "select_number"
