<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 11/04/2016
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
     * @param  string     $callsid          Required parameter: Call Sid id for particular Call
     * @param  string     $responseType     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewCall (
                $callsid,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($callsid))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/viewcalls.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
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
            'callsid'      => $callsid
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
     * @param  string      $fromCountryCode           Required parameter: from country code
     * @param  string      $from                      Required parameter: This number to display on Caller ID as calling
     * @param  string      $toCountryCode             Required parameter: To cuntry code number
     * @param  string      $to                        Required parameter: To number
     * @param  string      $url                       Required parameter: URL requested once the call connects
     * @param  string      $method                    Optional parameter: Specifies the HTTP method used to request the required URL once call connects.
     * @param  string      $statusCallBackUrl         Optional parameter: specifies the HTTP methodlinkclass used to request StatusCallbackUrl.
     * @param  string      $statusCallBackMethod      Optional parameter: Specifies the HTTP methodlinkclass used to request StatusCallbackUrl.
     * @param  string      $fallBackUrl               Optional parameter: URL requested if the initial Url parameter fails or encounters an error
     * @param  string      $fallBackMethod            Optional parameter: Specifies the HTTP method used to request the required FallbackUrl once call connects.
     * @param  string      $heartBeatUrl              Optional parameter: URL that can be requested every 60 seconds during the call to notify of elapsed tim
     * @param  bool        $heartBeatMethod           Optional parameter: Specifies the HTTP method used to request HeartbeatUrl.
     * @param  integer     $timeout                   Optional parameter: Time (in seconds) Message360 should wait while the call is ringing before canceling the call
     * @param  string      $playDtmf                  Optional parameter: DTMF Digits to play to the call once it connects. 0-9, #, or *
     * @param  bool        $hideCallerId              Optional parameter: Specifies if the caller id will be hidden
     * @param  bool        $record                    Optional parameter: Specifies if the call should be recorded
     * @param  string      $recordCallBackUrl         Optional parameter: Recording parameters will be sent here upon completion
     * @param  string      $recordCallBackMethod      Optional parameter: Method used to request the RecordCallback URL.
     * @param  bool        $transcribe                Optional parameter: Specifies if the call recording should be transcribed
     * @param  string      $transcribeCallBackUrl     Optional parameter: Transcription parameters will be sent here upon completion
     * @param  string      $ifMachine                 Optional parameter: How Message360 should handle the receiving numbers voicemail machine
     * @param  string      $responseType              Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createMakeCall (
                $fromCountryCode,
                $from,
                $toCountryCode,
                $to,
                $url,
                $method = NULL,
                $statusCallBackUrl = NULL,
                $statusCallBackMethod = NULL,
                $fallBackUrl = NULL,
                $fallBackMethod = NULL,
                $heartBeatUrl = NULL,
                $heartBeatMethod = NULL,
                $timeout = NULL,
                $playDtmf = NULL,
                $hideCallerId = NULL,
                $record = NULL,
                $recordCallBackUrl = NULL,
                $recordCallBackMethod = NULL,
                $transcribe = NULL,
                $transcribeCallBackUrl = NULL,
                $ifMachine = NULL,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($fromCountryCode, $from, $toCountryCode, $to, $url))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/makecall.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'          => (null != $responseType) ? $responseType : 'json',
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Method'                => $method,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'          => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'FromCountryCode'       => $fromCountryCode,
            'From'                  => $from,
            'ToCountryCode'         => $toCountryCode,
            'To'                    => $to,
            'Url'                   => $url,
            'StatusCallBackUrl'     => $statusCallBackUrl,
            'StatusCallBackMethod'  => $statusCallBackMethod,
            'FallBackUrl'           => $fallBackUrl,
            'FallBackMethod'        => $fallBackMethod,
            'HeartBeatUrl'          => $heartBeatUrl,
            'HeartBeatMethod'       => var_export($heartBeatMethod, true),
            'Timeout'               => $timeout,
            'PlayDtmf'              => $playDtmf,
            'HideCallerId'          => var_export($hideCallerId, true),
            'Record'                => var_export($record, true),
            'RecordCallBackUrl'     => $recordCallBackUrl,
            'RecordCallBackMethod'  => $recordCallBackMethod,
            'Transcribe'            => var_export($transcribe, true),
            'TranscribeCallBackUrl' => $transcribeCallBackUrl,
            'IfMachine'             => $ifMachine
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
     * @param  integer     $length           Required parameter: Time limit in seconds for audio play back
     * @param  string      $direction        Required parameter: The leg of the call audio will be played to
     * @param  bool        $loop             Required parameter: Repeat audio playback indefinitely
     * @param  bool        $mix              Required parameter: If false, all other audio will be muted
     * @param  string      $callSid          Optional parameter: The unique identifier of each call resource
     * @param  string      $audioUrl         Optional parameter: URL to sound that should be played. You also can add more than one audio file using semicolons e.g. http://example.com/audio1.mp3;http://example.com/audio2.wav
     * @param  string      $responseType     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPlayAudio (
                $length,
                $direction,
                $loop,
                $mix,
                $callSid = NULL,
                $audioUrl = NULL,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($length, $direction, $loop, $mix))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/playaudios.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
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
            'Length'       => $length,
            'Direction'    => $direction,
            'Loop'         => var_export($loop, true),
            'Mix'          => var_export($mix, true),
            'CallSid'      => $callSid,
            'AudioUrl'     => $audioUrl
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
     * @param  string      $callSid          Required parameter: The unique identifier of each call resource
     * @param  bool        $record           Required parameter: Set true to initiate recording or false to terminate recording
     * @param  string      $direction        Optional parameter: The leg of the call to record
     * @param  integer     $timeLimit        Optional parameter: Time in seconds the recording duration should not exceed
     * @param  string      $callBackUrl      Optional parameter: URL consulted after the recording completes
     * @param  string      $fileformat       Optional parameter: Format of the recording file. Can be .mp3 or .wav
     * @param  string      $responseType     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createRecordCall (
                $callSid,
                $record,
                $direction = NULL,
                $timeLimit = NULL,
                $callBackUrl = NULL,
                $fileformat = NULL,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($callSid, $record))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/recordcalls.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
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
            'CallSid'      => $callSid,
            'Record'       => var_export($record, true),
            'Direction'    => $direction,
            'TimeLimit'    => $timeLimit,
            'CallBackUrl'  => $callBackUrl,
            'Fileformat'   => $fileformat
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
     * @param  string     $callSid            Required parameter: Example: 
     * @param  string     $audioDirection     Optional parameter: Example: 
     * @param  double     $pitchSemiTones     Optional parameter: value between -14 and 14
     * @param  double     $pitchOctaves       Optional parameter: value between -1 and 1
     * @param  double     $pitch              Optional parameter: value greater than 0
     * @param  double     $rate               Optional parameter: value greater than 0
     * @param  double     $tempo              Optional parameter: value greater than 0
     * @param  string     $responseType       Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createVoiceEffect (
                $callSid,
                $audioDirection = NULL,
                $pitchSemiTones = NULL,
                $pitchOctaves = NULL,
                $pitch = NULL,
                $rate = NULL,
                $tempo = NULL,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($callSid))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/voiceeffect.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'   => (null != $responseType) ? $responseType : 'json',
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'CallSid'        => $callSid,
            'AudioDirection' => $audioDirection,
            'PitchSemiTones' => $pitchSemiTones,
            'PitchOctaves'   => $pitchOctaves,
            'Pitch'          => $pitch,
            'Rate'           => $rate,
            'Tempo'          => $tempo
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
     * @param  string     $callSid               Required parameter: The unique identifier of each call resource
     * @param  string     $playDtmf              Required parameter: DTMF digits to play to the call. 0-9, #, *, W, or w
     * @param  string     $playDtmfDirection     Optional parameter: The leg of the call DTMF digits should be sent to
     * @param  string     $responseType          Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSendDigit (
                $callSid,
                $playDtmf,
                $playDtmfDirection = NULL,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($callSid, $playDtmf))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/senddigits.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'      => (null != $responseType) ? $responseType : 'json',
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'      => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'CallSid'           => $callSid,
            'PlayDtmf'          => $playDtmf,
            'PlayDtmfDirection' => $playDtmfDirection
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
     * @param  string     $callSid          Required parameter: Call SId
     * @param  string     $url              Optional parameter: URL the in-progress call will be redirected to
     * @param  string     $method           Optional parameter: The method used to request the above Url parameter
     * @param  string     $status           Optional parameter: Status to set the in-progress call to
     * @param  string     $responseType     Optional parameter: Response format, xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createInterruptedCall (
                $callSid,
                $url = NULL,
                $method = NULL,
                $status = NULL,
                $responseType = 'json') 
    { 
        //check that all required arguments are provided
        if(!isset($callSid))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/interruptcalls.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
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
            'CallSid'      => $callSid,
            'Url'          => $url,
            'Method'       => $method,
            'Status'       => $status
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
     * @param  string     $page             Optional parameter: Which page of the overall response will be returned. Zero indexed
     * @param  string     $pageSize         Optional parameter: Number of individual resources listed in the response per page
     * @param  string     $to               Optional parameter: Only list calls to this number
     * @param  string     $from             Optional parameter: Only list calls from this number
     * @param  string     $dateCreated      Optional parameter: Only list calls starting within the specified date range
     * @param  string     $responseType     Optional parameter: Response format, xml or json
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListCalls (
                $page = NULL,
                $pageSize = NULL,
                $to = NULL,
                $from = NULL,
                $dateCreated = NULL,
                $responseType = 'json') 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/listcalls.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
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
            'Page'         => $page,
            'PageSize'     => $pageSize,
            'To'           => $to,
            'From'         => $from,
            'DateCreated'  => $dateCreated
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
        

}