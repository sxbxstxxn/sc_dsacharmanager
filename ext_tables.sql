#
# Table structure for table 'tx_scdsacharmanager_domain_model_character'
#
CREATE TABLE tx_scdsacharmanager_domain_model_character (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	feuser_i_d int(11) DEFAULT '0' NOT NULL,
	spezies varchar(255) DEFAULT '' NOT NULL,
	kultur varchar(255) DEFAULT '' NOT NULL,
	profession varchar(255) DEFAULT '' NOT NULL,
	erfahrungsgrad varchar(255) DEFAULT '' NOT NULL,
	typbeschreibung varchar(255) DEFAULT '' NOT NULL,
	haarfarbe varchar(255) DEFAULT '' NOT NULL,
	augenfarbe varchar(255) DEFAULT '' NOT NULL,
	groesse varchar(255) DEFAULT '' NOT NULL,
	gewicht varchar(255) DEFAULT '' NOT NULL,
	sozialstatus varchar(255) DEFAULT '' NOT NULL,
	mut int(11) DEFAULT '0' NOT NULL,
	klugheit int(11) DEFAULT '0' NOT NULL,
	intuition int(11) DEFAULT '0' NOT NULL,
	charisma int(11) DEFAULT '0' NOT NULL,
	fingerfertigkeit int(11) DEFAULT '0' NOT NULL,
	gewandheit int(11) DEFAULT '0' NOT NULL,
	konstitution int(11) DEFAULT '0' NOT NULL,
	koerperkraft int(11) DEFAULT '0' NOT NULL,
	lebensenergie int(11) DEFAULT '0' NOT NULL,
	astralenergie int(11) DEFAULT '0' NOT NULL,
	karmaenergie int(11) DEFAULT '0' NOT NULL,
	seelenkraft int(11) DEFAULT '0' NOT NULL,
	zaehigkeit int(11) DEFAULT '0' NOT NULL,
	ausweichen int(11) DEFAULT '0' NOT NULL,
	initiative int(11) DEFAULT '0' NOT NULL,
	geschwindigkeit int(11) DEFAULT '0' NOT NULL,
	schicksalspunkte int(11) DEFAULT '0' NOT NULL,
	vorteile varchar(255) DEFAULT '' NOT NULL,
	nachteile varchar(255) DEFAULT '' NOT NULL,
	sfallg varchar(255) DEFAULT '' NOT NULL,
	familie varchar(255) DEFAULT '' NOT NULL,
	geburtsort varchar(255) DEFAULT '' NOT NULL,
	geburtsdatum varchar(255) DEFAULT '' NOT NULL,
	goetterlaeufe varchar(255) DEFAULT '' NOT NULL,
	geschlecht varchar(255) DEFAULT '' NOT NULL,
	titel varchar(255) DEFAULT '' NOT NULL,
	charakteristika varchar(255) DEFAULT '' NOT NULL,
	sonstiges varchar(255) DEFAULT '' NOT NULL,
	ap_gesamt int(11) DEFAULT '0' NOT NULL,
	ap_verfuegbar int(11) DEFAULT '0' NOT NULL,
	ap_ausgegeben int(11) DEFAULT '0' NOT NULL,
	lebensenergie_bonus int(11) DEFAULT '0' NOT NULL,
	lebensenergie_kauf int(11) DEFAULT '0' NOT NULL,
	lebensenergie_max int(11) DEFAULT '0' NOT NULL,
	astralenergie_bonus int(11) DEFAULT '0' NOT NULL,
	astralenergie_kauf int(11) DEFAULT '0' NOT NULL,
	astralenergie_max int(11) DEFAULT '0' NOT NULL,
	karmaenergie_bonus int(11) DEFAULT '0' NOT NULL,
	karmaenergie_kauf int(11) DEFAULT '0' NOT NULL,
	karmaenergie_max int(11) DEFAULT '0' NOT NULL,
	seelenkraft_bonus int(11) DEFAULT '0' NOT NULL,
	seelenkraft_max int(11) DEFAULT '0' NOT NULL,
	zaehigkeit_bonus int(11) DEFAULT '0' NOT NULL,
	zaehigkeit_max int(11) DEFAULT '0' NOT NULL,
	ausweichen_bonus int(11) DEFAULT '0' NOT NULL,
	ausweichen_max int(11) DEFAULT '0' NOT NULL,
	initiative_bonus int(11) DEFAULT '0' NOT NULL,
	initiative_max int(11) DEFAULT '0' NOT NULL,
	geschwindigkeit_bonus int(11) DEFAULT '0' NOT NULL,
	geschwindigkeit_max int(11) DEFAULT '0' NOT NULL,
	schicksalspunkte_bonus int(11) DEFAULT '0' NOT NULL,
	schicksalspunkte_max int(11) DEFAULT '0' NOT NULL,
	schicksalspunkte_aktuell int(11) DEFAULT '0' NOT NULL,
	talent_fliegen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_fliegen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_gaukeleien_f_w int(11) DEFAULT '0' NOT NULL,
	talent_gaukeleien_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_klettern_f_w int(11) DEFAULT '0' NOT NULL,
	talent_klettern_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_koerperbeherrschung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_koerperbeherrschung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_kraftakt_f_w int(11) DEFAULT '0' NOT NULL,
	talent_kraftakt_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_reiten_f_w int(11) DEFAULT '0' NOT NULL,
	talent_reiten_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_schwimmen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_schwimmen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_selbstbeherrschung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_selbstbeherrschung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_singen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_singen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_sinnesschaerfe_f_w int(11) DEFAULT '0' NOT NULL,
	talent_sinnesschaerfe_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_tanzen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_tanzen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_taschendiebstahl_f_w int(11) DEFAULT '0' NOT NULL,
	talent_taschendiebstahl_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_verbergen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_verbergen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_zechen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_zechen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_bekehren_f_w int(11) DEFAULT '0' NOT NULL,
	talent_bekehren_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_betoeren_f_w int(11) DEFAULT '0' NOT NULL,
	talent_betoeren_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_einschuechtern_f_w int(11) DEFAULT '0' NOT NULL,
	talent_einschuechtern_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_etikette_f_w int(11) DEFAULT '0' NOT NULL,
	talent_etikette_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_gassenwissen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_gassenwissen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_menschenkenntnis_f_w int(11) DEFAULT '0' NOT NULL,
	talent_menschenkenntnis_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_ueberreden_f_w int(11) DEFAULT '0' NOT NULL,
	talent_ueberreden_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_verkleiden_f_w int(11) DEFAULT '0' NOT NULL,
	talent_verkleiden_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_willenskraft_f_w int(11) DEFAULT '0' NOT NULL,
	talent_willenskraft_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_faehrtensuchen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_faehrtensuchen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_fesseln_f_w int(11) DEFAULT '0' NOT NULL,
	talent_fesseln_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_fischen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_fischen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_orientierung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_orientierung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_pflanzenkunde_f_w int(11) DEFAULT '0' NOT NULL,
	talent_pflanzenkunde_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_tierkunde_f_w int(11) DEFAULT '0' NOT NULL,
	talent_tierkunde_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_wildnisleben_f_w int(11) DEFAULT '0' NOT NULL,
	talent_wildnisleben_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_brettspiel_f_w int(11) DEFAULT '0' NOT NULL,
	talent_brettspiel_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_geographie_f_w int(11) DEFAULT '0' NOT NULL,
	talent_geographie_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_geschichtswissen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_geschichtswissen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_goetter_f_w int(11) DEFAULT '0' NOT NULL,
	talent_goetter_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_kriegskunst_f_w int(11) DEFAULT '0' NOT NULL,
	talent_kriegskunst_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_magiekunde_f_w int(11) DEFAULT '0' NOT NULL,
	talent_magiekunde_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_mechanik_f_w int(11) DEFAULT '0' NOT NULL,
	talent_mechanik_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_rechnen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_rechnen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_sagen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_sagen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_sphaerenkunde_f_w int(11) DEFAULT '0' NOT NULL,
	talent_sphaerenkunde_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_sternkunde_f_w int(11) DEFAULT '0' NOT NULL,
	talent_sternkunde_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_alchimie_f_w int(11) DEFAULT '0' NOT NULL,
	talent_alchimie_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_boote_f_w int(11) DEFAULT '0' NOT NULL,
	talent_boote_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_fahrzeuge_f_w int(11) DEFAULT '0' NOT NULL,
	talent_fahrzeuge_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_handel_f_w int(11) DEFAULT '0' NOT NULL,
	talent_handel_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_heilkunde_gift_f_w int(11) DEFAULT '0' NOT NULL,
	talent_heilkunde_gift_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_heilkunde_krankheiten_f_w int(11) DEFAULT '0' NOT NULL,
	talent_heilkunde_krankheiten_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_heilkunde_seele_f_w int(11) DEFAULT '0' NOT NULL,
	talent_heilkunde_seele_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_heilkunde_wunden_f_w int(11) DEFAULT '0' NOT NULL,
	talent_heilkunde_wunden_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_holzbearbeitung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_holzbearbeitung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_lebensmittelbearbeitung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_lebensmittelbearbeitung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_lederbearbeitung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_lederbearbeitung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_malen_f_w int(11) DEFAULT '0' NOT NULL,
	talent_malen_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_metallbearbeitung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_metallbearbeitung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_musizieren_f_w int(11) DEFAULT '0' NOT NULL,
	talent_musizieren_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_schloesserknacken_f_w int(11) DEFAULT '0' NOT NULL,
	talent_schloesserknacken_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_steinbearbeitung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_steinbearbeitung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_stoffbearbeitung_f_w int(11) DEFAULT '0' NOT NULL,
	talent_stoffbearbeitung_anmerkung varchar(255) DEFAULT '' NOT NULL,
	talent_rechtskunde_f_w int(11) DEFAULT '0' NOT NULL,
	talent_rechtskunde_anmerkung varchar(255) DEFAULT '' NOT NULL,
	sprachen varchar(255) DEFAULT '' NOT NULL,
	schriften varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_scdsacharmanager_domain_model_race'
#
CREATE TABLE tx_scdsacharmanager_domain_model_race (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	ap int(11) DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);