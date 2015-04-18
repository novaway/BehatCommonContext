Behat Common Contexts
=====================

[![Build Status](https://travis-ci.org/novaway/BehatCommonContext.svg)](https://travis-ci.org/novaway/BehatCommonContext)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/novaway/BehatCommonContext/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/novaway/BehatCommonContext/?branch=master)

Provide most common behat tests.

## Installation

The extension requires :

* Behat
* Mink extension

## Usage

In `behat.yml, enable desired contexts:

```yaml
default:
    suites:
        default:
            contexts:
                - nwcontext:select2

    # ...
    extensions:
        Novaway\CommonContexts\Extension: ~
```
