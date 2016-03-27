<?php

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $User_ID;

    /**
     *
     * @var string
     */
    public $User_Name;

    /**
     *
     * @var string
     */
    public $User_Username;

    /**
     *
     * @var string
     */
    public $User_Password;

    /**
     *
     * @var string
     */
    public $User_Email;

    /**
     *
     * @var string
     */
    public $User_Birthday;

    /**
     *
     * @var string
     */
    public $User_Gender;

    /**
     *
     * @var integer
     */
    public $User_idGroup;

    /**
     *
     * @var string
     */
    public $User_Regisdate;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("User");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'User';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
