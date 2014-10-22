<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 12/10/2014
 * Time: 21:20
 */

namespace Admin\Form\AppConfig;


use Zend\Form\Fieldset;

class GlobalSettings extends Fieldset
{
    public function init()
    {
        $this->setLabel('Global Settings');

        $this->add([
            'type' => 'Zend\Form\Element\Text',
            'name' => 'app_name',
            'options' => [
                'label' => 'Application Name',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
            ],
            'attributes' => [
                'value' => 'My Freelance Organizer',
            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Select',
            'name' => 'date_format',
            'options' => [
                'label' => 'Date Format',
                'label_attributes' => ['class' => 'col-lg-3 col-md-3'],
                'twb-layout' => 'horizontal',
                'column-size' => 'lg-9 col-md-9',
                'value_options' => [
                    'd/m/Y' => 'd/m/Y',
                    'Y/m/d' => 'Y/m/d',
                    'm/d/Y' => 'm/d/Y',
                ],
            ],
            'attributes' => [],
        ]);
/*
        $this->add([
            'type' => 'Zend\Form\Element\Select',
            'name' => 'country',
            'options' => [
                'label' => 'Country',
                'label_attributes' => ['class' => 'col-lg-2 col-sm-2'],
                'twb-layout' => 'horizontal',
                'column-size' => 'sm-10',
            ],
            'attributes' => [
                'data-country' => '',
                'data-filter' => true,
                'class' => 'bfh-countries bfh-selectbox',
                'id' => 'countryCode',
            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Select',
            'name' => 'timezone',
            'options' => [
                'label' => 'Timezone',
                'label_attributes' => ['class' => 'col-lg-2 col-sm-2'],
                'twb-layout' => 'horizontal',
                'column-size' => 'sm-10',
                'value_options' => [],
            ],
            'attributes' => [
                'data-filter' => true,
                'data-country' => 'countryCode',
                'class' => 'bfh-timezones bfh-selectbox',
            ],
        ]);*/
    }
}
