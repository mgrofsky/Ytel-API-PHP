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
class ShortCodeTestResponseModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps Message360
     * @var Message360Model $message360 public property
     */
    public $message360;

    /**
     * Constructor to set initial or default values of member properties
     * @param Message360Model $message360 Initialization value for $this->message360
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->message360 = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Message360'] = $this->message360;

        return $json;
    }
}
