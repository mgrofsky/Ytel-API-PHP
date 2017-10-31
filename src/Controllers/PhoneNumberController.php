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
class PhoneNumberController extends BaseController
{
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
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['numberType']   Number type either SMS,Voice or all
     * @param string  $options['areaCode']     Phone Number Area Code
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['pageSize']     (optional) Page Size
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function availablePhoneNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['numberType'], $options['areaCode'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/availablenumber.{ResponseType}';

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
            'NumberType'   => $this->val($options, 'numberType'),
            'AreaCode'     => $this->val($options, 'areaCode'),
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
     * List Account's Phone number details
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['page']         (optional) Which page of the overall response will be returned. Zero
     *                                         indexed
     * @param integer $options['pageSize']     (optional) Number of individual resources listed in the response per
     *                                         page
     * @param string  $options['numberType']   (optional) SMS or Voice
     * @param string  $options['friendlyName'] (optional) Friendly name of the number
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/listnumber.{ResponseType}';

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
            'NumberType'   => $this->val($options, 'numberType'),
            'FriendlyName' => $this->val($options, 'friendlyName')
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
     * Get Phone Number Details
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']  Get Phone number Detail
     * @param string $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewNumberDetails(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phoneNumber'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/viewnumber.{ResponseType}';

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
            'PhoneNumber'  => $this->val($options, 'phoneNumber')
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
     * Release number from account
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']  Phone number to be relase
     * @param string $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function releaseNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phoneNumber'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/releasenumber.{ResponseType}';

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
            'PhoneNumber'  => $this->val($options, 'phoneNumber')
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
     * Buy Phone Number
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']  Phone number to be purchase
     * @param string $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function buyNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phoneNumber'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/buynumber.{ResponseType}';

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
            'PhoneNumber'  => $this->val($options, 'phoneNumber')
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
     * Update Phone Number Details
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']          The phone number to update
     * @param string $options['voiceUrl']             URL requested once the call connects
     * @param string $options['responseType']         Response type format xml or json
     * @param string $options['friendlyName']         (optional) Phone number friendly name description
     * @param string $options['voiceMethod']          (optional) Post or Get
     * @param string $options['voiceFallbackUrl']     (optional) URL requested if the voice URL is not available
     * @param string $options['voiceFallbackMethod']  (optional) Post or Get
     * @param string $options['hangupCallback']       (optional) callback url after a hangup occurs
     * @param string $options['hangupCallbackMethod'] (optional) Post or Get
     * @param string $options['heartbeatUrl']         (optional) URL requested once the call connects
     * @param string $options['heartbeatMethod']      (optional) URL that can be requested every 60 seconds during the
     *                                                call to notify of elapsed time
     * @param string $options['smsUrl']               (optional) URL requested when an SMS is received
     * @param string $options['smsMethod']            (optional) Post or Get
     * @param string $options['smsFallbackUrl']       (optional) URL requested once the call connects
     * @param string $options['smsFallbackMethod']    (optional) URL requested if the sms URL is not available
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updatePhoneNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phoneNumber'], $options['voiceUrl'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/updatenumber.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'         => $this->val($options, 'responseType'),
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
            'VoiceUrl'             => $this->val($options, 'voiceUrl'),
            'FriendlyName'         => $this->val($options, 'friendlyName'),
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
