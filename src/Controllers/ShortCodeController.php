<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Message360Lib\Controllers;

use Message360Lib\APIException;
use Message360Lib\APIHelper;
use Message360Lib\Configuration;
use Message360Lib\Models;
use Message360Lib\Exceptions;
use Message360Lib\Http\HttpRequest;
use Message360Lib\Http\HttpResponse;
use Message360Lib\Http\HttpMethod;
use Message360Lib\Http\HttpContext;
use Message360Lib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class ShortCodeController extends BaseController
{
    /**
     * @var ShortCodeController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ShortCodeController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * @todo Add general description for this endpoint
     *
     * @param  array  $options    Array with all options for search
     * @param integer $options['shortcode']             Your dedicated shortcode
     * @param double  $options['to']                    The number to send your SMS to
     * @param string  $options['body']                  The body of your message
     * @param string  $options['responseType']          Response type format xml or json
     * @param string  $options['method']                (optional) Callback status method, POST or GET
     * @param string  $options['messagestatuscallback'] (optional) Callback url for SMS status
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function sendDedicatedShortcode(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['shortcode'], $options['to'], $options['body'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/senddedicatedsms.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'          => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'          => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'shortcode'             => $this->val($options, 'shortcode'),
            'to'                    => $this->val($options, 'to'),
            'body'                  => $this->val($options, 'body'),
            'method'                => $this->val($options, 'method'),
            'messagestatuscallback' => $this->val($options, 'messagestatuscallback')
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
     * View a single Sms Short Code message.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['messageSid']   The unique identifier for the sms resource
     * @param string $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewShortcode(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['messageSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/viewsms..{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'MessageSid'   => $this->val($options, 'messageSid')
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
     * Retrieve a list of Short Code message objects.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response type format xml or json
     * @param string  $options['shortcode']    (optional) Only list messages sent from this Short Code
     * @param string  $options['to']           (optional) Only list messages sent to this number
     * @param string  $options['dateSent']     (optional) Only list messages sent with the specified date
     * @param integer $options['page']         (optional) The page count to retrieve from the total results in the
     *                                         collection. Page indexing starts at 1.
     * @param integer $options['pageSize']     (optional) The count of objects to return per page.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listShortcode(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/listsms.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'Shortcode'    => $this->val($options, 'shortcode'),
            'To'           => $this->val($options, 'to'),
            'DateSent'     => $this->val($options, 'dateSent'),
            'Page'         => $this->val($options, 'page', 1),
            'PageSize'     => $this->val($options, 'pageSize', 10)
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
     * Retrive a list of inbound Sms Short Code messages associated with your message360 account.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['page']         (optional) Which page of the overall response will be returned. Zero
     *                                         indexed
     * @param integer $options['pageSize']     (optional) Number of individual resources listed in the response per
     *                                         page
     * @param string  $options['from']         (optional) Only list SMS messages sent from this number
     * @param string  $options['shortcode']    (optional) Only list SMS messages sent to Shortcode
     * @param string  $options['dateReceived'] (optional) Only list SMS messages sent in the specified date MAKE
     *                                         REQUEST
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listInboundShortcode(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/getinboundsms.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'Page'         => $this->val($options, 'page', 1),
            'PageSize'     => $this->val($options, 'pageSize', 10),
            'From'         => $this->val($options, 'from'),
            'Shortcode'    => $this->val($options, 'shortcode'),
            'DateReceived' => $this->val($options, 'dateReceived')
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
    * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val($arr, $key, $default = null)
    {
        if (isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }
}
