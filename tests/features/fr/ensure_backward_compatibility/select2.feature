# language: fr
Fonctionnalité: Ensure backword compatibility after fixing a typo in FR translations

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis le champs select2 "select_number" avec "Four"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis le champs select2 "Two" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis le champs select2 "select_number" avec "T" et sélectionne "Three"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Lorsque je remplis le champs de recherche select2 "select_number" avec "F"
        Alors je devrais voir 2 éléments dans le champs select2 "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-multiple.html"
        Alors je remplis le champs select2 "Two" pour "select_number"
        Et je remplis le champs select2 "Three" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-multiple.html"
        Alors je remplis le champs select2 "Two" pour "select_number2"
        Et je remplis le champs select2 "Three" pour "select_number2"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-nosearch.html"
        Alors je remplis le champs select2 "Thirteen" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis le champs select2 "France" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis le champs select2 "France" pour "select_number" et j'attends 6 secondes le chargement des résultats

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis le champs select2 "select_number" avec "France" et j'attends 6 secondes le chargement des résultats

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis les champs select2 "select_number" avec "Four"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis les champs select2 "Two" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis les champs select2 "select_number" avec "T" et sélectionne "Three"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Lorsque je remplis les champs de recherche select2 "select_number" avec "F"
        Alors je devrais voir 2 éléments dans les champs select2 "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-multiple.html"
        Alors je remplis les champs select2 "Two" pour "select_number"
        Et je remplis les champs select2 "Three" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-multiple.html"
        Alors je remplis les champs select2 "Two" pour "select_number2"
        Et je remplis les champs select2 "Three" pour "select_number2"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-nosearch.html"
        Alors je remplis les champs select2 "Thirteen" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis les champs select2 "France" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis les champs select2 "France" pour "select_number" et j'attends 6 secondes le chargement des résultats

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis les champs select2 "select_number" avec "France" et j'attends 6 secondes le chargement des résultats

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis les champ select2 "select_number" avec "Four"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis les champ select2 "Two" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Alors je remplis les champ select2 "select_number" avec "T" et sélectionne "Three"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2.html"
        Lorsque je remplis les champ de recherche select2 "select_number" avec "F"
        Alors je devrais voir 2 éléments dans les champ select2 "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-multiple.html"
        Alors je remplis les champ select2 "Two" pour "select_number"
        Et je remplis les champ select2 "Three" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-multiple.html"
        Alors je remplis les champ select2 "Two" pour "select_number2"
        Et je remplis les champ select2 "Three" pour "select_number2"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-nosearch.html"
        Alors je remplis les champ select2 "Thirteen" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis les champ select2 "France" pour "select_number"

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis les champ select2 "France" pour "select_number" et j'attends 6 secondes le chargement des résultats

    @javascript
    Scénario:
        Etant donné je suis sur "/select2-ajax.html"
        Alors je remplis les champ select2 "select_number" avec "France" et j'attends 6 secondes le chargement des résultats
