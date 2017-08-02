<?php

namespace DSACharManager\ScDsacharmanager\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Sebastian Christoph <sxbxstxxn@googlemail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \DSACharManager\ScDsacharmanager\Domain\Model\Character.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Sebastian Christoph <sxbxstxxn@googlemail.com>
 */
class CharacterTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \DSACharManager\ScDsacharmanager\Domain\Model\Character
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \DSACharManager\ScDsacharmanager\Domain\Model\Character();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName()
	{
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFeuserIDReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setFeuserIDForIntSetsFeuserID()
	{	}

	/**
	 * @test
	 */
	public function getSpeziesReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSpezies()
		);
	}

	/**
	 * @test
	 */
	public function setSpeziesForStringSetsSpezies()
	{
		$this->subject->setSpezies('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'spezies',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getKulturReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getKultur()
		);
	}

	/**
	 * @test
	 */
	public function setKulturForStringSetsKultur()
	{
		$this->subject->setKultur('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'kultur',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProfessionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getProfession()
		);
	}

	/**
	 * @test
	 */
	public function setProfessionForStringSetsProfession()
	{
		$this->subject->setProfession('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'profession',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getErfahrungsgradReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getErfahrungsgrad()
		);
	}

	/**
	 * @test
	 */
	public function setErfahrungsgradForStringSetsErfahrungsgrad()
	{
		$this->subject->setErfahrungsgrad('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'erfahrungsgrad',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTypbeschreibungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTypbeschreibung()
		);
	}

	/**
	 * @test
	 */
	public function setTypbeschreibungForStringSetsTypbeschreibung()
	{
		$this->subject->setTypbeschreibung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'typbeschreibung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHaarfarbeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getHaarfarbe()
		);
	}

	/**
	 * @test
	 */
	public function setHaarfarbeForStringSetsHaarfarbe()
	{
		$this->subject->setHaarfarbe('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'haarfarbe',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAugenfarbeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAugenfarbe()
		);
	}

	/**
	 * @test
	 */
	public function setAugenfarbeForStringSetsAugenfarbe()
	{
		$this->subject->setAugenfarbe('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'augenfarbe',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGroesseReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getGroesse()
		);
	}

	/**
	 * @test
	 */
	public function setGroesseForStringSetsGroesse()
	{
		$this->subject->setGroesse('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'groesse',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGewichtReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getGewicht()
		);
	}

	/**
	 * @test
	 */
	public function setGewichtForStringSetsGewicht()
	{
		$this->subject->setGewicht('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'gewicht',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSozialstatusReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSozialstatus()
		);
	}

	/**
	 * @test
	 */
	public function setSozialstatusForStringSetsSozialstatus()
	{
		$this->subject->setSozialstatus('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sozialstatus',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMutReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setMutForIntSetsMut()
	{	}

	/**
	 * @test
	 */
	public function getKlugheitReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKlugheitForIntSetsKlugheit()
	{	}

	/**
	 * @test
	 */
	public function getIntuitionReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setIntuitionForIntSetsIntuition()
	{	}

	/**
	 * @test
	 */
	public function getCharismaReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setCharismaForIntSetsCharisma()
	{	}

	/**
	 * @test
	 */
	public function getFingerfertigkeitReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setFingerfertigkeitForIntSetsFingerfertigkeit()
	{	}

	/**
	 * @test
	 */
	public function getGewandheitReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setGewandheitForIntSetsGewandheit()
	{	}

	/**
	 * @test
	 */
	public function getKonstitutionReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKonstitutionForIntSetsKonstitution()
	{	}

	/**
	 * @test
	 */
	public function getKoerperkraftReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKoerperkraftForIntSetsKoerperkraft()
	{	}

	/**
	 * @test
	 */
	public function getLebensenergieReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setLebensenergieForIntSetsLebensenergie()
	{	}

	/**
	 * @test
	 */
	public function getAstralenergieReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAstralenergieForIntSetsAstralenergie()
	{	}

	/**
	 * @test
	 */
	public function getKarmaenergieReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKarmaenergieForIntSetsKarmaenergie()
	{	}

	/**
	 * @test
	 */
	public function getSeelenkraftReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setSeelenkraftForIntSetsSeelenkraft()
	{	}

	/**
	 * @test
	 */
	public function getZaehigkeitReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setZaehigkeitForIntSetsZaehigkeit()
	{	}

	/**
	 * @test
	 */
	public function getAusweichenReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAusweichenForIntSetsAusweichen()
	{	}

	/**
	 * @test
	 */
	public function getInitiativeReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setInitiativeForIntSetsInitiative()
	{	}

	/**
	 * @test
	 */
	public function getGeschwindigkeitReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setGeschwindigkeitForIntSetsGeschwindigkeit()
	{	}

	/**
	 * @test
	 */
	public function getSchicksalspunkteReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setSchicksalspunkteForIntSetsSchicksalspunkte()
	{	}

	/**
	 * @test
	 */
	public function getVorteileReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getVorteile()
		);
	}

	/**
	 * @test
	 */
	public function setVorteileForStringSetsVorteile()
	{
		$this->subject->setVorteile('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'vorteile',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNachteileReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getNachteile()
		);
	}

	/**
	 * @test
	 */
	public function setNachteileForStringSetsNachteile()
	{
		$this->subject->setNachteile('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nachteile',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSfallgReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSfallg()
		);
	}

	/**
	 * @test
	 */
	public function setSfallgForStringSetsSfallg()
	{
		$this->subject->setSfallg('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sfallg',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFamilieReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFamilie()
		);
	}

	/**
	 * @test
	 */
	public function setFamilieForStringSetsFamilie()
	{
		$this->subject->setFamilie('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'familie',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGeburtsortReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getGeburtsort()
		);
	}

	/**
	 * @test
	 */
	public function setGeburtsortForStringSetsGeburtsort()
	{
		$this->subject->setGeburtsort('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'geburtsort',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGeburtsdatumReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getGeburtsdatum()
		);
	}

	/**
	 * @test
	 */
	public function setGeburtsdatumForStringSetsGeburtsdatum()
	{
		$this->subject->setGeburtsdatum('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'geburtsdatum',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGoetterlaeufeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getGoetterlaeufe()
		);
	}

	/**
	 * @test
	 */
	public function setGoetterlaeufeForStringSetsGoetterlaeufe()
	{
		$this->subject->setGoetterlaeufe('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'goetterlaeufe',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGeschlechtReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getGeschlecht()
		);
	}

	/**
	 * @test
	 */
	public function setGeschlechtForStringSetsGeschlecht()
	{
		$this->subject->setGeschlecht('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'geschlecht',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTitelReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitel()
		);
	}

	/**
	 * @test
	 */
	public function setTitelForStringSetsTitel()
	{
		$this->subject->setTitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCharakteristikaReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCharakteristika()
		);
	}

	/**
	 * @test
	 */
	public function setCharakteristikaForStringSetsCharakteristika()
	{
		$this->subject->setCharakteristika('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'charakteristika',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSonstigesReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSonstiges()
		);
	}

	/**
	 * @test
	 */
	public function setSonstigesForStringSetsSonstiges()
	{
		$this->subject->setSonstiges('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sonstiges',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getApGesamtReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setApGesamtForIntSetsApGesamt()
	{	}

	/**
	 * @test
	 */
	public function getApVerfuegbarReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setApVerfuegbarForIntSetsApVerfuegbar()
	{	}

	/**
	 * @test
	 */
	public function getApAusgegebenReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setApAusgegebenForIntSetsApAusgegeben()
	{	}

	/**
	 * @test
	 */
	public function getLebensenergieBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setLebensenergieBonusForIntSetsLebensenergieBonus()
	{	}

	/**
	 * @test
	 */
	public function getLebensenergieKaufReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setLebensenergieKaufForIntSetsLebensenergieKauf()
	{	}

	/**
	 * @test
	 */
	public function getLebensenergieMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setLebensenergieMaxForIntSetsLebensenergieMax()
	{	}

	/**
	 * @test
	 */
	public function getAstralenergieBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAstralenergieBonusForIntSetsAstralenergieBonus()
	{	}

	/**
	 * @test
	 */
	public function getAstralenergieKaufReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAstralenergieKaufForIntSetsAstralenergieKauf()
	{	}

	/**
	 * @test
	 */
	public function getAstralenergieMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAstralenergieMaxForIntSetsAstralenergieMax()
	{	}

	/**
	 * @test
	 */
	public function getKarmaenergieBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKarmaenergieBonusForIntSetsKarmaenergieBonus()
	{	}

	/**
	 * @test
	 */
	public function getKarmaenergieKaufReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKarmaenergieKaufForIntSetsKarmaenergieKauf()
	{	}

	/**
	 * @test
	 */
	public function getKarmaenergieMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setKarmaenergieMaxForIntSetsKarmaenergieMax()
	{	}

	/**
	 * @test
	 */
	public function getSeelenkraftBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setSeelenkraftBonusForIntSetsSeelenkraftBonus()
	{	}

	/**
	 * @test
	 */
	public function getSeelenkraftMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setSeelenkraftMaxForIntSetsSeelenkraftMax()
	{	}

	/**
	 * @test
	 */
	public function getZaehigkeitBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setZaehigkeitBonusForIntSetsZaehigkeitBonus()
	{	}

	/**
	 * @test
	 */
	public function getZaehigkeitMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setZaehigkeitMaxForIntSetsZaehigkeitMax()
	{	}

	/**
	 * @test
	 */
	public function getAusweichenBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAusweichenBonusForIntSetsAusweichenBonus()
	{	}

	/**
	 * @test
	 */
	public function getAusweichenMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setAusweichenMaxForIntSetsAusweichenMax()
	{	}

	/**
	 * @test
	 */
	public function getInitiativeBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setInitiativeBonusForIntSetsInitiativeBonus()
	{	}

	/**
	 * @test
	 */
	public function getInitiativeMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setInitiativeMaxForIntSetsInitiativeMax()
	{	}

	/**
	 * @test
	 */
	public function getGeschwindigkeitBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setGeschwindigkeitBonusForIntSetsGeschwindigkeitBonus()
	{	}

	/**
	 * @test
	 */
	public function getGeschwindigkeitMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setGeschwindigkeitMaxForIntSetsGeschwindigkeitMax()
	{	}

	/**
	 * @test
	 */
	public function getSchicksalspunkteBonusReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setSchicksalspunkteBonusForIntSetsSchicksalspunkteBonus()
	{	}

	/**
	 * @test
	 */
	public function getSchicksalspunkteMaxReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setSchicksalspunkteMaxForIntSetsSchicksalspunkteMax()
	{	}

	/**
	 * @test
	 */
	public function getSchicksalspunkteAktuellReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setSchicksalspunkteAktuellForIntSetsSchicksalspunkteAktuell()
	{	}

	/**
	 * @test
	 */
	public function getTalentFliegenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentFliegenFWForIntSetsTalentFliegenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentFliegenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentFliegenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentFliegenAnmerkungForStringSetsTalentFliegenAnmerkung()
	{
		$this->subject->setTalentFliegenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentFliegenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentGaukeleienFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentGaukeleienFWForIntSetsTalentGaukeleienFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentGaukeleienAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentGaukeleienAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentGaukeleienAnmerkungForStringSetsTalentGaukeleienAnmerkung()
	{
		$this->subject->setTalentGaukeleienAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentGaukeleienAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentKletternFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentKletternFWForIntSetsTalentKletternFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentKletternAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentKletternAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentKletternAnmerkungForStringSetsTalentKletternAnmerkung()
	{
		$this->subject->setTalentKletternAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentKletternAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentKoerperbeherrschungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentKoerperbeherrschungFWForIntSetsTalentKoerperbeherrschungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentKoerperbeherrschungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentKoerperbeherrschungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentKoerperbeherrschungAnmerkungForStringSetsTalentKoerperbeherrschungAnmerkung()
	{
		$this->subject->setTalentKoerperbeherrschungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentKoerperbeherrschungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentKraftaktFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentKraftaktFWForIntSetsTalentKraftaktFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentKraftaktAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentKraftaktAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentKraftaktAnmerkungForStringSetsTalentKraftaktAnmerkung()
	{
		$this->subject->setTalentKraftaktAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentKraftaktAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentReitenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentReitenFWForIntSetsTalentReitenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentReitenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentReitenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentReitenAnmerkungForStringSetsTalentReitenAnmerkung()
	{
		$this->subject->setTalentReitenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentReitenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSchwimmenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSchwimmenFWForIntSetsTalentSchwimmenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSchwimmenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSchwimmenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSchwimmenAnmerkungForStringSetsTalentSchwimmenAnmerkung()
	{
		$this->subject->setTalentSchwimmenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSchwimmenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSelbstbeherrschungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSelbstbeherrschungFWForIntSetsTalentSelbstbeherrschungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSelbstbeherrschungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSelbstbeherrschungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSelbstbeherrschungAnmerkungForStringSetsTalentSelbstbeherrschungAnmerkung()
	{
		$this->subject->setTalentSelbstbeherrschungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSelbstbeherrschungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSingenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSingenFWForIntSetsTalentSingenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSingenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSingenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSingenAnmerkungForStringSetsTalentSingenAnmerkung()
	{
		$this->subject->setTalentSingenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSingenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSinnesschaerfeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSinnesschaerfeFWForIntSetsTalentSinnesschaerfeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSinnesschaerfeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSinnesschaerfeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSinnesschaerfeAnmerkungForStringSetsTalentSinnesschaerfeAnmerkung()
	{
		$this->subject->setTalentSinnesschaerfeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSinnesschaerfeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentTanzenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentTanzenFWForIntSetsTalentTanzenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentTanzenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentTanzenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentTanzenAnmerkungForStringSetsTalentTanzenAnmerkung()
	{
		$this->subject->setTalentTanzenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentTanzenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentTaschendiebstahlFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentTaschendiebstahlFWForIntSetsTalentTaschendiebstahlFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentTaschendiebstahlAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentTaschendiebstahlAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentTaschendiebstahlAnmerkungForStringSetsTalentTaschendiebstahlAnmerkung()
	{
		$this->subject->setTalentTaschendiebstahlAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentTaschendiebstahlAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentVerbergenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentVerbergenFWForIntSetsTalentVerbergenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentVerbergenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentVerbergenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentVerbergenAnmerkungForStringSetsTalentVerbergenAnmerkung()
	{
		$this->subject->setTalentVerbergenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentVerbergenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentZechenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentZechenFWForIntSetsTalentZechenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentZechenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentZechenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentZechenAnmerkungForStringSetsTalentZechenAnmerkung()
	{
		$this->subject->setTalentZechenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentZechenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentBekehrenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentBekehrenFWForIntSetsTalentBekehrenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentBekehrenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentBekehrenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentBekehrenAnmerkungForStringSetsTalentBekehrenAnmerkung()
	{
		$this->subject->setTalentBekehrenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentBekehrenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentBetoerenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentBetoerenFWForIntSetsTalentBetoerenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentBetoerenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentBetoerenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentBetoerenAnmerkungForStringSetsTalentBetoerenAnmerkung()
	{
		$this->subject->setTalentBetoerenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentBetoerenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentEinschuechternFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentEinschuechternFWForIntSetsTalentEinschuechternFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentEinschuechternAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentEinschuechternAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentEinschuechternAnmerkungForStringSetsTalentEinschuechternAnmerkung()
	{
		$this->subject->setTalentEinschuechternAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentEinschuechternAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentEtiketteFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentEtiketteFWForIntSetsTalentEtiketteFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentEtiketteAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentEtiketteAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentEtiketteAnmerkungForStringSetsTalentEtiketteAnmerkung()
	{
		$this->subject->setTalentEtiketteAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentEtiketteAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentGassenwissenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentGassenwissenFWForIntSetsTalentGassenwissenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentGassenwissenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentGassenwissenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentGassenwissenAnmerkungForStringSetsTalentGassenwissenAnmerkung()
	{
		$this->subject->setTalentGassenwissenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentGassenwissenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentMenschenkenntnisFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentMenschenkenntnisFWForIntSetsTalentMenschenkenntnisFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentMenschenkenntnisAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentMenschenkenntnisAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentMenschenkenntnisAnmerkungForStringSetsTalentMenschenkenntnisAnmerkung()
	{
		$this->subject->setTalentMenschenkenntnisAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentMenschenkenntnisAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentUeberredenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentUeberredenFWForIntSetsTalentUeberredenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentUeberredenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentUeberredenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentUeberredenAnmerkungForStringSetsTalentUeberredenAnmerkung()
	{
		$this->subject->setTalentUeberredenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentUeberredenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentVerkleidenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentVerkleidenFWForIntSetsTalentVerkleidenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentVerkleidenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentVerkleidenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentVerkleidenAnmerkungForStringSetsTalentVerkleidenAnmerkung()
	{
		$this->subject->setTalentVerkleidenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentVerkleidenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentWillenskraftFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentWillenskraftFWForIntSetsTalentWillenskraftFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentWillenskraftAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentWillenskraftAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentWillenskraftAnmerkungForStringSetsTalentWillenskraftAnmerkung()
	{
		$this->subject->setTalentWillenskraftAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentWillenskraftAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentFaehrtensuchenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentFaehrtensuchenFWForIntSetsTalentFaehrtensuchenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentFaehrtensuchenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentFaehrtensuchenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentFaehrtensuchenAnmerkungForStringSetsTalentFaehrtensuchenAnmerkung()
	{
		$this->subject->setTalentFaehrtensuchenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentFaehrtensuchenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentFesselnFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentFesselnFWForIntSetsTalentFesselnFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentFesselnAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentFesselnAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentFesselnAnmerkungForStringSetsTalentFesselnAnmerkung()
	{
		$this->subject->setTalentFesselnAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentFesselnAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentFischenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentFischenFWForIntSetsTalentFischenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentFischenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentFischenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentFischenAnmerkungForStringSetsTalentFischenAnmerkung()
	{
		$this->subject->setTalentFischenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentFischenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentOrientierungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentOrientierungFWForIntSetsTalentOrientierungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentOrientierungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentOrientierungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentOrientierungAnmerkungForStringSetsTalentOrientierungAnmerkung()
	{
		$this->subject->setTalentOrientierungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentOrientierungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentPflanzenkundeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentPflanzenkundeFWForIntSetsTalentPflanzenkundeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentPflanzenkundeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentPflanzenkundeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentPflanzenkundeAnmerkungForStringSetsTalentPflanzenkundeAnmerkung()
	{
		$this->subject->setTalentPflanzenkundeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentPflanzenkundeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentTierkundeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentTierkundeFWForIntSetsTalentTierkundeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentTierkundeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentTierkundeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentTierkundeAnmerkungForStringSetsTalentTierkundeAnmerkung()
	{
		$this->subject->setTalentTierkundeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentTierkundeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentWildnislebenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentWildnislebenFWForIntSetsTalentWildnislebenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentWildnislebenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentWildnislebenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentWildnislebenAnmerkungForStringSetsTalentWildnislebenAnmerkung()
	{
		$this->subject->setTalentWildnislebenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentWildnislebenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentBrettspielFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentBrettspielFWForIntSetsTalentBrettspielFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentBrettspielAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentBrettspielAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentBrettspielAnmerkungForStringSetsTalentBrettspielAnmerkung()
	{
		$this->subject->setTalentBrettspielAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentBrettspielAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentGeographieFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentGeographieFWForIntSetsTalentGeographieFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentGeographieAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentGeographieAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentGeographieAnmerkungForStringSetsTalentGeographieAnmerkung()
	{
		$this->subject->setTalentGeographieAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentGeographieAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentGeschichtswissenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentGeschichtswissenFWForIntSetsTalentGeschichtswissenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentGeschichtswissenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentGeschichtswissenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentGeschichtswissenAnmerkungForStringSetsTalentGeschichtswissenAnmerkung()
	{
		$this->subject->setTalentGeschichtswissenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentGeschichtswissenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentGoetterFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentGoetterFWForIntSetsTalentGoetterFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentGoetterAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentGoetterAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentGoetterAnmerkungForStringSetsTalentGoetterAnmerkung()
	{
		$this->subject->setTalentGoetterAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentGoetterAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentKriegskunstFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentKriegskunstFWForIntSetsTalentKriegskunstFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentKriegskunstAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentKriegskunstAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentKriegskunstAnmerkungForStringSetsTalentKriegskunstAnmerkung()
	{
		$this->subject->setTalentKriegskunstAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentKriegskunstAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentMagiekundeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentMagiekundeFWForIntSetsTalentMagiekundeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentMagiekundeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentMagiekundeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentMagiekundeAnmerkungForStringSetsTalentMagiekundeAnmerkung()
	{
		$this->subject->setTalentMagiekundeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentMagiekundeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentMechanikFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentMechanikFWForIntSetsTalentMechanikFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentMechanikAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentMechanikAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentMechanikAnmerkungForStringSetsTalentMechanikAnmerkung()
	{
		$this->subject->setTalentMechanikAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentMechanikAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentRechnenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentRechnenFWForIntSetsTalentRechnenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentRechnenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentRechnenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentRechnenAnmerkungForStringSetsTalentRechnenAnmerkung()
	{
		$this->subject->setTalentRechnenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentRechnenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSagenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSagenFWForIntSetsTalentSagenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSagenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSagenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSagenAnmerkungForStringSetsTalentSagenAnmerkung()
	{
		$this->subject->setTalentSagenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSagenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSphaerenkundeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSphaerenkundeFWForIntSetsTalentSphaerenkundeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSphaerenkundeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSphaerenkundeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSphaerenkundeAnmerkungForStringSetsTalentSphaerenkundeAnmerkung()
	{
		$this->subject->setTalentSphaerenkundeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSphaerenkundeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSternkundeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSternkundeFWForIntSetsTalentSternkundeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSternkundeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSternkundeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSternkundeAnmerkungForStringSetsTalentSternkundeAnmerkung()
	{
		$this->subject->setTalentSternkundeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSternkundeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentAlchimieFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentAlchimieFWForIntSetsTalentAlchimieFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentAlchimieAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentAlchimieAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentAlchimieAnmerkungForStringSetsTalentAlchimieAnmerkung()
	{
		$this->subject->setTalentAlchimieAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentAlchimieAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentBooteFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentBooteFWForIntSetsTalentBooteFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentBooteAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentBooteAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentBooteAnmerkungForStringSetsTalentBooteAnmerkung()
	{
		$this->subject->setTalentBooteAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentBooteAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentFahrzeugeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentFahrzeugeFWForIntSetsTalentFahrzeugeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentFahrzeugeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentFahrzeugeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentFahrzeugeAnmerkungForStringSetsTalentFahrzeugeAnmerkung()
	{
		$this->subject->setTalentFahrzeugeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentFahrzeugeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentHandelFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentHandelFWForIntSetsTalentHandelFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentHandelAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentHandelAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentHandelAnmerkungForStringSetsTalentHandelAnmerkung()
	{
		$this->subject->setTalentHandelAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentHandelAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeGiftFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeGiftFWForIntSetsTalentHeilkundeGiftFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeGiftAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentHeilkundeGiftAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeGiftAnmerkungForStringSetsTalentHeilkundeGiftAnmerkung()
	{
		$this->subject->setTalentHeilkundeGiftAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentHeilkundeGiftAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeKrankheitenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeKrankheitenFWForIntSetsTalentHeilkundeKrankheitenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeKrankheitenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentHeilkundeKrankheitenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeKrankheitenAnmerkungForStringSetsTalentHeilkundeKrankheitenAnmerkung()
	{
		$this->subject->setTalentHeilkundeKrankheitenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentHeilkundeKrankheitenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeSeeleFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeSeeleFWForIntSetsTalentHeilkundeSeeleFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeSeeleAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentHeilkundeSeeleAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeSeeleAnmerkungForStringSetsTalentHeilkundeSeeleAnmerkung()
	{
		$this->subject->setTalentHeilkundeSeeleAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentHeilkundeSeeleAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeWundenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeWundenFWForIntSetsTalentHeilkundeWundenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentHeilkundeWundenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentHeilkundeWundenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentHeilkundeWundenAnmerkungForStringSetsTalentHeilkundeWundenAnmerkung()
	{
		$this->subject->setTalentHeilkundeWundenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentHeilkundeWundenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentHolzbearbeitungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentHolzbearbeitungFWForIntSetsTalentHolzbearbeitungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentHolzbearbeitungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentHolzbearbeitungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentHolzbearbeitungAnmerkungForStringSetsTalentHolzbearbeitungAnmerkung()
	{
		$this->subject->setTalentHolzbearbeitungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentHolzbearbeitungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentLebensmittelbearbeitungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentLebensmittelbearbeitungFWForIntSetsTalentLebensmittelbearbeitungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentLebensmittelbearbeitungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentLebensmittelbearbeitungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentLebensmittelbearbeitungAnmerkungForStringSetsTalentLebensmittelbearbeitungAnmerkung()
	{
		$this->subject->setTalentLebensmittelbearbeitungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentLebensmittelbearbeitungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentLederbearbeitungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentLederbearbeitungFWForIntSetsTalentLederbearbeitungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentLederbearbeitungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentLederbearbeitungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentLederbearbeitungAnmerkungForStringSetsTalentLederbearbeitungAnmerkung()
	{
		$this->subject->setTalentLederbearbeitungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentLederbearbeitungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentMalenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentMalenFWForIntSetsTalentMalenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentMalenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentMalenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentMalenAnmerkungForStringSetsTalentMalenAnmerkung()
	{
		$this->subject->setTalentMalenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentMalenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentMetallbearbeitungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentMetallbearbeitungFWForIntSetsTalentMetallbearbeitungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentMetallbearbeitungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentMetallbearbeitungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentMetallbearbeitungAnmerkungForStringSetsTalentMetallbearbeitungAnmerkung()
	{
		$this->subject->setTalentMetallbearbeitungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentMetallbearbeitungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentMusizierenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentMusizierenFWForIntSetsTalentMusizierenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentMusizierenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentMusizierenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentMusizierenAnmerkungForStringSetsTalentMusizierenAnmerkung()
	{
		$this->subject->setTalentMusizierenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentMusizierenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSchloesserknackenFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSchloesserknackenFWForIntSetsTalentSchloesserknackenFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSchloesserknackenAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSchloesserknackenAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSchloesserknackenAnmerkungForStringSetsTalentSchloesserknackenAnmerkung()
	{
		$this->subject->setTalentSchloesserknackenAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSchloesserknackenAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentSteinbearbeitungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentSteinbearbeitungFWForIntSetsTalentSteinbearbeitungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentSteinbearbeitungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentSteinbearbeitungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentSteinbearbeitungAnmerkungForStringSetsTalentSteinbearbeitungAnmerkung()
	{
		$this->subject->setTalentSteinbearbeitungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentSteinbearbeitungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentStoffbearbeitungFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentStoffbearbeitungFWForIntSetsTalentStoffbearbeitungFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentStoffbearbeitungAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentStoffbearbeitungAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentStoffbearbeitungAnmerkungForStringSetsTalentStoffbearbeitungAnmerkung()
	{
		$this->subject->setTalentStoffbearbeitungAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentStoffbearbeitungAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTalentRechtskundeFWReturnsInitialValueForInt()
	{	}

	/**
	 * @test
	 */
	public function setTalentRechtskundeFWForIntSetsTalentRechtskundeFW()
	{	}

	/**
	 * @test
	 */
	public function getTalentRechtskundeAnmerkungReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTalentRechtskundeAnmerkung()
		);
	}

	/**
	 * @test
	 */
	public function setTalentRechtskundeAnmerkungForStringSetsTalentRechtskundeAnmerkung()
	{
		$this->subject->setTalentRechtskundeAnmerkung('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'talentRechtskundeAnmerkung',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSprachenReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSprachen()
		);
	}

	/**
	 * @test
	 */
	public function setSprachenForStringSetsSprachen()
	{
		$this->subject->setSprachen('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sprachen',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSchriftenReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSchriften()
		);
	}

	/**
	 * @test
	 */
	public function setSchriftenForStringSetsSchriften()
	{
		$this->subject->setSchriften('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'schriften',
			$this->subject
		);
	}
}
