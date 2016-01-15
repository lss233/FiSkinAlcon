<?php

class MessageReceiver extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $rid;

    /**
     *
     * @var integer
     */
    public $mid;

    /**
     *
     * @var integer
     */
    public $to_uid;

    /**
     *
     * @var string
     */
    public $to_username;

    /**
     *
     * @var integer
     */
    public $is_readed;

    /**
     *
     * @var integer
     */
    public $is_deleted;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'message_receiver';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MessageReceiver[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MessageReceiver
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
