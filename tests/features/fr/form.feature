# language: fr
Fonctionnalité: Form Feature

    @javascript
    Scénario:
        Etant donné je suis sur "/form.html"
        Lorsque je remplis "input_text" avec "foo" sans perdre le focus
        Alors je ne devrais pas voir "Value changed"

    @javascript
    Scénario:
        Etant donné je suis sur "/form.html"
        Lorsque je remplis "bar" pour "input_text" sans perdre le focus
        Alors je ne devrais pas voir "Value changed"
