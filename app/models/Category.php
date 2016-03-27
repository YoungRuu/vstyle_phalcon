<?php

class Category extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $Category_ID;

    /**
     *
     * @var string
     */
    public $Category_Name;

    /**
     *
     * @var string
     */
    public $Category_Alias;

    /**
     *
     * @var integer
     */
    public $Category_isActive;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("Category");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Category';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Category[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Category
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
