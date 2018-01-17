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
class AreaMailController extends BaseController
{
    /**
     * @var AreaMailController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return AreaMailController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Create a new AreaMail object.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['routes']       List of routes that AreaMail should be delivered to.  A single route can
     *                                        be either a zipcode or a carrier route.List of routes that AreaMail
     *                                        should be delivered to.  A single route can be either a zipcode or a
     *                                        carrier route. A carrier route is in the form of 92610-C043 where the
     *                                        carrier route is composed of 5 numbers for zipcode, 1 letter for carrier
     *                                        route type, and 3 numbers for carrier route code. Delivery can be sent to
     *                                        mutliple routes by separating them with a commas. Valid Values: 92656,
     *                                        92610-C043
     * @param string $options['attachbyid']   Set an existing areamail by attaching its AreamailId.
     * @param string $options['front']        The front of the AreaMail item to be created. This can be a URL, local
     *                                        file, or an HTML string. Supported file types are PDF, PNG, and JPEG.
     *                                        Back required
     * @param string $options['back']         The back of the AreaMail item to be created. This can be a URL, local
     *                                        file, or an HTML string. Supported file types are PDF, PNG, and JPEG.
     * @param string $options['responseType'] Response Type either json or xml
     * @param string $options['description']  (optional) A string value to use as a description for this AreaMail item.
     * @param string $options['targettype']   (optional) The delivery location type.
     * @param string $options['htmldata']     (optional) A string value that contains HTML markup.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAreaMail(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['routes'], $options['attachbyid'], $options['front'], $options['back'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/areamail/create.{ResponseType}';

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
            'routes'       => $this->val($options, 'routes'),
            'attachbyid'   => $this->val($options, 'attachbyid'),
            'front'        => $this->val($options, 'front'),
            'back'         => $this->val($options, 'back'),
            'description'  => $this->val($options, 'description'),
            'targettype'   => $this->val($options, 'targettype'),
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
     * Retrieve an AreaMail object by its AreaMailId.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['areamailid']   The unique identifier for an AreaMail object.
     * @param string $options['responseType'] Response Type either json or xml
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewAreaMail(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['areamailid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/areamail/view.{ResponseType}';

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
            'areamailid'   => $this->val($options, 'areamailid')
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
     * Retrieve a list of AreaMail objects.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response Type either json or xml
     * @param integer $options['page']         (optional) The page count to retrieve from the total results in the
     *                                         collection. Page indexing starts at 1.
     * @param integer $options['pagesize']     (optional) The count of objects to return per page.
     * @param string  $options['areamailsid']  (optional) The unique identifier for an AreaMail object.
     * @param string  $options['dateCreated']  (optional) The date the AreaMail was created.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listAreaMail(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/areamail/lists.{ResponseType}';

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
            'areamailsid'  => $this->val($options, 'areamailsid'),
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
     * Remove an AreaMail object by its AreaMailId.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['areamailid']   The unique identifier for an AreaMail object.
     * @param string $options['responseType'] Response Type either json or xml
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAreaMail(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['areamailid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/areamail/delete.{ResponseType}';

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
            'areamailid'   => $this->val($options, 'areamailid')
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
