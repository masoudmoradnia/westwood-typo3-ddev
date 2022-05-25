CREATE TABLE tx_fachverarbeitersuche_domain_model_requests (
	address varchar(255) DEFAULT '' NOT NULL,
	zip varchar(255) DEFAULT '' NOT NULL,
	contactperson int(11) unsigned DEFAULT '0',
	applicationarea varchar(255) DEFAULT '' NOT NULL,
	ramp varchar(255) DEFAULT '' NOT NULL,
	stairway varchar(255) DEFAULT '' NOT NULL,
	parking varchar(255) DEFAULT '' NOT NULL,
	topdeck varchar(255) DEFAULT '' NOT NULL,
	betweendeck varchar(255) DEFAULT '' NOT NULL,
	area varchar(255) DEFAULT '' NOT NULL,
	balkon varchar(255) DEFAULT '' NOT NULL,
	arcade varchar(255) DEFAULT '' NOT NULL,
	terrasse varchar(255) DEFAULT '' NOT NULL,
	dachkuppel varchar(255) DEFAULT '' NOT NULL,
	flachdach varchar(255) DEFAULT '' NOT NULL,
	dachterasse varchar(255) DEFAULT '' NOT NULL,
	keller varchar(255) DEFAULT '' NOT NULL,
	konstruktion varchar(255) DEFAULT '' NOT NULL,
	sonder varchar(255) DEFAULT '' NOT NULL,	
	betonfuge varchar(255) DEFAULT '' NOT NULL,
	betonfahrbahntafel varchar(255) DEFAULT '' NOT NULL,
	brueckenkappe varchar(255) DEFAULT '' NOT NULL,
	stahlbruecke varchar(255) DEFAULT '' NOT NULL,
	trogbauwerk varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	firstname varchar(255) DEFAULT '' NOT NULL,
	lastname varchar(255) DEFAULT '' NOT NULL,
	tel varchar(255) DEFAULT '' NOT NULL,
	message text
);

CREATE TABLE tx_fachverarbeitersuche_domain_model_salesrepresentative
(
	name varchar(255) DEFAULT '' NOT NULL,
	plz varchar(255) DEFAULT '' NOT NULL,
	region varchar(255) DEFAULT '' NOT NULL,
	anschreiben varchar(255) DEFAULT '' NOT NULL,
	mobil varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL
);