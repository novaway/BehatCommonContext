Feature: Form Feature

    @javascript
    Scenario:
        Given I am on "/form.html"
        When I fill in "input_text" with "foo" without loosing focus
        Then I should not see "Value changed"

    @javascript
    Scenario:
        Given I am on "/form.html"
        When I fill in "bar" for "input_text" without loosing focus
        Then I should not see "Value changed"
