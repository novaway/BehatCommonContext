<?php

namespace Novaway\CommonContexts\Context;

use Behat\Behat\Context\BehatContext;

class CommonContext extends BehatContext
{
    /** @var array */
    private $parameters;


    /**
     * Get config parameter
     *
     * @param string $extension
     * @param string $name
     * @return mixed
     */
    public function getParameter($extension, $name)
    {
        return $this->parameters[$extension][$name];
    }

    /**
     * Check if config parameter exists
     *
     * @param string $extension
     * @param string $name
     * @return bool
     */
    public function hasParameter($extension, $name)
    {
        return isset($this->parameters[$extension][$name]);
    }

    /**
     * Set config parameter
     *
     * @param string $extension
     * @param string $name
     * @param mixed  $value
     * @return CommonContext
     */

    public function setParameter($extension, $name, $value)
    {
        $this->parameters[$extension][$name] = $value;

        return $this;
    }

    /**
     * Set multiple config parameters
     *
     * @param array $parameters
     * @return CommonContext
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters['contexts'];
        foreach ($this->parameters as $name => $values) {
            $className = __NAMESPACE__ . '\\' . ucfirst($name) . 'Context';
            $this->useContext($name, new $className());
        }

        return $this;
    }
}
