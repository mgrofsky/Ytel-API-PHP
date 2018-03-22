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
class UsageController extends BaseController
{
    /**
     * @var UsageController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return UsageController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve usage metrics regarding your Ytel account. The results includes inbound/outbound voice
     * calls and inbound/outbound SMS messages as well as carrier lookup requests.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['responseType']       Response type format xml or json
     * @param int    $options['productCode']        (optional) Filter usage results by product type.
     * @param string $options['startDate']          (optional) Filter usage objects by start date.
     * @param string $options['endDate']            (optional) Filter usage objects by end date.
     * @param string $options['includeSubAccounts'] (optional) Will include all subaccount usage data
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listUsage(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/usage/listusage.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType'       => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'       => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'ProductCode'      => APIHelper::prepareFormFields($this->val($options, 'productCode')),
            'startDate'          => $this->val($options, 'startDate', '2016-09-06'),
            'endDate'            => $this->val($options, 'endDate', '2016-09-06'),
            'IncludeSubAccounts' => $this->val($options, 'includeSubAccounts')
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
