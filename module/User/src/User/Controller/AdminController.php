<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 11/10/2014
 * Time: 13:46
 */

namespace User\Controller;

use Application\Entity\User as UserEntity;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AdminController extends AbstractActionController
{
    public function indexAction()
    {
        /**
         * @var \User\Model\User $model
         */
        $model = $this->getServiceLocator()->get('ModelManager')->get('User\Model\User', [new UserEntity()]);
        $grid  = $model->retrieve();

        $grid->setToolbarTemplate('user/admin/toolbar');
        $grid->render();

        $viewModel = new ViewModel();
        $viewModel->addChild($grid->getViewModel(), 'datagrid');

        return $viewModel;
    }

    public function createAction()
    {

    }
}
