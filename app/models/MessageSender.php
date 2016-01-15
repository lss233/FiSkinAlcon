<?php

class MessageSender extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $mid;

    /**
     *
     * @var integer
     */
    public $from_uid;

    /**
     *
     * @var string
     */
    public $from_username;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $content;

    /**
     *
     * @var integer
     */
    public $from_deleted;

    /**
     *
     * @var integer
     */
    public $date;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'message_sender';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MessageSender[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MessageSender
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
