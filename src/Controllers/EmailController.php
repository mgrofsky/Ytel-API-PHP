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
class EmailController extends BaseController {

    /**
     * @var EmailController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return EmailController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * This endpoint allows you to delete entries in the Invalid Emails list.
     * @param  array  $options    Array with all options for search
     * @param  string     $options['email']            Required parameter: Example: 
     * @param  string     $options['responseType']     Optional parameter: Example: json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeleteInvalid (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['email']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/deleteinvalidemail.{ResponseType}';

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
            'email'        => $this->val($options, 'email')
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
     * Outputs email addresses on your blocklist
     * @param  array  $options    Array with all options for search
     * @param  string     $options['offset']           Optional parameter: Where to start in the output list
     * @param  string     $options['limit']            Optional parameter: Maximum number of records to return
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListBlocks (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/listblockemail.{ResponseType}';

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
            'offset'       => $this->val($options, 'offset'),
            'limit'        => $this->val($options, 'limit')
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
     * List out all email addresses marked as spam
     * @param  array  $options    Array with all options for search
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @param  string     $options['offset']           Optional parameter: The record number to start the list at
     * @param  string     $options['limit']            Optional parameter: Maximum number of records to return
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListSpam (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/listspamemail.{ResponseType}';

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
            'offset'       => $this->val($options, 'offset'),
            'limit'        => $this->val($options, 'limit')
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
     * List out all email addresses that have bounced
     * @param  array  $options    Array with all options for search
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @param  string     $options['offset']           Optional parameter: The record to start the list at
     * @param  string     $options['limit']            Optional parameter: The maximum number of records to return
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListBounces (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/listbounceemail.{ResponseType}';

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
            'offset'       => $this->val($options, 'offset'),
            'limit'        => $this->val($options, 'limit')
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
     * Delete an email address from the bounced address list
     * @param  array  $options    Array with all options for search
     * @param  string     $options['email']            Required parameter: The email address to remove from the bounce list
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeleteBounces (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['email']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/deletebouncesemail.{ResponseType}';

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
            'email'        => $this->val($options, 'email')
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
     * List out all invalid email addresses
     * @param  array  $options    Array with all options for search
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @param  string     $options['offet']            Optional parameter: Starting record for listing out emails
     * @param  string     $options['limit']            Optional parameter: Maximum number of records to return
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListInvalid (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/listinvalidemail.{ResponseType}';

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
            'offet'        => $this->val($options, 'offet'),
            'limit'        => $this->val($options, 'limit')
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
     * List all unsubscribed email addresses
     * @param  array  $options    Array with all options for search
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @param  string     $options['offset']           Optional parameter: Starting record of the list
     * @param  string     $options['limit']            Optional parameter: Maximum number of records to be returned
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListUnsubscribes (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/listunsubscribedemail.{ResponseType}';

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
            'offset'       => $this->val($options, 'offset'),
            'limit'        => $this->val($options, 'limit')
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
     * Delete emails from the unsubscribe list
     * @param  array  $options    Array with all options for search
     * @param  string     $options['email']            Required parameter: The email to remove from the unsubscribe list
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeleteUnsubscribes (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['email']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/deleteunsubscribedemail.{ResponseType}';

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
            'email'        => $this->val($options, 'email')
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
     * Add an email to the unsubscribe list
     * @param  array  $options    Array with all options for search
     * @param  string     $options['email']            Required parameter: The email to add to the unsubscribe list
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function addUnsubscribes (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['email']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/addunsubscribesemail.{ResponseType}';

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
            'email'        => $this->val($options, 'email')
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
     * Deletes a blocked email
     * @param  array  $options    Array with all options for search
     * @param  string     $options['email']            Required parameter: Email address to remove from block list
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeleteBlock (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['email']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/deleteblocksemail.{ResponseType}';

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
            'email'        => $this->val($options, 'email')
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
     * Deletes a email address marked as spam from the spam list
     * @param  array  $options    Array with all options for search
     * @param  string     $options['email']            Required parameter: Email address
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeleteSpam (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['email']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/deletespamemail.{ResponseType}';

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
            'email'        => $this->val($options, 'email')
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
     * Send out an email
     * @param  array  $options    Array with all options for search
     * @param  string     $options['to']               Required parameter: The to email address
     * @param  string     $options['from']             Required parameter: The from email address
     * @param  string     $options['type']             Required parameter: email format type, html or text
     * @param  string     $options['subject']          Required parameter: Email subject
     * @param  string     $options['message']          Required parameter: The body of the email message
     * @param  string     $options['cc']               Optional parameter: CC Email address
     * @param  string     $options['bcc']              Optional parameter: BCC Email address
     * @param  string     $options['attachment']       Optional parameter: File to be attached.File must be less than 7MB.
     * @param  string     $options['responseType']     Optional parameter: Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendEmail (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['to'], $options['from'], $options['type'], $options['subject'], $options['message']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/email/sendemails.{ResponseType}';

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
            'to'           => $this->val($options, 'to'),
            'from'         => $this->val($options, 'from'),
            'type'         => $this->val($options, 'type'),
            'subject'      => $this->val($options, 'subject'),
            'message'      => $this->val($options, 'message'),
            'cc'           => $this->val($options, 'cc'),
            'bcc'          => $this->val($options, 'bcc'),
            'attachment'   => $this->val($options, 'attachment')
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