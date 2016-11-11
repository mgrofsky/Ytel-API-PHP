<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 11/11/2016
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
class CallController extends BaseController {

    /**
     * @var CallController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return CallController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * View Call Response
     * @param  array  $options    Array with all options for search
     * @param  string     $options['callsid']          Required parameter: Call Sid id for particular Call
     * @param  string     $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewCall (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['callsid']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/viewcalls.{ResponseType}';

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
            'callsid'      => $this->val($options, 'callsid')
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
     * You can experiment with initiating a call through Message360 and view the request response generated when doing so and get the response in json
     * @param  array  $options    Array with all options for search
     * @param  string      $options['fromCountryCode']           Required parameter: from country code
     * @param  string      $options['from']                      Required parameter: This number to display on Caller ID as calling
     * @param  string      $options['toCountryCode']             Required parameter: To cuntry code number
     * @param  string      $options['to']                        Required parameter: To number
     * @param  string      $options['url']                       Required parameter: URL requested once the call connects
     * @param  string      $options['method']                    Optional parameter: Specifies the HTTP method used to request the required URL once call connects.
     * @param  string      $options['statusCallBackUrl']         Optional parameter: specifies the HTTP methodlinkclass used to request StatusCallbackUrl.
     * @param  string      $options['statusCallBackMethod']      Optional parameter: Specifies the HTTP methodlinkclass used to request StatusCallbackUrl.
     * @param  string      $options['fallBackUrl']               Optional parameter: URL requested if the initial Url parameter fails or encounters an error
     * @param  string      $options['fallBackMethod']            Optional parameter: Specifies the HTTP method used to request the required FallbackUrl once call connects.
     * @param  string      $options['heartBeatUrl']              Optional parameter: URL that can be requested every 60 seconds during the call to notify of elapsed tim
     * @param  bool        $options['heartBeatMethod']           Optional parameter: Specifies the HTTP method used to request HeartbeatUrl.
     * @param  integer     $options['timeout']                   Optional parameter: Time (in seconds) Message360 should wait while the call is ringing before canceling the call
     * @param  string      $options['playDtmf']                  Optional parameter: DTMF Digits to play to the call once it connects. 0-9, #, or *
     * @param  bool        $options['hideCallerId']              Optional parameter: Specifies if the caller id will be hidden
     * @param  bool        $options['record']                    Optional parameter: Specifies if the call should be recorded
     * @param  string      $options['recordCallBackUrl']         Optional parameter: Recording parameters will be sent here upon completion
     * @param  string      $options['recordCallBackMethod']      Optional parameter: Method used to request the RecordCallback URL.
     * @param  bool        $options['transcribe']                Optional parameter: Specifies if the call recording should be transcribed
     * @param  string      $options['transcribeCallBackUrl']     Optional parameter: Transcription parameters will be sent here upon completion
     * @param  string      $options['ifMachine']                 Optional parameter: How Message360 should handle the receiving numbers voicemail machine
     * @param  string      $options['responseType']              Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createMakeCall (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['fromCountryCode'], $options['from'], $options['toCountryCode'], $options['to'], $options['url']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/makecall.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'          => $this->val($options, 'responseType', 'json'),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Method'                => $this->val($options, 'method'),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'          => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'FromCountryCode'       => $this->val($options, 'fromCountryCode'),
            'From'                  => $this->val($options, 'from'),
            'ToCountryCode'         => $this->val($options, 'toCountryCode'),
            'To'                    => $this->val($options, 'to'),
            'Url'                   => $this->val($options, 'url'),
            'StatusCallBackUrl'     => $this->val($options, 'statusCallBackUrl'),
            'StatusCallBackMethod'  => $this->val($options, 'statusCallBackMethod'),
            'FallBackUrl'           => $this->val($options, 'fallBackUrl'),
            'FallBackMethod'        => $this->val($options, 'fallBackMethod'),
            'HeartBeatUrl'          => $this->val($options, 'heartBeatUrl'),
            'HeartBeatMethod'       => $this->val($options, 'heartBeatMethod'),
            'Timeout'               => $this->val($options, 'timeout'),
            'PlayDtmf'              => $this->val($options, 'playDtmf'),
            'HideCallerId'          => $this->val($options, 'hideCallerId'),
            'Record'                => $this->val($options, 'record'),
            'RecordCallBackUrl'     => $this->val($options, 'recordCallBackUrl'),
            'RecordCallBackMethod'  => $this->val($options, 'recordCallBackMethod'),
            'Transcribe'            => $this->val($options, 'transcribe'),
            'TranscribeCallBackUrl' => $this->val($options, 'transcribeCallBackUrl'),
            'IfMachine'             => $this->val($options, 'ifMachine')
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
     * Play Dtmf and send the Digit
     * @param  array  $options    Array with all options for search
     * @param  integer     $options['length']           Required parameter: Time limit in seconds for audio play back
     * @param  string      $options['direction']        Required parameter: The leg of the call audio will be played to
     * @param  bool        $options['loop']             Required parameter: Repeat audio playback indefinitely
     * @param  bool        $options['mix']              Required parameter: If false, all other audio will be muted
     * @param  string      $options['callSid']          Optional parameter: The unique identifier of each call resource
     * @param  string      $options['audioUrl']         Optional parameter: URL to sound that should be played. You also can add more than one audio file using semicolons e.g. http://example.com/audio1.mp3;http://example.com/audio2.wav
     * @param  string      $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPlayAudio (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['length'], $options['direction'], $options['loop'], $options['mix']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/playaudios.{ResponseType}';

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
            'Length'       => $this->val($options, 'length'),
            'Direction'    => $this->val($options, 'direction'),
            'Loop'         => $this->val($options, 'loop'),
            'Mix'          => $this->val($options, 'mix'),
            'CallSid'      => $this->val($options, 'callSid'),
            'AudioUrl'     => $this->val($options, 'audioUrl')
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
     * Record a Call
     * @param  array  $options    Array with all options for search
     * @param  string      $options['callSid']          Required parameter: The unique identifier of each call resource
     * @param  bool        $options['record']           Required parameter: Set true to initiate recording or false to terminate recording
     * @param  string      $options['direction']        Optional parameter: The leg of the call to record
     * @param  integer     $options['timeLimit']        Optional parameter: Time in seconds the recording duration should not exceed
     * @param  string      $options['callBackUrl']      Optional parameter: URL consulted after the recording completes
     * @param  string      $options['fileformat']       Optional parameter: Format of the recording file. Can be .mp3 or .wav
     * @param  string      $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createRecordCall (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['callSid'], $options['record']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/recordcalls.{ResponseType}';

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
            'CallSid'      => $this->val($options, 'callSid'),
            'Record'       => $this->val($options, 'record'),
            'Direction'    => $this->val($options, 'direction'),
            'TimeLimit'    => $this->val($options, 'timeLimit'),
            'CallBackUrl'  => $this->val($options, 'callBackUrl'),
            'Fileformat'   => $this->val($options, 'fileformat')
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
     * Voice Effect
     * @param  array  $options    Array with all options for search
     * @param  string     $options['callSid']            Required parameter: Example: 
     * @param  string     $options['audioDirection']     Optional parameter: Example: 
     * @param  double     $options['pitchSemiTones']     Optional parameter: value between -14 and 14
     * @param  double     $options['pitchOctaves']       Optional parameter: value between -1 and 1
     * @param  double     $options['pitch']              Optional parameter: value greater than 0
     * @param  double     $options['rate']               Optional parameter: value greater than 0
     * @param  double     $options['tempo']              Optional parameter: value greater than 0
     * @param  string     $options['responseType']       Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createVoiceEffect (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['callSid']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/voiceeffect.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'   => $this->val($options, 'responseType', 'json'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'CallSid'        => $this->val($options, 'callSid'),
            'AudioDirection' => $this->val($options, 'audioDirection'),
            'PitchSemiTones' => $this->val($options, 'pitchSemiTones'),
            'PitchOctaves'   => $this->val($options, 'pitchOctaves'),
            'Pitch'          => $this->val($options, 'pitch'),
            'Rate'           => $this->val($options, 'rate'),
            'Tempo'          => $this->val($options, 'tempo')
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
     * Play Dtmf and send the Digit
     * @param  array  $options    Array with all options for search
     * @param  string     $options['callSid']               Required parameter: The unique identifier of each call resource
     * @param  string     $options['playDtmf']              Required parameter: DTMF digits to play to the call. 0-9, #, *, W, or w
     * @param  string     $options['playDtmfDirection']     Optional parameter: The leg of the call DTMF digits should be sent to
     * @param  string     $options['responseType']          Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendDigit (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['callSid'], $options['playDtmf']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/senddigits.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'      => $this->val($options, 'responseType', 'json'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'CallSid'           => $this->val($options, 'callSid'),
            'PlayDtmf'          => $this->val($options, 'playDtmf'),
            'PlayDtmfDirection' => $this->val($options, 'playDtmfDirection')
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
     * Interrupt the Call by Call Sid
     * @param  array  $options    Array with all options for search
     * @param  string     $options['callSid']          Required parameter: Call SId
     * @param  string     $options['url']              Optional parameter: URL the in-progress call will be redirected to
     * @param  string     $options['method']           Optional parameter: The method used to request the above Url parameter
     * @param  string     $options['status']           Optional parameter: Status to set the in-progress call to
     * @param  string     $options['responseType']     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createInterruptedCall (
                $options) 
    { 
        //check that all required arguments are provided
        if(!isset($options['callSid']))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/interruptcalls.{ResponseType}';

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
            'CallSid'      => $this->val($options, 'callSid'),
            'Url'          => $this->val($options, 'url'),
            'Method'       => $this->val($options, 'method'),
            'Status'       => $this->val($options, 'status')
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
     * A list of calls associated with your Message360 account
     * @param  array  $options    Array with all options for search
     * @param  string     $options['page']             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  string     $options['pageSize']         Optional parameter: Number of individual resources listed in the response per page
     * @param  string     $options['to']               Optional parameter: Only list calls to this number
     * @param  string     $options['from']             Optional parameter: Only list calls from this number
     * @param  string     $options['dateCreated']      Optional parameter: Only list calls starting within the specified date range
     * @param  string     $options['responseType']     Optional parameter: Response format, xml or json
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListCalls (
                $options) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/listcalls.{ResponseType}';

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
            'To'           => $this->val($options, 'to'),
            'From'         => $this->val($options, 'from'),
            'DateCreated'  => $this->val($options, 'dateCreated')
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