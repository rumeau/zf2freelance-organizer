<?php
/**
 * GoalioForgotPassword Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = array(

    /**
     * Email Address that will appear in the 'From' of outbound emails
     *
     * Default: empty
     */
    'email_from_address' => array(
    	'email' => 'rumeau@gmail.com',
    	'name' => 'Jean Rumeau',
	),

    /**
     * Subject line of the email message which is
     * sent out when a user enters their email address
     *
     * Default: 'You requested to reset your password'
     */
    //'reset_email_subject_line' => 'You requested to reset your password',

    /**
     * Template for the email message sent to users
     * who request a password reset
     *
     * Default: 'goalio-forgot-password/email/forgot'
     */
    //'reset_email_template' => 'goalio-forgot-password/email/forgot',

    /**
     * Mail Transport to use
     *
     * Default: 'Zend\Mail\Transport\Sendmail'
     */
    'email_transport' => 'Zend\Mail\Transport\Sendmail',

    /**
     * Password Model Entity Class
     *
     * Name of Entity class to use. Useful for using your own entity class
     * instead of the default one provided. Default is GoalioForgotPassword\Entity\Password.
     */
    //'password_entity_class' => 'GoalioForgotPassword\Entity\Password',

    /**
     * Reset expire time
     *
     * How long will the user be able to reset the password using the token?
     *
     * Default value: 86400 seconds = 24 hours
     * Accepted values: the number of seconds the user should be allowed to change his password
     */
    'reset_expire' => 86400,

    /**
     * Validate that given e-mail exists in db
     *
     * If set to true, service will validate that given e-mail address is really registred
     *
     */
    'validate_existing_record' => true

    /**
     * End of GoalioForgotPassword configuration
     */
);


/**
 * You do not need to edit below this line
 */
return array(
    'goalioforgotpassword' => $settings,
);
