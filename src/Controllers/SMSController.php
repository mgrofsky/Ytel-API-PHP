<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 10/21/2016
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
     * Send an SMS from a message360 number
     * @param  integer     $fromcountrycode           Required parameter: From Country Code
     * @param  string      $from                      Required parameter: SMS enabled Message360 number to send this message from
     * @param  integer     $tocountrycode             Required parameter: To country code
     * @param  string      $to                        Required parameter: Number to send the SMS to
     * @param  string      $body                      Required parameter: Text Message To Send
     * @param  string      $method                    Optional parameter: Specifies the HTTP method used to request the required URL once SMS sent.
     * @param  string      $messagestatuscallback     Optional parameter: URL that can be requested to receive notification when SMS has Sent. A set of default parameters will be sent here once the SMS is finished.
     * @param  string      $responseType              Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendSMS (
                $fromcountrycode,
                $from,
                $tocountrycode,
                $to,
                $body,
                $method = NULL,
                $messagestatuscallback = NULL,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($fromcountrycode, $from, $tocountrycode, $to, $body))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/sendsms.{ResponseType}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'          => (null != $responseType) ? $responseType : 'json',
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'          => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'fromcountrycode'       => $fromcountrycode,
            'from'                  => $from,
            'tocountrycode'         => $tocountrycode,
            'to'                    => $to,
            'body'                  => $body,
            'method'                => $method,
            'messagestatuscallback' => $messagestatuscallback
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
     * View Particular SMS
     * @param  string     $messagesid       Required parameter: Message sid
     * @param  string     $responseType     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewSMS (
                $messagesid,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($messagesid))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/viewsms.{ResponseType}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => (null != $responseType) ? $responseType : 'json',
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'messagesid'   => $messagesid
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
     * @param  integer     $page             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  integer     $pagesize         Optional parameter: Number of individual resources listed in the response per page
     * @param  string      $from             Optional parameter: Messages sent from this number
     * @param  string      $to               Optional parameter: Messages sent to this number
     * @param  string      $datesent         Optional parameter: Only list SMS messages sent in the specified date range
     * @param  string      $responseType     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListSMS (
                $page = NULL,
                $pagesize = NULL,
                $from = NULL,
                $to = NULL,
                $datesent = NULL,
                $responseType = 'json') 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/listsms.{ResponseType}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => (null != $responseType) ? $responseType : 'json',
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'page'         => $page,
            'pagesize'     => $pagesize,
            'from'         => $from,
            'to'           => $to,
            'datesent'     => $datesent
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
     * @param  integer     $page             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  string      $pagesize         Optional parameter: Number of individual resources listed in the response per page
     * @param  string      $from             Optional parameter: From Number to Inbound SMS
     * @param  string      $to               Optional parameter: To Number to get Inbound SMS
     * @param  string      $responseType     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListInboundSMS (
                $page = NULL,
                $pagesize = NULL,
                $from = NULL,
                $to = NULL,
                $responseType = 'json') 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/sms/getInboundsms.{ResponseType}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => (null != $responseType) ? $responseType : 'json',
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'page'         => $page,
            'pagesize'     => $pagesize,
            'from'         => $from,
            'to'           => $to
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
        

}