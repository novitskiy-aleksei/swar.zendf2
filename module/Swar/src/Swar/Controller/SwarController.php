<?php
namespace Swar\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SwarController extends AbstractActionController
{
    protected $swarTable;

    public function indexAction()
    {
        return new ViewModel(array(
            'articles' => $this->getSwarTable()->fetchAll(),
        ));
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }

    public function getSwarTable()
    {
        if (!$this->swarTable) {
            $sm = $this->getServiceLocator();
            $this->swarTable = $sm->get('Swar\Model\SwarTable');
        }
        return $this->swarTable;
    }
}