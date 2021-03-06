<?php
/*
 * YtelAPIV3Lib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelAPIV3Lib\Controllers;

use YtelAPIV3Lib\APIException;
use YtelAPIV3Lib\APIHelper;
use YtelAPIV3Lib\Configuration;
use YtelAPIV3Lib\Models;
use YtelAPIV3Lib\Exceptions;
use YtelAPIV3Lib\Http\HttpRequest;
use YtelAPIV3Lib\Http\HttpResponse;
use YtelAPIV3Lib\Http\HttpMethod;
use YtelAPIV3Lib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class PostCardController extends BaseController
{
    /**
     * @var PostCardController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return PostCardController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Remove a postcard object.
     *
     * @param string $postcardid The unique identifier of a postcard object.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createDeletePostcard(
        $postcardid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/deletepostcard.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'postcardid' => $postcardid
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
     * Retrieve a postcard object by its PostcardId.
     *
     * @param string $postcardid The unique identifier for a postcard object.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewPostcard(
        $postcardid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/viewpostcard.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'postcardid' => $postcardid
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
     * Create, print, and mail a postcard to an address. The postcard front must be supplied as a PDF,
     * image, or an HTML string. The back can be a PDF, image, HTML string, or it can be automatically
     * generated by supplying a custom message.
     *
     * @param string $to          The AddressId or an object structured when creating an address by addresses/Create.
     * @param string $from        The AddressId or an object structured when creating an address by addresses/Create.
     * @param string $attachbyid  Set an existing postcard by attaching its PostcardId.
     * @param string $front       A 4.25"x6.25" or 6.25"x11.25" image to use as the front of the postcard.  This can be
     *                            a URL, local file, or an HTML string. Supported file types are PDF, PNG, and JPEG.
     * @param string $back        A 4.25"x6.25" or 6.25"x11.25" image to use as the back of the postcard, supplied as a
     *                            URL, local file, or HTML string.  This allows you to customize your back design, but
     *                            we will still insert the recipient address for you.
     * @param string $message     The message for the back of the postcard with a maximum of 350 characters.
     * @param string $setting     Code for the dimensions of the media to be printed.
     * @param string $description (optional) A description for the postcard.
     * @param string $htmldata    (optional) A string value that contains HTML markup.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPostcard(
        $to,
        $from,
        $attachbyid,
        $front,
        $back,
        $message,
        $setting,
        $description = null,
        $htmldata = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/createpostcard.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'to'          => $to,
            'from'        => $from,
            'attachbyid'  => $attachbyid,
            'front'       => $front,
            'back'        => $back,
            'message'     => $message,
            'setting'     => $setting,
            'description' => $description,
            'htmldata'    => $htmldata
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
     * Retrieve a list of postcard objects. The postcards objects are sorted by creation date, with the
     * most recently created postcards appearing first.
     *
     * @param integer $page        (optional) The page count to retrieve from the total results in the collection. Page
     *                             indexing starts at 1.
     * @param integer $pagesize    (optional) The count of objects to return per page.
     * @param string  $postcardid  (optional) The unique identifier for a postcard object.
     * @param string  $dateCreated (optional) The date the postcard was created.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListPostcards(
        $page = null,
        $pagesize = null,
        $postcardid = null,
        $dateCreated = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/listpostcard.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'page'        => $page,
            'pagesize'    => $pagesize,
            'postcardid'  => $postcardid,
            'dateCreated' => $dateCreated
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
}
