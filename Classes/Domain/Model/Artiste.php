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
 * Artiste
 */
class Artiste extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * photo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $photo = null;

    /**
     * nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * biographie
     * 
     * @var string
     */
    protected $biographie = '';

    /**
     * dateNaissance
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateNaissance = null;

    /**
     * dateDeces
     * 
     * @var \DateTime
     */
    protected $dateDeces = null;

    /**
     * nationalite
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mnp\ExpositionMnp\Domain\Model\Nationalite>
     * @cascade remove
     */
    protected $nationalite = null;

    /**
     * oeuvres
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mnp\ExpositionMnp\Domain\Model\Oeuvres>
     * @cascade remove
     */
    protected $oeuvres = null;

    /**
     * Returns the photo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }

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
     * Returns the biographie
     * 
     * @return string $biographie
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * Sets the biographie
     * 
     * @param string $biographie
     * @return void
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    /**
     * Returns the dateNaissance
     * 
     * @return \DateTime $dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Sets the dateNaissance
     * 
     * @param \DateTime $dateNaissance
     * @return void
     */
    public function setDateNaissance(\DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * Returns the dateDeces
     * 
     * @return \DateTime $dateDeces
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
    }

    /**
     * Sets the dateDeces
     * 
     * @param \DateTime $dateDeces
     * @return void
     */
    public function setDateDeces(\DateTime $dateDeces)
    {
        $this->dateDeces = $dateDeces;
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
        $this->nationalite = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->oeuvres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Nationalite
     * 
     * @param \Mnp\ExpositionMnp\Domain\Model\Nationalite $nationalite
     * @return void
     */
    public function addNationalite(\Mnp\ExpositionMnp\Domain\Model\Nationalite $nationalite)
    {
        $this->nationalite->attach($nationalite);
    }

    /**
     * Removes a Nationalite
     * 
     * @param \Mnp\ExpositionMnp\Domain\Model\Nationalite $nationaliteToRemove The Nationalite to be removed
     * @return void
     */
    public function removeNationalite(\Mnp\ExpositionMnp\Domain\Model\Nationalite $nationaliteToRemove)
    {
        $this->nationalite->detach($nationaliteToRemove);
    }

    /**
     * Returns the nationalite
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mnp\ExpositionMnp\Domain\Model\Nationalite> $nationalite
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Sets the nationalite
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mnp\ExpositionMnp\Domain\Model\Nationalite> $nationalite
     * @return void
     */
    public function setNationalite(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * Adds a Oeuvres
     * 
     * @param \Mnp\ExpositionMnp\Domain\Model\Oeuvres $oeuvre
     * @return void
     */
    public function addOeuvre(\Mnp\ExpositionMnp\Domain\Model\Oeuvres $oeuvre)
    {
        $this->oeuvres->attach($oeuvre);
    }

    /**
     * Removes a Oeuvres
     * 
     * @param \Mnp\ExpositionMnp\Domain\Model\Oeuvres $oeuvreToRemove The Oeuvres to be removed
     * @return void
     */
    public function removeOeuvre(\Mnp\ExpositionMnp\Domain\Model\Oeuvres $oeuvreToRemove)
    {
        $this->oeuvres->detach($oeuvreToRemove);
    }

    /**
     * Returns the oeuvres
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mnp\ExpositionMnp\Domain\Model\Oeuvres> $oeuvres
     */
    public function getOeuvres()
    {
        return $this->oeuvres;
    }

    /**
     * Sets the oeuvres
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mnp\ExpositionMnp\Domain\Model\Oeuvres> $oeuvres
     * @return void
     */
    public function setOeuvres(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $oeuvres)
    {
        $this->oeuvres = $oeuvres;
    }
}
