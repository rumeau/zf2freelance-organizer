<?php
/**
 * GoalioMailService Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = [

    /**
     * Transport Class
     *
     * Name of Zend Transport Class to use
     */
    'transport_class' => 'Zend\Mail\Transport\Sendmail',

    'options_class' => null,

    'transport_options' => [],

    /**
     * End of GoalioMailService configuration
     */
];

/**
 * You do not need to edit below this line
 */
return [
    'goaliomailservice' => $settings,
];
