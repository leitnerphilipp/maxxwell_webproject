INSERT INTO Benutzer(Benutzername, Passwort, EMailAdresse, Vorname, Nachname, Geschlecht, Geburtsdatum, Firma, Selbstbeschreibung, Homepage, Telefonnummer, Fax, Letzteanmeldung, Registrierungsdatum, Status, Auftrag_Id, Adresse_Id)
VALUES("test", "testpass123", "test@gmail.com", null, null, null, null, null, null, null, null, null, null, "2018-12-19 10:30:22", "benutzer", null, null);

INSERT INTO Aufträge(Name, Beschreibung, Status, Erstellungsdatum)
VALUES("testAuftrag", "testestestesteetstetetstetestseteteteststststetests", "NichtBehandelt", "2018-12-19 10:30:22");
