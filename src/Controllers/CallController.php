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
class CallController extends BaseController
{
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
     * You can experiment with initiating a call through Message360 and view the request response generated
     * when doing so and get the response in json
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['from']                  This number to display on Caller ID as calling
     * @param string  $options['to']                    To number
     * @param string  $options['url']                   URL requested once the call connects
     * @param string  $options['responseType']          Response type format xml or json
     * @param string  $options['method']                (optional) Specifies the HTTP method used to request the
     *                                                  required URL once call connects.
     * @param string  $options['statusCallBackUrl']     (optional) specifies the HTTP methodlinkclass used to request
     *                                                  StatusCallbackUrl.
     * @param string  $options['statusCallBackMethod']  (optional) Specifies the HTTP methodlinkclass used to request
     *                                                  StatusCallbackUrl.
     * @param string  $options['fallBackUrl']           (optional) URL requested if the initial Url parameter fails or
     *                                                  encounters an error
     * @param string  $options['fallBackMethod']        (optional) Specifies the HTTP method used to request the
     *                                                  required FallbackUrl once call connects.
     * @param string  $options['heartBeatUrl']          (optional) URL that can be requested every 60 seconds during
     *                                                  the call to notify of elapsed tim
     * @param string  $options['heartBeatMethod']       (optional) Specifies the HTTP method used to request
     *                                                  HeartbeatUrl.
     * @param integer $options['timeout']               (optional) Time (in seconds) Message360 should wait while the
     *                                                  call is ringing before canceling the call
     * @param string  $options['playDtmf']              (optional) DTMF Digits to play to the call once it connects. 0-
     *                                                  9, #, or *
     * @param bool    $options['hideCallerId']          (optional) Specifies if the caller id will be hidden
     * @param bool    $options['record']                (optional) Specifies if the call should be recorded
     * @param string  $options['recordCallBackUrl']     (optional) Recording parameters will be sent here upon
     *                                                  completion
     * @param string  $options['recordCallBackMethod']  (optional) Method used to request the RecordCallback URL.
     * @param bool    $options['transcribe']            (optional) Specifies if the call recording should be
     *                                                  transcribed
     * @param string  $options['transcribeCallBackUrl'] (optional) Transcription parameters will be sent here upon
     *                                                  completion
     * @param string  $options['ifMachine']             (optional) How Message360 should handle the receiving numbers
     *                                                  voicemail machine
     * @param string  $options['ifMachineUrl']          (optional) URL requested when IfMachine=continue
     * @param string  $options['ifMachineMethod']       (optional) Method used to request the IfMachineUrl.
     * @param bool    $options['feedback']              (optional) Specify if survey should be enable or not
     * @param string  $options['surveyId']              (optional) The unique identifier for the survey.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function makeCall(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['from'], $options['to'], $options['url'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/makecall.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'          => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'          => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'From'                  => $this->val($options, 'from'),
            'To'                    => $this->val($options, 'to'),
            'Url'                   => $this->val($options, 'url'),
            'Method'                => $this->val($options, 'method'),
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
            'IfMachine'             => $this->val($options, 'ifMachine'),
            'IfMachineUrl'          => $this->val($options, 'ifMachineUrl'),
            'IfMachineMethod'       => $this->val($options, 'ifMachineMethod'),
            'Feedback'              => $this->val($options, 'feedback'),
            'SurveyId'              => $this->val($options, 'surveyId')
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
     * Play Dtmf and send the Digit
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['callSid']      The unique identifier of each call resource
     * @param string  $options['audioUrl']     URL to sound that should be played. You also can add more than one audio
     *                                         file using semicolons e.g. http://example.com/audio1.mp3;http://example.
     *                                         com/audio2.wav
     * @param string  $options['sayText']      Valid alphanumeric string that should be played to the In-progress call.
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['length']       (optional) Time limit in seconds for audio play back
     * @param string  $options['direction']    (optional) The leg of the call audio will be played to
     * @param bool    $options['mix']          (optional) If false, all other audio will be muted
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function playAudio(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['callSid'], $options['audioUrl'], $options['sayText'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/playaudios.{ResponseType}';

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
            'CallSid'      => $this->val($options, 'callSid'),
            'AudioUrl'     => $this->val($options, 'audioUrl'),
            'SayText'      => $this->val($options, 'sayText'),
            'Length'       => $this->val($options, 'length'),
            'Direction'    => $this->val($options, 'direction'),
            'Mix'          => $this->val($options, 'mix')
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
     * Record a Call
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['callSid']      The unique identifier of each call resource
     * @param bool    $options['record']       Set true to initiate recording or false to terminate recording
     * @param string  $options['responseType'] Response format, xml or json
     * @param string  $options['direction']    (optional) The leg of the call to record
     * @param integer $options['timeLimit']    (optional) Time in seconds the recording duration should not exceed
     * @param string  $options['callBackUrl']  (optional) URL consulted after the recording completes
     * @param string  $options['fileformat']   (optional) Format of the recording file. Can be .mp3 or .wav
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function recordCall(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['callSid'], $options['record'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/recordcalls.{ResponseType}';

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
     * Voice Effect
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['callSid']        The unique identifier for the in-progress voice call.
     * @param string $options['responseType']   Response type format xml or json
     * @param string $options['audioDirection'] (optional) The direction the audio effect should be placed on. If IN,
     *                                          the effects will occur on the incoming audio stream. If OUT, the
     *                                          effects will occur on the outgoing audio stream.
     * @param double $options['pitchSemiTones'] (optional) value between -14 and 14
     * @param double $options['pitchOctaves']   (optional) value between -1 and 1
     * @param double $options['pitch']          (optional) value greater than 0
     * @param double $options['rate']           (optional) value greater than 0
     * @param double $options['tempo']          (optional) value greater than 0
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function voiceEffect(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['callSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/voiceeffect.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'   => $this->val($options, 'responseType'),
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
     * Play Dtmf and send the Digit
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['callSid']           The unique identifier of each call resource
     * @param string $options['playDtmf']          DTMF digits to play to the call. 0-9, #, *, W, or w
     * @param string $options['responseType']      Response type format xml or json
     * @param string $options['playDtmfDirection'] (optional) The leg of the call DTMF digits should be sent to
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function sendDigit(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['callSid'], $options['playDtmf'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/senddigits.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'      => $this->val($options, 'responseType'),
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
     * Interrupt the Call by Call Sid
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['callSid']      Call SId
     * @param string $options['responseType'] Response type format xml or json
     * @param string $options['url']          (optional) URL the in-progress call will be redirected to
     * @param string $options['method']       (optional) The method used to request the above Url parameter
     * @param string $options['status']       (optional) Status to set the in-progress call to
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function interruptedCall(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['callSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/interruptcalls.{ResponseType}';

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
            'CallSid'      => $this->val($options, 'callSid'),
            'Url'          => $this->val($options, 'url'),
            'Method'       => $this->val($options, 'method'),
            'Status'       => $this->val($options, 'status')
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
     * Group Call
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['from']                  This number to display on Caller ID as calling
     * @param string  $options['to']                    Please enter multiple E164 number. You can add max 10 numbers.
     *                                                  Add numbers separated with comma. e.g : 1111111111,2222222222
     * @param string  $options['url']                   URL requested once the call connects
     * @param string  $options['responseType']          Example: json
     * @param string  $options['groupConfirmKey']       Define the DTMF that the called party should send to bridge the
     *                                                  call. Allowed Values : 0-9, #, *
     * @param string  $options['groupConfirmFile']      Specify the audio file you want to play when the called party
     *                                                  picks up the call
     * @param string  $options['method']                (optional) Specifies the HTTP method used to request the
     *                                                  required URL once call connects.
     * @param string  $options['statusCallBackUrl']     (optional) Specifies the HTTP method used to request the
     *                                                  required URL once call connects.
     * @param string  $options['statusCallBackMethod']  (optional) Specifies the HTTP methodlinkclass used to request
     *                                                  StatusCallbackUrl.
     * @param string  $options['fallBackUrl']           (optional) URL requested if the initial Url parameter fails or
     *                                                  encounters an error
     * @param string  $options['fallBackMethod']        (optional) Specifies the HTTP method used to request the
     *                                                  required FallbackUrl once call connects.
     * @param string  $options['heartBeatUrl']          (optional) URL that can be requested every 60 seconds during
     *                                                  the call to notify of elapsed tim
     * @param string  $options['heartBeatMethod']       (optional) Specifies the HTTP method used to request
     *                                                  HeartbeatUrl.
     * @param integer $options['timeout']               (optional) Time (in seconds) Message360 should wait while the
     *                                                  call is ringing before canceling the call
     * @param string  $options['playDtmf']              (optional) DTMF Digits to play to the call once it connects. 0-
     *                                                  9, #, or *
     * @param string  $options['hideCallerId']          (optional) Specifies if the caller id will be hidden
     * @param bool    $options['record']                (optional) Specifies if the call should be recorded
     * @param string  $options['recordCallBackUrl']     (optional) Recording parameters will be sent here upon
     *                                                  completion
     * @param string  $options['recordCallBackMethod']  (optional) Method used to request the RecordCallback URL.
     * @param bool    $options['transcribe']            (optional) Specifies if the call recording should be
     *                                                  transcribed
     * @param string  $options['transcribeCallBackUrl'] (optional) Transcription parameters will be sent here upon
     *                                                  completion
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function groupCall(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['from'], $options['to'], $options['url'], $options['responseType'], $options['groupConfirmKey'], $options['groupConfirmFile'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/groupcall.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'          => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'          => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'From'                  => $this->val($options, 'from'),
            'To'                    => $this->val($options, 'to'),
            'Url'                   => $this->val($options, 'url'),
            'GroupConfirmKey'       => $this->val($options, 'groupConfirmKey'),
            'GroupConfirmFile'      => $this->val($options, 'groupConfirmFile'),
            'Method'                => $this->val($options, 'method'),
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
            'TranscribeCallBackUrl' => $this->val($options, 'transcribeCallBackUrl')
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
     * A list of calls associated with your Message360 account
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['page']         (optional) Which page of the overall response will be returned. Zero
     *                                         indexed
     * @param integer $options['pageSize']     (optional) Number of individual resources listed in the response per
     *                                         page
     * @param string  $options['to']           (optional) Only list calls to this number
     * @param string  $options['from']         (optional) Only list calls from this number
     * @param string  $options['dateCreated']  (optional) Only list calls starting within the specified date range
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listCalls(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/listcalls.{ResponseType}';

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
            'To'           => $this->val($options, 'to'),
            'From'         => $this->val($options, 'from'),
            'DateCreated'  => $this->val($options, 'dateCreated')
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
     * API endpoint used to send a Ringless Voicemail
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['from']                This number to display on Caller ID as calling
     * @param string $options['rVMCallerId']         Alternate caller ID required for RVM
     * @param string $options['to']                  To number
     * @param string $options['voiceMailURL']        URL to an audio file
     * @param string $options['responseType']        Response type format xml or json
     * @param string $options['method']              (optional) Not currently used in this version
     * @param string $options['statusCallBackUrl']   (optional) URL to post the status of the Ringless request
     * @param string $options['statsCallBackMethod'] (optional) POST or GET
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function sendRinglessVM(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['from'], $options['rVMCallerId'], $options['to'], $options['voiceMailURL'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/makeringlessvoicemailcall.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'        => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'        => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'From'                => $this->val($options, 'from'),
            'RVMCallerId'         => $this->val($options, 'rVMCallerId'),
            'To'                  => $this->val($options, 'to'),
            'VoiceMailURL'        => $this->val($options, 'voiceMailURL'),
            'Method'              => $this->val($options, 'method', Models\HttpActionEnum::GET),
            'StatusCallBackUrl'   => $this->val($options, 'statusCallBackUrl'),
            'StatsCallBackMethod' => $this->val($options, 'statsCallBackMethod')
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
     * View Call Response
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['callsid']      Call Sid id for particular Call
     * @param string $options['responseType'] Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewCall(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['callsid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/calls/viewcalls.{ResponseType}';

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
            'callsid'      => $this->val($options, 'callsid')
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
