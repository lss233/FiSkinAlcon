<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class UserAccount extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $uid;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $salt;

    /**
     *
     * @var string
     */
    public $regtime;

    /**
     *
     * @var string
     */
    public $token;

    /**
     *
     * @var integer
     */
    public $token_exptime;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_account';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAccount[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserAccount
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
