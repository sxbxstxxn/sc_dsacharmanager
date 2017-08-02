<?php
namespace DSACharManager\ScDsacharmanager\Controller;

use stdClass;
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
 * CharacterController
 */
class CharacterController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    protected $customUserID = 0;
   
		/**
     * raceRepository
     *
     * @var \DSACharManager\ScDsacharmanager\Domain\Repository\RaceRepository
     * @inject
     */
    protected $raceRepository = NULL;
		
    /**
     * characterRepository
     *
     * @var \DSACharManager\ScDsacharmanager\Domain\Repository\CharacterRepository
     * @inject
     */
    protected $characterRepository = NULL;
    
		
		
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $GLOBALS['TSFE']->set_no_cache();
        $this->customUserID = $GLOBALS['TSFE']->fe_user->user['uid'];
        $characters = $this->characterRepository->findByFeuserID($this->customUserID);
        //$characters = $this->characterRepository->findAll();
        $this->view->assign('characters', $characters);
    }
    
    /**
     * action show
     *
     * @param \DSACharManager\ScDsacharmanager\Domain\Model\Character $character
     * @return void
     */
    public function showAction(\DSACharManager\ScDsacharmanager\Domain\Model\Character $character)
    {
        $GLOBALS['TSFE']->set_no_cache();
        $this->view->assign('character', $character);
        //$GLOBALS['TSFE']->additionalHeaderData['tx_scdsacharmanager'] = 'EXT:Resources\Public\JS\scdm-scripts.js';
        $GLOBALS['TSFE']->additionalHeaderData['tx_scdsacharmanager'] = '<script type="text/javascript" src="typo3conf/ext/sc_dsacharmanager/Resources/Public/JS/scdm-scripts.js"></script>';
        $GLOBALS['TSFE']->additionalHeaderData['tx_scdsacharmanager-calc'] = '<script type="text/javascript" src="typo3conf/ext/sc_dsacharmanager/Resources/Public/JS/scdm-calculator.js"></script>';
    }
    
    /**
     * action new
     *
     * @param \DSACharManager\ScDsacharmanager\Domain\Model\Character $newCharacter
     * @ignorevalidation $newCharacter
     * @return void
     */
    public function newAction(\DSACharManager\ScDsacharmanager\Domain\Model\Character $newCharacter = NULL)
    {
        $GLOBALS['TSFE']->set_no_cache();
        $this->view->assign('erfahrungsgradListe', $this->getErfahrungsgrade());
        $this->view->assign('spezies', $this->getSpezies());
        $this->view->assign('newCharacter', $newCharacter);
        $GLOBALS['TSFE']->additionalHeaderData['tx_scdsacharmanager'] = '<script type="text/javascript" src="typo3conf/ext/sc_dsacharmanager/Resources/Public/JS/scdm-scripts.js"></script>';
        $GLOBALS['TSFE']->additionalHeaderData['tx_scdsacharmanager-calc'] = '<script type="text/javascript" src="typo3conf/ext/sc_dsacharmanager/Resources/Public/JS/scdm-calculator.js"></script>';
    }
    
    /**
     * action create
     *
     * @param \DSACharManager\ScDsacharmanager\Domain\Model\Character $newCharacter
     * @return void
     */
    public function createAction(\DSACharManager\ScDsacharmanager\Domain\Model\Character $newCharacter)
    {
        $GLOBALS['TSFE']->set_no_cache();
        //$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->customUserID = $GLOBALS['TSFE']->fe_user->user['uid'];
        $newCharacter->feuserID = $this->customUserID;
        $this->view->assign('erfahrungsgradListe', $this->getErfahrungsgrade());
        $this->view->assign('spezies', $this->getSpezies());
        $this->characterRepository->add($newCharacter);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \DSACharManager\ScDsacharmanager\Domain\Model\Character $character
     * @ignorevalidation $character
     * @return void
     */
    public function editAction(\DSACharManager\ScDsacharmanager\Domain\Model\Character $character)
    {
        $GLOBALS['TSFE']->set_no_cache();
        $this->view->assign('erfahrungsgradListe', $this->getErfahrungsgrade());
        $this->view->assign('spezies', $this->getSpezies());
        $this->view->assign('character', $character);
        $GLOBALS['TSFE']->additionalHeaderData['tx_scdsacharmanager'] = '<script type="text/javascript" src="typo3conf/ext/sc_dsacharmanager/Resources/Public/JS/scdm-scripts.js"></script>';
        $GLOBALS['TSFE']->additionalHeaderData['tx_scdsacharmanager-calc'] = '<script type="text/javascript" src="typo3conf/ext/sc_dsacharmanager/Resources/Public/JS/scdm-calculator.js"></script>';
    }
    
    /**
     * action update
     *
     * @param \DSACharManager\ScDsacharmanager\Domain\Model\Character $character
     * @return void
     */
    public function updateAction(\DSACharManager\ScDsacharmanager\Domain\Model\Character $character)
    {
        $GLOBALS['TSFE']->set_no_cache();
        //$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->view->assign('erfahrungsgradListe', $this->getErfahrungsgrade());
        $this->view->assign('spezies', $this->getSpezies());
        $this->characterRepository->update($character);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \DSACharManager\ScDsacharmanager\Domain\Model\Character $character
     * @return void
     */
    public function deleteAction(\DSACharManager\ScDsacharmanager\Domain\Model\Character $character)
    {
        $GLOBALS['TSFE']->set_no_cache();
        //$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->characterRepository->remove($character);
        $this->redirect('list');
    }
    
    /**
     * prepare erfahrungsgrade for select box
     *
     * @return array
     */
    public function getErfahrungsgrade()
    {
        $erfahrungsgrade = array();
        $entries = array('Unerfahren' => 'Unerfahren', 'Durchschnittlich' => 'Durchschnittlich', 'Erfahren' => 'Erfahren', 'Kompetent' => 'Kompetent', 'Meisterlich' => 'Meisterlich', 'Brillant' => 'Brillant', 'Legendär' => 'Legendär');
        foreach ($entries as $key => $value) {
            $erfahrungsgrad = new \stdClass();
            $erfahrungsgrad->key = $key;
            $erfahrungsgrad->value = $value;
            $erfahrungsgrade[] = $erfahrungsgrad;
        }
        return $erfahrungsgrade;
    }
    
    /**
     * prepare erfahrungsgrade for select box
     *
     * @return array
     */
    public function getSpezies()
    {
        $spezies = array();
        $entries = array('Mensch1' => 'Mensch1', 'Zwerg' => 'Zwerg', 'Elf' => 'Elf', 'Halbelf' => 'Halbelf');
				
				
				$entries = $this->raceRepository->findAll();
				
				
				
        foreach ($entries as $key => $value) {
            $spezie = new \stdClass();
            $spezie->key = $key;
            $spezie->value = $value;
            $spezies[] = $spezie;
        }
        return $spezies;
    }

}