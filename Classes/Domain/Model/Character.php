<?php
namespace DSACharManager\ScDsacharmanager\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Sebastian Christoph <sxbxstxxn@googlemail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Character
 */
class Character extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';
    
    /**
     * feuserID
     *
     * @var int
     * @validate NotEmpty
     */
    public $feuserID = 0;
    
    /**
     * spezies
     *
     * @var string
     */
    protected $spezies = '';
    
    /**
     * kultur
     *
     * @var string
     */
    protected $kultur = '';
    
    /**
     * profession
     *
     * @var string
     */
    protected $profession = '';
    
    /**
     * erfahrungsgrad
     *
     * @var string
     */
    protected $erfahrungsgrad = '';
    
    /**
     * typbeschreibung
     *
     * @var string
     */
    protected $typbeschreibung = '';
    
    /**
     * haarfarbe
     *
     * @var string
     */
    protected $haarfarbe = '';
    
    /**
     * augenfarbe
     *
     * @var string
     */
    protected $augenfarbe = '';
    
    /**
     * groesse
     *
     * @var string
     */
    protected $groesse = '';
    
    /**
     * gewicht
     *
     * @var string
     */
    protected $gewicht = '';
    
    /**
     * sozialstatus
     *
     * @var string
     */
    protected $sozialstatus = '';
    
    /**
     * mut
     *
     * @var int
     */
    protected $mut = 0;
    
    /**
     * klugheit
     *
     * @var int
     */
    protected $klugheit = 0;
    
    /**
     * intuition
     *
     * @var int
     */
    protected $intuition = 0;
    
    /**
     * charisma
     *
     * @var int
     */
    protected $charisma = 0;
    
    /**
     * fingerfertigkeit
     *
     * @var int
     */
    protected $fingerfertigkeit = '';
    
    /**
     * gewandheit
     *
     * @var int
     */
    protected $gewandheit = 0;
    
    /**
     * konstitution
     *
     * @var int
     */
    protected $konstitution = 0;
    
    /**
     * koerperkraft
     *
     * @var int
     */
    protected $koerperkraft = 0;
    
    /**
     * lebensenergie
     *
     * @var int
     */
    protected $lebensenergie = 0;
    
    /**
     * astralenergie
     *
     * @var int
     */
    protected $astralenergie = 0;
    
    /**
     * karmaenergie
     *
     * @var int
     */
    protected $karmaenergie = 0;
    
    /**
     * seelenkraft
     *
     * @var int
     */
    protected $seelenkraft = 0;
    
    /**
     * zaehigkeit
     *
     * @var int
     */
    protected $zaehigkeit = 0;
    
    /**
     * ausweichen
     *
     * @var int
     */
    protected $ausweichen = 0;
    
    /**
     * initiative
     *
     * @var int
     */
    protected $initiative = 0;
    
    /**
     * geschwindigkeit
     *
     * @var int
     */
    protected $geschwindigkeit = 0;
    
    /**
     * schicksalspunkte
     *
     * @var int
     */
    protected $schicksalspunkte = 0;
    
    /**
     * vorteile
     *
     * @var string
     */
    protected $vorteile = '';
    
    /**
     * nachteile
     *
     * @var string
     */
    protected $nachteile = '';
    
    /**
     * sfallg
     *
     * @var string
     */
    protected $sfallg = '';
    
    /**
     * familie
     *
     * @var string
     */
    protected $familie = '';
    
    /**
     * geburtsort
     *
     * @var string
     */
    protected $geburtsort = '';
    
    /**
     * geburtsdatum
     *
     * @var string
     */
    protected $geburtsdatum = '';
    
    /**
     * goetterlaeufe
     *
     * @var string
     */
    protected $goetterlaeufe = '';
    
    /**
     * geschlecht
     *
     * @var string
     */
    protected $geschlecht = '';
    
    /**
     * titel
     *
     * @var string
     */
    protected $titel = '';
    
    /**
     * charakteristika
     *
     * @var string
     */
    protected $charakteristika = '';
    
    /**
     * sonstiges
     *
     * @var string
     */
    protected $sonstiges = '';
    
    /**
     * apGesamt
     *
     * @var int
     */
    protected $apGesamt = 0;
    
    /**
     * apVerfuegbar
     *
     * @var int
     */
    protected $apVerfuegbar = 0;
    
    /**
     * apAusgegeben
     *
     * @var int
     */
    protected $apAusgegeben = 0;
    
    /**
     * lebensenergieBonus
     *
     * @var int
     */
    protected $lebensenergieBonus = 0;
    
    /**
     * lebensenergieKauf
     *
     * @var int
     */
    protected $lebensenergieKauf = 0;
    
    /**
     * lebensenergieMax
     *
     * @var int
     */
    protected $lebensenergieMax = 0;
    
    /**
     * astralenergieBonus
     *
     * @var int
     */
    protected $astralenergieBonus = 0;
    
    /**
     * astralenergieKauf
     *
     * @var int
     */
    protected $astralenergieKauf = 0;
    
    /**
     * astralenergieMax
     *
     * @var int
     */
    protected $astralenergieMax = 0;
    
    /**
     * karmaenergieBonus
     *
     * @var int
     */
    protected $karmaenergieBonus = 0;
    
    /**
     * karmaenergieKauf
     *
     * @var int
     */
    protected $karmaenergieKauf = 0;
    
    /**
     * karmaenergieMax
     *
     * @var int
     */
    protected $karmaenergieMax = 0;
    
    /**
     * seelenkraftBonus
     *
     * @var int
     */
    protected $seelenkraftBonus = 0;
    
    /**
     * seelenkraftMax
     *
     * @var int
     */
    protected $seelenkraftMax = 0;
    
    /**
     * zaehigkeitBonus
     *
     * @var int
     */
    protected $zaehigkeitBonus = 0;
    
    /**
     * zaehigkeitMax
     *
     * @var int
     */
    protected $zaehigkeitMax = 0;
    
    /**
     * ausweichenBonus
     *
     * @var int
     */
    protected $ausweichenBonus = 0;
    
    /**
     * ausweichenMax
     *
     * @var int
     */
    protected $ausweichenMax = 0;
    
    /**
     * initiativeBonus
     *
     * @var int
     */
    protected $initiativeBonus = 0;
    
    /**
     * initiativeMax
     *
     * @var int
     */
    protected $initiativeMax = 0;
    
    /**
     * geschwindigkeitBonus
     *
     * @var int
     */
    protected $geschwindigkeitBonus = 0;
    
    /**
     * geschwindigkeitMax
     *
     * @var int
     */
    protected $geschwindigkeitMax = 0;
    
    /**
     * schicksalspunkteBonus
     *
     * @var int
     */
    protected $schicksalspunkteBonus = 0;
    
    /**
     * schicksalspunkteMax
     *
     * @var int
     */
    protected $schicksalspunkteMax = 0;
    
    /**
     * schicksalspunkteAktuell
     *
     * @var int
     */
    protected $schicksalspunkteAktuell = 0;
    
    /**
     * talentFliegenFW
     *
     * @var int
     */
    protected $talentFliegenFW = 0;
    
    /**
     * talentFliegenAnmerkung
     *
     * @var string
     */
    protected $talentFliegenAnmerkung = '';
    
    /**
     * talentGaukeleienFW
     *
     * @var int
     */
    protected $talentGaukeleienFW = 0;
    
    /**
     * talentGaukeleienAnmerkung
     *
     * @var string
     */
    protected $talentGaukeleienAnmerkung = '';
    
    /**
     * talentKletternFW
     *
     * @var int
     */
    protected $talentKletternFW = 0;
    
    /**
     * talentKletternAnmerkung
     *
     * @var string
     */
    protected $talentKletternAnmerkung = '';
    
    /**
     * talentKoerperbeherrschungFW
     *
     * @var int
     */
    protected $talentKoerperbeherrschungFW = 0;
    
    /**
     * talentKoerperbeherrschungAnmerkung
     *
     * @var string
     */
    protected $talentKoerperbeherrschungAnmerkung = '';
    
    /**
     * talentKraftaktFW
     *
     * @var int
     */
    protected $talentKraftaktFW = 0;
    
    /**
     * talentKraftaktAnmerkung
     *
     * @var string
     */
    protected $talentKraftaktAnmerkung = '';
    
    /**
     * talentReitenFW
     *
     * @var int
     */
    protected $talentReitenFW = 0;
    
    /**
     * talentReitenAnmerkung
     *
     * @var string
     */
    protected $talentReitenAnmerkung = '';
    
    /**
     * talentSchwimmenFW
     *
     * @var int
     */
    protected $talentSchwimmenFW = 0;
    
    /**
     * talentSchwimmenAnmerkung
     *
     * @var string
     */
    protected $talentSchwimmenAnmerkung = '';
    
    /**
     * talentSelbstbeherrschungFW
     *
     * @var int
     */
    protected $talentSelbstbeherrschungFW = 0;
    
    /**
     * talentSelbstbeherrschungAnmerkung
     *
     * @var string
     */
    protected $talentSelbstbeherrschungAnmerkung = '';
    
    /**
     * talentSingenFW
     *
     * @var int
     */
    protected $talentSingenFW = 0;
    
    /**
     * talentSingenAnmerkung
     *
     * @var string
     */
    protected $talentSingenAnmerkung = '';
    
    /**
     * talentSinnesschaerfeFW
     *
     * @var int
     */
    protected $talentSinnesschaerfeFW = 0;
    
    /**
     * talentSinnesschaerfeAnmerkung
     *
     * @var string
     */
    protected $talentSinnesschaerfeAnmerkung = '';
    
    /**
     * talentTanzenFW
     *
     * @var int
     */
    protected $talentTanzenFW = 0;
    
    /**
     * talentTanzenAnmerkung
     *
     * @var string
     */
    protected $talentTanzenAnmerkung = '';
    
    /**
     * talentTaschendiebstahlFW
     *
     * @var int
     */
    protected $talentTaschendiebstahlFW = 0;
    
    /**
     * talentTaschendiebstahlAnmerkung
     *
     * @var string
     */
    protected $talentTaschendiebstahlAnmerkung = 0;
    
    /**
     * talentVerbergenFW
     *
     * @var int
     */
    protected $talentVerbergenFW = 0;
    
    /**
     * talentVerbergenAnmerkung
     *
     * @var string
     */
    protected $talentVerbergenAnmerkung = '';
    
    /**
     * talentZechenFW
     *
     * @var int
     */
    protected $talentZechenFW = 0;
    
    /**
     * talentZechenAnmerkung
     *
     * @var string
     */
    protected $talentZechenAnmerkung = '';
    
    /**
     * talentBekehrenFW
     *
     * @var int
     */
    protected $talentBekehrenFW = 0;
    
    /**
     * talentBekehrenAnmerkung
     *
     * @var string
     */
    protected $talentBekehrenAnmerkung = '';
    
    /**
     * talentBetoerenFW
     *
     * @var int
     */
    protected $talentBetoerenFW = 0;
    
    /**
     * talentBetoerenAnmerkung
     *
     * @var string
     */
    protected $talentBetoerenAnmerkung = '';
    
    /**
     * talentEinschuechternFW
     *
     * @var int
     */
    protected $talentEinschuechternFW = 0;
    
    /**
     * talentEinschuechternAnmerkung
     *
     * @var string
     */
    protected $talentEinschuechternAnmerkung = '';
    
    /**
     * talentEtiketteFW
     *
     * @var int
     */
    protected $talentEtiketteFW = 0;
    
    /**
     * talentEtiketteAnmerkung
     *
     * @var string
     */
    protected $talentEtiketteAnmerkung = '';
    
    /**
     * talentGassenwissenFW
     *
     * @var int
     */
    protected $talentGassenwissenFW = 0;
    
    /**
     * talentGassenwissenAnmerkung
     *
     * @var string
     */
    protected $talentGassenwissenAnmerkung = '';
    
    /**
     * talentMenschenkenntnisFW
     *
     * @var int
     */
    protected $talentMenschenkenntnisFW = 0;
    
    /**
     * talentMenschenkenntnisAnmerkung
     *
     * @var string
     */
    protected $talentMenschenkenntnisAnmerkung = '';
    
    /**
     * talentUeberredenFW
     *
     * @var int
     */
    protected $talentUeberredenFW = 0;
    
    /**
     * talentUeberredenAnmerkung
     *
     * @var string
     */
    protected $talentUeberredenAnmerkung = '';
    
    /**
     * talentVerkleidenFW
     *
     * @var int
     */
    protected $talentVerkleidenFW = 0;
    
    /**
     * talentVerkleidenAnmerkung
     *
     * @var string
     */
    protected $talentVerkleidenAnmerkung = '';
    
    /**
     * talentWillenskraftFW
     *
     * @var int
     */
    protected $talentWillenskraftFW = 0;
    
    /**
     * talentWillenskraftAnmerkung
     *
     * @var string
     */
    protected $talentWillenskraftAnmerkung = '';
    
    /**
     * talentFaehrtensuchenFW
     *
     * @var int
     */
    protected $talentFaehrtensuchenFW = 0;
    
    /**
     * talentFaehrtensuchenAnmerkung
     *
     * @var string
     */
    protected $talentFaehrtensuchenAnmerkung = '';
    
    /**
     * talentFesselnFW
     *
     * @var int
     */
    protected $talentFesselnFW = 0;
    
    /**
     * talentFesselnAnmerkung
     *
     * @var string
     */
    protected $talentFesselnAnmerkung = '';
    
    /**
     * talentFischenFW
     *
     * @var int
     */
    protected $talentFischenFW = 0;
    
    /**
     * talentFischenAnmerkung
     *
     * @var string
     */
    protected $talentFischenAnmerkung = '';
    
    /**
     * talentOrientierungFW
     *
     * @var int
     */
    protected $talentOrientierungFW = 0;
    
    /**
     * talentOrientierungAnmerkung
     *
     * @var string
     */
    protected $talentOrientierungAnmerkung = '';
    
    /**
     * talentPflanzenkundeFW
     *
     * @var int
     */
    protected $talentPflanzenkundeFW = 0;
    
    /**
     * talentPflanzenkundeAnmerkung
     *
     * @var string
     */
    protected $talentPflanzenkundeAnmerkung = '';
    
    /**
     * talentTierkundeFW
     *
     * @var int
     */
    protected $talentTierkundeFW = 0;
    
    /**
     * talentTierkundeAnmerkung
     *
     * @var string
     */
    protected $talentTierkundeAnmerkung = '';
    
    /**
     * talentWildnislebenFW
     *
     * @var int
     */
    protected $talentWildnislebenFW = 0;
    
    /**
     * talentWildnislebenAnmerkung
     *
     * @var string
     */
    protected $talentWildnislebenAnmerkung = '';
    
    /**
     * talentBrettspielFW
     *
     * @var int
     */
    protected $talentBrettspielFW = 0;
    
    /**
     * talentBrettspielAnmerkung
     *
     * @var string
     */
    protected $talentBrettspielAnmerkung = '';
    
    /**
     * talentGeographieFW
     *
     * @var int
     */
    protected $talentGeographieFW = 0;
    
    /**
     * talentGeographieAnmerkung
     *
     * @var string
     */
    protected $talentGeographieAnmerkung = '';
    
    /**
     * talentGeschichtswissenFW
     *
     * @var int
     */
    protected $talentGeschichtswissenFW = 0;
    
    /**
     * talentGeschichtswissenAnmerkung
     *
     * @var string
     */
    protected $talentGeschichtswissenAnmerkung = '';
    
    /**
     * talentGoetterFW
     *
     * @var int
     */
    protected $talentGoetterFW = 0;
    
    /**
     * talentGoetterAnmerkung
     *
     * @var string
     */
    protected $talentGoetterAnmerkung = '';
    
    /**
     * talentKriegskunstFW
     *
     * @var int
     */
    protected $talentKriegskunstFW = 0;
    
    /**
     * talentKriegskunstAnmerkung
     *
     * @var string
     */
    protected $talentKriegskunstAnmerkung = '';
    
    /**
     * talentMagiekundeFW
     *
     * @var int
     */
    protected $talentMagiekundeFW = 0;
    
    /**
     * talentMagiekundeAnmerkung
     *
     * @var string
     */
    protected $talentMagiekundeAnmerkung = '';
    
    /**
     * talentMechanikFW
     *
     * @var int
     */
    protected $talentMechanikFW = 0;
    
    /**
     * talentMechanikAnmerkung
     *
     * @var string
     */
    protected $talentMechanikAnmerkung = '';
    
    /**
     * talentRechnenFW
     *
     * @var int
     */
    protected $talentRechnenFW = 0;
    
    /**
     * talentRechnenAnmerkung
     *
     * @var string
     */
    protected $talentRechnenAnmerkung = '';
    
    /**
     * talentSagenFW
     *
     * @var int
     */
    protected $talentSagenFW = 0;
    
    /**
     * talentSagenAnmerkung
     *
     * @var string
     */
    protected $talentSagenAnmerkung = '';
    
    /**
     * talentSphaerenkundeFW
     *
     * @var int
     */
    protected $talentSphaerenkundeFW = 0;
    
    /**
     * talentSphaerenkundeAnmerkung
     *
     * @var string
     */
    protected $talentSphaerenkundeAnmerkung = '';
    
    /**
     * talentSternkundeFW
     *
     * @var int
     */
    protected $talentSternkundeFW = 0;
    
    /**
     * talentSternkundeAnmerkung
     *
     * @var string
     */
    protected $talentSternkundeAnmerkung = '';
    
    /**
     * talentAlchimieFW
     *
     * @var int
     */
    protected $talentAlchimieFW = 0;
    
    /**
     * talentAlchimieAnmerkung
     *
     * @var string
     */
    protected $talentAlchimieAnmerkung = '';
    
    /**
     * talentBooteFW
     *
     * @var int
     */
    protected $talentBooteFW = 0;
    
    /**
     * talentBooteAnmerkung
     *
     * @var string
     */
    protected $talentBooteAnmerkung = '';
    
    /**
     * talentFahrzeugeFW
     *
     * @var int
     */
    protected $talentFahrzeugeFW = 0;
    
    /**
     * talentFahrzeugeAnmerkung
     *
     * @var string
     */
    protected $talentFahrzeugeAnmerkung = '';
    
    /**
     * talentHandelFW
     *
     * @var int
     */
    protected $talentHandelFW = 0;
    
    /**
     * talentHandelAnmerkung
     *
     * @var string
     */
    protected $talentHandelAnmerkung = '';
    
    /**
     * talentHeilkundeGiftFW
     *
     * @var int
     */
    protected $talentHeilkundeGiftFW = 0;
    
    /**
     * talentHeilkundeGiftAnmerkung
     *
     * @var string
     */
    protected $talentHeilkundeGiftAnmerkung = '';
    
    /**
     * talentHeilkundeKrankheitenFW
     *
     * @var int
     */
    protected $talentHeilkundeKrankheitenFW = 0;
    
    /**
     * talentHeilkundeKrankheitenAnmerkung
     *
     * @var string
     */
    protected $talentHeilkundeKrankheitenAnmerkung = '';
    
    /**
     * talentHeilkundeSeeleFW
     *
     * @var int
     */
    protected $talentHeilkundeSeeleFW = 0;
    
    /**
     * talentHeilkundeSeeleAnmerkung
     *
     * @var string
     */
    protected $talentHeilkundeSeeleAnmerkung = '';
    
    /**
     * talentHeilkundeWundenFW
     *
     * @var int
     */
    protected $talentHeilkundeWundenFW = 0;
    
    /**
     * talentHeilkundeWundenAnmerkung
     *
     * @var string
     */
    protected $talentHeilkundeWundenAnmerkung = '';
    
    /**
     * talentHolzbearbeitungFW
     *
     * @var int
     */
    protected $talentHolzbearbeitungFW = 0;
    
    /**
     * talentHolzbearbeitungAnmerkung
     *
     * @var string
     */
    protected $talentHolzbearbeitungAnmerkung = '';
    
    /**
     * talentLebensmittelbearbeitungFW
     *
     * @var int
     */
    protected $talentLebensmittelbearbeitungFW = 0;
    
    /**
     * talentLebensmittelbearbeitungAnmerkung
     *
     * @var string
     */
    protected $talentLebensmittelbearbeitungAnmerkung = '';
    
    /**
     * talentLederbearbeitungFW
     *
     * @var int
     */
    protected $talentLederbearbeitungFW = 0;
    
    /**
     * talentLederbearbeitungAnmerkung
     *
     * @var string
     */
    protected $talentLederbearbeitungAnmerkung = '';
    
    /**
     * talentMalenFW
     *
     * @var int
     */
    protected $talentMalenFW = 0;
    
    /**
     * talentMalenAnmerkung
     *
     * @var string
     */
    protected $talentMalenAnmerkung = '';
    
    /**
     * talentMetallbearbeitungFW
     *
     * @var int
     */
    protected $talentMetallbearbeitungFW = 0;
    
    /**
     * talentMetallbearbeitungAnmerkung
     *
     * @var string
     */
    protected $talentMetallbearbeitungAnmerkung = '';
    
    /**
     * talentMusizierenFW
     *
     * @var int
     */
    protected $talentMusizierenFW = 0;
    
    /**
     * talentMusizierenAnmerkung
     *
     * @var string
     */
    protected $talentMusizierenAnmerkung = '';
    
    /**
     * talentSchloesserknackenFW
     *
     * @var int
     */
    protected $talentSchloesserknackenFW = 0;
    
    /**
     * talentSchloesserknackenAnmerkung
     *
     * @var string
     */
    protected $talentSchloesserknackenAnmerkung = '';
    
    /**
     * talentSteinbearbeitungFW
     *
     * @var int
     */
    protected $talentSteinbearbeitungFW = 0;
    
    /**
     * talentSteinbearbeitungAnmerkung
     *
     * @var string
     */
    protected $talentSteinbearbeitungAnmerkung = '';
    
    /**
     * talentStoffbearbeitungFW
     *
     * @var int
     */
    protected $talentStoffbearbeitungFW = 0;
    
    /**
     * talentStoffbearbeitungAnmerkung
     *
     * @var string
     */
    protected $talentStoffbearbeitungAnmerkung = '';
    
    /**
     * talentRechtskundeFW
     *
     * @var int
     */
    protected $talentRechtskundeFW = 0;
    
    /**
     * talentRechtskundeAnmerkung
     *
     * @var string
     */
    protected $talentRechtskundeAnmerkung = '';
    
    /**
     * sprachen
     *
     * @var string
     */
    protected $sprachen = '';
    
    /**
     * schriften
     *
     * @var string
     */
    protected $schriften = '';
    
    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns the feuserID
     *
     * @return integer feuserID
     */
    public function getFeuserID()
    {
        return $this->feuserID;
    }
    
    /**
     * Sets the feuserID
     *
     * @param integer $feuserID
     * @return integer feuserID
     */
    public function setFeuserID($feuserID)
    {
        $this->feuserID = $feuserID;
    }
    
    /**
     * Returns the kultur
     *
     * @return string $kultur
     */
    public function getKultur()
    {
        return $this->kultur;
    }
    
    /**
     * Sets the kultur
     *
     * @param string $kultur
     * @return void
     */
    public function setKultur($kultur)
    {
        $this->kultur = $kultur;
    }
    
    /**
     * Returns the profession
     *
     * @return string $profession
     */
    public function getProfession()
    {
        return $this->profession;
    }
    
    /**
     * Sets the profession
     *
     * @param string $profession
     * @return void
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }
    
    /**
     * Returns the erfahrungsgrad
     *
     * @return string $erfahrungsgrad
     */
    public function getErfahrungsgrad()
    {
        return $this->erfahrungsgrad;
    }
    
    /**
     * Sets the erfahrungsgrad
     *
     * @param string $erfahrungsgrad
     * @return void
     */
    public function setErfahrungsgrad($erfahrungsgrad)
    {
        $this->erfahrungsgrad = $erfahrungsgrad;
    }
    
    /**
     * Returns the haarfarbe
     *
     * @return string $haarfarbe
     */
    public function getHaarfarbe()
    {
        return $this->haarfarbe;
    }
    
    /**
     * Sets the haarfarbe
     *
     * @param string $haarfarbe
     * @return void
     */
    public function setHaarfarbe($haarfarbe)
    {
        $this->haarfarbe = $haarfarbe;
    }
    
    /**
     * Returns the augenfarbe
     *
     * @return string $augenfarbe
     */
    public function getAugenfarbe()
    {
        return $this->augenfarbe;
    }
    
    /**
     * Sets the augenfarbe
     *
     * @param string $augenfarbe
     * @return void
     */
    public function setAugenfarbe($augenfarbe)
    {
        $this->augenfarbe = $augenfarbe;
    }
    
    /**
     * Returns the groesse
     *
     * @return string $groesse
     */
    public function getGroesse()
    {
        return $this->groesse;
    }
    
    /**
     * Sets the groesse
     *
     * @param string $groesse
     * @return void
     */
    public function setGroesse($groesse)
    {
        $this->groesse = $groesse;
    }
    
    /**
     * Returns the gewicht
     *
     * @return string $gewicht
     */
    public function getGewicht()
    {
        return $this->gewicht;
    }
    
    /**
     * Sets the gewicht
     *
     * @param string $gewicht
     * @return void
     */
    public function setGewicht($gewicht)
    {
        $this->gewicht = $gewicht;
    }
    
    /**
     * Returns the sozialstatus
     *
     * @return string $sozialstatus
     */
    public function getSozialstatus()
    {
        return $this->sozialstatus;
    }
    
    /**
     * Sets the sozialstatus
     *
     * @param string $sozialstatus
     * @return void
     */
    public function setSozialstatus($sozialstatus)
    {
        $this->sozialstatus = $sozialstatus;
    }
    
    /**
     * Returns the mut
     *
     * @return integer $mut
     */
    public function getMut()
    {
        return $this->mut;
    }
    
    /**
     * Sets the mut
     *
     * @param integer $mut
     * @return void
     */
    public function setMut($mut)
    {
        $this->mut = $mut;
    }
    
    /**
     * Returns the klugheit
     *
     * @return integer $klugheit
     */
    public function getKlugheit()
    {
        return $this->klugheit;
    }
    
    /**
     * Sets the klugheit
     *
     * @param integer $klugheit
     * @return void
     */
    public function setKlugheit($klugheit)
    {
        $this->klugheit = $klugheit;
    }
    
    /**
     * Returns the intuition
     *
     * @return integer $intuition
     */
    public function getIntuition()
    {
        return $this->intuition;
    }
    
    /**
     * Sets the intuition
     *
     * @param integer $intuition
     * @return void
     */
    public function setIntuition($intuition)
    {
        $this->intuition = $intuition;
    }
    
    /**
     * Returns the charisma
     *
     * @return integer $charisma
     */
    public function getCharisma()
    {
        return $this->charisma;
    }
    
    /**
     * Sets the charisma
     *
     * @param integer $charisma
     * @return void
     */
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;
    }
    
    /**
     * Returns the gewandheit
     *
     * @return integer $gewandheit
     */
    public function getGewandheit()
    {
        return $this->gewandheit;
    }
    
    /**
     * Sets the gewandheit
     *
     * @param integer $gewandheit
     * @return void
     */
    public function setGewandheit($gewandheit)
    {
        $this->gewandheit = $gewandheit;
    }
    
    /**
     * Returns the konstitution
     *
     * @return integer $konstitution
     */
    public function getKonstitution()
    {
        return $this->konstitution;
    }
    
    /**
     * Sets the konstitution
     *
     * @param integer $konstitution
     * @return void
     */
    public function setKonstitution($konstitution)
    {
        $this->konstitution = $konstitution;
    }
    
    /**
     * Returns the koerperkraft
     *
     * @return integer $koerperkraft
     */
    public function getKoerperkraft()
    {
        return $this->koerperkraft;
    }
    
    /**
     * Sets the koerperkraft
     *
     * @param integer $koerperkraft
     * @return void
     */
    public function setKoerperkraft($koerperkraft)
    {
        $this->koerperkraft = $koerperkraft;
    }
    
    /**
     * Returns the typbeschreibung
     *
     * @return string $typbeschreibung
     */
    public function getTypbeschreibung()
    {
        return $this->typbeschreibung;
    }
    
    /**
     * Sets the typbeschreibung
     *
     * @param string $typbeschreibung
     * @return void
     */
    public function setTypbeschreibung($typbeschreibung)
    {
        $this->typbeschreibung = $typbeschreibung;
    }
    
    /**
     * Returns the vorteile
     *
     * @return string $vorteile
     */
    public function getVorteile()
    {
        return $this->vorteile;
    }
    
    /**
     * Sets the vorteile
     *
     * @param string $vorteile
     * @return void
     */
    public function setVorteile($vorteile)
    {
        $this->vorteile = $vorteile;
    }
    
    /**
     * Returns the nachteile
     *
     * @return string $nachteile
     */
    public function getNachteile()
    {
        return $this->nachteile;
    }
    
    /**
     * Sets the nachteile
     *
     * @param string $nachteile
     * @return void
     */
    public function setNachteile($nachteile)
    {
        $this->nachteile = $nachteile;
    }
    
    /**
     * Returns the sfallg
     *
     * @return string $sfallg
     */
    public function getSfallg()
    {
        return $this->sfallg;
    }
    
    /**
     * Sets the sfallg
     *
     * @param string $sfallg
     * @return void
     */
    public function setSfallg($sfallg)
    {
        $this->sfallg = $sfallg;
    }
    
    /**
     * Returns the spezies
     *
     * @return string spezies
     */
    public function getSpezies()
    {
        return $this->spezies;
    }
    
    /**
     * Sets the spezies
     *
     * @param string $spezies
     * @return string spezies
     */
    public function setSpezies($spezies)
    {
        $this->spezies = $spezies;
    }
    
    /**
     * Returns the familie
     *
     * @return string $familie
     */
    public function getFamilie()
    {
        return $this->familie;
    }
    
    /**
     * Sets the familie
     *
     * @param string $familie
     * @return void
     */
    public function setFamilie($familie)
    {
        $this->familie = $familie;
    }
    
    /**
     * Returns the geburtsort
     *
     * @return string $geburtsort
     */
    public function getGeburtsort()
    {
        return $this->geburtsort;
    }
    
    /**
     * Sets the geburtsort
     *
     * @param string $geburtsort
     * @return void
     */
    public function setGeburtsort($geburtsort)
    {
        $this->geburtsort = $geburtsort;
    }
    
    /**
     * Returns the geburtsdatum
     *
     * @return string $geburtsdatum
     */
    public function getGeburtsdatum()
    {
        return $this->geburtsdatum;
    }
    
    /**
     * Sets the geburtsdatum
     *
     * @param string $geburtsdatum
     * @return void
     */
    public function setGeburtsdatum($geburtsdatum)
    {
        $this->geburtsdatum = $geburtsdatum;
    }
    
    /**
     * Returns the goetterlaeufe
     *
     * @return string $goetterlaeufe
     */
    public function getGoetterlaeufe()
    {
        return $this->goetterlaeufe;
    }
    
    /**
     * Sets the goetterlaeufe
     *
     * @param string $goetterlaeufe
     * @return void
     */
    public function setGoetterlaeufe($goetterlaeufe)
    {
        $this->goetterlaeufe = $goetterlaeufe;
    }
    
    /**
     * Returns the geschlecht
     *
     * @return string $geschlecht
     */
    public function getGeschlecht()
    {
        return $this->geschlecht;
    }
    
    /**
     * Sets the geschlecht
     *
     * @param string $geschlecht
     * @return void
     */
    public function setGeschlecht($geschlecht)
    {
        $this->geschlecht = $geschlecht;
    }
    
    /**
     * Returns the titel
     *
     * @return string $titel
     */
    public function getTitel()
    {
        return $this->titel;
    }
    
    /**
     * Sets the titel
     *
     * @param string $titel
     * @return void
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }
    
    /**
     * Returns the charakteristika
     *
     * @return string $charakteristika
     */
    public function getCharakteristika()
    {
        return $this->charakteristika;
    }
    
    /**
     * Sets the charakteristika
     *
     * @param string $charakteristika
     * @return void
     */
    public function setCharakteristika($charakteristika)
    {
        $this->charakteristika = $charakteristika;
    }
    
    /**
     * Returns the sonstiges
     *
     * @return string $sonstiges
     */
    public function getSonstiges()
    {
        return $this->sonstiges;
    }
    
    /**
     * Sets the sonstiges
     *
     * @param string $sonstiges
     * @return void
     */
    public function setSonstiges($sonstiges)
    {
        $this->sonstiges = $sonstiges;
    }
    
    /**
     * Returns the fingerfertigkeit
     *
     * @return integer fingerfertigkeit
     */
    public function getFingerfertigkeit()
    {
        return $this->fingerfertigkeit;
    }
    
    /**
     * Sets the fingerfertigkeit
     *
     * @param string $fingerfertigkeit
     * @return integer fingerfertigkeit
     */
    public function setFingerfertigkeit($fingerfertigkeit)
    {
        $this->fingerfertigkeit = $fingerfertigkeit;
    }
    
    /**
     * Returns the apGesamt
     *
     * @return integer $apGesamt
     */
    public function getApGesamt()
    {
        return $this->apGesamt;
    }
    
    /**
     * Sets the apGesamt
     *
     * @param integer $apGesamt
     * @return void
     */
    public function setApGesamt($apGesamt)
    {
        $this->apGesamt = $apGesamt;
    }
    
    /**
     * Returns the apVerfuegbar
     *
     * @return integer $apVerfuegbar
     */
    public function getApVerfuegbar()
    {
        return $this->apVerfuegbar;
    }
    
    /**
     * Sets the apVerfuegbar
     *
     * @param integer $apVerfuegbar
     * @return void
     */
    public function setApVerfuegbar($apVerfuegbar)
    {
        $this->apVerfuegbar = $apVerfuegbar;
    }
    
    /**
     * Returns the apAusgegeben
     *
     * @return integer $apAusgegeben
     */
    public function getApAusgegeben()
    {
        return $this->apAusgegeben;
    }
    
    /**
     * Sets the apAusgegeben
     *
     * @param integer $apAusgegeben
     * @return void
     */
    public function setApAusgegeben($apAusgegeben)
    {
        $this->apAusgegeben = $apAusgegeben;
    }
    
    /**
     * Returns the lebensenergie
     *
     * @return integer lebensenergie
     */
    public function getLebensenergie()
    {
        return $this->lebensenergie;
    }
    
    /**
     * Sets the lebensenergie
     *
     * @param integer $lebensenergie
     * @return integer lebensenergie
     */
    public function setLebensenergie($lebensenergie)
    {
        $this->lebensenergie = $lebensenergie;
    }
    
    /**
     * Returns the astralenergie
     *
     * @return integer astralenergie
     */
    public function getAstralenergie()
    {
        return $this->astralenergie;
    }
    
    /**
     * Sets the astralenergie
     *
     * @param integer $astralenergie
     * @return integer astralenergie
     */
    public function setAstralenergie($astralenergie)
    {
        $this->astralenergie = $astralenergie;
    }
    
    /**
     * Returns the karmaenergie
     *
     * @return integer karmaenergie
     */
    public function getKarmaenergie()
    {
        return $this->karmaenergie;
    }
    
    /**
     * Sets the karmaenergie
     *
     * @param integer $karmaenergie
     * @return integer karmaenergie
     */
    public function setKarmaenergie($karmaenergie)
    {
        $this->karmaenergie = $karmaenergie;
    }
    
    /**
     * Returns the seelenkraft
     *
     * @return integer seelenkraft
     */
    public function getSeelenkraft()
    {
        return $this->seelenkraft;
    }
    
    /**
     * Sets the seelenkraft
     *
     * @param integer $seelenkraft
     * @return integer seelenkraft
     */
    public function setSeelenkraft($seelenkraft)
    {
        $this->seelenkraft = $seelenkraft;
    }
    
    /**
     * Returns the zaehigkeit
     *
     * @return integer zaehigkeit
     */
    public function getZaehigkeit()
    {
        return $this->zaehigkeit;
    }
    
    /**
     * Sets the zaehigkeit
     *
     * @param integer $zaehigkeit
     * @return integer zaehigkeit
     */
    public function setZaehigkeit($zaehigkeit)
    {
        $this->zaehigkeit = $zaehigkeit;
    }
    
    /**
     * Returns the ausweichen
     *
     * @return integer $ausweichen
     */
    public function getAusweichen()
    {
        return $this->ausweichen;
    }
    
    /**
     * Sets the ausweichen
     *
     * @param integer $ausweichen
     * @return void
     */
    public function setAusweichen($ausweichen)
    {
        $this->ausweichen = $ausweichen;
    }
    
    /**
     * Returns the geschwindigkeit
     *
     * @return integer $geschwindigkeit
     */
    public function getGeschwindigkeit()
    {
        return $this->geschwindigkeit;
    }
    
    /**
     * Sets the geschwindigkeit
     *
     * @param integer $geschwindigkeit
     * @return void
     */
    public function setGeschwindigkeit($geschwindigkeit)
    {
        $this->geschwindigkeit = $geschwindigkeit;
    }
    
    /**
     * Returns the schicksalspunkte
     *
     * @return integer $schicksalspunkte
     */
    public function getSchicksalspunkte()
    {
        return $this->schicksalspunkte;
    }
    
    /**
     * Sets the schicksalspunkte
     *
     * @param integer $schicksalspunkte
     * @return void
     */
    public function setSchicksalspunkte($schicksalspunkte)
    {
        $this->schicksalspunkte = $schicksalspunkte;
    }
    
    /**
     * Returns the lebensenergieBonus
     *
     * @return integer $lebensenergieBonus
     */
    public function getLebensenergieBonus()
    {
        return $this->lebensenergieBonus;
    }
    
    /**
     * Sets the lebensenergieBonus
     *
     * @param integer $lebensenergieBonus
     * @return void
     */
    public function setLebensenergieBonus($lebensenergieBonus)
    {
        $this->lebensenergieBonus = $lebensenergieBonus;
    }
    
    /**
     * Returns the lebensenergieKauf
     *
     * @return integer $lebensenergieKauf
     */
    public function getLebensenergieKauf()
    {
        return $this->lebensenergieKauf;
    }
    
    /**
     * Sets the lebensenergieKauf
     *
     * @param integer $lebensenergieKauf
     * @return void
     */
    public function setLebensenergieKauf($lebensenergieKauf)
    {
        $this->lebensenergieKauf = $lebensenergieKauf;
    }
    
    /**
     * Returns the lebensenergieMax
     *
     * @return integer $lebensenergieMax
     */
    public function getLebensenergieMax()
    {
        return $this->lebensenergieMax;
    }
    
    /**
     * Sets the lebensenergieMax
     *
     * @param integer $lebensenergieMax
     * @return void
     */
    public function setLebensenergieMax($lebensenergieMax)
    {
        $this->lebensenergieMax = $lebensenergieMax;
    }
    
    /**
     * Returns the astralenergieBonus
     *
     * @return integer $astralenergieBonus
     */
    public function getAstralenergieBonus()
    {
        return $this->astralenergieBonus;
    }
    
    /**
     * Sets the astralenergieBonus
     *
     * @param integer $astralenergieBonus
     * @return void
     */
    public function setAstralenergieBonus($astralenergieBonus)
    {
        $this->astralenergieBonus = $astralenergieBonus;
    }
    
    /**
     * Returns the astralenergieKauf
     *
     * @return integer $astralenergieKauf
     */
    public function getAstralenergieKauf()
    {
        return $this->astralenergieKauf;
    }
    
    /**
     * Sets the astralenergieKauf
     *
     * @param integer $astralenergieKauf
     * @return void
     */
    public function setAstralenergieKauf($astralenergieKauf)
    {
        $this->astralenergieKauf = $astralenergieKauf;
    }
    
    /**
     * Returns the astralenergieMax
     *
     * @return integer $astralenergieMax
     */
    public function getAstralenergieMax()
    {
        return $this->astralenergieMax;
    }
    
    /**
     * Sets the astralenergieMax
     *
     * @param integer $astralenergieMax
     * @return void
     */
    public function setAstralenergieMax($astralenergieMax)
    {
        $this->astralenergieMax = $astralenergieMax;
    }
    
    /**
     * Returns the karmaenergieKauf
     *
     * @return integer $karmaenergieKauf
     */
    public function getKarmaenergieKauf()
    {
        return $this->karmaenergieKauf;
    }
    
    /**
     * Sets the karmaenergieKauf
     *
     * @param integer $karmaenergieKauf
     * @return void
     */
    public function setKarmaenergieKauf($karmaenergieKauf)
    {
        $this->karmaenergieKauf = $karmaenergieKauf;
    }
    
    /**
     * Returns the karmaenergieMax
     *
     * @return integer $karmaenergieMax
     */
    public function getKarmaenergieMax()
    {
        return $this->karmaenergieMax;
    }
    
    /**
     * Sets the karmaenergieMax
     *
     * @param integer $karmaenergieMax
     * @return void
     */
    public function setKarmaenergieMax($karmaenergieMax)
    {
        $this->karmaenergieMax = $karmaenergieMax;
    }
    
    /**
     * Returns the seelenkraftBonus
     *
     * @return integer $seelenkraftBonus
     */
    public function getSeelenkraftBonus()
    {
        return $this->seelenkraftBonus;
    }
    
    /**
     * Sets the seelenkraftBonus
     *
     * @param integer $seelenkraftBonus
     * @return void
     */
    public function setSeelenkraftBonus($seelenkraftBonus)
    {
        $this->seelenkraftBonus = $seelenkraftBonus;
    }
    
    /**
     * Returns the seelenkraftMax
     *
     * @return integer $seelenkraftMax
     */
    public function getSeelenkraftMax()
    {
        return $this->seelenkraftMax;
    }
    
    /**
     * Sets the seelenkraftMax
     *
     * @param integer $seelenkraftMax
     * @return void
     */
    public function setSeelenkraftMax($seelenkraftMax)
    {
        $this->seelenkraftMax = $seelenkraftMax;
    }
    
    /**
     * Returns the zaehigkeitBonus
     *
     * @return integer $zaehigkeitBonus
     */
    public function getZaehigkeitBonus()
    {
        return $this->zaehigkeitBonus;
    }
    
    /**
     * Sets the zaehigkeitBonus
     *
     * @param integer $zaehigkeitBonus
     * @return void
     */
    public function setZaehigkeitBonus($zaehigkeitBonus)
    {
        $this->zaehigkeitBonus = $zaehigkeitBonus;
    }
    
    /**
     * Returns the zaehigkeitMax
     *
     * @return integer $zaehigkeitMax
     */
    public function getZaehigkeitMax()
    {
        return $this->zaehigkeitMax;
    }
    
    /**
     * Sets the zaehigkeitMax
     *
     * @param integer $zaehigkeitMax
     * @return void
     */
    public function setZaehigkeitMax($zaehigkeitMax)
    {
        $this->zaehigkeitMax = $zaehigkeitMax;
    }
    
    /**
     * Returns the ausweichenBonus
     *
     * @return integer $ausweichenBonus
     */
    public function getAusweichenBonus()
    {
        return $this->ausweichenBonus;
    }
    
    /**
     * Sets the ausweichenBonus
     *
     * @param integer $ausweichenBonus
     * @return void
     */
    public function setAusweichenBonus($ausweichenBonus)
    {
        $this->ausweichenBonus = $ausweichenBonus;
    }
    
    /**
     * Returns the ausweichenMax
     *
     * @return integer $ausweichenMax
     */
    public function getAusweichenMax()
    {
        return $this->ausweichenMax;
    }
    
    /**
     * Sets the ausweichenMax
     *
     * @param integer $ausweichenMax
     * @return void
     */
    public function setAusweichenMax($ausweichenMax)
    {
        $this->ausweichenMax = $ausweichenMax;
    }
    
    /**
     * Returns the initiativeBonus
     *
     * @return integer $initiativeBonus
     */
    public function getInitiativeBonus()
    {
        return $this->initiativeBonus;
    }
    
    /**
     * Sets the initiativeBonus
     *
     * @param integer $initiativeBonus
     * @return void
     */
    public function setInitiativeBonus($initiativeBonus)
    {
        $this->initiativeBonus = $initiativeBonus;
    }
    
    /**
     * Returns the initiativeMax
     *
     * @return integer $initiativeMax
     */
    public function getInitiativeMax()
    {
        return $this->initiativeMax;
    }
    
    /**
     * Sets the initiativeMax
     *
     * @param integer $initiativeMax
     * @return void
     */
    public function setInitiativeMax($initiativeMax)
    {
        $this->initiativeMax = $initiativeMax;
    }
    
    /**
     * Returns the geschwindigkeitBonus
     *
     * @return integer $geschwindigkeitBonus
     */
    public function getGeschwindigkeitBonus()
    {
        return $this->geschwindigkeitBonus;
    }
    
    /**
     * Sets the geschwindigkeitBonus
     *
     * @param integer $geschwindigkeitBonus
     * @return void
     */
    public function setGeschwindigkeitBonus($geschwindigkeitBonus)
    {
        $this->geschwindigkeitBonus = $geschwindigkeitBonus;
    }
    
    /**
     * Returns the geschwindigkeitMax
     *
     * @return integer $geschwindigkeitMax
     */
    public function getGeschwindigkeitMax()
    {
        return $this->geschwindigkeitMax;
    }
    
    /**
     * Sets the geschwindigkeitMax
     *
     * @param integer $geschwindigkeitMax
     * @return void
     */
    public function setGeschwindigkeitMax($geschwindigkeitMax)
    {
        $this->geschwindigkeitMax = $geschwindigkeitMax;
    }
    
    /**
     * Returns the schicksalspunkteBonus
     *
     * @return integer $schicksalspunkteBonus
     */
    public function getSchicksalspunkteBonus()
    {
        return $this->schicksalspunkteBonus;
    }
    
    /**
     * Sets the schicksalspunkteBonus
     *
     * @param integer $schicksalspunkteBonus
     * @return void
     */
    public function setSchicksalspunkteBonus($schicksalspunkteBonus)
    {
        $this->schicksalspunkteBonus = $schicksalspunkteBonus;
    }
    
    /**
     * Returns the schicksalspunkteMax
     *
     * @return integer $schicksalspunkteMax
     */
    public function getSchicksalspunkteMax()
    {
        return $this->schicksalspunkteMax;
    }
    
    /**
     * Sets the schicksalspunkteMax
     *
     * @param integer $schicksalspunkteMax
     * @return void
     */
    public function setSchicksalspunkteMax($schicksalspunkteMax)
    {
        $this->schicksalspunkteMax = $schicksalspunkteMax;
    }
    
    /**
     * Returns the schicksalspunkteAktuell
     *
     * @return integer $schicksalspunkteAktuell
     */
    public function getSchicksalspunkteAktuell()
    {
        return $this->schicksalspunkteAktuell;
    }
    
    /**
     * Sets the schicksalspunkteAktuell
     *
     * @param integer $schicksalspunkteAktuell
     * @return void
     */
    public function setSchicksalspunkteAktuell($schicksalspunkteAktuell)
    {
        $this->schicksalspunkteAktuell = $schicksalspunkteAktuell;
    }
    
    /**
     * Returns the initiative
     *
     * @return integer initiative
     */
    public function getInitiative()
    {
        return $this->initiative;
    }
    
    /**
     * Sets the initiative
     *
     * @param integer $initiative
     * @return integer initiative
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;
    }
    
    /**
     * Returns the karmaenergieBonus
     *
     * @return integer karmaenergieBonus
     */
    public function getKarmaenergieBonus()
    {
        return $this->karmaenergieBonus;
    }
    
    /**
     * Sets the karmaenergieBonus
     *
     * @param integer $karmaenergieBonus
     * @return integer karmaenergieBonus
     */
    public function setKarmaenergieBonus($karmaenergieBonus)
    {
        $this->karmaenergieBonus = $karmaenergieBonus;
    }
    
    /**
     * Returns the talentFliegenFW
     *
     * @return integer $talentFliegenFW
     */
    public function getTalentFliegenFW()
    {
        return $this->talentFliegenFW;
    }
    
    /**
     * Sets the talentFliegenFW
     *
     * @param integer $talentFliegenFW
     * @return void
     */
    public function setTalentFliegenFW($talentFliegenFW)
    {
        $this->talentFliegenFW = $talentFliegenFW;
    }
    
    /**
     * Returns the talentFliegenAnmerkung
     *
     * @return string $talentFliegenAnmerkung
     */
    public function getTalentFliegenAnmerkung()
    {
        return $this->talentFliegenAnmerkung;
    }
    
    /**
     * Sets the talentFliegenAnmerkung
     *
     * @param string $talentFliegenAnmerkung
     * @return void
     */
    public function setTalentFliegenAnmerkung($talentFliegenAnmerkung)
    {
        $this->talentFliegenAnmerkung = $talentFliegenAnmerkung;
    }
    
    /**
     * Returns the talentGaukeleienFW
     *
     * @return integer $talentGaukeleienFW
     */
    public function getTalentGaukeleienFW()
    {
        return $this->talentGaukeleienFW;
    }
    
    /**
     * Sets the talentGaukeleienFW
     *
     * @param integer $talentGaukeleienFW
     * @return void
     */
    public function setTalentGaukeleienFW($talentGaukeleienFW)
    {
        $this->talentGaukeleienFW = $talentGaukeleienFW;
    }
    
    /**
     * Returns the talentKletternFW
     *
     * @return integer $talentKletternFW
     */
    public function getTalentKletternFW()
    {
        return $this->talentKletternFW;
    }
    
    /**
     * Sets the talentKletternFW
     *
     * @param integer $talentKletternFW
     * @return void
     */
    public function setTalentKletternFW($talentKletternFW)
    {
        $this->talentKletternFW = $talentKletternFW;
    }
    
    /**
     * Returns the talentKoerperbeherrschungFW
     *
     * @return integer $talentKoerperbeherrschungFW
     */
    public function getTalentKoerperbeherrschungFW()
    {
        return $this->talentKoerperbeherrschungFW;
    }
    
    /**
     * Sets the talentKoerperbeherrschungFW
     *
     * @param integer $talentKoerperbeherrschungFW
     * @return void
     */
    public function setTalentKoerperbeherrschungFW($talentKoerperbeherrschungFW)
    {
        $this->talentKoerperbeherrschungFW = $talentKoerperbeherrschungFW;
    }
    
    /**
     * Returns the talentKraftaktFW
     *
     * @return integer $talentKraftaktFW
     */
    public function getTalentKraftaktFW()
    {
        return $this->talentKraftaktFW;
    }
    
    /**
     * Sets the talentKraftaktFW
     *
     * @param integer $talentKraftaktFW
     * @return void
     */
    public function setTalentKraftaktFW($talentKraftaktFW)
    {
        $this->talentKraftaktFW = $talentKraftaktFW;
    }
    
    /**
     * Returns the talentReitenFW
     *
     * @return integer $talentReitenFW
     */
    public function getTalentReitenFW()
    {
        return $this->talentReitenFW;
    }
    
    /**
     * Sets the talentReitenFW
     *
     * @param integer $talentReitenFW
     * @return void
     */
    public function setTalentReitenFW($talentReitenFW)
    {
        $this->talentReitenFW = $talentReitenFW;
    }
    
    /**
     * Returns the talentSchwimmenFW
     *
     * @return integer $talentSchwimmenFW
     */
    public function getTalentSchwimmenFW()
    {
        return $this->talentSchwimmenFW;
    }
    
    /**
     * Sets the talentSchwimmenFW
     *
     * @param integer $talentSchwimmenFW
     * @return void
     */
    public function setTalentSchwimmenFW($talentSchwimmenFW)
    {
        $this->talentSchwimmenFW = $talentSchwimmenFW;
    }
    
    /**
     * Returns the talentSelbstbeherrschungFW
     *
     * @return integer $talentSelbstbeherrschungFW
     */
    public function getTalentSelbstbeherrschungFW()
    {
        return $this->talentSelbstbeherrschungFW;
    }
    
    /**
     * Sets the talentSelbstbeherrschungFW
     *
     * @param integer $talentSelbstbeherrschungFW
     * @return void
     */
    public function setTalentSelbstbeherrschungFW($talentSelbstbeherrschungFW)
    {
        $this->talentSelbstbeherrschungFW = $talentSelbstbeherrschungFW;
    }
    
    /**
     * Returns the talentSingenFW
     *
     * @return integer $talentSingenFW
     */
    public function getTalentSingenFW()
    {
        return $this->talentSingenFW;
    }
    
    /**
     * Sets the talentSingenFW
     *
     * @param integer $talentSingenFW
     * @return void
     */
    public function setTalentSingenFW($talentSingenFW)
    {
        $this->talentSingenFW = $talentSingenFW;
    }
    
    /**
     * Returns the talentSinnesschaerfeFW
     *
     * @return integer $talentSinnesschaerfeFW
     */
    public function getTalentSinnesschaerfeFW()
    {
        return $this->talentSinnesschaerfeFW;
    }
    
    /**
     * Sets the talentSinnesschaerfeFW
     *
     * @param integer $talentSinnesschaerfeFW
     * @return void
     */
    public function setTalentSinnesschaerfeFW($talentSinnesschaerfeFW)
    {
        $this->talentSinnesschaerfeFW = $talentSinnesschaerfeFW;
    }
    
    /**
     * Returns the talentTanzenFW
     *
     * @return integer $talentTanzenFW
     */
    public function getTalentTanzenFW()
    {
        return $this->talentTanzenFW;
    }
    
    /**
     * Sets the talentTanzenFW
     *
     * @param integer $talentTanzenFW
     * @return void
     */
    public function setTalentTanzenFW($talentTanzenFW)
    {
        $this->talentTanzenFW = $talentTanzenFW;
    }
    
    /**
     * Returns the talentTaschendiebstahlFW
     *
     * @return integer $talentTaschendiebstahlFW
     */
    public function getTalentTaschendiebstahlFW()
    {
        return $this->talentTaschendiebstahlFW;
    }
    
    /**
     * Sets the talentTaschendiebstahlFW
     *
     * @param integer $talentTaschendiebstahlFW
     * @return void
     */
    public function setTalentTaschendiebstahlFW($talentTaschendiebstahlFW)
    {
        $this->talentTaschendiebstahlFW = $talentTaschendiebstahlFW;
    }
    
    /**
     * Returns the talentVerbergenFW
     *
     * @return integer $talentVerbergenFW
     */
    public function getTalentVerbergenFW()
    {
        return $this->talentVerbergenFW;
    }
    
    /**
     * Sets the talentVerbergenFW
     *
     * @param integer $talentVerbergenFW
     * @return void
     */
    public function setTalentVerbergenFW($talentVerbergenFW)
    {
        $this->talentVerbergenFW = $talentVerbergenFW;
    }
    
    /**
     * Returns the talentZechenFW
     *
     * @return integer $talentZechenFW
     */
    public function getTalentZechenFW()
    {
        return $this->talentZechenFW;
    }
    
    /**
     * Sets the talentZechenFW
     *
     * @param integer $talentZechenFW
     * @return void
     */
    public function setTalentZechenFW($talentZechenFW)
    {
        $this->talentZechenFW = $talentZechenFW;
    }
    
    /**
     * Returns the talentBekehrenFW
     *
     * @return integer $talentBekehrenFW
     */
    public function getTalentBekehrenFW()
    {
        return $this->talentBekehrenFW;
    }
    
    /**
     * Sets the talentBekehrenFW
     *
     * @param integer $talentBekehrenFW
     * @return void
     */
    public function setTalentBekehrenFW($talentBekehrenFW)
    {
        $this->talentBekehrenFW = $talentBekehrenFW;
    }
    
    /**
     * Returns the talentBetoerenFW
     *
     * @return integer $talentBetoerenFW
     */
    public function getTalentBetoerenFW()
    {
        return $this->talentBetoerenFW;
    }
    
    /**
     * Sets the talentBetoerenFW
     *
     * @param integer $talentBetoerenFW
     * @return void
     */
    public function setTalentBetoerenFW($talentBetoerenFW)
    {
        $this->talentBetoerenFW = $talentBetoerenFW;
    }
    
    /**
     * Returns the talentEinschuechternFW
     *
     * @return integer $talentEinschuechternFW
     */
    public function getTalentEinschuechternFW()
    {
        return $this->talentEinschuechternFW;
    }
    
    /**
     * Sets the talentEinschuechternFW
     *
     * @param integer $talentEinschuechternFW
     * @return void
     */
    public function setTalentEinschuechternFW($talentEinschuechternFW)
    {
        $this->talentEinschuechternFW = $talentEinschuechternFW;
    }
    
    /**
     * Returns the talentEtiketteFW
     *
     * @return integer $talentEtiketteFW
     */
    public function getTalentEtiketteFW()
    {
        return $this->talentEtiketteFW;
    }
    
    /**
     * Sets the talentEtiketteFW
     *
     * @param integer $talentEtiketteFW
     * @return void
     */
    public function setTalentEtiketteFW($talentEtiketteFW)
    {
        $this->talentEtiketteFW = $talentEtiketteFW;
    }
    
    /**
     * Returns the talentGassenwissenFW
     *
     * @return integer $talentGassenwissenFW
     */
    public function getTalentGassenwissenFW()
    {
        return $this->talentGassenwissenFW;
    }
    
    /**
     * Sets the talentGassenwissenFW
     *
     * @param integer $talentGassenwissenFW
     * @return void
     */
    public function setTalentGassenwissenFW($talentGassenwissenFW)
    {
        $this->talentGassenwissenFW = $talentGassenwissenFW;
    }
    
    /**
     * Returns the talentMenschenkenntnisFW
     *
     * @return integer $talentMenschenkenntnisFW
     */
    public function getTalentMenschenkenntnisFW()
    {
        return $this->talentMenschenkenntnisFW;
    }
    
    /**
     * Sets the talentMenschenkenntnisFW
     *
     * @param integer $talentMenschenkenntnisFW
     * @return void
     */
    public function setTalentMenschenkenntnisFW($talentMenschenkenntnisFW)
    {
        $this->talentMenschenkenntnisFW = $talentMenschenkenntnisFW;
    }
    
    /**
     * Returns the talentUeberredenFW
     *
     * @return integer $talentUeberredenFW
     */
    public function getTalentUeberredenFW()
    {
        return $this->talentUeberredenFW;
    }
    
    /**
     * Sets the talentUeberredenFW
     *
     * @param integer $talentUeberredenFW
     * @return void
     */
    public function setTalentUeberredenFW($talentUeberredenFW)
    {
        $this->talentUeberredenFW = $talentUeberredenFW;
    }
    
    /**
     * Returns the talentVerkleidenFW
     *
     * @return integer $talentVerkleidenFW
     */
    public function getTalentVerkleidenFW()
    {
        return $this->talentVerkleidenFW;
    }
    
    /**
     * Sets the talentVerkleidenFW
     *
     * @param integer $talentVerkleidenFW
     * @return void
     */
    public function setTalentVerkleidenFW($talentVerkleidenFW)
    {
        $this->talentVerkleidenFW = $talentVerkleidenFW;
    }
    
    /**
     * Returns the talentWillenskraftFW
     *
     * @return integer $talentWillenskraftFW
     */
    public function getTalentWillenskraftFW()
    {
        return $this->talentWillenskraftFW;
    }
    
    /**
     * Sets the talentWillenskraftFW
     *
     * @param integer $talentWillenskraftFW
     * @return void
     */
    public function setTalentWillenskraftFW($talentWillenskraftFW)
    {
        $this->talentWillenskraftFW = $talentWillenskraftFW;
    }
    
    /**
     * Returns the talentFaehrtensuchenFW
     *
     * @return integer $talentFaehrtensuchenFW
     */
    public function getTalentFaehrtensuchenFW()
    {
        return $this->talentFaehrtensuchenFW;
    }
    
    /**
     * Sets the talentFaehrtensuchenFW
     *
     * @param integer $talentFaehrtensuchenFW
     * @return void
     */
    public function setTalentFaehrtensuchenFW($talentFaehrtensuchenFW)
    {
        $this->talentFaehrtensuchenFW = $talentFaehrtensuchenFW;
    }
    
    /**
     * Returns the talentFesselnFW
     *
     * @return integer $talentFesselnFW
     */
    public function getTalentFesselnFW()
    {
        return $this->talentFesselnFW;
    }
    
    /**
     * Sets the talentFesselnFW
     *
     * @param integer $talentFesselnFW
     * @return void
     */
    public function setTalentFesselnFW($talentFesselnFW)
    {
        $this->talentFesselnFW = $talentFesselnFW;
    }
    
    /**
     * Returns the talentFischenFW
     *
     * @return integer $talentFischenFW
     */
    public function getTalentFischenFW()
    {
        return $this->talentFischenFW;
    }
    
    /**
     * Sets the talentFischenFW
     *
     * @param integer $talentFischenFW
     * @return void
     */
    public function setTalentFischenFW($talentFischenFW)
    {
        $this->talentFischenFW = $talentFischenFW;
    }
    
    /**
     * Returns the talentOrientierungFW
     *
     * @return integer $talentOrientierungFW
     */
    public function getTalentOrientierungFW()
    {
        return $this->talentOrientierungFW;
    }
    
    /**
     * Sets the talentOrientierungFW
     *
     * @param integer $talentOrientierungFW
     * @return void
     */
    public function setTalentOrientierungFW($talentOrientierungFW)
    {
        $this->talentOrientierungFW = $talentOrientierungFW;
    }
    
    /**
     * Returns the talentTierkundeFW
     *
     * @return integer $talentTierkundeFW
     */
    public function getTalentTierkundeFW()
    {
        return $this->talentTierkundeFW;
    }
    
    /**
     * Sets the talentTierkundeFW
     *
     * @param integer $talentTierkundeFW
     * @return void
     */
    public function setTalentTierkundeFW($talentTierkundeFW)
    {
        $this->talentTierkundeFW = $talentTierkundeFW;
    }
    
    /**
     * Returns the talentWildnislebenFW
     *
     * @return integer $talentWildnislebenFW
     */
    public function getTalentWildnislebenFW()
    {
        return $this->talentWildnislebenFW;
    }
    
    /**
     * Sets the talentWildnislebenFW
     *
     * @param integer $talentWildnislebenFW
     * @return void
     */
    public function setTalentWildnislebenFW($talentWildnislebenFW)
    {
        $this->talentWildnislebenFW = $talentWildnislebenFW;
    }
    
    /**
     * Returns the talentGaukeleienAnmerkung
     *
     * @return string talentGaukeleienAnmerkung
     */
    public function getTalentGaukeleienAnmerkung()
    {
        return $this->talentGaukeleienAnmerkung;
    }
    
    /**
     * Sets the talentGaukeleienAnmerkung
     *
     * @param string $talentGaukeleienAnmerkung
     * @return string talentGaukeleienAnmerkung
     */
    public function setTalentGaukeleienAnmerkung($talentGaukeleienAnmerkung)
    {
        $this->talentGaukeleienAnmerkung = $talentGaukeleienAnmerkung;
    }
    
    /**
     * Returns the talentKletternAnmerkung
     *
     * @return string talentKletternAnmerkung
     */
    public function getTalentKletternAnmerkung()
    {
        return $this->talentKletternAnmerkung;
    }
    
    /**
     * Sets the talentKletternAnmerkung
     *
     * @param string $talentKletternAnmerkung
     * @return string talentKletternAnmerkung
     */
    public function setTalentKletternAnmerkung($talentKletternAnmerkung)
    {
        $this->talentKletternAnmerkung = $talentKletternAnmerkung;
    }
    
    /**
     * Returns the talentKoerperbeherrschungAnmerkung
     *
     * @return string talentKoerperbeherrschungAnmerkung
     */
    public function getTalentKoerperbeherrschungAnmerkung()
    {
        return $this->talentKoerperbeherrschungAnmerkung;
    }
    
    /**
     * Sets the talentKoerperbeherrschungAnmerkung
     *
     * @param string $talentKoerperbeherrschungAnmerkung
     * @return string talentKoerperbeherrschungAnmerkung
     */
    public function setTalentKoerperbeherrschungAnmerkung($talentKoerperbeherrschungAnmerkung)
    {
        $this->talentKoerperbeherrschungAnmerkung = $talentKoerperbeherrschungAnmerkung;
    }
    
    /**
     * Returns the talentKraftaktAnmerkung
     *
     * @return string talentKraftaktAnmerkung
     */
    public function getTalentKraftaktAnmerkung()
    {
        return $this->talentKraftaktAnmerkung;
    }
    
    /**
     * Sets the talentKraftaktAnmerkung
     *
     * @param string $talentKraftaktAnmerkung
     * @return string talentKraftaktAnmerkung
     */
    public function setTalentKraftaktAnmerkung($talentKraftaktAnmerkung)
    {
        $this->talentKraftaktAnmerkung = $talentKraftaktAnmerkung;
    }
    
    /**
     * Returns the talentReitenAnmerkung
     *
     * @return string talentReitenAnmerkung
     */
    public function getTalentReitenAnmerkung()
    {
        return $this->talentReitenAnmerkung;
    }
    
    /**
     * Sets the talentReitenAnmerkung
     *
     * @param string $talentReitenAnmerkung
     * @return string talentReitenAnmerkung
     */
    public function setTalentReitenAnmerkung($talentReitenAnmerkung)
    {
        $this->talentReitenAnmerkung = $talentReitenAnmerkung;
    }
    
    /**
     * Returns the talentSchwimmenAnmerkung
     *
     * @return string talentSchwimmenAnmerkung
     */
    public function getTalentSchwimmenAnmerkung()
    {
        return $this->talentSchwimmenAnmerkung;
    }
    
    /**
     * Sets the talentSchwimmenAnmerkung
     *
     * @param string $talentSchwimmenAnmerkung
     * @return string talentSchwimmenAnmerkung
     */
    public function setTalentSchwimmenAnmerkung($talentSchwimmenAnmerkung)
    {
        $this->talentSchwimmenAnmerkung = $talentSchwimmenAnmerkung;
    }
    
    /**
     * Returns the talentSelbstbeherrschungAnmerkung
     *
     * @return string talentSelbstbeherrschungAnmerkung
     */
    public function getTalentSelbstbeherrschungAnmerkung()
    {
        return $this->talentSelbstbeherrschungAnmerkung;
    }
    
    /**
     * Sets the talentSelbstbeherrschungAnmerkung
     *
     * @param string $talentSelbstbeherrschungAnmerkung
     * @return string talentSelbstbeherrschungAnmerkung
     */
    public function setTalentSelbstbeherrschungAnmerkung($talentSelbstbeherrschungAnmerkung)
    {
        $this->talentSelbstbeherrschungAnmerkung = $talentSelbstbeherrschungAnmerkung;
    }
    
    /**
     * Returns the talentSingenAnmerkung
     *
     * @return string talentSingenAnmerkung
     */
    public function getTalentSingenAnmerkung()
    {
        return $this->talentSingenAnmerkung;
    }
    
    /**
     * Sets the talentSingenAnmerkung
     *
     * @param string $talentSingenAnmerkung
     * @return string talentSingenAnmerkung
     */
    public function setTalentSingenAnmerkung($talentSingenAnmerkung)
    {
        $this->talentSingenAnmerkung = $talentSingenAnmerkung;
    }
    
    /**
     * Returns the talentSinnesschaerfeAnmerkung
     *
     * @return string talentSinnesschaerfeAnmerkung
     */
    public function getTalentSinnesschaerfeAnmerkung()
    {
        return $this->talentSinnesschaerfeAnmerkung;
    }
    
    /**
     * Sets the talentSinnesschaerfeAnmerkung
     *
     * @param string $talentSinnesschaerfeAnmerkung
     * @return string talentSinnesschaerfeAnmerkung
     */
    public function setTalentSinnesschaerfeAnmerkung($talentSinnesschaerfeAnmerkung)
    {
        $this->talentSinnesschaerfeAnmerkung = $talentSinnesschaerfeAnmerkung;
    }
    
    /**
     * Returns the talentTanzenAnmerkung
     *
     * @return string talentTanzenAnmerkung
     */
    public function getTalentTanzenAnmerkung()
    {
        return $this->talentTanzenAnmerkung;
    }
    
    /**
     * Sets the talentTanzenAnmerkung
     *
     * @param string $talentTanzenAnmerkung
     * @return string talentTanzenAnmerkung
     */
    public function setTalentTanzenAnmerkung($talentTanzenAnmerkung)
    {
        $this->talentTanzenAnmerkung = $talentTanzenAnmerkung;
    }
    
    /**
     * Returns the talentVerbergenAnmerkung
     *
     * @return string talentVerbergenAnmerkung
     */
    public function getTalentVerbergenAnmerkung()
    {
        return $this->talentVerbergenAnmerkung;
    }
    
    /**
     * Sets the talentVerbergenAnmerkung
     *
     * @param string $talentVerbergenAnmerkung
     * @return string talentVerbergenAnmerkung
     */
    public function setTalentVerbergenAnmerkung($talentVerbergenAnmerkung)
    {
        $this->talentVerbergenAnmerkung = $talentVerbergenAnmerkung;
    }
    
    /**
     * Returns the talentZechenAnmerkung
     *
     * @return string talentZechenAnmerkung
     */
    public function getTalentZechenAnmerkung()
    {
        return $this->talentZechenAnmerkung;
    }
    
    /**
     * Sets the talentZechenAnmerkung
     *
     * @param string $talentZechenAnmerkung
     * @return string talentZechenAnmerkung
     */
    public function setTalentZechenAnmerkung($talentZechenAnmerkung)
    {
        $this->talentZechenAnmerkung = $talentZechenAnmerkung;
    }
    
    /**
     * Returns the talentBekehrenAnmerkung
     *
     * @return string talentBekehrenAnmerkung
     */
    public function getTalentBekehrenAnmerkung()
    {
        return $this->talentBekehrenAnmerkung;
    }
    
    /**
     * Sets the talentBekehrenAnmerkung
     *
     * @param string $talentBekehrenAnmerkung
     * @return string talentBekehrenAnmerkung
     */
    public function setTalentBekehrenAnmerkung($talentBekehrenAnmerkung)
    {
        $this->talentBekehrenAnmerkung = $talentBekehrenAnmerkung;
    }
    
    /**
     * Returns the talentBetoerenAnmerkung
     *
     * @return string talentBetoerenAnmerkung
     */
    public function getTalentBetoerenAnmerkung()
    {
        return $this->talentBetoerenAnmerkung;
    }
    
    /**
     * Sets the talentBetoerenAnmerkung
     *
     * @param string $talentBetoerenAnmerkung
     * @return string talentBetoerenAnmerkung
     */
    public function setTalentBetoerenAnmerkung($talentBetoerenAnmerkung)
    {
        $this->talentBetoerenAnmerkung = $talentBetoerenAnmerkung;
    }
    
    /**
     * Returns the talentEinschuechternAnmerkung
     *
     * @return string talentEinschuechternAnmerkung
     */
    public function getTalentEinschuechternAnmerkung()
    {
        return $this->talentEinschuechternAnmerkung;
    }
    
    /**
     * Sets the talentEinschuechternAnmerkung
     *
     * @param string $talentEinschuechternAnmerkung
     * @return string talentEinschuechternAnmerkung
     */
    public function setTalentEinschuechternAnmerkung($talentEinschuechternAnmerkung)
    {
        $this->talentEinschuechternAnmerkung = $talentEinschuechternAnmerkung;
    }
    
    /**
     * Returns the talentEtiketteAnmerkung
     *
     * @return string talentEtiketteAnmerkung
     */
    public function getTalentEtiketteAnmerkung()
    {
        return $this->talentEtiketteAnmerkung;
    }
    
    /**
     * Sets the talentEtiketteAnmerkung
     *
     * @param string $talentEtiketteAnmerkung
     * @return string talentEtiketteAnmerkung
     */
    public function setTalentEtiketteAnmerkung($talentEtiketteAnmerkung)
    {
        $this->talentEtiketteAnmerkung = $talentEtiketteAnmerkung;
    }
    
    /**
     * Returns the talentGassenwissenAnmerkung
     *
     * @return string talentGassenwissenAnmerkung
     */
    public function getTalentGassenwissenAnmerkung()
    {
        return $this->talentGassenwissenAnmerkung;
    }
    
    /**
     * Sets the talentGassenwissenAnmerkung
     *
     * @param string $talentGassenwissenAnmerkung
     * @return string talentGassenwissenAnmerkung
     */
    public function setTalentGassenwissenAnmerkung($talentGassenwissenAnmerkung)
    {
        $this->talentGassenwissenAnmerkung = $talentGassenwissenAnmerkung;
    }
    
    /**
     * Returns the talentMenschenkenntnisAnmerkung
     *
     * @return string talentMenschenkenntnisAnmerkung
     */
    public function getTalentMenschenkenntnisAnmerkung()
    {
        return $this->talentMenschenkenntnisAnmerkung;
    }
    
    /**
     * Sets the talentMenschenkenntnisAnmerkung
     *
     * @param string $talentMenschenkenntnisAnmerkung
     * @return string talentMenschenkenntnisAnmerkung
     */
    public function setTalentMenschenkenntnisAnmerkung($talentMenschenkenntnisAnmerkung)
    {
        $this->talentMenschenkenntnisAnmerkung = $talentMenschenkenntnisAnmerkung;
    }
    
    /**
     * Returns the talentUeberredenAnmerkung
     *
     * @return string talentUeberredenAnmerkung
     */
    public function getTalentUeberredenAnmerkung()
    {
        return $this->talentUeberredenAnmerkung;
    }
    
    /**
     * Sets the talentUeberredenAnmerkung
     *
     * @param string $talentUeberredenAnmerkung
     * @return string talentUeberredenAnmerkung
     */
    public function setTalentUeberredenAnmerkung($talentUeberredenAnmerkung)
    {
        $this->talentUeberredenAnmerkung = $talentUeberredenAnmerkung;
    }
    
    /**
     * Returns the talentVerkleidenAnmerkung
     *
     * @return string talentVerkleidenAnmerkung
     */
    public function getTalentVerkleidenAnmerkung()
    {
        return $this->talentVerkleidenAnmerkung;
    }
    
    /**
     * Sets the talentVerkleidenAnmerkung
     *
     * @param string $talentVerkleidenAnmerkung
     * @return string talentVerkleidenAnmerkung
     */
    public function setTalentVerkleidenAnmerkung($talentVerkleidenAnmerkung)
    {
        $this->talentVerkleidenAnmerkung = $talentVerkleidenAnmerkung;
    }
    
    /**
     * Returns the talentWillenskraftAnmerkung
     *
     * @return string talentWillenskraftAnmerkung
     */
    public function getTalentWillenskraftAnmerkung()
    {
        return $this->talentWillenskraftAnmerkung;
    }
    
    /**
     * Sets the talentWillenskraftAnmerkung
     *
     * @param string $talentWillenskraftAnmerkung
     * @return string talentWillenskraftAnmerkung
     */
    public function setTalentWillenskraftAnmerkung($talentWillenskraftAnmerkung)
    {
        $this->talentWillenskraftAnmerkung = $talentWillenskraftAnmerkung;
    }
    
    /**
     * Returns the talentFaehrtensuchenAnmerkung
     *
     * @return string talentFaehrtensuchenAnmerkung
     */
    public function getTalentFaehrtensuchenAnmerkung()
    {
        return $this->talentFaehrtensuchenAnmerkung;
    }
    
    /**
     * Sets the talentFaehrtensuchenAnmerkung
     *
     * @param string $talentFaehrtensuchenAnmerkung
     * @return string talentFaehrtensuchenAnmerkung
     */
    public function setTalentFaehrtensuchenAnmerkung($talentFaehrtensuchenAnmerkung)
    {
        $this->talentFaehrtensuchenAnmerkung = $talentFaehrtensuchenAnmerkung;
    }
    
    /**
     * Returns the talentFesselnAnmerkung
     *
     * @return string talentFesselnAnmerkung
     */
    public function getTalentFesselnAnmerkung()
    {
        return $this->talentFesselnAnmerkung;
    }
    
    /**
     * Sets the talentFesselnAnmerkung
     *
     * @param string $talentFesselnAnmerkung
     * @return string talentFesselnAnmerkung
     */
    public function setTalentFesselnAnmerkung($talentFesselnAnmerkung)
    {
        $this->talentFesselnAnmerkung = $talentFesselnAnmerkung;
    }
    
    /**
     * Returns the talentFischenAnmerkung
     *
     * @return string talentFischenAnmerkung
     */
    public function getTalentFischenAnmerkung()
    {
        return $this->talentFischenAnmerkung;
    }
    
    /**
     * Sets the talentFischenAnmerkung
     *
     * @param string $talentFischenAnmerkung
     * @return string talentFischenAnmerkung
     */
    public function setTalentFischenAnmerkung($talentFischenAnmerkung)
    {
        $this->talentFischenAnmerkung = $talentFischenAnmerkung;
    }
    
    /**
     * Returns the talentOrientierungAnmerkung
     *
     * @return string talentOrientierungAnmerkung
     */
    public function getTalentOrientierungAnmerkung()
    {
        return $this->talentOrientierungAnmerkung;
    }
    
    /**
     * Sets the talentOrientierungAnmerkung
     *
     * @param string $talentOrientierungAnmerkung
     * @return string talentOrientierungAnmerkung
     */
    public function setTalentOrientierungAnmerkung($talentOrientierungAnmerkung)
    {
        $this->talentOrientierungAnmerkung = $talentOrientierungAnmerkung;
    }
    
    /**
     * Returns the talentTierkundeAnmerkung
     *
     * @return string talentTierkundeAnmerkung
     */
    public function getTalentTierkundeAnmerkung()
    {
        return $this->talentTierkundeAnmerkung;
    }
    
    /**
     * Sets the talentTierkundeAnmerkung
     *
     * @param string $talentTierkundeAnmerkung
     * @return string talentTierkundeAnmerkung
     */
    public function setTalentTierkundeAnmerkung($talentTierkundeAnmerkung)
    {
        $this->talentTierkundeAnmerkung = $talentTierkundeAnmerkung;
    }
    
    /**
     * Returns the talentWildnislebenAnmerkung
     *
     * @return string talentWildnislebenAnmerkung
     */
    public function getTalentWildnislebenAnmerkung()
    {
        return $this->talentWildnislebenAnmerkung;
    }
    
    /**
     * Sets the talentWildnislebenAnmerkung
     *
     * @param string $talentWildnislebenAnmerkung
     * @return string talentWildnislebenAnmerkung
     */
    public function setTalentWildnislebenAnmerkung($talentWildnislebenAnmerkung)
    {
        $this->talentWildnislebenAnmerkung = $talentWildnislebenAnmerkung;
    }
    
    /**
     * Returns the talentTaschendiebstahlAnmerkung
     *
     * @return string talentTaschendiebstahlAnmerkung
     */
    public function getTalentTaschendiebstahlAnmerkung()
    {
        return $this->talentTaschendiebstahlAnmerkung;
    }
    
    /**
     * Sets the talentTaschendiebstahlAnmerkung
     *
     * @param integer $talentTaschendiebstahlAnmerkung
     * @return string talentTaschendiebstahlAnmerkung
     */
    public function setTalentTaschendiebstahlAnmerkung($talentTaschendiebstahlAnmerkung)
    {
        $this->talentTaschendiebstahlAnmerkung = $talentTaschendiebstahlAnmerkung;
    }
    
    /**
     * Returns the talentBrettspielFW
     *
     * @return integer $talentBrettspielFW
     */
    public function getTalentBrettspielFW()
    {
        return $this->talentBrettspielFW;
    }
    
    /**
     * Sets the talentBrettspielFW
     *
     * @param integer $talentBrettspielFW
     * @return void
     */
    public function setTalentBrettspielFW($talentBrettspielFW)
    {
        $this->talentBrettspielFW = $talentBrettspielFW;
    }
    
    /**
     * Returns the talentBrettspielAnmerkung
     *
     * @return string $talentBrettspielAnmerkung
     */
    public function getTalentBrettspielAnmerkung()
    {
        return $this->talentBrettspielAnmerkung;
    }
    
    /**
     * Sets the talentBrettspielAnmerkung
     *
     * @param string $talentBrettspielAnmerkung
     * @return void
     */
    public function setTalentBrettspielAnmerkung($talentBrettspielAnmerkung)
    {
        $this->talentBrettspielAnmerkung = $talentBrettspielAnmerkung;
    }
    
    /**
     * Returns the talentGeographieFW
     *
     * @return integer $talentGeographieFW
     */
    public function getTalentGeographieFW()
    {
        return $this->talentGeographieFW;
    }
    
    /**
     * Sets the talentGeographieFW
     *
     * @param integer $talentGeographieFW
     * @return void
     */
    public function setTalentGeographieFW($talentGeographieFW)
    {
        $this->talentGeographieFW = $talentGeographieFW;
    }
    
    /**
     * Returns the talentGeographieAnmerkung
     *
     * @return string $talentGeographieAnmerkung
     */
    public function getTalentGeographieAnmerkung()
    {
        return $this->talentGeographieAnmerkung;
    }
    
    /**
     * Sets the talentGeographieAnmerkung
     *
     * @param string $talentGeographieAnmerkung
     * @return void
     */
    public function setTalentGeographieAnmerkung($talentGeographieAnmerkung)
    {
        $this->talentGeographieAnmerkung = $talentGeographieAnmerkung;
    }
    
    /**
     * Returns the talentGeschichtswissenFW
     *
     * @return integer $talentGeschichtswissenFW
     */
    public function getTalentGeschichtswissenFW()
    {
        return $this->talentGeschichtswissenFW;
    }
    
    /**
     * Sets the talentGeschichtswissenFW
     *
     * @param integer $talentGeschichtswissenFW
     * @return void
     */
    public function setTalentGeschichtswissenFW($talentGeschichtswissenFW)
    {
        $this->talentGeschichtswissenFW = $talentGeschichtswissenFW;
    }
    
    /**
     * Returns the talentGeschichtswissenAnmerkung
     *
     * @return string $talentGeschichtswissenAnmerkung
     */
    public function getTalentGeschichtswissenAnmerkung()
    {
        return $this->talentGeschichtswissenAnmerkung;
    }
    
    /**
     * Sets the talentGeschichtswissenAnmerkung
     *
     * @param string $talentGeschichtswissenAnmerkung
     * @return void
     */
    public function setTalentGeschichtswissenAnmerkung($talentGeschichtswissenAnmerkung)
    {
        $this->talentGeschichtswissenAnmerkung = $talentGeschichtswissenAnmerkung;
    }
    
    /**
     * Returns the talentGoetterFW
     *
     * @return integer $talentGoetterFW
     */
    public function getTalentGoetterFW()
    {
        return $this->talentGoetterFW;
    }
    
    /**
     * Sets the talentGoetterFW
     *
     * @param integer $talentGoetterFW
     * @return void
     */
    public function setTalentGoetterFW($talentGoetterFW)
    {
        $this->talentGoetterFW = $talentGoetterFW;
    }
    
    /**
     * Returns the talentGoetterAnmerkung
     *
     * @return string $talentGoetterAnmerkung
     */
    public function getTalentGoetterAnmerkung()
    {
        return $this->talentGoetterAnmerkung;
    }
    
    /**
     * Sets the talentGoetterAnmerkung
     *
     * @param string $talentGoetterAnmerkung
     * @return void
     */
    public function setTalentGoetterAnmerkung($talentGoetterAnmerkung)
    {
        $this->talentGoetterAnmerkung = $talentGoetterAnmerkung;
    }
    
    /**
     * Returns the talentKriegskunstFW
     *
     * @return integer $talentKriegskunstFW
     */
    public function getTalentKriegskunstFW()
    {
        return $this->talentKriegskunstFW;
    }
    
    /**
     * Sets the talentKriegskunstFW
     *
     * @param integer $talentKriegskunstFW
     * @return void
     */
    public function setTalentKriegskunstFW($talentKriegskunstFW)
    {
        $this->talentKriegskunstFW = $talentKriegskunstFW;
    }
    
    /**
     * Returns the talentKriegskunstAnmerkung
     *
     * @return string $talentKriegskunstAnmerkung
     */
    public function getTalentKriegskunstAnmerkung()
    {
        return $this->talentKriegskunstAnmerkung;
    }
    
    /**
     * Sets the talentKriegskunstAnmerkung
     *
     * @param string $talentKriegskunstAnmerkung
     * @return void
     */
    public function setTalentKriegskunstAnmerkung($talentKriegskunstAnmerkung)
    {
        $this->talentKriegskunstAnmerkung = $talentKriegskunstAnmerkung;
    }
    
    /**
     * Returns the talentMagiekundeFW
     *
     * @return integer $talentMagiekundeFW
     */
    public function getTalentMagiekundeFW()
    {
        return $this->talentMagiekundeFW;
    }
    
    /**
     * Sets the talentMagiekundeFW
     *
     * @param integer $talentMagiekundeFW
     * @return void
     */
    public function setTalentMagiekundeFW($talentMagiekundeFW)
    {
        $this->talentMagiekundeFW = $talentMagiekundeFW;
    }
    
    /**
     * Returns the talentMagiekundeAnmerkung
     *
     * @return string $talentMagiekundeAnmerkung
     */
    public function getTalentMagiekundeAnmerkung()
    {
        return $this->talentMagiekundeAnmerkung;
    }
    
    /**
     * Sets the talentMagiekundeAnmerkung
     *
     * @param string $talentMagiekundeAnmerkung
     * @return void
     */
    public function setTalentMagiekundeAnmerkung($talentMagiekundeAnmerkung)
    {
        $this->talentMagiekundeAnmerkung = $talentMagiekundeAnmerkung;
    }
    
    /**
     * Returns the talentMechanikFW
     *
     * @return integer $talentMechanikFW
     */
    public function getTalentMechanikFW()
    {
        return $this->talentMechanikFW;
    }
    
    /**
     * Sets the talentMechanikFW
     *
     * @param integer $talentMechanikFW
     * @return void
     */
    public function setTalentMechanikFW($talentMechanikFW)
    {
        $this->talentMechanikFW = $talentMechanikFW;
    }
    
    /**
     * Returns the talentMechanikAnmerkung
     *
     * @return string $talentMechanikAnmerkung
     */
    public function getTalentMechanikAnmerkung()
    {
        return $this->talentMechanikAnmerkung;
    }
    
    /**
     * Sets the talentMechanikAnmerkung
     *
     * @param string $talentMechanikAnmerkung
     * @return void
     */
    public function setTalentMechanikAnmerkung($talentMechanikAnmerkung)
    {
        $this->talentMechanikAnmerkung = $talentMechanikAnmerkung;
    }
    
    /**
     * Returns the talentRechnenFW
     *
     * @return integer $talentRechnenFW
     */
    public function getTalentRechnenFW()
    {
        return $this->talentRechnenFW;
    }
    
    /**
     * Sets the talentRechnenFW
     *
     * @param integer $talentRechnenFW
     * @return void
     */
    public function setTalentRechnenFW($talentRechnenFW)
    {
        $this->talentRechnenFW = $talentRechnenFW;
    }
    
    /**
     * Returns the talentRechnenAnmerkung
     *
     * @return string $talentRechnenAnmerkung
     */
    public function getTalentRechnenAnmerkung()
    {
        return $this->talentRechnenAnmerkung;
    }
    
    /**
     * Sets the talentRechnenAnmerkung
     *
     * @param string $talentRechnenAnmerkung
     * @return void
     */
    public function setTalentRechnenAnmerkung($talentRechnenAnmerkung)
    {
        $this->talentRechnenAnmerkung = $talentRechnenAnmerkung;
    }
    
    /**
     * Returns the talentSagenFW
     *
     * @return integer $talentSagenFW
     */
    public function getTalentSagenFW()
    {
        return $this->talentSagenFW;
    }
    
    /**
     * Sets the talentSagenFW
     *
     * @param integer $talentSagenFW
     * @return void
     */
    public function setTalentSagenFW($talentSagenFW)
    {
        $this->talentSagenFW = $talentSagenFW;
    }
    
    /**
     * Returns the talentSagenAnmerkung
     *
     * @return string $talentSagenAnmerkung
     */
    public function getTalentSagenAnmerkung()
    {
        return $this->talentSagenAnmerkung;
    }
    
    /**
     * Sets the talentSagenAnmerkung
     *
     * @param string $talentSagenAnmerkung
     * @return void
     */
    public function setTalentSagenAnmerkung($talentSagenAnmerkung)
    {
        $this->talentSagenAnmerkung = $talentSagenAnmerkung;
    }
    
    /**
     * Returns the talentSphaerenkundeFW
     *
     * @return integer $talentSphaerenkundeFW
     */
    public function getTalentSphaerenkundeFW()
    {
        return $this->talentSphaerenkundeFW;
    }
    
    /**
     * Sets the talentSphaerenkundeFW
     *
     * @param integer $talentSphaerenkundeFW
     * @return void
     */
    public function setTalentSphaerenkundeFW($talentSphaerenkundeFW)
    {
        $this->talentSphaerenkundeFW = $talentSphaerenkundeFW;
    }
    
    /**
     * Returns the talentSphaerenkundeAnmerkung
     *
     * @return string $talentSphaerenkundeAnmerkung
     */
    public function getTalentSphaerenkundeAnmerkung()
    {
        return $this->talentSphaerenkundeAnmerkung;
    }
    
    /**
     * Sets the talentSphaerenkundeAnmerkung
     *
     * @param string $talentSphaerenkundeAnmerkung
     * @return void
     */
    public function setTalentSphaerenkundeAnmerkung($talentSphaerenkundeAnmerkung)
    {
        $this->talentSphaerenkundeAnmerkung = $talentSphaerenkundeAnmerkung;
    }
    
    /**
     * Returns the talentSternkundeFW
     *
     * @return integer $talentSternkundeFW
     */
    public function getTalentSternkundeFW()
    {
        return $this->talentSternkundeFW;
    }
    
    /**
     * Sets the talentSternkundeFW
     *
     * @param integer $talentSternkundeFW
     * @return void
     */
    public function setTalentSternkundeFW($talentSternkundeFW)
    {
        $this->talentSternkundeFW = $talentSternkundeFW;
    }
    
    /**
     * Returns the talentSternkundeAnmerkung
     *
     * @return string $talentSternkundeAnmerkung
     */
    public function getTalentSternkundeAnmerkung()
    {
        return $this->talentSternkundeAnmerkung;
    }
    
    /**
     * Sets the talentSternkundeAnmerkung
     *
     * @param string $talentSternkundeAnmerkung
     * @return void
     */
    public function setTalentSternkundeAnmerkung($talentSternkundeAnmerkung)
    {
        $this->talentSternkundeAnmerkung = $talentSternkundeAnmerkung;
    }
    
    /**
     * Returns the talentAlchimieFW
     *
     * @return integer $talentAlchimieFW
     */
    public function getTalentAlchimieFW()
    {
        return $this->talentAlchimieFW;
    }
    
    /**
     * Sets the talentAlchimieFW
     *
     * @param integer $talentAlchimieFW
     * @return void
     */
    public function setTalentAlchimieFW($talentAlchimieFW)
    {
        $this->talentAlchimieFW = $talentAlchimieFW;
    }
    
    /**
     * Returns the talentAlchimieAnmerkung
     *
     * @return string $talentAlchimieAnmerkung
     */
    public function getTalentAlchimieAnmerkung()
    {
        return $this->talentAlchimieAnmerkung;
    }
    
    /**
     * Sets the talentAlchimieAnmerkung
     *
     * @param string $talentAlchimieAnmerkung
     * @return void
     */
    public function setTalentAlchimieAnmerkung($talentAlchimieAnmerkung)
    {
        $this->talentAlchimieAnmerkung = $talentAlchimieAnmerkung;
    }
    
    /**
     * Returns the talentBooteFW
     *
     * @return integer $talentBooteFW
     */
    public function getTalentBooteFW()
    {
        return $this->talentBooteFW;
    }
    
    /**
     * Sets the talentBooteFW
     *
     * @param integer $talentBooteFW
     * @return void
     */
    public function setTalentBooteFW($talentBooteFW)
    {
        $this->talentBooteFW = $talentBooteFW;
    }
    
    /**
     * Returns the talentBooteAnmerkung
     *
     * @return string $talentBooteAnmerkung
     */
    public function getTalentBooteAnmerkung()
    {
        return $this->talentBooteAnmerkung;
    }
    
    /**
     * Sets the talentBooteAnmerkung
     *
     * @param string $talentBooteAnmerkung
     * @return void
     */
    public function setTalentBooteAnmerkung($talentBooteAnmerkung)
    {
        $this->talentBooteAnmerkung = $talentBooteAnmerkung;
    }
    
    /**
     * Returns the talentFahrzeugeFW
     *
     * @return integer $talentFahrzeugeFW
     */
    public function getTalentFahrzeugeFW()
    {
        return $this->talentFahrzeugeFW;
    }
    
    /**
     * Sets the talentFahrzeugeFW
     *
     * @param integer $talentFahrzeugeFW
     * @return void
     */
    public function setTalentFahrzeugeFW($talentFahrzeugeFW)
    {
        $this->talentFahrzeugeFW = $talentFahrzeugeFW;
    }
    
    /**
     * Returns the talentFahrzeugeAnmerkung
     *
     * @return string $talentFahrzeugeAnmerkung
     */
    public function getTalentFahrzeugeAnmerkung()
    {
        return $this->talentFahrzeugeAnmerkung;
    }
    
    /**
     * Sets the talentFahrzeugeAnmerkung
     *
     * @param string $talentFahrzeugeAnmerkung
     * @return void
     */
    public function setTalentFahrzeugeAnmerkung($talentFahrzeugeAnmerkung)
    {
        $this->talentFahrzeugeAnmerkung = $talentFahrzeugeAnmerkung;
    }
    
    /**
     * Returns the talentHandelFW
     *
     * @return integer $talentHandelFW
     */
    public function getTalentHandelFW()
    {
        return $this->talentHandelFW;
    }
    
    /**
     * Sets the talentHandelFW
     *
     * @param integer $talentHandelFW
     * @return void
     */
    public function setTalentHandelFW($talentHandelFW)
    {
        $this->talentHandelFW = $talentHandelFW;
    }
    
    /**
     * Returns the talentHandelAnmerkung
     *
     * @return string $talentHandelAnmerkung
     */
    public function getTalentHandelAnmerkung()
    {
        return $this->talentHandelAnmerkung;
    }
    
    /**
     * Sets the talentHandelAnmerkung
     *
     * @param string $talentHandelAnmerkung
     * @return void
     */
    public function setTalentHandelAnmerkung($talentHandelAnmerkung)
    {
        $this->talentHandelAnmerkung = $talentHandelAnmerkung;
    }
    
    /**
     * Returns the talentHeilkundeGiftFW
     *
     * @return integer $talentHeilkundeGiftFW
     */
    public function getTalentHeilkundeGiftFW()
    {
        return $this->talentHeilkundeGiftFW;
    }
    
    /**
     * Sets the talentHeilkundeGiftFW
     *
     * @param integer $talentHeilkundeGiftFW
     * @return void
     */
    public function setTalentHeilkundeGiftFW($talentHeilkundeGiftFW)
    {
        $this->talentHeilkundeGiftFW = $talentHeilkundeGiftFW;
    }
    
    /**
     * Returns the talentHeilkundeGiftAnmerkung
     *
     * @return string $talentHeilkundeGiftAnmerkung
     */
    public function getTalentHeilkundeGiftAnmerkung()
    {
        return $this->talentHeilkundeGiftAnmerkung;
    }
    
    /**
     * Sets the talentHeilkundeGiftAnmerkung
     *
     * @param string $talentHeilkundeGiftAnmerkung
     * @return void
     */
    public function setTalentHeilkundeGiftAnmerkung($talentHeilkundeGiftAnmerkung)
    {
        $this->talentHeilkundeGiftAnmerkung = $talentHeilkundeGiftAnmerkung;
    }
    
    /**
     * Returns the talentHeilkundeKrankheitenFW
     *
     * @return integer $talentHeilkundeKrankheitenFW
     */
    public function getTalentHeilkundeKrankheitenFW()
    {
        return $this->talentHeilkundeKrankheitenFW;
    }
    
    /**
     * Sets the talentHeilkundeKrankheitenFW
     *
     * @param integer $talentHeilkundeKrankheitenFW
     * @return void
     */
    public function setTalentHeilkundeKrankheitenFW($talentHeilkundeKrankheitenFW)
    {
        $this->talentHeilkundeKrankheitenFW = $talentHeilkundeKrankheitenFW;
    }
    
    /**
     * Returns the talentHeilkundeKrankheitenAnmerkung
     *
     * @return string $talentHeilkundeKrankheitenAnmerkung
     */
    public function getTalentHeilkundeKrankheitenAnmerkung()
    {
        return $this->talentHeilkundeKrankheitenAnmerkung;
    }
    
    /**
     * Sets the talentHeilkundeKrankheitenAnmerkung
     *
     * @param string $talentHeilkundeKrankheitenAnmerkung
     * @return void
     */
    public function setTalentHeilkundeKrankheitenAnmerkung($talentHeilkundeKrankheitenAnmerkung)
    {
        $this->talentHeilkundeKrankheitenAnmerkung = $talentHeilkundeKrankheitenAnmerkung;
    }
    
    /**
     * Returns the talentHeilkundeSeeleFW
     *
     * @return integer $talentHeilkundeSeeleFW
     */
    public function getTalentHeilkundeSeeleFW()
    {
        return $this->talentHeilkundeSeeleFW;
    }
    
    /**
     * Sets the talentHeilkundeSeeleFW
     *
     * @param integer $talentHeilkundeSeeleFW
     * @return void
     */
    public function setTalentHeilkundeSeeleFW($talentHeilkundeSeeleFW)
    {
        $this->talentHeilkundeSeeleFW = $talentHeilkundeSeeleFW;
    }
    
    /**
     * Returns the talentHeilkundeSeeleAnmerkung
     *
     * @return string $talentHeilkundeSeeleAnmerkung
     */
    public function getTalentHeilkundeSeeleAnmerkung()
    {
        return $this->talentHeilkundeSeeleAnmerkung;
    }
    
    /**
     * Sets the talentHeilkundeSeeleAnmerkung
     *
     * @param string $talentHeilkundeSeeleAnmerkung
     * @return void
     */
    public function setTalentHeilkundeSeeleAnmerkung($talentHeilkundeSeeleAnmerkung)
    {
        $this->talentHeilkundeSeeleAnmerkung = $talentHeilkundeSeeleAnmerkung;
    }
    
    /**
     * Returns the talentHeilkundeWundenFW
     *
     * @return integer $talentHeilkundeWundenFW
     */
    public function getTalentHeilkundeWundenFW()
    {
        return $this->talentHeilkundeWundenFW;
    }
    
    /**
     * Sets the talentHeilkundeWundenFW
     *
     * @param integer $talentHeilkundeWundenFW
     * @return void
     */
    public function setTalentHeilkundeWundenFW($talentHeilkundeWundenFW)
    {
        $this->talentHeilkundeWundenFW = $talentHeilkundeWundenFW;
    }
    
    /**
     * Returns the talentHeilkundeWundenAnmerkung
     *
     * @return string $talentHeilkundeWundenAnmerkung
     */
    public function getTalentHeilkundeWundenAnmerkung()
    {
        return $this->talentHeilkundeWundenAnmerkung;
    }
    
    /**
     * Sets the talentHeilkundeWundenAnmerkung
     *
     * @param string $talentHeilkundeWundenAnmerkung
     * @return void
     */
    public function setTalentHeilkundeWundenAnmerkung($talentHeilkundeWundenAnmerkung)
    {
        $this->talentHeilkundeWundenAnmerkung = $talentHeilkundeWundenAnmerkung;
    }
    
    /**
     * Returns the talentHolzbearbeitungFW
     *
     * @return integer $talentHolzbearbeitungFW
     */
    public function getTalentHolzbearbeitungFW()
    {
        return $this->talentHolzbearbeitungFW;
    }
    
    /**
     * Sets the talentHolzbearbeitungFW
     *
     * @param integer $talentHolzbearbeitungFW
     * @return void
     */
    public function setTalentHolzbearbeitungFW($talentHolzbearbeitungFW)
    {
        $this->talentHolzbearbeitungFW = $talentHolzbearbeitungFW;
    }
    
    /**
     * Returns the talentHolzbearbeitungAnmerkung
     *
     * @return string $talentHolzbearbeitungAnmerkung
     */
    public function getTalentHolzbearbeitungAnmerkung()
    {
        return $this->talentHolzbearbeitungAnmerkung;
    }
    
    /**
     * Sets the talentHolzbearbeitungAnmerkung
     *
     * @param string $talentHolzbearbeitungAnmerkung
     * @return void
     */
    public function setTalentHolzbearbeitungAnmerkung($talentHolzbearbeitungAnmerkung)
    {
        $this->talentHolzbearbeitungAnmerkung = $talentHolzbearbeitungAnmerkung;
    }
    
    /**
     * Returns the talentLebensmittelbearbeitungFW
     *
     * @return integer $talentLebensmittelbearbeitungFW
     */
    public function getTalentLebensmittelbearbeitungFW()
    {
        return $this->talentLebensmittelbearbeitungFW;
    }
    
    /**
     * Sets the talentLebensmittelbearbeitungFW
     *
     * @param integer $talentLebensmittelbearbeitungFW
     * @return void
     */
    public function setTalentLebensmittelbearbeitungFW($talentLebensmittelbearbeitungFW)
    {
        $this->talentLebensmittelbearbeitungFW = $talentLebensmittelbearbeitungFW;
    }
    
    /**
     * Returns the talentLebensmittelbearbeitungAnmerkung
     *
     * @return string $talentLebensmittelbearbeitungAnmerkung
     */
    public function getTalentLebensmittelbearbeitungAnmerkung()
    {
        return $this->talentLebensmittelbearbeitungAnmerkung;
    }
    
    /**
     * Sets the talentLebensmittelbearbeitungAnmerkung
     *
     * @param string $talentLebensmittelbearbeitungAnmerkung
     * @return void
     */
    public function setTalentLebensmittelbearbeitungAnmerkung($talentLebensmittelbearbeitungAnmerkung)
    {
        $this->talentLebensmittelbearbeitungAnmerkung = $talentLebensmittelbearbeitungAnmerkung;
    }
    
    /**
     * Returns the talentLederbearbeitungFW
     *
     * @return integer $talentLederbearbeitungFW
     */
    public function getTalentLederbearbeitungFW()
    {
        return $this->talentLederbearbeitungFW;
    }
    
    /**
     * Sets the talentLederbearbeitungFW
     *
     * @param integer $talentLederbearbeitungFW
     * @return void
     */
    public function setTalentLederbearbeitungFW($talentLederbearbeitungFW)
    {
        $this->talentLederbearbeitungFW = $talentLederbearbeitungFW;
    }
    
    /**
     * Returns the talentLederbearbeitungAnmerkung
     *
     * @return string $talentLederbearbeitungAnmerkung
     */
    public function getTalentLederbearbeitungAnmerkung()
    {
        return $this->talentLederbearbeitungAnmerkung;
    }
    
    /**
     * Sets the talentLederbearbeitungAnmerkung
     *
     * @param string $talentLederbearbeitungAnmerkung
     * @return void
     */
    public function setTalentLederbearbeitungAnmerkung($talentLederbearbeitungAnmerkung)
    {
        $this->talentLederbearbeitungAnmerkung = $talentLederbearbeitungAnmerkung;
    }
    
    /**
     * Returns the talentMalenFW
     *
     * @return integer $talentMalenFW
     */
    public function getTalentMalenFW()
    {
        return $this->talentMalenFW;
    }
    
    /**
     * Sets the talentMalenFW
     *
     * @param integer $talentMalenFW
     * @return void
     */
    public function setTalentMalenFW($talentMalenFW)
    {
        $this->talentMalenFW = $talentMalenFW;
    }
    
    /**
     * Returns the talentMalenAnmerkung
     *
     * @return string $talentMalenAnmerkung
     */
    public function getTalentMalenAnmerkung()
    {
        return $this->talentMalenAnmerkung;
    }
    
    /**
     * Sets the talentMalenAnmerkung
     *
     * @param string $talentMalenAnmerkung
     * @return void
     */
    public function setTalentMalenAnmerkung($talentMalenAnmerkung)
    {
        $this->talentMalenAnmerkung = $talentMalenAnmerkung;
    }
    
    /**
     * Returns the talentMetallbearbeitungFW
     *
     * @return integer $talentMetallbearbeitungFW
     */
    public function getTalentMetallbearbeitungFW()
    {
        return $this->talentMetallbearbeitungFW;
    }
    
    /**
     * Sets the talentMetallbearbeitungFW
     *
     * @param integer $talentMetallbearbeitungFW
     * @return void
     */
    public function setTalentMetallbearbeitungFW($talentMetallbearbeitungFW)
    {
        $this->talentMetallbearbeitungFW = $talentMetallbearbeitungFW;
    }
    
    /**
     * Returns the talentMetallbearbeitungAnmerkung
     *
     * @return string $talentMetallbearbeitungAnmerkung
     */
    public function getTalentMetallbearbeitungAnmerkung()
    {
        return $this->talentMetallbearbeitungAnmerkung;
    }
    
    /**
     * Sets the talentMetallbearbeitungAnmerkung
     *
     * @param string $talentMetallbearbeitungAnmerkung
     * @return void
     */
    public function setTalentMetallbearbeitungAnmerkung($talentMetallbearbeitungAnmerkung)
    {
        $this->talentMetallbearbeitungAnmerkung = $talentMetallbearbeitungAnmerkung;
    }
    
    /**
     * Returns the talentMusizierenFW
     *
     * @return integer $talentMusizierenFW
     */
    public function getTalentMusizierenFW()
    {
        return $this->talentMusizierenFW;
    }
    
    /**
     * Sets the talentMusizierenFW
     *
     * @param integer $talentMusizierenFW
     * @return void
     */
    public function setTalentMusizierenFW($talentMusizierenFW)
    {
        $this->talentMusizierenFW = $talentMusizierenFW;
    }
    
    /**
     * Returns the talentMusizierenAnmerkung
     *
     * @return string $talentMusizierenAnmerkung
     */
    public function getTalentMusizierenAnmerkung()
    {
        return $this->talentMusizierenAnmerkung;
    }
    
    /**
     * Sets the talentMusizierenAnmerkung
     *
     * @param string $talentMusizierenAnmerkung
     * @return void
     */
    public function setTalentMusizierenAnmerkung($talentMusizierenAnmerkung)
    {
        $this->talentMusizierenAnmerkung = $talentMusizierenAnmerkung;
    }
    
    /**
     * Returns the talentSchloesserknackenFW
     *
     * @return integer $talentSchloesserknackenFW
     */
    public function getTalentSchloesserknackenFW()
    {
        return $this->talentSchloesserknackenFW;
    }
    
    /**
     * Sets the talentSchloesserknackenFW
     *
     * @param integer $talentSchloesserknackenFW
     * @return void
     */
    public function setTalentSchloesserknackenFW($talentSchloesserknackenFW)
    {
        $this->talentSchloesserknackenFW = $talentSchloesserknackenFW;
    }
    
    /**
     * Returns the talentSchloesserknackenAnmerkung
     *
     * @return string $talentSchloesserknackenAnmerkung
     */
    public function getTalentSchloesserknackenAnmerkung()
    {
        return $this->talentSchloesserknackenAnmerkung;
    }
    
    /**
     * Sets the talentSchloesserknackenAnmerkung
     *
     * @param string $talentSchloesserknackenAnmerkung
     * @return void
     */
    public function setTalentSchloesserknackenAnmerkung($talentSchloesserknackenAnmerkung)
    {
        $this->talentSchloesserknackenAnmerkung = $talentSchloesserknackenAnmerkung;
    }
    
    /**
     * Returns the talentSteinbearbeitungFW
     *
     * @return integer $talentSteinbearbeitungFW
     */
    public function getTalentSteinbearbeitungFW()
    {
        return $this->talentSteinbearbeitungFW;
    }
    
    /**
     * Sets the talentSteinbearbeitungFW
     *
     * @param integer $talentSteinbearbeitungFW
     * @return void
     */
    public function setTalentSteinbearbeitungFW($talentSteinbearbeitungFW)
    {
        $this->talentSteinbearbeitungFW = $talentSteinbearbeitungFW;
    }
    
    /**
     * Returns the talentSteinbearbeitungAnmerkung
     *
     * @return string $talentSteinbearbeitungAnmerkung
     */
    public function getTalentSteinbearbeitungAnmerkung()
    {
        return $this->talentSteinbearbeitungAnmerkung;
    }
    
    /**
     * Sets the talentSteinbearbeitungAnmerkung
     *
     * @param string $talentSteinbearbeitungAnmerkung
     * @return void
     */
    public function setTalentSteinbearbeitungAnmerkung($talentSteinbearbeitungAnmerkung)
    {
        $this->talentSteinbearbeitungAnmerkung = $talentSteinbearbeitungAnmerkung;
    }
    
    /**
     * Returns the talentStoffbearbeitungFW
     *
     * @return integer $talentStoffbearbeitungFW
     */
    public function getTalentStoffbearbeitungFW()
    {
        return $this->talentStoffbearbeitungFW;
    }
    
    /**
     * Sets the talentStoffbearbeitungFW
     *
     * @param integer $talentStoffbearbeitungFW
     * @return void
     */
    public function setTalentStoffbearbeitungFW($talentStoffbearbeitungFW)
    {
        $this->talentStoffbearbeitungFW = $talentStoffbearbeitungFW;
    }
    
    /**
     * Returns the talentStoffbearbeitungAnmerkung
     *
     * @return string $talentStoffbearbeitungAnmerkung
     */
    public function getTalentStoffbearbeitungAnmerkung()
    {
        return $this->talentStoffbearbeitungAnmerkung;
    }
    
    /**
     * Sets the talentStoffbearbeitungAnmerkung
     *
     * @param string $talentStoffbearbeitungAnmerkung
     * @return void
     */
    public function setTalentStoffbearbeitungAnmerkung($talentStoffbearbeitungAnmerkung)
    {
        $this->talentStoffbearbeitungAnmerkung = $talentStoffbearbeitungAnmerkung;
    }
    
    /**
     * Returns the talentRechtskundeFW
     *
     * @return integer $talentRechtskundeFW
     */
    public function getTalentRechtskundeFW()
    {
        return $this->talentRechtskundeFW;
    }
    
    /**
     * Sets the talentRechtskundeFW
     *
     * @param integer $talentRechtskundeFW
     * @return void
     */
    public function setTalentRechtskundeFW($talentRechtskundeFW)
    {
        $this->talentRechtskundeFW = $talentRechtskundeFW;
    }
    
    /**
     * Returns the talentRechtskundeAnmerkung
     *
     * @return string $talentRechtskundeAnmerkung
     */
    public function getTalentRechtskundeAnmerkung()
    {
        return $this->talentRechtskundeAnmerkung;
    }
    
    /**
     * Sets the talentRechtskundeAnmerkung
     *
     * @param string $talentRechtskundeAnmerkung
     * @return void
     */
    public function setTalentRechtskundeAnmerkung($talentRechtskundeAnmerkung)
    {
        $this->talentRechtskundeAnmerkung = $talentRechtskundeAnmerkung;
    }
    
    /**
     * Returns the talentPflanzenkundeFW
     *
     * @return integer talentPflanzenkundeFW
     */
    public function getTalentPflanzenkundeFW()
    {
        return $this->talentPflanzenkundeFW;
    }
    
    /**
     * Sets the talentPflanzenkundeFW
     *
     * @param integer $talentPflanzenkundeFW
     * @return integer talentPflanzenkundeFW
     */
    public function setTalentPflanzenkundeFW($talentPflanzenkundeFW)
    {
        $this->talentPflanzenkundeFW = $talentPflanzenkundeFW;
    }
    
    /**
     * Returns the talentPflanzenkundeAnmerkung
     *
     * @return string talentPflanzenkundeAnmerkung
     */
    public function getTalentPflanzenkundeAnmerkung()
    {
        return $this->talentPflanzenkundeAnmerkung;
    }
    
    /**
     * Sets the talentPflanzenkundeAnmerkung
     *
     * @param string $talentPflanzenkundeAnmerkung
     * @return string talentPflanzenkundeAnmerkung
     */
    public function setTalentPflanzenkundeAnmerkung($talentPflanzenkundeAnmerkung)
    {
        $this->talentPflanzenkundeAnmerkung = $talentPflanzenkundeAnmerkung;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        
    }
    
    /**
     * Returns the sprachen
     *
     * @return string $sprachen
     */
    public function getSprachen()
    {
        return $this->sprachen;
    }
    
    /**
     * Sets the sprachen
     *
     * @param string $sprachen
     * @return void
     */
    public function setSprachen($sprachen)
    {
        $this->sprachen = $sprachen;
    }
    
    /**
     * Returns the schriften
     *
     * @return string $schriften
     */
    public function getSchriften()
    {
        return $this->schriften;
    }
    
    /**
     * Sets the schriften
     *
     * @param string $schriften
     * @return void
     */
    public function setSchriften($schriften)
    {
        $this->schriften = $schriften;
    }

}