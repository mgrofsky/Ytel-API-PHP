<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 12/08/2016
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
class RecordingController extends BaseController {

    /**
     * @var RecordingController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return RecordingController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * List out Recordings
     * @param  array  $options    Array with all options for search
     * @param  integer     $options['page']             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  integer     $options['pageSize']         Optional parameter: Number of individual resources listed in the response per page
     * @param  string      $options['dateCreated']      Optional parameter: Example: 
     * @param  string      $options['callSid']          Optional parameter: Example: 
     * @param  string      $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListRecording (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/recording/listrecording.{ResponseType}';

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
            'DateCreated'  => $this->val($options, 'dateCreated'),
            'CallSid'      => $this->val($options, 'callSid')
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
     * Delete Recording Record
     * @param  array  $options    Array with all options for search
     * @param  string     $options['recordingSid']     Required parameter: Unique Recording Sid to be delete
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeleteRecording (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['recordingSid']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/recording/deleterecording.{ResponseType}';

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
            'RecordingSid' => $this->val($options, 'recordingSid')
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
     * View a specific Recording
     * @param  array  $options    Array with all options for search
     * @param  string     $options['recordingSid']     Required parameter: Search Recording sid
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewRecording (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['recordingSid']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/recording/viewrecording.{ResponseType}';

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
            'RecordingSid' => $this->val($options, 'recordingSid')
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