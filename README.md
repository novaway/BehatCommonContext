Behat Common Contexts
=====================

[![Build Status](https://travis-ci.org/novaway/BehatCommonContext.svg?branch=master)](https://travis-ci.org/novaway/BehatCommonContext)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/novaway/BehatCommonContext/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/novaway/BehatCommonContext/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/novaway/common-contexts/v/stable.png)](https://packagist.org/packages/novaway/common-contexts)

Provide most common behat tests.

## Installation

The extension requires :

* Behat
* Mink extension

## Usage

Add dependencies with Composer :

``` bash
$ php composer.phar require novaway/common-contexts "~2.0"
```

In `behat.yml`, enable desired contexts:

```yaml
default:
    suites:
        default:
            contexts:
                - nwcontext:form
                - nwcontext:formstone
                - nwcontext:select2:
                    timeout: 60

    # ...
    extensions:
        Novaway\CommonContexts\Extension: ~
```
