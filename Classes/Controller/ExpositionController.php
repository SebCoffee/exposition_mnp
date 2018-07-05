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
 * ExpositionController
 */
class ExpositionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * expositionRepository
     * 
     * @var \Mnp\ExpositionMnp\Domain\Repository\ExpositionRepository
     * @inject
     */
    protected $expositionRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $expositions = $this->expositionRepository->findAll();
        $this->view->assign('expositions', $expositions);
    }

    /**
     * action show
     * 
     * @param \Mnp\ExpositionMnp\Domain\Model\Exposition $exposition
     * @return void
     */
    public function showAction(\Mnp\ExpositionMnp\Domain\Model\Exposition $exposition)
    {
        $this->view->assign('exposition', $exposition);
    }
}
