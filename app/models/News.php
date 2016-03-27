<?php

class News extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $News_ID;

    /**
     *
     * @var string
     */
    public $News_Title;

    /**
     *
     * @var string
     */
    public $News_Alias;

    /**
     *
     * @var string
     */
    public $News_Images;

    /**
     *
     * @var string
     */
    public $News_Summary;

    /**
     *
     * @var string
     */
    public $News_Content;

    /**
     *
     * @var string
     */
    public $News_Dateposted;

    /**
     *
     * @var integer
     */
    public $News_Views;

    /**
     *
     * @var string
     */
    public $News_Keyword;

    /**
     *
     * @var integer
     */
    public $News_Hot;

    /**
     *
     * @var integer
     */
    public $News_isActive;

    /**
     *
     * @var integer
     */
    public $Category_ID;

    /**
     *
     * @var integer
     */
    public $User_ID;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("News");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'News';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return News[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return News
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
