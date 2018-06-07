<?php
namespace Mnp\ExpositionMnp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alban MILANT <alban.milant@hotmail.fr>
 * @author Sébastien NOEL <sebastien.noel.pro@gmail.com>
 * @author Rémi PACHET <remipachet@gmail.com>
 */
class ExpoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mnp\ExpositionMnp\Domain\Model\Expo
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mnp\ExpositionMnp\Domain\Model\Expo();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );
    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHorairesReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHoraires()
        );
    }

    /**
     * @test
     */
    public function setHorairesForStringSetsHoraires()
    {
        $this->subject->setHoraires('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'horaires',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVisuelReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getVisuel()
        );
    }

    /**
     * @test
     */
    public function setVisuelForFileReferenceSetsVisuel()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setVisuel($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'visuel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTarifReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTarif()
        );
    }

    /**
     * @test
     */
    public function setTarifForStringSetsTarif()
    {
        $this->subject->setTarif('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tarif',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateDebutReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateDebut()
        );
    }

    /**
     * @test
     */
    public function setDateDebutForDateTimeSetsDateDebut()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateDebut($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateDebut',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateFinReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateFin()
        );
    }

    /**
     * @test
     */
    public function setDateFinForDateTimeSetsDateFin()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateFin($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateFin',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLieuReturnsInitialValueForLieux()
    {
        self::assertEquals(
            null,
            $this->subject->getLieu()
        );
    }

    /**
     * @test
     */
    public function setLieuForLieuxSetsLieu()
    {
        $lieuFixture = new \Mnp\ExpositionMnp\Domain\Model\Lieux();
        $this->subject->setLieu($lieuFixture);

        self::assertAttributeEquals(
            $lieuFixture,
            'lieu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOeuvresReturnsInitialValueForOeuvres()
    {
        self::assertEquals(
            null,
            $this->subject->getOeuvres()
        );
    }

    /**
     * @test
     */
    public function setOeuvresForOeuvresSetsOeuvres()
    {
        $oeuvresFixture = new \Mnp\ExpositionMnp\Domain\Model\Oeuvres();
        $this->subject->setOeuvres($oeuvresFixture);

        self::assertAttributeEquals(
            $oeuvresFixture,
            'oeuvres',
            $this->subject
        );
    }
}
