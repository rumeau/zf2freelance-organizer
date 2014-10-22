<?php
/**
 * Created by PhpStorm.
 * User: Jean
 * Date: 16/10/2014
 * Time: 20:27
 */

namespace Client\Form;

use Zend\Form\Form;

/**
 * Class Client
 * @package Client\Form
 */
class Client extends Form
{
    public function init()
    {
        $this->setAttribute('class', 'form-horizontal');

        $this->add([
            'type' => 'Client\Form\Client\Client',
            'name' => 'client',
            'options' => [
                'use_as_base_fieldset' => true,
            ],
        ]);

        $this->add([
            'type' => 'Zend\Form\Element\Csrf',
            'name' => 'formcsrf',
        ]);
    }
}
