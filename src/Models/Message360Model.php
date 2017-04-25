<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Message360Lib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Message360Model implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps ResponseStatus
     * @var integer $responseStatus public property
     */
    public $responseStatus;

    /**
     * @todo Write general description for this property
     * @required
     * @maps MessageCount
     * @var integer $messageCount public property
     */
    public $messageCount;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Message
     * @var MessageModel $message public property
     */
    public $message;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer      $responseStatus Initialization value for $this->responseStatus
     * @param integer      $messageCount   Initialization value for $this->messageCount
     * @param MessageModel $message        Initialization value for $this->message
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->responseStatus = func_get_arg(0);
            $this->messageCount   = func_get_arg(1);
            $this->message        = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ResponseStatus'] = $this->responseStatus;
        $json['MessageCount']   = $this->messageCount;
        $json['Message']        = $this->message;

        return $json;
    }
}
