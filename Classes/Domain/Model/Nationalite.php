<?php
namespace Mnp\ExpositionMnp\Domain\Model;

/***
 *
 * This file is part of the "exposition_mnp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Nationalite
 */
class Nationalite extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * codeIso
     *
     * @var string
     * @validate NotEmpty
     */
    protected $codeIso = '';

    /**
     * Returns the nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the nom
     *
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Returns the codeIso
     *
     * @return string codeIso
     */
    public function getCodeIso()
    {
        return $this->codeIso;
    }

    /**
     * Sets the codeIso
     *
     * @param string $codeIso
     * @return void
     */
    public function setCodeIso($codeIso)
    {
        $this->codeIso = $codeIso;
    }
}
