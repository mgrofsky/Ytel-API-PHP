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
class ConferenceController extends BaseController
{
    /**
     * @var ConferenceController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ConferenceController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Deaf Mute Participant
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['conferenceSid']  ID of the active conference
     * @param string $options['participantSid'] ID of an active participant
     * @param string $options['responseType']   Response Type either json or xml
     * @param bool   $options['muted']          (optional) Mute a participant
     * @param bool   $options['deaf']           (optional) Make it so a participant cant hear
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deafMuteParticipant(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['conferenceSid'], $options['participantSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/deafMuteParticipant.{ResponseType}';

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
            'conferenceSid'  => $this->val($options, 'conferenceSid'),
            'ParticipantSid' => $this->val($options, 'participantSid'),
            'Muted'          => $this->val($options, 'muted'),
            'Deaf'           => $this->val($options, 'deaf')
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
     * Retrieve information about a participant by its ParticipantSid.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['conferenceSid']  The unique identifier for a conference object.
     * @param string $options['participantSid'] The unique identifier for a participant object.
     * @param string $options['responseType']   Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewParticipant(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['conferenceSid'], $options['participantSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/viewParticipant.{ResponseType}';

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
            'ConferenceSid'  => $this->val($options, 'conferenceSid'),
            'ParticipantSid' => $this->val($options, 'participantSid')
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
     * Retrieve information about a conference by its ConferenceSid.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['conferenceSid'] The unique identifier of each conference resource
     * @param string $options['responseType']  Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewConference(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['conferenceSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/viewconference.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'  => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'ConferenceSid' => $this->val($options, 'conferenceSid')
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
     * Add Participant in conference
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['conferenceSid']     The unique identifier for a conference object.
     * @param string $options['participantNumber'] The phone number of the participant to be added.
     * @param string $options['responseType']      Response type format xml or json
     * @param bool   $options['muted']             (optional) Specifies if participant should be muted.
     * @param bool   $options['deaf']              (optional) Specifies if the participant should hear audio in the
     *                                             conference.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function addParticipant(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['conferenceSid'], $options['participantNumber'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/addParticipant.{ResponseType}';

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
            'ConferenceSid'     => $this->val($options, 'conferenceSid'),
            'ParticipantNumber' => $this->val($options, 'participantNumber'),
            'Muted'             => $this->val($options, 'muted'),
            'Deaf'              => $this->val($options, 'deaf')
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
     * Here you can experiment with initiating a conference call through message360 and view the request
     * response generated when doing so.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['from']                 A valid 10-digit number (E.164 format) that will be initiating
     *                                                 the conference call.
     * @param string  $options['to']                   A valid 10-digit number (E.164 format) that is to receive the
     *                                                 conference call.
     * @param string  $options['url']                  URL requested once the conference connects
     * @param string  $options['responseType']         Response type format xml or json
     * @param string  $options['method']               (optional) Specifies the HTTP method used to request the
     *                                                 required URL once call connects.
     * @param string  $options['statusCallBackUrl']    (optional) URL that can be requested to receive notification
     *                                                 when call has ended. A set of default parameters will be sent
     *                                                 here once the conference is finished.
     * @param string  $options['statusCallBackMethod'] (optional) Specifies the HTTP methodlinkclass used to request
     *                                                 StatusCallbackUrl.
     * @param string  $options['fallbackUrl']          (optional) URL requested if the initial Url parameter fails or
     *                                                 encounters an error
     * @param string  $options['fallbackMethod']       (optional) Specifies the HTTP method used to request the
     *                                                 required FallbackUrl once call connects.
     * @param bool    $options['record']               (optional) Specifies if the conference should be recorded.
     * @param string  $options['recordCallBackUrl']    (optional) Recording parameters will be sent here upon
     *                                                 completion.
     * @param string  $options['recordCallBackMethod'] (optional) Specifies the HTTP method used to request the
     *                                                 required URL once conference connects.
     * @param string  $options['scheduleTime']         (optional) Schedule conference in future. Schedule time must be
     *                                                 greater than current time
     * @param integer $options['timeout']              (optional) The number of seconds the call stays on the line
     *                                                 while waiting for an answer. The max time limit is 999 and the
     *                                                 default limit is 60 seconds but lower times can be set.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createConference(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['from'], $options['to'], $options['url'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/createConference.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'         => $this->val($options, 'responseType'),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'Url'                  => $this->val($options, 'url'),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'From'                 => $this->val($options, 'from'),
            'To'                   => $this->val($options, 'to'),
            'Method'             => APIHelper::prepareFormFields($this->val($options, 'method')),
            'StatusCallBackUrl'    => $this->val($options, 'statusCallBackUrl'),
            'StatusCallBackMethod' => APIHelper::prepareFormFields($this->val($options, 'statusCallBackMethod')),
            'FallbackUrl'          => $this->val($options, 'fallbackUrl'),
            'FallbackMethod'     => APIHelper::prepareFormFields($this->val($options, 'fallbackMethod')),
            'Record'               => $this->val($options, 'record'),
            'RecordCallBackUrl'    => $this->val($options, 'recordCallBackUrl'),
            'RecordCallBackMethod' => APIHelper::prepareFormFields($this->val($options, 'recordCallBackMethod')),
            'ScheduleTime'         => $this->val($options, 'scheduleTime'),
            'Timeout'              => $this->val($options, 'timeout')
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
     * Remove a participant from a conference.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['conferenceSid']  The unique identifier for a conference object.
     * @param string $options['participantSid'] The unique identifier for a participant object.
     * @param string $options['responseType']   Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function hangupParticipant(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['conferenceSid'], $options['participantSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/hangupParticipant.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'   => $this->val($options, 'responseType'),
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'ParticipantSid' => $this->val($options, 'participantSid'),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'ConferenceSid'  => $this->val($options, 'conferenceSid')
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
     * Play an audio file during a conference.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['conferenceSid']  The unique identifier for a conference object.
     * @param string $options['participantSid'] The unique identifier for a participant object.
     * @param string $options['audioUrl']       The URL for the audio file that is to be played during the conference.
     *                                          Multiple audio files can be chained by using a semicolon.
     * @param string $options['responseType']   Response type format xml or json
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function playConferenceAudio(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['conferenceSid'], $options['participantSid'], $options['audioUrl'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/playAudio.{ResponseType}';

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
            'ConferenceSid'  => $this->val($options, 'conferenceSid'),
            'ParticipantSid' => $this->val($options, 'participantSid'),
            'AudioUrl'     => APIHelper::prepareFormFields($this->val($options, 'audioUrl'))
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
     * Retrieve a list of participants for an in-progress conference.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['conferenceSid'] The unique identifier for a conference.
     * @param string  $options['responseType']  Response format, xml or json
     * @param integer $options['page']          (optional) The page count to retrieve from the total results in the
     *                                          collection. Page indexing starts at 1.
     * @param integer $options['pagesize']      (optional) The count of objects to return per page.
     * @param bool    $options['muted']         (optional) Specifies if participant should be muted.
     * @param bool    $options['deaf']          (optional) Specifies if the participant should hear audio in the
     *                                          conference.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listParticipant(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['conferenceSid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/listParticipant.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'  => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'message360-api'
        );

        //prepare parameters
        $_parameters = array (
            'ConferenceSid' => $this->val($options, 'conferenceSid'),
            'Page'          => $this->val($options, 'page', 1),
            'Pagesize'      => $this->val($options, 'pagesize', 10),
            'Muted'         => $this->val($options, 'muted'),
            'Deaf'          => $this->val($options, 'deaf')
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
     * Retrieve a list of conference objects.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response type format xml or json
     * @param integer $options['page']         (optional) The page count to retrieve from the total results in the
     *                                         collection. Page indexing starts at 1.
     * @param integer $options['pagesize']     (optional) Number of individual resources listed in the response per
     *                                         page
     * @param string  $options['friendlyName'] (optional) Only return conferences with the specified FriendlyName
     * @param string  $options['dateCreated']  (optional) Conference created date
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listConference(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/conferences/listconference.{ResponseType}';

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
            'page'         => $this->val($options, 'page', 1),
            'pagesize'     => $this->val($options, 'pagesize', 10),
            'FriendlyName' => $this->val($options, 'friendlyName'),
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
