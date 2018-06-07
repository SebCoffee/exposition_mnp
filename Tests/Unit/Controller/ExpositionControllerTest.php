<?php
namespace Mnp\ExpositionMnp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alban MILANT <alban.milant@hotmail.fr>
 * @author Sébastien NOEL <sebastien.noel.pro@gmail.com>
 * @author Rémi PACHET <remipachet@gmail.com>
 */
class ExpositionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mnp\ExpositionMnp\Controller\ExpositionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mnp\ExpositionMnp\Controller\ExpositionController::class)
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
    public function listActionFetchesAllExpositionsFromRepositoryAndAssignsThemToView()
    {

        $allExpositions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $expositionRepository = $this->getMockBuilder(\Mnp\ExpositionMnp\Domain\Repository\ExpositionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $expositionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allExpositions));
        $this->inject($this->subject, 'expositionRepository', $expositionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('expositions', $allExpositions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenExpositionToView()
    {
        $exposition = new \Mnp\ExpositionMnp\Domain\Model\Exposition();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('exposition', $exposition);

        $this->subject->showAction($exposition);
    }
}
