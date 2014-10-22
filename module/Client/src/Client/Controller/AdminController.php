<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 16/10/2014
 * Time: 18:43
 */

namespace Client\Controller;

use Application\Entity\Client as ClientEntity;
use Zend\Http\Response;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class AdminController
 * @package Client\Controller
 */
class AdminController extends AbstractActionController
{
    public function indexAction()
    {
        /**
         * @var \User\Model\User $model
         */
        $model = $this->getServiceLocator()->get('ModelManager')->get('Client\Model\Client', [new ClientEntity()]);
        $grid  = $model->retrieve();

        $grid->setToolbarTemplate('client/admin/toolbar');
        $grid->render();

        $viewModel = new ViewModel();
        $viewModel->addChild($grid->getViewModel(), 'datagrid');

        return $viewModel;
    }

    public function createAction()
    {
        $form = $this->getServiceLocator()->get('FormElementManager')->get('Client\Form\Client');

        $url  = $this->url('admin/clients', ['action' => 'create']);
        $prg  = $this->prg($url, true);
        if ($prg instanceof Response) {
            return $prg;
        } elseif (is_array($prg)) {
            $modelManager = $this->getServiceLocator()->get('ModelManager');
            $model        = $modelManager->get('Client\Model\Client', [new ClientEntity()]);

            if ($model instanceof Response) {
                return $model;
            }
        }

        $form->setAttribute('action', $url);
        $form->prepare();

        return [
            'form' => $form,
        ];
    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }
} 