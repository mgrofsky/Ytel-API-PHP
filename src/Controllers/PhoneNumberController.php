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
     * Retrieve a list of available phone numbers that can be purchased and used for your Ytel account.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['numbertype']   Number type either SMS,Voice or all
     * @param string  $options['areacode']     Specifies the area code for the returned list of available numbers. Only
     *                                         available for North American numbers.
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['pagesize']     (optional) The count of objects to return.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function availablePhoneNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['numbertype'], $options['areacode'], $options['responseType'])) {
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
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'numbertype' => APIHelper::prepareFormFields($this->val($options, 'numbertype')),
            'areacode'     => $this->val($options, 'areacode'),
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
     * Remove a purchased Ytel number from your account.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']  A valid Ytel comma separated numbers (E.164 format).
     * @param string $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function massReleaseNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phoneNumber'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/massreleasenumber.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
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
     * Retrieve the details for a phone number by its number.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']  A valid Ytel 10-digit phone number (E.164 format).
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
            'user-agent'    => 'ytel-api'
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
     * Remove a purchased Ytel number from your account.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']  A valid 10-digit Ytel number (E.164 format).
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
            'user-agent'    => 'ytel-api'
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
     * Purchase a phone number to be used with your Ytel account
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']  A valid 10-digit Ytel number (E.164 format).
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
            'user-agent'    => 'ytel-api'
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
     * Update properties for a Ytel number that has been purchased for your account. Refer to the
     * parameters list for the list of properties that can be updated.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']          A valid Ytel number (E.164 format).
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
     * @param string $options['smsFallbackUrl']       (optional) URL used if any errors occur during execution of
     *                                                InboundXML from an SMS or at initial request of the SmsUrl.
     * @param string $options['smsFallbackMethod']    (optional) The HTTP method Ytel will use when URL requested if
     *                                                the SmsUrl is not available.
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
            'user-agent'         => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber'          => $this->val($options, 'phoneNumber'),
            'VoiceUrl'             => $this->val($options, 'voiceUrl'),
            'FriendlyName'         => $this->val($options, 'friendlyName'),
            'VoiceMethod'        => APIHelper::prepareFormFields($this->val($options, 'voiceMethod')),
            'VoiceFallbackUrl'     => $this->val($options, 'voiceFallbackUrl'),
            'VoiceFallbackMethod' => APIHelper::prepareFormFields($this->val($options, 'voiceFallbackMethod')),
            'HangupCallback'       => $this->val($options, 'hangupCallback'),
            'HangupCallbackMethod' => APIHelper::prepareFormFields($this->val($options, 'hangupCallbackMethod')),
            'HeartbeatUrl'         => $this->val($options, 'heartbeatUrl'),
            'HeartbeatMethod'    => APIHelper::prepareFormFields($this->val($options, 'heartbeatMethod')),
            'SmsUrl'               => $this->val($options, 'smsUrl'),
            'SmsMethod'          => APIHelper::prepareFormFields($this->val($options, 'smsMethod')),
            'SmsFallbackUrl'       => $this->val($options, 'smsFallbackUrl'),
            'SmsFallbackMethod'  => APIHelper::prepareFormFields($this->val($options, 'smsFallbackMethod'))
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
     * Transfer phone number that has been purchased for from one account to another account.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phonenumber']    A valid 10-digit Ytel number (E.164 format).
     * @param string $options['fromaccountsid'] A specific Accountsid from where Number is getting transfer.
     * @param string $options['toaccountsid']   A specific Accountsid to which Number is getting transfer.
     * @param string $options['responseType']   Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function transferNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phonenumber'], $options['fromaccountsid'], $options['toaccountsid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/transferphonenumbers.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'   => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'phonenumber'    => $this->val($options, 'phonenumber'),
            'fromaccountsid' => $this->val($options, 'fromaccountsid'),
            'toaccountsid'   => $this->val($options, 'toaccountsid')
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
     * Retrieve a list of purchased phones numbers associated with your Ytel account.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['page']         (optional) Which page of the overall response will be returned. Page
     *                                         indexing starts at 1.
     * @param integer $options['pageSize']     (optional) The page count to retrieve from the total results in the
     *                                         collection. Page indexing starts at 1.
     * @param string  $options['numberType']   (optional) The capability supported by the number.Number type either SMS,
     *                                         Voice or all
     * @param string  $options['friendlyName'] (optional) A human-readable label added to the number object.
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
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'Page'         => $this->val($options, 'page', 1),
            'PageSize'     => $this->val($options, 'pageSize', 10),
            'NumberType' => APIHelper::prepareFormFields($this->val($options, 'numberType')),
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
     * Update properties for a Ytel numbers that has been purchased for your account. Refer to the
     * parameters list for the list of properties that can be updated.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phoneNumber']          A valid comma(,) separated Ytel numbers. (E.164 format).
     * @param string $options['voiceUrl']             The URL returning InboundXML incoming calls should execute when
     *                                                connected.
     * @param string $options['responseType']         Response type format xml or json
     * @param string $options['friendlyName']         (optional) A human-readable value for labeling the number.
     * @param string $options['voiceMethod']          (optional) Specifies the HTTP method used to request the VoiceUrl
     *                                                once incoming call connects.
     * @param string $options['voiceFallbackUrl']     (optional) URL used if any errors occur during execution of
     *                                                InboundXML on a call or at initial request of the voice url
     * @param string $options['voiceFallbackMethod']  (optional) Specifies the HTTP method used to request the
     *                                                VoiceFallbackUrl once incoming call connects.
     * @param string $options['hangupCallback']       (optional) URL that can be requested to receive notification when
     *                                                and how incoming call has ended.
     * @param string $options['hangupCallbackMethod'] (optional) The HTTP method Ytel will use when requesting the
     *                                                HangupCallback URL.
     * @param string $options['heartbeatUrl']         (optional) URL that can be used to monitor the phone number.
     * @param string $options['heartbeatMethod']      (optional) The HTTP method Ytel will use when requesting the
     *                                                HeartbeatUrl.
     * @param string $options['smsUrl']               (optional) URL requested when an SMS is received.
     * @param string $options['smsMethod']            (optional) The HTTP method Ytel will use when requesting the
     *                                                SmsUrl.
     * @param string $options['smsFallbackUrl']       (optional) URL used if any errors occur during execution of
     *                                                InboundXML from an SMS or at initial request of the SmsUrl.
     * @param string $options['smsFallbackMethod']    (optional) The HTTP method Ytel will use when URL requested if
     *                                                the SmsUrl is not available.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function massUpdateNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phoneNumber'], $options['voiceUrl'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/massupdatenumber.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'         => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber'          => $this->val($options, 'phoneNumber'),
            'VoiceUrl'             => $this->val($options, 'voiceUrl'),
            'FriendlyName'         => $this->val($options, 'friendlyName'),
            'VoiceMethod'        => APIHelper::prepareFormFields($this->val($options, 'voiceMethod')),
            'VoiceFallbackUrl'     => $this->val($options, 'voiceFallbackUrl'),
            'VoiceFallbackMethod' => APIHelper::prepareFormFields($this->val($options, 'voiceFallbackMethod')),
            'HangupCallback'       => $this->val($options, 'hangupCallback'),
            'HangupCallbackMethod' => APIHelper::prepareFormFields($this->val($options, 'hangupCallbackMethod')),
            'HeartbeatUrl'         => $this->val($options, 'heartbeatUrl'),
            'HeartbeatMethod'    => APIHelper::prepareFormFields($this->val($options, 'heartbeatMethod')),
            'SmsUrl'               => $this->val($options, 'smsUrl'),
            'SmsMethod'          => APIHelper::prepareFormFields($this->val($options, 'smsMethod')),
            'SmsFallbackUrl'       => $this->val($options, 'smsFallbackUrl'),
            'SmsFallbackMethod'  => APIHelper::prepareFormFields($this->val($options, 'smsFallbackMethod'))
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
     * Get DID Score Number
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['phonenumber']  Specifies the multiple phone numbers for check updated spamscore .
     * @param string $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getDIDScoreNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['phonenumber'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/getdidscore.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'Phonenumber'  => $this->val($options, 'phonenumber')
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
     * Purchase a selected number of DID's from specific area codes to be used with your Ytel account.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['numberType']   The capability the number supports.
     * @param string $options['areaCode']     Specifies the area code for the returned list of available numbers. Only
     *                                        available for North American numbers.
     * @param string $options['quantity']     A positive integer that tells how many number you want to buy at a time.
     * @param string $options['responseType'] Response type format xml or json
     * @param string $options['leftover']     (optional) If desired quantity is unavailable purchase what is available .
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function bulkBuyNumber(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['numberType'], $options['areaCode'], $options['quantity'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/bulkbuy.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'NumberType' => APIHelper::prepareFormFields($this->val($options, 'numberType')),
            'AreaCode'     => $this->val($options, 'areaCode'),
            'Quantity'     => $this->val($options, 'quantity'),
            'Leftover'     => $this->val($options, 'leftover')
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
