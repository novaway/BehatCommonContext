# language: fr
Fonctionnalité: Ensure backword compatibility after fixing a typo in FR translations

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis le champs dropdown "select_number" avec "Four"

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis le champs dropdown "Two" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis les champs dropdown "select_number" avec "Four"

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis les champs dropdown "Two" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis les champ dropdown "select_number" avec "Four"

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis les champ dropdown "Two" pour "select_number"
