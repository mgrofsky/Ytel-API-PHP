<?php
/*
 * Ytel
 *
 * This file was automatically generated for ytel by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelLib\Controllers;

use YtelLib\APIException;
use YtelLib\APIHelper;
use YtelLib\Configuration;
use YtelLib\Models;
use YtelLib\Exceptions;
use YtelLib\Http\HttpRequest;
use YtelLib\Http\HttpResponse;
use YtelLib\Http\HttpMethod;
use YtelLib\Http\HttpContext;
use YtelLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class WebRTCController extends BaseController
{
    /**
     * @var WebRTCController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return WebRTCController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Ytel webrtc
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['accountSid']  Your Ytel Account SID
     * @param string $options['authToken']   Your Ytel Token
     * @param string $options['username']    WebRTC username authentication
     * @param string $options['password']    WebRTC password authentication
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createToken(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['accountSid'], $options['authToken'], $options['username'], $options['password'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/webrtc/agentLogin.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'account_sid' => $this->val($options, 'accountSid'),
            'auth_token'  => $this->val($options, 'authToken'),
            'username'    => $this->val($options, 'username'),
            'password'    => $this->val($options, 'password')
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
     * @todo Add general description for this endpoint
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['accountSid']  Your Ytel Account SID
     * @param string $options['authToken']   Your Ytel Token
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function checkFunds(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['accountSid'], $options['authToken'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/webrtc/checkFunds.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'account_sid' => $this->val($options, 'accountSid'),
            'auth_token'  => $this->val($options, 'authToken')
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
