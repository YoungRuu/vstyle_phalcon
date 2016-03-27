<?php

class Caribnews extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $title_alias;

    /**
     *
     * @var string
     */
    public $img;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $content;

    /**
     *
     * @var integer
     */
    public $id_danhmuc;

    /**
     *
     * @var integer
     */
    public $publish;

    /**
     *
     * @var string
     */
    public $link;

    /**
     *
     * @var integer
     */
    public $error;

    /**
     *
     * @var string
     */
    public $created;

    /**
     *
     * @var string
     */
    public $updated;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'caribnews';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Caribnews[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Caribnews
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
