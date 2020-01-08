<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    public $phone;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('name, email, subject, body, phone', 'required'),
            // email has to be a valid email address
            array('email', 'email'),
            array('phone', 'passwordStrength', 'strength' => 'weak'),

            // verifyCode needs to be entered correctly
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
        );
    }

    public function passwordStrength($attribute, $params)
    {
//        if ($params['strength'] === 'weak')
//            $pattern = '/^(?=.*[a-zA-Z0-9]).{5,}$/';
//        elseif ($params['strength'] === 'strong')
//            $pattern = '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/';
//
//        if (!preg_match($pattern, $this->$attribute))
//            $this->addError($attribute, 'your password is not strong enough!');enough$
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'verifyCode' => 'Verification Code',
        );
    }
}