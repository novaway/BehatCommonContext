Behat Common Contexts
=====================

[![Build Status](https://travis-ci.org/novaway/BehatCommonContext.svg)](https://travis-ci.org/novaway/BehatCommonContext)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/novaway/BehatCommonContext/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/novaway/BehatCommonContext/?branch=master)

# /!\ This extension is under development. Behat3 is not actually supported. /!\

Provide most common behat tests.

## Installation

The extension requires :

* Behat
* Mink extension

## Usage

In `behat.yml, enable desired contexts:

```yaml
default:
    extensions:
        Novaway\CommonContexts\Extension:
            contexts:
                select2: ~  # provide Select2 interaction
```
