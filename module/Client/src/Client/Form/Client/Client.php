<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 16/10/2014
 * Time: 20:21
 */

namespace Client\Form\Client;

use Application\Entity\Client as ClientEntity;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use DoctrineModule\Persistence\ProvidesObjectManager;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineObjectHydrator;
use Zend\Form\Fieldset;

/**
 * Class Client
 * @package Client\Form\Client
 */
class Client extends Fieldset implements ObjectManagerAwareInterface
{
    use ProvidesObjectManager;

    public function init()
    {
        $this->setHydrator(new DoctrineObjectHydrator($this->getObjectManager()));
        $this->setObject(new ClientEntity());

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'name',
            'options' => [
                'label' => 'Name',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => [
                'label' => 'E-Mail',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'phone',
            'options' => [
                'label' => 'Phone',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Textarea',
            'name' => 'address',
            'options' => [
                'label' => 'Address',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [
                'rows' => 3,
            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'postalCode',
            'options' => [
                'label' => 'Post Code',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'city',
            'options' => [
                'label' => 'City',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'country',
            'options' => [
                'label' => 'Country',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'contactName',
            'options' => [
                'label' => 'Name',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Email',
            'name' => 'contactEmail',
            'options' => [
                'label' => 'Email',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'contactPhone',
            'options' => [
                'label' => 'Phone',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [

            ],
        ]);
    }
}
