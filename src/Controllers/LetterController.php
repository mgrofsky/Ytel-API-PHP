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
class LetterController extends BaseController
{
    /**
     * @var LetterController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return LetterController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve a letter object by its LetterSid.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['lettersid']    The unique identifier for a letter object.
     * @param string $options['responseType'] Response Type either json or xml
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewLetter(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['lettersid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/letter/viewletter.{ResponseType}';

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
            'lettersid'    => $this->val($options, 'lettersid')
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
     * Create, print, and mail a letter to an address. The letter file must be supplied as a PDF or an HTML
     * string.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['to']           The AddressId or an object structured when creating an address by
     *                                        addresses/Create.
     * @param string $options['from']         The AddressId or an object structured when creating an address by
     *                                        addresses/Create.
     * @param string $options['attachbyid']   Set an existing letter by attaching its LetterId.
     * @param string $options['file']         File can be a 8.5"x11" PDF uploaded file or URL that links to a file.
     * @param string $options['color']        Specify if letter should be printed in color.
     * @param string $options['responseType'] Response Type either json or xml
     * @param string $options['description']  (optional) A description for the letter.
     * @param string $options['extraservice'] (optional) Add an extra service to your letter. Options are "certified"
     *                                        or "registered". Certified provides tracking and delivery confirmation
     *                                        for domestic destinations and is an additional $5.00. Registered provides
     *                                        tracking and confirmation for international addresses and is an
     *                                        additional $16.50.
     * @param string $options['doublesided']  (optional) Specify if letter should be printed on both sides.
     * @param string $options['template']     (optional) Boolean that defaults to true. When set to false, this
     *                                        specifies that your letter does not follow the m360 address template. In
     *                                        this case, a blank address page will be inserted at the beginning of your
     *                                        file and you will be charged for the extra page.
     * @param string $options['htmldata']     (optional) A string value that contains HTML markup.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createLetter(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['to'], $options['from'], $options['attachbyid'], $options['file'], $options['color'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/letter/create.{ResponseType}';

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
            'to'           => $this->val($options, 'to'),
            'from'         => $this->val($options, 'from'),
            'attachbyid'   => $this->val($options, 'attachbyid'),
            'file'         => $this->val($options, 'file'),
            'color'        => $this->val($options, 'color'),
            'description'  => $this->val($options, 'description'),
            'extraservice' => $this->val($options, 'extraservice'),
            'doublesided'  => $this->val($options, 'doublesided'),
            'template'     => $this->val($options, 'template'),
            'htmldata'     => $this->val($options, 'htmldata')
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
     * Retrieve a list of letter objects. The letter objects are sorted by creation date, with the most
     * recently created letters appearing first.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response Type either json or xml
     * @param integer $options['page']         (optional) The page count to retrieve from the total results in the
     *                                         collection. Page indexing starts at 1.
     * @param integer $options['pagesize']     (optional) The count of objects to return per page.
     * @param string  $options['lettersid']    (optional) The unique identifier for a letter object.
     * @param string  $options['dateCreated']  (optional) The date the letter was created.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listLetters(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/letter/listsletter.{ResponseType}';

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
            'lettersid'    => $this->val($options, 'lettersid'),
            'dateCreated'  => $this->val($options, 'dateCreated')
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
     * Remove a letter object by its LetterId.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['lettersid']    The unique identifier for a letter object.
     * @param string $options['responseType'] Response Type either json or xml
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteLetter(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['lettersid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/letter/delete.{ResponseType}';

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
            'lettersid'    => $this->val($options, 'lettersid')
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
