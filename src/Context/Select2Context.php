<?php

namespace Novaway\CommonContexts\Context;

use Behat\Mink\Element\DocumentElement;

class Select2Context extends BaseContext
{
    const DEFAULT_TIMEOUT = 60;

    /** @var int */
    private $timeout;

    /**
     * Constructor
     *
     * @param int $timeout Timeout for waiting results (in seconds)
     */
    public function __construct($timeout = self::DEFAULT_TIMEOUT)
    {
        $this->timeout = $timeout;
    }

    /**
     * Fills in Select2 field with specified
     *
     * @When /^(?:|I )fill in select2 "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)"$/
     * @When /^(?:|I )fill in select2 "(?P<value>(?:[^"]|\\")*)" for "(?P<field>(?:[^"]|\\")*)"$/
     */
    public function iFillInSelect2Field($field, $value)
    {
        $page = $this->getSession()->getPage();

        $this->openField($page, $field);
        $this->selectValue($page, $field, $value);
    }

    /**
     * Fill Select2 input field
     *
     * @When /^(?:|I )fill in select2 input "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)"$/
     */
    public function iFillInSelect2InputWith($field, $value)
    {
        $page = $this->getSession()->getPage();

        $this->openField($page, $field);
        $this->fillSearchField($page, $field, $value);
    }

    /**
     * Fill Select2 input field and select a value
     *
     * @When /^(?:|I )fill in select2 input "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)" and select "(?P<entry>(?:[^"]|\\")*)"$/
     */
    public function iFillInSelect2InputWithAndSelect($field, $value, $entry)
    {
        $page = $this->getSession()->getPage();

        $this->openField($page, $field);
        $this->fillSearchField($page, $field, $value);
        $this->selectValue($page, $field, $entry);
    }

    /**
     * Fill Select2 input field
     *
     * @Then /^(?:|I )should see (?P<num>\d+) choice(?:|s) in select2 "(?P<field>(?:[^"]|\\")*)"$/
     */
    public function iShouldSeeSelectChoices($field, $num)
    {
        $selector = sprintf('#select2-%s-results li', $field);

        $this->assertSession()->elementsCount('css', $selector, intval($num));
    }

    /**
     * Open Select2 choice list
     *
     * @param DocumentElement $page
     * @param string          $field
     * @throws \Exception
     */
    private function openField(DocumentElement $page, $field)
    {
        $fieldName = sprintf('select[name="%s"] + .select2-container', $field);

        $inputField = $page->find('css', $fieldName);
        if (!$inputField) {
            throw new \Exception(sprintf('No field "%s" found', $field));
        }

        $choice = $inputField->find('css', '.select2-selection');
        if (!$choice) {
            throw new \Exception(sprintf('No select2 choice found for "%s"', $field));
        }
        $choice->press();
    }

    /**
     * Fill Select2 search field
     *
     * @param DocumentElement $page
     * @param string          $field
     * @param string          $value
     * @throws \Exception
     */
    private function fillSearchField(DocumentElement $page, $field, $value)
    {
        $driver = $this->getSession()->getDriver();
        if ('Behat\Mink\Driver\Selenium2Driver' === get_class($driver)) {
            // Can't use `$this->getSession()->getPage()->find()` because of https://github.com/minkphp/MinkSelenium2Driver/issues/188
            $select2Input = $this->getSession()->getDriver()->getWebDriverSession()->element('xpath', "//html/descendant-or-self::*[@class and contains(concat(' ', normalize-space(@class), ' '), ' select2-search__field ')]");
            if (!$select2Input) {
                throw new \Exception(sprintf('No field "%s" found', $field));
            }
            $select2Input->postValue(['value' => [$value]]);
        } else {
            $select2Input = $page->find('css', '.select2-search__field');
            if (!$select2Input) {
                throw new \Exception(sprintf('No input found for "%s"', $field));
            }
            $select2Input->setValue($value);
        }

        $this->waitForLoadingResults($this->timeout);
    }

    /**
     * Select value in choice list
     *
     * @param DocumentElement $page
     * @param string          $field
     * @param string          $value
     * @throws \Exception
     */
    private function selectValue(DocumentElement $page, $field, $value)
    {
        $this->waitForLoadingResults($this->timeout);

        $chosenResults = $page->findAll('css', '.select2-results li');
        foreach ($chosenResults as $result) {
            if ($result->getText() == $value) {
                $result->click();
                return;
            }
        }

        throw new \Exception(sprintf('Value "%s" not found for "%s"', $value, $field));
    }

    /**
     * Wait the end of fetching Select2 results
     *
     * @param int $time Time to wait in seconds
     */
    private function waitForLoadingResults($time)
    {
        for ($i = 0; $i < $time; $i++) {
            if (!$this->getSession()->getPage()->find('css', '.select2-results__option.loading-results')) {
                return true;
            }

            sleep(1);
        }

        throw new \Exception(sprintf('Results are not load after "%d" seconds.', $time));
    }
}
