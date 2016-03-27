<?php

class Advertise extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $Advertise_ID;

    /**
     *
     * @var string
     */
    public $Advertise_Description;

    /**
     *
     * @var string
     */
    public $Advertise_Url;

    /**
     *
     * @var integer
     */
    public $Advertise_Visit;

    /**
     *
     * @var string
     */
    public $Advertise_Position;

    /**
     *
     * @var string
     */
    public $Advertise_Image;

    /**
     *
     * @var string
     */
    public $Advertise_Name;

    /**
     *
     * @var integer
     */
    public $Advertise_isActive;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("Advertise");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Advertise';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Advertise[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Advertise
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
