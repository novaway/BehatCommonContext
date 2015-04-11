Feature: Select2 Feature

    Scenario: Testing simple web access
        Given I am on "/index.html"
        Then I should see "Congratulations, you've correctly set up your apache environment."

    @javascript
    Scenario:
        Given I am on "/select2.html"
        Then I fill in select2 input "select_number" with "T" and select "Three"
