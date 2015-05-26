<?php

namespace Novaway\CommonContexts\Context;

use Behat\Mink\Element\DocumentElement;

/**
 * Context for Formstone components
 * http://formstone.it/
 */
class FormstoneContext extends BaseContext
{
    /**
     * Choose an option in selecter field
     *
     * @When /^(?:|I )fill in selecter "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)"$/
     * @When /^(?:|I )fill in selecter "(?P<value>(?:[^"]|\\")*)" for "(?P<field>(?:[^"]|\\")*)"$/
     */
    public function iFillInSelecter($field, $value)
    {
        $this->selectValue('selecter', $field, $value);
    }

    /**
     * Choose an option in dropdown component field
     *
     * @When /^(?:|I )fill in dropdown "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)"$/
     * @When /^(?:|I )fill in dropdown "(?P<value>(?:[^"]|\\")*)" for "(?P<field>(?:[^"]|\\")*)"$/
     */
    public function iFillInDropdown($field, $value)
    {
        $this->selectValue('dropdown', $field, $value);
    }

    /**
     * Select value in component
     *
     * @param string $component
     * @param string $field
     * @param string $value
     * @throws \Exception
     */
    private function selectValue($component, $field, $value)
    {
        $page = $this->getSession()->getPage();

        $this->openComponent($page, $component, $field);
        $this->selectComponentValue($page, $component, $field, $value);
    }

    /**
     * Open component choice list
     *
     * @param DocumentElement $page
     * @param string          $component
     * @param string          $field
     * @throws \Exception
     */
    private function openComponent(DocumentElement $page, $component, $field)
    {
        $select = $page->find('css', sprintf('#%s', $field));
        if (!$select) {
            throw new \Exception(sprintf('No select "%s" found', $field));
        }

        $fieldName = sprintf('.fs-%1$s .fs-%1$s-selected', $component);
        $choices   = $select->getParent()->find('css', $fieldName);
        if (!$choices) {
            throw new \Exception(sprintf('No field "%s" found', $field));
        }

        $choices->press();
    }

    /**
     * Select value in choice list
     *
     * @param DocumentElement $page
     * @param string          $component
     * @param string          $field
     * @param string          $value
     * @throws \Exception
     */
    private function selectComponentValue(DocumentElement $page, $component, $field, $value)
    {
        $select = $page->find('css', sprintf('#%s', $field));
        if (!$select) {
            throw new \Exception(sprintf('No select "%s" found', $field));
        }

        $selector = sprintf('.fs-%1$s button.fs-%1$s-item', $component);
        $choices  = $page->findAll('css', $selector);
        foreach ($choices as $choice) {
            if ($choice->getText() == $value) {
                $choice->click();
                return;
            }
        }

        throw new \Exception(sprintf('Value "%s" not found for "%s"', $value, $field));
    }
}
