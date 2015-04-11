<?php

use Behat\Behat\Context\BehatContext;
use Behat\MinkExtension\Context\MinkContext;
use Novaway\CommonContexts\Context\CommonContext;

class FeatureContext extends BehatContext
{
    public function __construct(array $parameters)
    {
        $this->useContext('mink', new MinkContext($parameters));
        $this->useContext('common', new CommonContext($parameters));
    }
}
