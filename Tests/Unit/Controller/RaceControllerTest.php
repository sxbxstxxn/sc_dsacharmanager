<?php
namespace DSACharManager\ScDsacharmanager\Tests\Unit\Controller;
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
 * Test case for class DSACharManager\ScDsacharmanager\Controller\RaceController.
 *
 * @author Sebastian Christoph <sxbxstxxn@googlemail.com>
 */
class RaceControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \DSACharManager\ScDsacharmanager\Controller\RaceController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('DSACharManager\\ScDsacharmanager\\Controller\\RaceController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllRacesFromRepositoryAndAssignsThemToView()
	{

		$allRaces = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$raceRepository = $this->getMock('DSACharManager\\ScDsacharmanager\\Domain\\Repository\\RaceRepository', array('findAll'), array(), '', FALSE);
		$raceRepository->expects($this->once())->method('findAll')->will($this->returnValue($allRaces));
		$this->inject($this->subject, 'raceRepository', $raceRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('races', $allRaces);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenRaceToView()
	{
		$race = new \DSACharManager\ScDsacharmanager\Domain\Model\Race();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('race', $race);

		$this->subject->showAction($race);
	}
}
