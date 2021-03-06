<?php
/*
 * YtelAPIV3Lib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelAPIV3Lib\Controllers;

use YtelAPIV3Lib\APIException;
use YtelAPIV3Lib\APIHelper;
use YtelAPIV3Lib\Configuration;
use YtelAPIV3Lib\Models;
use YtelAPIV3Lib\Exceptions;
use YtelAPIV3Lib\Http\HttpRequest;
use YtelAPIV3Lib\Http\HttpResponse;
use YtelAPIV3Lib\Http\HttpMethod;
use YtelAPIV3Lib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class SMSController extends BaseController
{
    /**
     * @var SMSController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return SMSController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve a single SMS message object with details by its SmsSid.
     *
     * @param string $messageSid The unique identifier for a sms message.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewSMS1(
        $messageSid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/viewdetailsms.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'MessageSid' => $messageSid
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Retrieve a single SMS message object by its SmsSid.
     *
     * @param string $messageSid The unique identifier for a sms message.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewSMS(
        $messageSid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/viewsms.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'MessageSid' => $messageSid
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Send an SMS from a Ytel number
     *
     * @param string $from                  The 10-digit SMS-enabled Ytel number (E.164 format) in which the message is
     *                                      sent.
     * @param string $to                    The 10-digit phone number (E.164 format) that will receive the message.
     * @param string $body                  The body message that is to be sent in the text.
     * @param string $method                (optional) Specifies the HTTP method used to request the required URL once
     *                                      SMS sent.
     * @param string $messageStatusCallback (optional) URL that can be requested to receive notification when SMS has
     *                                      Sent. A set of default parameters will be sent here once the SMS is
     *                                      finished.
     * @param bool   $smartsms              (optional) Check's 'to' number can receive sms or not using Carrier API, if
     *                                      wireless = true then text sms is sent, else wireless = false then call is
     *                                      recieved to end user with audible message.
     * @param bool   $deliveryStatus        (optional) Delivery reports are a method to tell your system if the message
     *                                      has arrived on the destination phone.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendSMS(
        $from,
        $to,
        $body,
        $method = null,
        $messageStatusCallback = null,
        $smartsms = null,
        $deliveryStatus = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/sendsms.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'          => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'From'                  => $from,
            'To'                    => $to,
            'Body'                  => $body,
            'Method'                => $method,
            'MessageStatusCallback' => $messageStatusCallback,
            'Smartsms'              => var_export($smartsms, true),
            'DeliveryStatus'        => var_export($deliveryStatus, true)
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Retrieve a list of Outbound SMS message objects.
     *
     * @param integer $page     (optional) The page count to retrieve from the total results in the collection. Page
     *                          indexing starts at 1.
     * @param integer $pageSize (optional) Number of individual resources listed in the response per page
     * @param string  $from     (optional) Filter SMS message objects from this valid 10-digit phone number (E.164
     *                          format).
     * @param string  $to       (optional) Filter SMS message objects to this valid 10-digit phone number (E.164
     *                          format).
     * @param string  $dateSent (optional) Only list SMS messages sent in the specified date range
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListSMS(
        $page = null,
        $pageSize = null,
        $from = null,
        $to = null,
        $dateSent = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/listsms.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'Page'     => $page,
            'PageSize' => $pageSize,
            'From'     => $from,
            'To'       => $to,
            'DateSent' => $dateSent
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Retrieve a list of Inbound SMS message objects.
     *
     * @param integer $page     (optional) The page count to retrieve from the total results in the collection. Page
     *                          indexing starts at 1.
     * @param integer $pageSize (optional) The count of objects to return per page.
     * @param string  $from     (optional) Filter SMS message objects from this valid 10-digit phone number (E.164
     *                          format).
     * @param string  $to       (optional) Filter SMS message objects to this valid 10-digit phone number (E.164
     *                          format).
     * @param string  $dateSent (optional) Filter sms message objects by this date.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListInboundSMS(
        $page = null,
        $pageSize = null,
        $from = null,
        $to = null,
        $dateSent = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/getinboundsms.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'Page'     => $page,
            'PageSize' => $pageSize,
            'From'     => $from,
            'To'       => $to,
            'DateSent' => $dateSent
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
