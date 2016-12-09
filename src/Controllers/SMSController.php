<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 12/09/2016
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
class SMSController extends BaseController {

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
     * View Particular SMS
     * @param  array  $options    Array with all options for search
     * @param  string     $options['messagesid']       Required parameter: Message sid
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewSMS (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['messagesid']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/viewsms.{ResponseType}';

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
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        return $response->body;
    }
        
    /**
     * List All Inbound SMS
     * @param  array  $options    Array with all options for search
     * @param  integer     $options['page']             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  string      $options['pagesize']         Optional parameter: Number of individual resources listed in the response per page
     * @param  string      $options['from']             Optional parameter: From Number to Inbound SMS
     * @param  string      $options['to']               Optional parameter: To Number to get Inbound SMS
     * @param  string      $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListInboundSMS (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/getInboundsms.{ResponseType}';

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
            'pagesize'     => $this->val($options, 'pagesize'),
            'from'         => $this->val($options, 'from'),
            'to'           => $this->val($options, 'to')
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        return $response->body;
    }
        
    /**
     * List All SMS
     * @param  array  $options    Array with all options for search
     * @param  integer     $options['page']             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  integer     $options['pagesize']         Optional parameter: Number of individual resources listed in the response per page
     * @param  string      $options['from']             Optional parameter: Messages sent from this number
     * @param  string      $options['to']               Optional parameter: Messages sent to this number
     * @param  string      $options['datesent']         Optional parameter: Only list SMS messages sent in the specified date range
     * @param  string      $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListSMS (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/listsms.{ResponseType}';

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
            'pagesize'     => $this->val($options, 'pagesize'),
            'from'         => $this->val($options, 'from'),
            'to'           => $this->val($options, 'to'),
            'datesent'     => $this->val($options, 'datesent')
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        return $response->body;
    }
        
    /**
     * Send an SMS from a message360 number
     * @param  array  $options    Array with all options for search
     * @param  integer     $options['fromcountrycode']           Required parameter: From Country Code
     * @param  string      $options['from']                      Required parameter: SMS enabled Message360 number to send this message from
     * @param  integer     $options['tocountrycode']             Required parameter: To country code
     * @param  string      $options['to']                        Required parameter: Number to send the SMS to
     * @param  string      $options['body']                      Required parameter: Text Message To Send
     * @param  string      $options['method']                    Optional parameter: Specifies the HTTP method used to request the required URL once SMS sent.
     * @param  string      $options['messagestatuscallback']     Optional parameter: URL that can be requested to receive notification when SMS has Sent. A set of default parameters will be sent here once the SMS is finished.
     * @param  string      $options['responseType']              Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendSMS (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['fromcountrycode'], $options['from'], $options['tocountrycode'], $options['to'], $options['body']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/sendsms.{ResponseType}';

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
            'fromcountrycode'       => $this->val($options, 'fromcountrycode'),
            'from'                  => $this->val($options, 'from'),
            'tocountrycode'         => $this->val($options, 'tocountrycode'),
            'to'                    => $this->val($options, 'to'),
            'body'                  => $this->val($options, 'body'),
            'method'                => $this->val($options, 'method'),
            'messagestatuscallback' => $this->val($options, 'messagestatuscallback')
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        return $response->body;
    }
        


    /**
	 * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val($arr, $key, $default = NULL)
    {
        if(isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }

}