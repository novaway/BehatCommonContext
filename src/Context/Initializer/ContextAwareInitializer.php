<?php

namespace Novaway\CommonContexts\Context\Initializer;

use Behat\Behat\Context\ContextInterface;
use Behat\Behat\Context\Initializer\InitializerInterface;
use Novaway\CommonContexts\Context\CommonContext;

class ContextAwareInitializer implements InitializerInterface
{
    /** @var array */
    private $parameters;


    /**
     * Constructor
     *
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ContextInterface $context)
    {
        return ($context instanceof CommonContext);
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(ContextInterface $context)
    {
        $context->setParameters($this->parameters);
    }
}
