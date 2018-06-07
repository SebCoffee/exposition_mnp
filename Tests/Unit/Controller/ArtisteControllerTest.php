<?php
namespace Mnp\ExpositionMnp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alban MILANT <alban.milant@hotmail.fr>
 * @author Sébastien NOEL <sebastien.noel.pro@gmail.com>
 * @author Rémi PACHET <remipachet@gmail.com>
 */
class ArtisteControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mnp\ExpositionMnp\Controller\ArtisteController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mnp\ExpositionMnp\Controller\ArtisteController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllArtistesFromRepositoryAndAssignsThemToView()
    {

        $allArtistes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $artisteRepository = $this->getMockBuilder(\Mnp\ExpositionMnp\Domain\Repository\ArtisteRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $artisteRepository->expects(self::once())->method('findAll')->will(self::returnValue($allArtistes));
        $this->inject($this->subject, 'artisteRepository', $artisteRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('artistes', $allArtistes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenArtisteToView()
    {
        $artiste = new \Mnp\ExpositionMnp\Domain\Model\Artiste();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('artiste', $artiste);

        $this->subject->showAction($artiste);
    }
}
