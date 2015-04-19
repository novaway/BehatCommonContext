<?php

namespace Novaway\CommonContexts\Context;

class FormContext extends BaseContext
{
    /**
     * Fills in form field with specified id|name|label|value without unfocus field
     *
     * @When /^(?:|I )fill in "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)" without loosing focus$/
     * @When /^(?:|I )fill in "(?P<value>(?:[^"]|\\")*)" for "(?P<field>(?:[^"]|\\")*)" without loosing focus$/
     */
    public function iFillInFieldWithoutLoosingFocus($field, $value)
    {
        $driver = $this->getSession()->getDriver();
        if ('Behat\Mink\Driver\Selenium2Driver' != get_class($driver)) {
            $field = $this->fixStepArgument($field);
            $value = $this->fixStepArgument($value);

            $this->getSession()->getPage()->fillField($field, $value);
        } else {
            if (null === ($locator = $this->getSession()->getPage()->findField($field))) {
                throw new \Exception(sprintf('Field "%s" not found.', $field));
            }

            if (!($element = $driver->getWebDriverSession()->element('xpath', $locator->getXpath()))) {
                throw new \Exception(sprintf('Field "%s" not found.', $field));
            }

            $element->postValue(['value' => [$value]]);
        }
    }

    /**
     * yy
     *
     * @Then /^the "(?P<field>(?:[^"]|\\")*)" field should be focused$/
     * @Then /^the field "(?P<field>(?:[^"]|\\")*)" (?:is|should be) focused$/
     */
    public function theFieldShouldBeFocus($field)
    {
    }

    /**
     * xx
     *
     * @Then /^the "(?P<field>(?:[^"]|\\")*)" field should not be focused$/
     * @Then /^the field "(?P<field>(?:[^"]|\\")*)" is (?:unfocused|not focused)$/
     */
    public function theFieldShouldNotBeFocus($field)
    {
    }

    /**
     * Returns fixed step argument (with \\" replaced back to ").
     *
     * @param string $argument
     * @return string
     */
    private function fixStepArgument($argument)
    {
        return str_replace('\\"', '"', $argument);
    }
}
