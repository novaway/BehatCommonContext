Behat Common Contexts
=====================

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
