<?php

class Categorymenu extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $Categorymenu_ID;

    /**
     *
     * @var string
     */
    public $Categorymenu_Name;

    /**
     *
     * @var string
     */
    public $Categorymenu_Alias;

    /**
     *
     * @var integer
     */
    public $Categorymenu_isActive;

    /**
     *
     * @var integer
     */
    public $Category_ID;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'categorymenu';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categorymenu[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Categorymenu
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
