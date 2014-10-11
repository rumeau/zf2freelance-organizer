<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 10/10/2014
 * Time: 1:59
 */
namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class GlobalSettingsController extends AbstractActionController
{
    public function indexAction()
    {
        $form = $this->getServiceLocator()->get('FormElementManager')->get('RumeauLibAppConfig\ConfigElements');
        $form->add([
            'type' => 'Text',
            'name' => 'rumeaulib_admin_admin_layout',
        ]);

        return [
            'form' => $form
        ];
    }
} 