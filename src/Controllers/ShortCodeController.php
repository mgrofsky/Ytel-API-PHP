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
     * View a Shared ShortCode Template
     *
     * @param  array  $options    Array with all options for search
     * @param uuid|string $options['templateid']   The unique identifier for a template object
     * @param string      $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewTemplate(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['templateid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/template/view.{ResponseType}';

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
            'templateid'   => $this->val($options, 'templateid')
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
     * Send an SMS from a message360 ShortCode
     *
     * @param  array  $options    Array with all options for search
     * @param string      $options['shortcode']             The Short Code number that is the sender of this message
     * @param string      $options['tocountrycode']         The country code for sending this message
     * @param string      $options['to']                    A valid 10-digit number that should receive the message+
     * @param uuid|string $options['templateid']            The unique identifier for the template used for the
     *                                                      message
     * @param string      $options['method']                (optional) Specifies the HTTP method used to request the
     *                                                      required URL once the Short Code message is sent.
     * @param string      $options['messageStatusCallback'] (optional) URL that can be requested to receive
     *                                                      notification when Short Code message was sent.
     * @param string      $options['responseType']          (optional) Response type format xml or json
     * @param    array  $fieldParameters    Additional optional form parameters are supported by this endpoint
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendShortCode(
        $options,
        $fieldParameters = null
    ) {
        //check that all required arguments are provided
        if (!isset($options['shortcode'], $options['tocountrycode'], $options['to'], $options['templateid'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/sendsms.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'          => $this->val($options, 'responseType', 'json'),
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
            'tocountrycode'         => $this->val($options, 'tocountrycode'),
            'to'                    => $this->val($options, 'to'),
            'templateid'            => $this->val($options, 'templateid'),
            'Method'                => $this->val($options, 'method', 'GET'),
            'MessageStatusCallback' => $this->val($options, 'messageStatusCallback')
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
     * List All Inbound ShortCode
     *
     * @param  array  $options    Array with all options for search
     * @param integer $options['page']         (optional) Which page of the overall response will be returned. Zero
     *                                         indexed
     * @param integer $options['pagesize']     (optional) Number of individual resources listed in the response per
     *                                         page
     * @param string  $options['from']         (optional) From Number to Inbound ShortCode
     * @param string  $options['shortcode']    (optional) Only list messages sent to this Short Code
     * @param string  $options['dateReceived'] (optional) Only list messages sent with the specified date
     * @param string  $options['responseType'] (optional) Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListInboundShortCode(
        $options
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/getinboundsms.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType', 'json'),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'DateReceived' => $this->val($options, 'dateReceived'),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'page'         => $this->val($options, 'page'),
            'pagesize'     => $this->val($options, 'pagesize', 10),
            'from'         => $this->val($options, 'from'),
            'Shortcode'    => $this->val($options, 'shortcode')
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
     * List ShortCode Messages
     *
     * @param  array  $options    Array with all options for search
     * @param integer $options['page']         (optional) Which page of the overall response will be returned. Zero
     *                                         indexed
     * @param integer $options['pagesize']     (optional) Number of individual resources listed in the response per
     *                                         page
     * @param string  $options['from']         (optional) Messages sent from this number
     * @param string  $options['to']           (optional) Messages sent to this number
     * @param string  $options['datesent']     (optional) Only list SMS messages sent in the specified date range
     * @param string  $options['responseType'] (optional) Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListShortCode(
        $options
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/listsms.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType', 'json'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'page'         => $this->val($options, 'page'),
            'pagesize'     => $this->val($options, 'pagesize', 10),
            'from'         => $this->val($options, 'from'),
            'to'           => $this->val($options, 'to'),
            'datesent'     => $this->val($options, 'datesent')
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
     * List Shortcode Templates by Type
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['type']         (optional) The type (category) of template Valid values: marketing,
     *                                         authorization
     * @param integer $options['page']         (optional) The page count to retrieve from the total results in the
     *                                         collection. Page indexing starts at 1.
     * @param integer $options['pagesize']     (optional) The count of objects to return per page.
     * @param string  $options['responseType'] (optional) Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListTemplates(
        $options
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/template/lists.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType', 'json'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'type'         => $this->val($options, 'type', 'authorization'),
            'page'         => $this->val($options, 'page'),
            'pagesize'     => $this->val($options, 'pagesize', 10)
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
     * View a ShortCode Message
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['messagesid']   Message sid
     * @param string $options['responseType'] (optional) Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewShortCode(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['messagesid'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/shortcode/viewsms.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType', 'json'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'messagesid'   => $this->val($options, 'messagesid')
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
