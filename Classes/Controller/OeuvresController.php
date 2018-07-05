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
 * OeuvresController
 */
class OeuvresController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * OeuvresRepository
     * 
     * @var \Mnp\ExpositionMnp\Domain\Repository\OeuvresRepository
     * @inject
     */
    protected $oeuvresRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $oeuvres = $this->oeuvresRepository->findAll();
        $this->view->assign('oeuvres', $oeuvres);
    }

    /**
     * action show
     * 
     * @param \Mnp\ExpositionMnp\Domain\Model\Oeuvres $oeuvres
     * @return void
     */
    public function showAction(\Mnp\ExpositionMnp\Domain\Model\Oeuvres $oeuvres)
    {
        $this->view->assign('oeuvres', $oeuvres);
    }

    /**
     * action highlight
     * 
     * @return void
     */
    public function highlightAction()
    {

    }
}
