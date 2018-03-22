<?php
/*
 * Ytel
 *
 * This file was automatically generated for ytel by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ErrorsModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps Error
     * @var \YtelLib\Models\ErrorModel[] $error public property
     */
    public $error;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $error Initialization value for $this->error
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->error = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Error'] = $this->error;

        return $json;
    }
}
