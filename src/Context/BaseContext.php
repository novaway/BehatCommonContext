<?php

namespace Novaway\CommonContexts\Context;

use Behat\Behat\Context\TranslatedContextInterface;
use Behat\MinkExtension\Context\RawMinkContext;

abstract class BaseContext extends RawMinkContext implements TranslatedContextInterface
{
    /**
     * {@inheritdoc}
     */
    public function getTranslationResources()
    {
        return glob(__DIR__ . '/../../i18n/*.xliff');
    }
}
