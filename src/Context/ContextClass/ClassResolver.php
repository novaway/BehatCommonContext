<?php

namespace Novaway\CommonContexts\Context\ContextClass;

use Behat\Behat\Context\ContextClass\ClassResolver as ClassResolverInterface;

class ClassResolver implements ClassResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supportsClass($contextString)
    {
        return (0 === strpos($contextString, 'nwcontext:'));
    }

    /**
     * {@inheritdoc}
     */
    public function resolveClass($contextClass)
    {
        list(, $className) = explode(':', $contextClass);

        $className = ucfirst($className);
        return "\\Novaway\\CommonContexts\\Context\\{$className}Context";
    }
}
