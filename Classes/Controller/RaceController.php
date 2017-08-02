<?php
namespace DSACharManager\ScDsacharmanager\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Sebastian Christoph <sxbxstxxn@googlemail.com>
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
 * RaceController
 */
class RaceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * raceRepository
     *
     * @var \DSACharManager\ScDsacharmanager\Domain\Repository\RaceRepository
     * @inject
     */
    protected $raceRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $races = $this->raceRepository->findAll();
        $this->view->assign('races', $races);
    }
    
    /**
     * action show
     *
     * @param \DSACharManager\ScDsacharmanager\Domain\Model\Race $race
     * @return void
     */
    public function showAction(\DSACharManager\ScDsacharmanager\Domain\Model\Race $race)
    {
        $this->view->assign('race', $race);
    }

}