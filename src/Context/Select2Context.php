<?php

namespace Novaway\CommonContexts\Context;

class Select2Context extends BaseContext
{
    /**
     * Fill Select2 input field and select a value
     *
     * @When /^(?:|I )fill in select2 input "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)" and select "(?P<entry>(?:[^"]|\\")*)"$/
     */
    public function iFillInSelect2InputWithAndSelect($field, $value, $entry)
    {
        $page = $this->getSession()->getPage();
        $fieldName = sprintf('#select2-%s-container', $field);

        $inputField = $page->find('css', $fieldName);
        if (!$inputField) {
            throw new \Exception('No field found');
        }

        $choice = $inputField->getParent()->find('css', '.select2-selection');
        if (!$choice) {
            throw new \Exception('No select2 choice found');
        }
        $choice->press();

        $select2Input = $page->find('css', '.select2-search__field');
        if (!$select2Input) {
            throw new \Exception('No input found');
        }
        $select2Input->setValue($value);

        $this->getSession()->wait(1000);

        $chosenResults = $page->findAll('css', '.select2-results li');
        foreach ($chosenResults as $result) {
            if ($result->getText() == $entry) {
                $result->click();
                break;
            }
        }
    }
}
