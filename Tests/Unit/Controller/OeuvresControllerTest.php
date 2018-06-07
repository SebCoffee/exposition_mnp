<?php
namespace Mnp\ExpositionMnp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alban MILANT <alban.milant@hotmail.fr>
 * @author Sébastien NOEL <sebastien.noel.pro@gmail.com>
 * @author Rémi PACHET <remipachet@gmail.com>
 */
class OeuvresControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mnp\ExpositionMnp\Controller\OeuvresController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mnp\ExpositionMnp\Controller\OeuvresController::class)
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
    public function listActionFetchesAllOeuvressFromRepositoryAndAssignsThemToView()
    {

        $allOeuvress = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oeuvresRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $oeuvresRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOeuvress));
        $this->inject($this->subject, 'oeuvresRepository', $oeuvresRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('oeuvress', $allOeuvress);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOeuvresToView()
    {
        $oeuvres = new \Mnp\ExpositionMnp\Domain\Model\Oeuvres();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('oeuvres', $oeuvres);

        $this->subject->showAction($oeuvres);
    }
}
