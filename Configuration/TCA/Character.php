<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_scdsacharmanager_domain_model_character'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_scdsacharmanager_domain_model_character']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, feuser_i_d, spezies, kultur, profession, erfahrungsgrad, typbeschreibung, haarfarbe, augenfarbe, groesse, gewicht, sozialstatus, mut, klugheit, intuition, charisma, fingerfertigkeit, gewandheit, konstitution, koerperkraft, lebensenergie, astralenergie, karmaenergie, seelenkraft, zaehigkeit, ausweichen, initiative, geschwindigkeit, schicksalspunkte, vorteile, nachteile, sfallg, familie, geburtsort, geburtsdatum, goetterlaeufe, geschlecht, titel, charakteristika, sonstiges, ap_gesamt, ap_verfuegbar, ap_ausgegeben, lebensenergie_bonus, lebensenergie_kauf, lebensenergie_max, astralenergie_bonus, astralenergie_kauf, astralenergie_max, karmaenergie_bonus, karmaenergie_kauf, karmaenergie_max, seelenkraft_bonus, seelenkraft_max, zaehigkeit_bonus, zaehigkeit_max, ausweichen_bonus, ausweichen_max, initiative_bonus, initiative_max, geschwindigkeit_bonus, geschwindigkeit_max, schicksalspunkte_bonus, schicksalspunkte_max, schicksalspunkte_aktuell, talent_fliegen_f_w, talent_fliegen_anmerkung, talent_gaukeleien_f_w, talent_gaukeleien_anmerkung, talent_klettern_f_w, talent_klettern_anmerkung, talent_koerperbeherrschung_f_w, talent_koerperbeherrschung_anmerkung, talent_kraftakt_f_w, talent_kraftakt_anmerkung, talent_reiten_f_w, talent_reiten_anmerkung, talent_schwimmen_f_w, talent_schwimmen_anmerkung, talent_selbstbeherrschung_f_w, talent_selbstbeherrschung_anmerkung, talent_singen_f_w, talent_singen_anmerkung, talent_sinnesschaerfe_f_w, talent_sinnesschaerfe_anmerkung, talent_tanzen_f_w, talent_tanzen_anmerkung, talent_taschendiebstahl_f_w, talent_taschendiebstahl_anmerkung, talent_verbergen_f_w, talent_verbergen_anmerkung, talent_zechen_f_w, talent_zechen_anmerkung, talent_bekehren_f_w, talent_bekehren_anmerkung, talent_betoeren_f_w, talent_betoeren_anmerkung, talent_einschuechtern_f_w, talent_einschuechtern_anmerkung, talent_etikette_f_w, talent_etikette_anmerkung, talent_gassenwissen_f_w, talent_gassenwissen_anmerkung, talent_menschenkenntnis_f_w, talent_menschenkenntnis_anmerkung, talent_ueberreden_f_w, talent_ueberreden_anmerkung, talent_verkleiden_f_w, talent_verkleiden_anmerkung, talent_willenskraft_f_w, talent_willenskraft_anmerkung, talent_faehrtensuchen_f_w, talent_faehrtensuchen_anmerkung, talent_fesseln_f_w, talent_fesseln_anmerkung, talent_fischen_f_w, talent_fischen_anmerkung, talent_orientierung_f_w, talent_orientierung_anmerkung, talent_pflanzenkunde_f_w, talent_pflanzenkunde_anmerkung, talent_tierkunde_f_w, talent_tierkunde_anmerkung, talent_wildnisleben_f_w, talent_wildnisleben_anmerkung, talent_brettspiel_f_w, talent_brettspiel_anmerkung, talent_geographie_f_w, talent_geographie_anmerkung, talent_geschichtswissen_f_w, talent_geschichtswissen_anmerkung, talent_goetter_f_w, talent_goetter_anmerkung, talent_kriegskunst_f_w, talent_kriegskunst_anmerkung, talent_magiekunde_f_w, talent_magiekunde_anmerkung, talent_mechanik_f_w, talent_mechanik_anmerkung, talent_rechnen_f_w, talent_rechnen_anmerkung, talent_sagen_f_w, talent_sagen_anmerkung, talent_sphaerenkunde_f_w, talent_sphaerenkunde_anmerkung, talent_sternkunde_f_w, talent_sternkunde_anmerkung, talent_alchimie_f_w, talent_alchimie_anmerkung, talent_boote_f_w, talent_boote_anmerkung, talent_fahrzeuge_f_w, talent_fahrzeuge_anmerkung, talent_handel_f_w, talent_handel_anmerkung, talent_heilkunde_gift_f_w, talent_heilkunde_gift_anmerkung, talent_heilkunde_krankheiten_f_w, talent_heilkunde_krankheiten_anmerkung, talent_heilkunde_seele_f_w, talent_heilkunde_seele_anmerkung, talent_heilkunde_wunden_f_w, talent_heilkunde_wunden_anmerkung, talent_holzbearbeitung_f_w, talent_holzbearbeitung_anmerkung, talent_lebensmittelbearbeitung_f_w, talent_lebensmittelbearbeitung_anmerkung, talent_lederbearbeitung_f_w, talent_lederbearbeitung_anmerkung, talent_malen_f_w, talent_malen_anmerkung, talent_metallbearbeitung_f_w, talent_metallbearbeitung_anmerkung, talent_musizieren_f_w, talent_musizieren_anmerkung, talent_schloesserknacken_f_w, talent_schloesserknacken_anmerkung, talent_steinbearbeitung_f_w, talent_steinbearbeitung_anmerkung, talent_stoffbearbeitung_f_w, talent_stoffbearbeitung_anmerkung, talent_rechtskunde_f_w, talent_rechtskunde_anmerkung',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, feuser_i_d, spezies, kultur, profession, erfahrungsgrad, typbeschreibung, haarfarbe, augenfarbe, groesse, gewicht, sozialstatus, mut, klugheit, intuition, charisma, fingerfertigkeit, gewandheit, konstitution, koerperkraft, lebensenergie, astralenergie, karmaenergie, seelenkraft, zaehigkeit, ausweichen, initiative, geschwindigkeit, schicksalspunkte, vorteile, nachteile, sfallg, familie, geburtsort, geburtsdatum, goetterlaeufe, geschlecht, titel, charakteristika, sonstiges, ap_gesamt, ap_verfuegbar, ap_ausgegeben, lebensenergie_bonus, lebensenergie_kauf, lebensenergie_max, astralenergie_bonus, astralenergie_kauf, astralenergie_max, karmaenergie_bonus, karmaenergie_kauf, karmaenergie_max, seelenkraft_bonus, seelenkraft_max, zaehigkeit_bonus, zaehigkeit_max, ausweichen_bonus, ausweichen_max, initiative_bonus, initiative_max, geschwindigkeit_bonus, geschwindigkeit_max, schicksalspunkte_bonus, schicksalspunkte_max, schicksalspunkte_aktuell, talent_fliegen_f_w, talent_fliegen_anmerkung, talent_gaukeleien_f_w, talent_gaukeleien_anmerkung, talent_klettern_f_w, talent_klettern_anmerkung, talent_koerperbeherrschung_f_w, talent_koerperbeherrschung_anmerkung, talent_kraftakt_f_w, talent_kraftakt_anmerkung, talent_reiten_f_w, talent_reiten_anmerkung, talent_schwimmen_f_w, talent_schwimmen_anmerkung, talent_selbstbeherrschung_f_w, talent_selbstbeherrschung_anmerkung, talent_singen_f_w, talent_singen_anmerkung, talent_sinnesschaerfe_f_w, talent_sinnesschaerfe_anmerkung, talent_tanzen_f_w, talent_tanzen_anmerkung, talent_taschendiebstahl_f_w, talent_taschendiebstahl_anmerkung, talent_verbergen_f_w, talent_verbergen_anmerkung, talent_zechen_f_w, talent_zechen_anmerkung, talent_bekehren_f_w, talent_bekehren_anmerkung, talent_betoeren_f_w, talent_betoeren_anmerkung, talent_einschuechtern_f_w, talent_einschuechtern_anmerkung, talent_etikette_f_w, talent_etikette_anmerkung, talent_gassenwissen_f_w, talent_gassenwissen_anmerkung, talent_menschenkenntnis_f_w, talent_menschenkenntnis_anmerkung, talent_ueberreden_f_w, talent_ueberreden_anmerkung, talent_verkleiden_f_w, talent_verkleiden_anmerkung, talent_willenskraft_f_w, talent_willenskraft_anmerkung, talent_faehrtensuchen_f_w, talent_faehrtensuchen_anmerkung, talent_fesseln_f_w, talent_fesseln_anmerkung, talent_fischen_f_w, talent_fischen_anmerkung, talent_orientierung_f_w, talent_orientierung_anmerkung, talent_pflanzenkunde_f_w, talent_pflanzenkunde_anmerkung, talent_tierkunde_f_w, talent_tierkunde_anmerkung, talent_wildnisleben_f_w, talent_wildnisleben_anmerkung, talent_brettspiel_f_w, talent_brettspiel_anmerkung, talent_geographie_f_w, talent_geographie_anmerkung, talent_geschichtswissen_f_w, talent_geschichtswissen_anmerkung, talent_goetter_f_w, talent_goetter_anmerkung, talent_kriegskunst_f_w, talent_kriegskunst_anmerkung, talent_magiekunde_f_w, talent_magiekunde_anmerkung, talent_mechanik_f_w, talent_mechanik_anmerkung, talent_rechnen_f_w, talent_rechnen_anmerkung, talent_sagen_f_w, talent_sagen_anmerkung, talent_sphaerenkunde_f_w, talent_sphaerenkunde_anmerkung, talent_sternkunde_f_w, talent_sternkunde_anmerkung, talent_alchimie_f_w, talent_alchimie_anmerkung, talent_boote_f_w, talent_boote_anmerkung, talent_fahrzeuge_f_w, talent_fahrzeuge_anmerkung, talent_handel_f_w, talent_handel_anmerkung, talent_heilkunde_gift_f_w, talent_heilkunde_gift_anmerkung, talent_heilkunde_krankheiten_f_w, talent_heilkunde_krankheiten_anmerkung, talent_heilkunde_seele_f_w, talent_heilkunde_seele_anmerkung, talent_heilkunde_wunden_f_w, talent_heilkunde_wunden_anmerkung, talent_holzbearbeitung_f_w, talent_holzbearbeitung_anmerkung, talent_lebensmittelbearbeitung_f_w, talent_lebensmittelbearbeitung_anmerkung, talent_lederbearbeitung_f_w, talent_lederbearbeitung_anmerkung, talent_malen_f_w, talent_malen_anmerkung, talent_metallbearbeitung_f_w, talent_metallbearbeitung_anmerkung, talent_musizieren_f_w, talent_musizieren_anmerkung, talent_schloesserknacken_f_w, talent_schloesserknacken_anmerkung, talent_steinbearbeitung_f_w, talent_steinbearbeitung_anmerkung, talent_stoffbearbeitung_f_w, talent_stoffbearbeitung_anmerkung, talent_rechtskunde_f_w, talent_rechtskunde_anmerkung, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_scdsacharmanager_domain_model_character',
				'foreign_table_where' => 'AND tx_scdsacharmanager_domain_model_character.pid=###CURRENT_PID### AND tx_scdsacharmanager_domain_model_character.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'feuser_i_d' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.feuser_i_d',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			)
		),
		'spezies' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.spezies',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'kultur' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.kultur',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'profession' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.profession',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'erfahrungsgrad' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.erfahrungsgrad',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'typbeschreibung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.typbeschreibung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'haarfarbe' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.haarfarbe',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'augenfarbe' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.augenfarbe',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'groesse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.groesse',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'gewicht' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.gewicht',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sozialstatus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.sozialstatus',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mut' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.mut',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'klugheit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.klugheit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'intuition' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.intuition',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'charisma' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.charisma',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'fingerfertigkeit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.fingerfertigkeit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'gewandheit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.gewandheit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'konstitution' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.konstitution',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'koerperkraft' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.koerperkraft',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'lebensenergie' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.lebensenergie',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'astralenergie' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.astralenergie',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'karmaenergie' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.karmaenergie',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'seelenkraft' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.seelenkraft',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'zaehigkeit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.zaehigkeit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ausweichen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.ausweichen',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'initiative' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.initiative',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'geschwindigkeit' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.geschwindigkeit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'schicksalspunkte' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.schicksalspunkte',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'vorteile' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.vorteile',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'nachteile' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.nachteile',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sfallg' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.sfallg',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'familie' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.familie',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'geburtsort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.geburtsort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'geburtsdatum' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.geburtsdatum',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'goetterlaeufe' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.goetterlaeufe',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'geschlecht' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.geschlecht',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'titel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.titel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'charakteristika' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.charakteristika',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sonstiges' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.sonstiges',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ap_gesamt' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.ap_gesamt',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ap_verfuegbar' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.ap_verfuegbar',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ap_ausgegeben' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.ap_ausgegeben',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'lebensenergie_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.lebensenergie_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'lebensenergie_kauf' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.lebensenergie_kauf',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'lebensenergie_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.lebensenergie_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'astralenergie_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.astralenergie_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'astralenergie_kauf' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.astralenergie_kauf',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'astralenergie_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.astralenergie_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'karmaenergie_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.karmaenergie_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'karmaenergie_kauf' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.karmaenergie_kauf',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'karmaenergie_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.karmaenergie_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'seelenkraft_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.seelenkraft_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'seelenkraft_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.seelenkraft_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'zaehigkeit_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.zaehigkeit_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'zaehigkeit_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.zaehigkeit_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ausweichen_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.ausweichen_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'ausweichen_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.ausweichen_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'initiative_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.initiative_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'initiative_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.initiative_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'geschwindigkeit_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.geschwindigkeit_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'geschwindigkeit_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.geschwindigkeit_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'schicksalspunkte_bonus' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.schicksalspunkte_bonus',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'schicksalspunkte_max' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.schicksalspunkte_max',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'schicksalspunkte_aktuell' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.schicksalspunkte_aktuell',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_fliegen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fliegen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_fliegen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fliegen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_gaukeleien_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_gaukeleien_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_gaukeleien_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_gaukeleien_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_klettern_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_klettern_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_klettern_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_klettern_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_koerperbeherrschung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_koerperbeherrschung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_koerperbeherrschung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_koerperbeherrschung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_kraftakt_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_kraftakt_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_kraftakt_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_kraftakt_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_reiten_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_reiten_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_reiten_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_reiten_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_schwimmen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_schwimmen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_schwimmen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_schwimmen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_selbstbeherrschung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_selbstbeherrschung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_selbstbeherrschung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_selbstbeherrschung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_singen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_singen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_singen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_singen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_sinnesschaerfe_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sinnesschaerfe_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_sinnesschaerfe_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sinnesschaerfe_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_tanzen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_tanzen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_tanzen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_tanzen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_taschendiebstahl_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_taschendiebstahl_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_taschendiebstahl_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_taschendiebstahl_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_verbergen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_verbergen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_verbergen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_verbergen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_zechen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_zechen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_zechen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_zechen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_bekehren_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_bekehren_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_bekehren_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_bekehren_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_betoeren_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_betoeren_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_betoeren_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_betoeren_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_einschuechtern_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_einschuechtern_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_einschuechtern_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_einschuechtern_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_etikette_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_etikette_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_etikette_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_etikette_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_gassenwissen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_gassenwissen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_gassenwissen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_gassenwissen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_menschenkenntnis_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_menschenkenntnis_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_menschenkenntnis_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_menschenkenntnis_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_ueberreden_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_ueberreden_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_ueberreden_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_ueberreden_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_verkleiden_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_verkleiden_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_verkleiden_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_verkleiden_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_willenskraft_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_willenskraft_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_willenskraft_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_willenskraft_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_faehrtensuchen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_faehrtensuchen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_faehrtensuchen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_faehrtensuchen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_fesseln_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fesseln_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_fesseln_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fesseln_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_fischen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fischen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_fischen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fischen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_orientierung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_orientierung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_orientierung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_orientierung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_pflanzenkunde_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_pflanzenkunde_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_pflanzenkunde_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_pflanzenkunde_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_tierkunde_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_tierkunde_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_tierkunde_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_tierkunde_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_wildnisleben_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_wildnisleben_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_wildnisleben_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_wildnisleben_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_brettspiel_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_brettspiel_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_brettspiel_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_brettspiel_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_geographie_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_geographie_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_geographie_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_geographie_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_geschichtswissen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_geschichtswissen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_geschichtswissen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_geschichtswissen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_goetter_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_goetter_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_goetter_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_goetter_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_kriegskunst_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_kriegskunst_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_kriegskunst_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_kriegskunst_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_magiekunde_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_magiekunde_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_magiekunde_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_magiekunde_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_mechanik_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_mechanik_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_mechanik_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_mechanik_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_rechnen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_rechnen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_rechnen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_rechnen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_sagen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sagen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_sagen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sagen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_sphaerenkunde_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sphaerenkunde_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_sphaerenkunde_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sphaerenkunde_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_sternkunde_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sternkunde_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_sternkunde_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_sternkunde_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_alchimie_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_alchimie_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_alchimie_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_alchimie_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_boote_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_boote_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_boote_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_boote_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_fahrzeuge_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fahrzeuge_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_fahrzeuge_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_fahrzeuge_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_handel_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_handel_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_handel_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_handel_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_heilkunde_gift_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_gift_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_heilkunde_gift_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_gift_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_heilkunde_krankheiten_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_krankheiten_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_heilkunde_krankheiten_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_krankheiten_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_heilkunde_seele_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_seele_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_heilkunde_seele_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_seele_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_heilkunde_wunden_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_wunden_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_heilkunde_wunden_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_heilkunde_wunden_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_holzbearbeitung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_holzbearbeitung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_holzbearbeitung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_holzbearbeitung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_lebensmittelbearbeitung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_lebensmittelbearbeitung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_lebensmittelbearbeitung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_lebensmittelbearbeitung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_lederbearbeitung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_lederbearbeitung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_lederbearbeitung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_lederbearbeitung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_malen_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_malen_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_malen_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_malen_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_metallbearbeitung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_metallbearbeitung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_metallbearbeitung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_metallbearbeitung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_musizieren_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_musizieren_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_musizieren_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_musizieren_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_schloesserknacken_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_schloesserknacken_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_schloesserknacken_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_schloesserknacken_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_steinbearbeitung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_steinbearbeitung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_steinbearbeitung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_steinbearbeitung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_stoffbearbeitung_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_stoffbearbeitung_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_stoffbearbeitung_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_stoffbearbeitung_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'talent_rechtskunde_f_w' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_rechtskunde_f_w',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'talent_rechtskunde_anmerkung' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sc_dsacharmanager/Resources/Private/Language/locallang_db.xlf:tx_scdsacharmanager_domain_model_character.talent_rechtskunde_anmerkung',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
	),
);
