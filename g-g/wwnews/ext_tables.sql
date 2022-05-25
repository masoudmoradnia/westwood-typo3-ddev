CREATE TABLE tx_wwnews_domain_model_category (
	title varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_wwnews_domain_model_aplicationarea (
	title varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_wwnews_domain_model_newsitem (
	title varchar(255) DEFAULT '' NOT NULL,
	subtitle varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	refplace varchar(255) DEFAULT '' NOT NULL,
	reftype varchar(255) DEFAULT '' NOT NULL,
	cover int(11) unsigned NOT NULL default '0',
	introduction text,
	text text,
	pdf int(11) unsigned NOT NULL default '0',
	application_area int(11) unsigned DEFAULT '0',
	category int(11) unsigned DEFAULT '0'
);
