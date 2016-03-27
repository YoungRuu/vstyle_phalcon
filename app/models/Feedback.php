<?php

class Feedback extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $Feedback_ID;

    /**
     *
     * @var string
     */
    public $Feedback_Content;

    /**
     *
     * @var string
     */
    public $Feedback_Date;

    /**
     *
     * @var string
     */
    public $Feedback_Sender;

    /**
     *
     * @var string
     */
    public $Feedback_Emailsender;

    /**
     *
     * @var integer
     */
    public $News_ID;

    /**
     *
     * @var integer
     */
    public $Feedback_isActive;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("Feedback");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Feedback';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Feedback[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Feedback
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
