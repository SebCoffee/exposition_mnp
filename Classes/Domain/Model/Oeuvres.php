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
 * Oeuvres
 */
class Oeuvres extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * intitule
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $intitule = '';

    /**
     * date
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $date = null;

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * type
     * 
     * @var int
     */
    protected $type = 0;

    /**
     * dimensions
     * 
     * @var string
     */
    protected $dimensions = '';

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * Returns the intitule
     * 
     * @return string $intitule
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Sets the intitule
     * 
     * @param string $intitule
     * @return void
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the type
     * 
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the dimensions
     * 
     * @return string $dimensions
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Sets the dimensions
     * 
     * @param string $dimensions
     * @return void
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
}
