<?php
namespace Mnp\ExpositionMnp\Controller;

/***
 *
 * This file is part of the "exposition_mnp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Alban MILANT <alban.milant@hotmail.fr>, LP DAWIN ALT
 *           Sébastien NOEL <sebastien.noel.pro@gmail.com>, LP DAWIN ALT
 *           Rémi PACHET <remipachet@gmail.com>, LP DAWIN ALT
 *
 ***/

/**
 * ArtisteController
 */
class ArtisteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * artisteRepository
     * 
     * @var \Mnp\ExpositionMnp\Domain\Repository\ArtisteRepository
     * @inject
     */
    protected $artisteRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $artistes = $this->artisteRepository->findAll();
        $this->view->assign('artistes', $artistes);
    }

    /**
     * action show
     * 
     * @param \Mnp\ExpositionMnp\Domain\Model\Artiste $artiste
     * @return void
     */
    public function showAction(\Mnp\ExpositionMnp\Domain\Model\Artiste $artiste)
    {
        $this->view->assign('artiste', $artiste);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }
}
