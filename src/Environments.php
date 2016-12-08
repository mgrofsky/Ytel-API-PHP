<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 12/08/2016
 */

namespace Message360Lib;

/**
 * Environments available for API
 */
class Environments {
    /**
     * Our message360 production environment.  This is our latest stable release.
     */
    const PRODUCTION = "production";

    /**
     * Pre-Production environment used to test your code in our beta systems.  There is a good chance nothing will work here.  Don't use it unless instructed by our staff.
     */
    const PREPRODUCTION = "preproduction";

    /**
     * Internal development testing.  This configuration of the API is not available to the public.
     */
    const DEVELOPMENT = "development";

}