<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 11/10/2016
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
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class PhoneNumberController extends BaseController {

    /**
     * @var PhoneNumberController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return PhoneNumberController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Available Phone Number
     * @param  array  $options    Array with all options for search
     * @param  string      $options['numberType']       Required parameter: Number type either SMS,Voice or all
     * @param  string      $options['areaCode']         Required parameter: Phone Number Area Code
     * @param  integer     $options['pageSize']         Optional parameter: Page Size
     * @param  string      $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAvailablePhoneNumber (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['numberType'], $options['areaCode']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/availablenumber.{ResponseType}';

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
            'NumberType'   => $this->val($options, 'numberType'),
            'AreaCode'     => $this->val($options, 'areaCode'),
            'PageSize'     => $this->val($options, 'pageSize')
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
     * List Account's Phone number details
     * @param  array  $options    Array with all options for search
     * @param  integer     $options['page']             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  integer     $options['pageSize']         Optional parameter: Number of individual resources listed in the response per page
     * @param  string      $options['numberType']       Optional parameter: Example: 
     * @param  string      $options['friendlyName']     Optional parameter: Example: 
     * @param  string      $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListNumber (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/listnumber.{ResponseType}';

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
            'Page'         => $this->val($options, 'page'),
            'PageSize'     => $this->val($options, 'pageSize'),
            'NumberType'   => $this->val($options, 'numberType'),
            'FriendlyName' => $this->val($options, 'friendlyName')
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
     * Get Phone Number Details
     * @param  array  $options    Array with all options for search
     * @param  string     $options['phoneNumber']      Required parameter: Get Phone number Detail
     * @param  string     $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewNumberDetails (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['phoneNumber']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/viewnumber.{ResponseType}';

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
            'PhoneNumber'  => $this->val($options, 'phoneNumber')
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
     * Release number from account
     * @param  array  $options    Array with all options for search
     * @param  string     $options['phoneNumber']      Required parameter: Phone number to be relase
     * @param  string     $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createReleaseNumber (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['phoneNumber']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/releasenumber.{ResponseType}';

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
            'PhoneNumber'  => $this->val($options, 'phoneNumber')
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
     * Buy Phone Number 
     * @param  array  $options    Array with all options for search
     * @param  string     $options['phoneNumber']      Required parameter: Phone number to be purchase
     * @param  string     $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createBuyNumber (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['phoneNumber']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/buynumber.{ResponseType}';

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
            'PhoneNumber'  => $this->val($options, 'phoneNumber')
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
     * Update Phone Number Details
     * @param  array  $options    Array with all options for search
     * @param  string     $options['phoneNumber']              Required parameter: Example: 
     * @param  string     $options['friendlyName']             Optional parameter: Example: 
     * @param  string     $options['voiceUrl']                 Optional parameter: URL requested once the call connects
     * @param  string     $options['voiceMethod']              Optional parameter: Example: 
     * @param  string     $options['voiceFallbackUrl']         Optional parameter: URL requested if the voice URL is not available
     * @param  string     $options['voiceFallbackMethod']      Optional parameter: Example: 
     * @param  string     $options['hangupCallback']           Optional parameter: Example: 
     * @param  string     $options['hangupCallbackMethod']     Optional parameter: Example: 
     * @param  string     $options['heartbeatUrl']             Optional parameter: URL requested once the call connects
     * @param  string     $options['heartbeatMethod']          Optional parameter: URL that can be requested every 60 seconds during the call to notify of elapsed time
     * @param  string     $options['smsUrl']                   Optional parameter: URL requested when an SMS is received
     * @param  string     $options['smsMethod']                Optional parameter: Example: 
     * @param  string     $options['smsFallbackUrl']           Optional parameter: URL requested once the call connects
     * @param  string     $options['smsFallbackMethod']        Optional parameter: URL requested if the sms URL is not available
     * @param  string     $options['responseType']             Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updatePhoneNumber (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['phoneNumber']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/updatenumber.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'         => $this->val($options, 'responseType', 'json'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber'          => $this->val($options, 'phoneNumber'),
            'FriendlyName'         => $this->val($options, 'friendlyName'),
            'VoiceUrl'             => $this->val($options, 'voiceUrl'),
            'VoiceMethod'          => $this->val($options, 'voiceMethod'),
            'VoiceFallbackUrl'     => $this->val($options, 'voiceFallbackUrl'),
            'VoiceFallbackMethod'  => $this->val($options, 'voiceFallbackMethod'),
            'HangupCallback'       => $this->val($options, 'hangupCallback'),
            'HangupCallbackMethod' => $this->val($options, 'hangupCallbackMethod'),
            'HeartbeatUrl'         => $this->val($options, 'heartbeatUrl'),
            'HeartbeatMethod'      => $this->val($options, 'heartbeatMethod'),
            'SmsUrl'               => $this->val($options, 'smsUrl'),
            'SmsMethod'            => $this->val($options, 'smsMethod'),
            'SmsFallbackUrl'       => $this->val($options, 'smsFallbackUrl'),
            'SmsFallbackMethod'    => $this->val($options, 'smsFallbackMethod')
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