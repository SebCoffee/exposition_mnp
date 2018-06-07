<?php
namespace Mnp\ExpositionMnp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alban MILANT <alban.milant@hotmail.fr>
 * @author Sébastien NOEL <sebastien.noel.pro@gmail.com>
 * @author Rémi PACHET <remipachet@gmail.com>
 */
class NationaliteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mnp\ExpositionMnp\Domain\Model\Nationalite
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mnp\ExpositionMnp\Domain\Model\Nationalite();
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
    public function getCodeIsoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCodeIso()
        );
    }

    /**
     * @test
     */
    public function setCodeIsoForStringSetsCodeIso()
    {
        $this->subject->setCodeIso('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'codeIso',
            $this->subject
        );
    }
}
