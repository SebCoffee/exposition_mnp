<?php
namespace Mnp\ExpositionMnp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alban MILANT <alban.milant@hotmail.fr>
 * @author Sébastien NOEL <sebastien.noel.pro@gmail.com>
 * @author Rémi PACHET <remipachet@gmail.com>
 */
class OeuvresTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mnp\ExpositionMnp\Domain\Model\Oeuvres
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mnp\ExpositionMnp\Domain\Model\Oeuvres();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIntituleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIntitule()
        );
    }

    /**
     * @test
     */
    public function setIntituleForStringSetsIntitule()
    {
        $this->subject->setIntitule('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'intitule',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
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
    public function getTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType()
    {
        $this->subject->setType(12);

        self::assertAttributeEquals(
            12,
            'type',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDimensionsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDimensions()
        );
    }

    /**
     * @test
     */
    public function setDimensionsForStringSetsDimensions()
    {
        $this->subject->setDimensions('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dimensions',
            $this->subject
        );
    }
}
