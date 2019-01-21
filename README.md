# Verjaardag App

## Context

Onze klant viert binnenkort zijn 50ste verjaardag. Hij wil een playlist kunnen maken van de top 3 liedjes van de genodigde gasten.

## Praktische informatie

* Team: Groepjes (4 personen)
* **Deadline: 01 Februari 2019, 19h59**


## Wat er wordt verwacht

* Een website;
* Ingeven van gegevens:
    * Username / e-mail
    * Controle dat ingave maar één keer gebeurt per gebruiker (e-mail)
    * Opslaan van 3 nummers:
        * Artiest
        * Titel
        * URL
* Verzendsbevestiging (mail of alert);
* Opslag van media (Database, mySQL);
* YouTube integratie.

### Frontend

* Welkomstpagina
* Formulier voor registratie
    * Username
    * E-mail
* Formulier voor muziek
    * Naam van de artiest
    * Titel van het liedje
    * URL van bijhorende YouTube video (optioneel)

### Backend
* Controle: bestaat user / e-mail?
    * nee = account aanmaken;
    * ja = melding dat account al bestaat.
* Ophalen van URL gegevens indien ingevoerd;
* Artiest en Titel automatisch aanvullen indien URL is opgegeven;
* Controle of nummer al is ingegeven;
* Controle op XSS;
* Gegevens opslaan in een database;
* Resultaat terug geven (melding).
