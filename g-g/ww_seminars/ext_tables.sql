CREATE TABLE tx_wwseminars_domain_model_category (
	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	introduction text,
	downloads int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_wwseminars_domain_model_place (
	city varchar(255) DEFAULT '' NOT NULL,
	address text,
	tel varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_wwseminars_domain_model_seminar (
	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	date int(11) DEFAULT '0' NOT NULL,
	agenda int(11) unsigned NOT NULL default '0',
	application int(11) unsigned NOT NULL default '0',
	place int(11) unsigned DEFAULT '0',
	category int(11) unsigned DEFAULT '0',
	bookedup int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_wwseminars_domain_model_request (
		firma varchar(255) DEFAULT '' NOT NULL,
	strasse varchar(255) DEFAULT '' NOT NULL,
	plz varchar(255) DEFAULT '' NOT NULL,
	ort varchar(255) DEFAULT '' NOT NULL,
	telefon varchar(255) DEFAULT '' NOT NULL,
	telefax varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	ansprechpartner varchar(255) DEFAULT '' NOT NULL,
	personen text,
	seminar int(11) unsigned DEFAULT '0'
);
