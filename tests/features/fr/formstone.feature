# language: fr
Fonctionnalité: Formstone Feature

    Scénario:
        Etant donné je suis sur "/index.html"
        Alors je devrais voir "Congratulations, you've correctly set up your apache environment."

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis le champs dropdown "select_number" avec "Four"

    @javascript
    Scénario:
        Etant donné je suis sur "/formstone.html"
        Alors je remplis le champs dropdown "Two" pour "select_number"
