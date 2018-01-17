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
class MessageModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps ApiVersion
     * @var string $apiVersion public property
     */
    public $apiVersion;

    /**
     * @todo Write general description for this property
     * @required
     * @maps MessageSid
     * @var string $messageSid public property
     */
    public $messageSid;

    /**
     * @todo Write general description for this property
     * @required
     * @maps From
     * @var string $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @required
     * @maps To
     * @var string $to public property
     */
    public $to;

    /**
     * @todo Write general description for this property
     * @required
     * @maps MessagePrice
     * @var string $messagePrice public property
     */
    public $messagePrice;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Body
     * @var string $body public property
     */
    public $body;

    /**
     * @todo Write general description for this property
     * @required
     * @maps DateSent
     * @var string $dateSent public property
     */
    public $dateSent;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Status
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps TemplateId
     * @var string $templateId public property
     */
    public $templateId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps TemplateData
     * @var \Message360Lib\Models\TemplateDataModel $templateData public property
     */
    public $templateData;

    /**
     * Constructor to set initial or default values of member properties
     * @param string            $apiVersion   Initialization value for $this->apiVersion
     * @param string            $messageSid   Initialization value for $this->messageSid
     * @param string            $from         Initialization value for $this->from
     * @param string            $to           Initialization value for $this->to
     * @param string            $messagePrice Initialization value for $this->messagePrice
     * @param string            $body         Initialization value for $this->body
     * @param string            $dateSent     Initialization value for $this->dateSent
     * @param string            $status       Initialization value for $this->status
     * @param string            $templateId   Initialization value for $this->templateId
     * @param TemplateDataModel $templateData Initialization value for $this->templateData
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->apiVersion   = func_get_arg(0);
            $this->messageSid   = func_get_arg(1);
            $this->from         = func_get_arg(2);
            $this->to           = func_get_arg(3);
            $this->messagePrice = func_get_arg(4);
            $this->body         = func_get_arg(5);
            $this->dateSent     = func_get_arg(6);
            $this->status       = func_get_arg(7);
            $this->templateId   = func_get_arg(8);
            $this->templateData = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ApiVersion']   = $this->apiVersion;
        $json['MessageSid']   = $this->messageSid;
        $json['From']         = $this->from;
        $json['To']           = $this->to;
        $json['MessagePrice'] = $this->messagePrice;
        $json['Body']         = $this->body;
        $json['DateSent']     = $this->dateSent;
        $json['Status']       = $this->status;
        $json['TemplateId']   = $this->templateId;
        $json['TemplateData'] = $this->templateData;

        return $json;
    }
}
