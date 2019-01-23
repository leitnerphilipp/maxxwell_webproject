CREATE TABLE IF NOT EXISTS Adresse (
  Adresse_Id int(11) NOT NULL,
  Strasse varchar(45) NOT NULL,
  Hausnummer varchar(45) DEFAULT NULL,
  Postleitzahl varchar(45) DEFAULT NULL,
  Ort varchar(45) NOT NULL,
  Land varchar(45) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS Auftraege (
  Auftrag_Id int(11) NOT NULL,
  Name varchar(45) NOT NULL,
  Beschreibung varchar(2500) DEFAULT NULL,
  Status varchar(45) NOT NULL,
  Erstellungsdatum timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS Benutzer (
  Benutzer_Id int(11) NOT NULL,
  Benutzername varchar(45) NOT NULL,
  Passwort varchar(200) NOT NULL,
  EMailAdresse varchar(45) NOT NULL,
  Vorname varchar(45) DEFAULT NULL,
  Nachname varchar(45) DEFAULT NULL,
  Geschlecht char(1) DEFAULT NULL,
  Geburtsdatum date DEFAULT NULL,
  Firma varchar(45) DEFAULT NULL,
  Selbstbeschreibung varchar(2500) DEFAULT NULL,
  Homepage varchar(45) DEFAULT NULL,
  Telefonnummer bigint(10) DEFAULT NULL,
  Fax varchar(45) DEFAULT NULL,
  Letzteanmeldung timestamp NULL DEFAULT NULL,
  Registrierungsdatum datetime DEFAULT NULL,
  Status varchar(45) DEFAULT NULL,
  Auftrag_Id int(11) DEFAULT NULL,
  Adresse_Id int(11) DEFAULT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS Showcases (
  Showcase_Id int(11) NOT NULL,
  Auftrag_Id int(11) NOT NULL,
  Details int(11) NOT NULL
) ENGINE=InnoDB;

ALTER TABLE Adresse
  ADD PRIMARY KEY (Adresse_Id);

ALTER TABLE Auftraege
  ADD PRIMARY KEY (Auftrag_Id);

ALTER TABLE Benutzer
  ADD PRIMARY KEY (Benutzer_Id),
  ADD UNIQUE KEY Benutzername_UNIQUE (Benutzername),
  ADD KEY fk_Benutzer_Aufträge_idx (Auftrag_Id),
  ADD KEY fk_Benutzer_Adresse1_idx (Adresse_Id);

ALTER TABLE Showcases
  ADD PRIMARY KEY (Showcase_Id);

ALTER TABLE Adresse
  MODIFY Adresse_Id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE Auftraege
  MODIFY Auftrag_Id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE Benutzer
  MODIFY Benutzer_Id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE Showcases
  MODIFY Showcase_Id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE Benutzer
  ADD CONSTRAINT fk_Benutzer_Adresse1 FOREIGN KEY (Adresse_Id) REFERENCES adresse (Adresse_Id) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT fk_Benutzer_Aufträge FOREIGN KEY (Auftrag_Id) REFERENCES auftraege (Auftrag_Id) ON DELETE CASCADE ON UPDATE NO ACTION;