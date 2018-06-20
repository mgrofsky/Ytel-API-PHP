# Getting started

Ytel API version 3

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Ytel%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the YtelAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Ytel%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Ytel%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Ytel%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Ytel%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Ytel%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Ytel%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Ytel%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Ytel%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Ytel%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Ytel%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Ytel%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Ytel%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new YtelAPILib\YtelAPIClient($basicAuthUserName, $basicAuthPassword);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [ShortCodeController](#short_code_controller)
* [AreaMailController](#area_mail_controller)
* [PostCardController](#post_card_controller)
* [LetterController](#letter_controller)
* [CallController](#call_controller)
* [PhoneNumberController](#phone_number_controller)
* [SMSController](#sms_controller)
* [SharedShortCodeController](#shared_short_code_controller)
* [ConferenceController](#conference_controller)
* [CarrierController](#carrier_controller)
* [EmailController](#email_controller)
* [AccountController](#account_controller)
* [SubAccountController](#sub_account_controller)
* [AddressController](#address_controller)
* [RecordingController](#recording_controller)
* [TranscriptionController](#transcription_controller)
* [UsageController](#usage_controller)

## <a name="short_code_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ShortCodeController") ShortCodeController

### Get singleton instance

The singleton instance of the ``` ShortCodeController ``` class can be accessed from the API Client.

```php
$shortCode = $client->getShortCode();
```

### <a name="create_dedicatedshortcode_listshortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createDedicatedshortcodeListshortcode") createDedicatedshortcodeListshortcode

> Retrieve a list of Short Code assignment associated with your Ytel account.


```php
function createDedicatedshortcodeListshortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Optional ```  | Only list Short Code Assignment sent from this Short Code |
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$page = 'page';
$collect['page'] = $page;

$pagesize = 'pagesize';
$collect['pagesize'] = $pagesize;


$result = $shortCode->createDedicatedshortcodeListshortcode($collect);

```


### <a name="create_dedicatedshortcode_updateshortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createDedicatedshortcodeUpdateshortcode") createDedicatedshortcodeUpdateshortcode

> Update a dedicated shortcode.


```php
function createDedicatedshortcodeUpdateshortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid dedicated shortcode to your Ytel account. |
| friendlyName |  ``` Optional ```  | User generated name of the dedicated shortcode. |
| callbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required StatusCallBackUrl once call connects. |
| callbackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| fallbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| fallbackUrl |  ``` Optional ```  | URL used if any errors occur during execution of InboundXML or at initial request of the required Url provided with the POST. |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$callbackMethod = 'CallbackMethod';
$collect['callbackMethod'] = $callbackMethod;

$callbackUrl = 'CallbackUrl';
$collect['callbackUrl'] = $callbackUrl;

$fallbackMethod = 'FallbackMethod';
$collect['fallbackMethod'] = $fallbackMethod;

$fallbackUrl = 'FallbackUrl';
$collect['fallbackUrl'] = $fallbackUrl;


$result = $shortCode->createDedicatedshortcodeUpdateshortcode($collect);

```


### <a name="create_dedicatedshortcode_viewshortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createDedicatedshortcodeViewshortcode") createDedicatedshortcodeViewshortcode

> Retrieve a single Short Code object by its shortcode assignment.


```php
function createDedicatedshortcodeViewshortcode($shortcode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid Dedicated Short Code to your Ytel account |



#### Example Usage

```php
$shortcode = 'Shortcode';

$result = $shortCode->createDedicatedshortcodeViewshortcode($shortcode);

```


### <a name="create_shortcode_viewsms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createShortcodeViewsms") createShortcodeViewsms

> View a single Sms Short Code message.


```php
function createShortcodeViewsms($messageSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for the sms resource |



#### Example Usage

```php
$messageSid = 'MessageSid';

$result = $shortCode->createShortcodeViewsms($messageSid);

```


### <a name="create_dedicatedshortcode_getinboundsms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createDedicatedshortcodeGetinboundsms") createDedicatedshortcodeGetinboundsms

> Retrive a list of inbound Sms Short Code messages associated with your Ytel account.


```php
function createDedicatedshortcodeGetinboundsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Only list SMS messages sent from this number |
| shortcode |  ``` Optional ```  | Only list SMS messages sent to Shortcode |
| datecreated |  ``` Optional ```  | Only list SMS messages sent in the specified date MAKE REQUEST |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$from = 'From';
$collect['from'] = $from;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$datecreated = 'Datecreated';
$collect['datecreated'] = $datecreated;


$result = $shortCode->createDedicatedshortcodeGetinboundsms($collect);

```


### <a name="create_dedicatedshortcode_sendsms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createDedicatedshortcodeSendsms") createDedicatedshortcodeSendsms

> Send Dedicated Shortcode


```php
function createDedicatedshortcodeSendsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | Your dedicated shortcode |
| to |  ``` Required ```  | The number to send your SMS to |
| body |  ``` Required ```  | The body of your message |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once the Short Code message is sent.GET or POST |
| messagestatuscallback |  ``` Optional ```  | URL that can be requested to receive notification when Short Code message was sent. |



#### Example Usage

```php
$shortcode = 60;
$collect['shortcode'] = $shortcode;

$to = 60.0879312144071;
$collect['to'] = $to;

$body = 'body';
$collect['body'] = $body;

$method = 'method';
$collect['method'] = $method;

$messagestatuscallback = 'messagestatuscallback';
$collect['messagestatuscallback'] = $messagestatuscallback;


$result = $shortCode->createDedicatedshortcodeSendsms($collect);

```


### <a name="create_shortcode_listsms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createShortcodeListsms") createShortcodeListsms

> Retrieve a list of Short Code messages.


```php
function createShortcodeListsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Optional ```  | Only list messages sent from this Short Code |
| to |  ``` Optional ```  | Only list messages sent to this number |
| dateSent |  ``` Optional ```  | Only list messages sent with the specified date |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$to = 'To';
$collect['to'] = $to;

$dateSent = 'DateSent';
$collect['dateSent'] = $dateSent;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;


$result = $shortCode->createShortcodeListsms($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="area_mail_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AreaMailController") AreaMailController

### Get singleton instance

The singleton instance of the ``` AreaMailController ``` class can be accessed from the API Client.

```php
$areaMail = $client->getAreaMail();
```

### <a name="create_areamail_delete"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createAreamailDelete") createAreamailDelete

> Remove an AreaMail object by its AreaMailId.


```php
function createAreamailDelete($areamailid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| areamailid |  ``` Required ```  | The unique identifier for an AreaMail object. |



#### Example Usage

```php
$areamailid = 'areamailid';

$result = $areaMail->createAreamailDelete($areamailid);

```


### <a name="create_areamail_create"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createAreamailCreate") createAreamailCreate

> Create a new AreaMail object.


```php
function createAreamailCreate($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| routes |  ``` Required ```  | List of routes that AreaMail should be delivered to.  A single route can be either a zipcode or a carrier route.List of routes that AreaMail should be delivered to.  A single route can be either a zipcode or a carrier route. A carrier route is in the form of 92610-C043 where the carrier route is composed of 5 numbers for zipcode, 1 letter for carrier route type, and 3 numbers for carrier route code. Delivery can be sent to mutliple routes by separating them with a commas. Valid Values: 92656, 92610-C043 |
| attachbyid |  ``` Required ```  | Set an existing areamail by attaching its AreamailId. |
| front |  ``` Required ```  | The front of the AreaMail item to be created. This can be a URL, local file, or an HTML string. Supported file types are PDF, PNG, and JPEG. Back required |
| back |  ``` Required ```  | The back of the AreaMail item to be created. This can be a URL, local file, or an HTML string. Supported file types are PDF, PNG, and JPEG. |
| description |  ``` Optional ```  | A string value to use as a description for this AreaMail item. |
| targettype |  ``` Optional ```  | The delivery location type. |
| htmldata |  ``` Optional ```  | A string value that contains HTML markup. |



#### Example Usage

```php
$routes = 'routes';
$collect['routes'] = $routes;

$attachbyid = 'attachbyid';
$collect['attachbyid'] = $attachbyid;

$front = 'front';
$collect['front'] = $front;

$back = 'back';
$collect['back'] = $back;

$description = 'description';
$collect['description'] = $description;

$targettype = 'targettype';
$collect['targettype'] = $targettype;

$htmldata = 'htmldata';
$collect['htmldata'] = $htmldata;


$result = $areaMail->createAreamailCreate($collect);

```


### <a name="create_areamail_view"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createAreamailView") createAreamailView

> Retrieve an AreaMail object by its AreaMailId.


```php
function createAreamailView($areamailid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| areamailid |  ``` Required ```  | The unique identifier for an AreaMail object. |



#### Example Usage

```php
$areamailid = 'areamailid';

$result = $areaMail->createAreamailView($areamailid);

```


### <a name="create_areamail_lists"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createAreamailLists") createAreamailLists

> Retrieve a list of AreaMail objects.


```php
function createAreamailLists($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| areamailsid |  ``` Optional ```  | The unique identifier for an AreaMail object. |
| dateCreated |  ``` Optional ```  | The date the AreaMail was created. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$areamailsid = 'areamailsid';
$collect['areamailsid'] = $areamailsid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $areaMail->createAreamailLists($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="post_card_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PostCardController") PostCardController

### Get singleton instance

The singleton instance of the ``` PostCardController ``` class can be accessed from the API Client.

```php
$postCard = $client->getPostCard();
```

### <a name="postcard_deletepostcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.postcardDeletepostcard") postcardDeletepostcard

> Remove a postcard object.


```php
function postcardDeletepostcard($postcardid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| postcardid |  ``` Required ```  | The unique identifier of a postcard object. |



#### Example Usage

```php
$postcardid = 'postcardid';

$result = $postCard->postcardDeletepostcard($postcardid);

```


### <a name="postcard_viewpostcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.postcardViewpostcard") postcardViewpostcard

> Retrieve a postcard object by its PostcardId.


```php
function postcardViewpostcard($postcardid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| postcardid |  ``` Required ```  | The unique identifier for a postcard object. |



#### Example Usage

```php
$postcardid = 'postcardid';

$result = $postCard->postcardViewpostcard($postcardid);

```


### <a name="postcard_listpostcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.postcardListpostcard") postcardListpostcard

> Retrieve a list of postcard objects. The postcards objects are sorted by creation date, with the most recently created postcards appearing first.


```php
function postcardListpostcard($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| postcardid |  ``` Optional ```  | The unique identifier for a postcard object. |
| dateCreated |  ``` Optional ```  | The date the postcard was created. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$postcardid = 'postcardid';
$collect['postcardid'] = $postcardid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $postCard->postcardListpostcard($collect);

```


### <a name="postcard_createpostcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.postcardCreatepostcard") postcardCreatepostcard

> Create, print, and mail a postcard to an address. The postcard front must be supplied as a PDF, image, or an HTML string. The back can be a PDF, image, HTML string, or it can be automatically generated by supplying a custom message.


```php
function postcardCreatepostcard($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| to |  ``` Required ```  | The AddressId or an object structured when creating an address by addresses/Create. |
| from |  ``` Required ```  | The AddressId or an object structured when creating an address by addresses/Create. |
| attachbyid |  ``` Required ```  | Set an existing postcard by attaching its PostcardId. |
| front |  ``` Required ```  | A 4.25"x6.25" or 6.25"x11.25" image to use as the front of the postcard.  This can be a URL, local file, or an HTML string. Supported file types are PDF, PNG, and JPEG. |
| back |  ``` Required ```  | A 4.25"x6.25" or 6.25"x11.25" image to use as the back of the postcard, supplied as a URL, local file, or HTML string.  This allows you to customize your back design, but we will still insert the recipient address for you. |
| message |  ``` Required ```  | The message for the back of the postcard with a maximum of 350 characters. |
| setting |  ``` Required ```  | Code for the dimensions of the media to be printed. |
| description |  ``` Optional ```  | A description for the postcard. |
| htmldata |  ``` Optional ```  | A string value that contains HTML markup. |



#### Example Usage

```php
$to = 'to';
$collect['to'] = $to;

$from = 'from';
$collect['from'] = $from;

$attachbyid = 'attachbyid';
$collect['attachbyid'] = $attachbyid;

$front = 'front';
$collect['front'] = $front;

$back = 'back';
$collect['back'] = $back;

$message = 'message';
$collect['message'] = $message;

$setting = 'setting';
$collect['setting'] = $setting;

$description = 'description';
$collect['description'] = $description;

$htmldata = 'htmldata';
$collect['htmldata'] = $htmldata;


$result = $postCard->postcardCreatepostcard($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="letter_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LetterController") LetterController

### Get singleton instance

The singleton instance of the ``` LetterController ``` class can be accessed from the API Client.

```php
$letter = $client->getLetter();
```

### <a name="create_letter_delete"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createLetterDelete") createLetterDelete

> Remove a letter object by its LetterId.


```php
function createLetterDelete($lettersid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| lettersid |  ``` Required ```  | The unique identifier for a letter object. |



#### Example Usage

```php
$lettersid = 'lettersid';

$result = $letter->createLetterDelete($lettersid);

```


### <a name="create_letter_viewletter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createLetterViewletter") createLetterViewletter

> Retrieve a letter object by its LetterSid.


```php
function createLetterViewletter($lettersid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| lettersid |  ``` Required ```  | The unique identifier for a letter object. |



#### Example Usage

```php
$lettersid = 'lettersid';

$result = $letter->createLetterViewletter($lettersid);

```


### <a name="create_letter_listsletter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createLetterListsletter") createLetterListsletter

> Retrieve a list of letter objects. The letter objects are sorted by creation date, with the most recently created letters appearing first.


```php
function createLetterListsletter($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| lettersid |  ``` Optional ```  | The unique identifier for a letter object. |
| dateCreated |  ``` Optional ```  | The date the letter was created. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$lettersid = 'lettersid';
$collect['lettersid'] = $lettersid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $letter->createLetterListsletter($collect);

```


### <a name="create_letter_create"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createLetterCreate") createLetterCreate

> Create, print, and mail a letter to an address. The letter file must be supplied as a PDF or an HTML string.


```php
function createLetterCreate($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| to |  ``` Required ```  | The AddressId or an object structured when creating an address by addresses/Create. |
| from |  ``` Required ```  | The AddressId or an object structured when creating an address by addresses/Create. |
| attachbyid |  ``` Required ```  | Set an existing letter by attaching its LetterId. |
| file |  ``` Required ```  | File can be a 8.5"x11" PDF uploaded file or URL that links to a file. |
| color |  ``` Required ```  | Specify if letter should be printed in color. |
| description |  ``` Optional ```  | A description for the letter. |
| extraservice |  ``` Optional ```  | Add an extra service to your letter. Options are "certified" or "registered". Certified provides tracking and delivery confirmation for domestic destinations and is an additional $5.00. Registered provides tracking and confirmation for international addresses and is an additional $16.50. |
| doublesided |  ``` Optional ```  | Specify if letter should be printed on both sides. |
| template |  ``` Optional ```  | Boolean that defaults to true. When set to false, this specifies that your letter does not follow the m360 address template. In this case, a blank address page will be inserted at the beginning of your file and you will be charged for the extra page. |
| htmldata |  ``` Optional ```  | A string value that contains HTML markup. |



#### Example Usage

```php
$to = 'to';
$collect['to'] = $to;

$from = 'from';
$collect['from'] = $from;

$attachbyid = 'attachbyid';
$collect['attachbyid'] = $attachbyid;

$file = 'file';
$collect['file'] = $file;

$color = 'color';
$collect['color'] = $color;

$description = 'description';
$collect['description'] = $description;

$extraservice = 'extraservice';
$collect['extraservice'] = $extraservice;

$doublesided = 'doublesided';
$collect['doublesided'] = $doublesided;

$template = 'template';
$collect['template'] = $template;

$htmldata = 'htmldata';
$collect['htmldata'] = $htmldata;


$result = $letter->createLetterCreate($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="call_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CallController") CallController

### Get singleton instance

The singleton instance of the ``` CallController ``` class can be accessed from the API Client.

```php
$call = $client->getCall();
```

### <a name="create_calls_viewcalldetail"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsViewcalldetail") createCallsViewcalldetail

> Retrieve a single voice call’s information by its CallSid.


```php
function createCallsViewcalldetail($callSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for the voice call. |



#### Example Usage

```php
$callSid = 'callSid';

$result = $call->createCallsViewcalldetail($callSid);

```


### <a name="create_calls_viewcalls"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsViewcalls") createCallsViewcalls

> Retrieve a single voice call’s information by its CallSid.


```php
function createCallsViewcalls($callsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callsid |  ``` Required ```  | The unique identifier for the voice call. |



#### Example Usage

```php
$callsid = 'callsid';

$result = $call->createCallsViewcalls($callsid);

```


### <a name="create_calls_senddigits"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsSenddigits") createCallsSenddigits

> Play Dtmf and send the Digit


```php
function createCallsSenddigits($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier of each call resource |
| playDtmf |  ``` Required ```  | DTMF digits to play to the call. 0-9, #, *, W, or w |
| playDtmfDirection |  ``` Optional ```  | The leg of the call DTMF digits should be sent to |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$playDtmfDirection = string::IN;
$collect['playDtmfDirection'] = $playDtmfDirection;


$result = $call->createCallsSenddigits($collect);

```


### <a name="create_calls_makervm"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsMakervm") createCallsMakervm

> Initiate an outbound Ringless Voicemail through Ytel.


```php
function createCallsMakervm($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | A valid Ytel Voice enabled number (E.164 format) that will be initiating the phone call. |
| rVMCallerId |  ``` Required ```  | A required secondary Caller ID for RVM to work. |
| to |  ``` Required ```  | A valid number (E.164 format) that will receive the phone call. |
| voiceMailURL |  ``` Required ```  | The URL requested once the RVM connects. A set of default parameters will be sent here. |
| method |  ``` Optional ```  ``` DefaultValue ```  | Specifies the HTTP method used to request the required URL once call connects. |
| statusCallBackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| statsCallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required StatusCallBackUrl once call connects. |



#### Example Usage

```php
$from = 'From';
$collect['from'] = $from;

$rVMCallerId = 'RVMCallerId';
$collect['rVMCallerId'] = $rVMCallerId;

$to = 'To';
$collect['to'] = $to;

$voiceMailURL = 'VoiceMailURL';
$collect['voiceMailURL'] = $voiceMailURL;

$method = 'GET';
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statsCallBackMethod = 'StatsCallBackMethod';
$collect['statsCallBackMethod'] = $statsCallBackMethod;


$result = $call->createCallsMakervm($collect);

```


### <a name="create_calls_listcalls"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsListcalls") createCallsListcalls

> A list of calls associated with your Ytel account


```php
function createCallsListcalls($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| to |  ``` Optional ```  | Filter calls that were sent to this 10-digit number (E.164 format). |
| from |  ``` Optional ```  | Filter calls that were sent from this 10-digit number (E.164 format). |
| dateCreated |  ``` Optional ```  | Return calls that are from a specified date. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$to = 'To';
$collect['to'] = $to;

$from = 'From';
$collect['from'] = $from;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $call->createCallsListcalls($collect);

```


### <a name="create_calls_interruptcalls"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsInterruptcalls") createCallsInterruptcalls

> Interrupt the Call by Call Sid


```php
function createCallsInterruptcalls($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for voice call that is in progress. |
| url |  ``` Optional ```  | URL the in-progress call will be redirected to |
| method |  ``` Optional ```  | The method used to request the above Url parameter |
| status |  ``` Optional ```  | Status to set the in-progress call to |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$url = 'Url';
$collect['url'] = $url;

$method = 'Method';
$collect['method'] = $method;

$status = string::CANCELED;
$collect['status'] = $status;


$result = $call->createCallsInterruptcalls($collect);

```


### <a name="create_calls_recordcalls"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsRecordcalls") createCallsRecordcalls

> Start or stop recording of an in-progress voice call.


```php
function createCallsRecordcalls($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier of each call resource |
| record |  ``` Required ```  | Set true to initiate recording or false to terminate recording |
| direction |  ``` Optional ```  | The leg of the call to record |
| timeLimit |  ``` Optional ```  | Time in seconds the recording duration should not exceed |
| callBackUrl |  ``` Optional ```  | URL consulted after the recording completes |
| fileformat |  ``` Optional ```  | Format of the recording file. Can be .mp3 or .wav |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$record = true;
$collect['record'] = $record;

$direction = string::IN;
$collect['direction'] = $direction;

$timeLimit = 151;
$collect['timeLimit'] = $timeLimit;

$callBackUrl = 'CallBackUrl';
$collect['callBackUrl'] = $callBackUrl;

$fileformat = string::MP3;
$collect['fileformat'] = $fileformat;


$result = $call->createCallsRecordcalls($collect);

```


### <a name="create_calls_playaudios"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsPlayaudios") createCallsPlayaudios

> Play Audio from a url


```php
function createCallsPlayaudios($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier of each call resource |
| audioUrl |  ``` Required ```  | URL to sound that should be played. You also can add more than one audio file using semicolons e.g. http://example.com/audio1.mp3;http://example.com/audio2.wav |
| sayText |  ``` Required ```  | Valid alphanumeric string that should be played to the In-progress call. |
| length |  ``` Optional ```  | Time limit in seconds for audio play back |
| direction |  ``` Optional ```  | The leg of the call audio will be played to |
| mix |  ``` Optional ```  | If false, all other audio will be muted |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$audioUrl = 'AudioUrl';
$collect['audioUrl'] = $audioUrl;

$sayText = 'SayText';
$collect['sayText'] = $sayText;

$length = 151;
$collect['length'] = $length;

$direction = string::IN;
$collect['direction'] = $direction;

$mix = true;
$collect['mix'] = $mix;


$result = $call->createCallsPlayaudios($collect);

```


### <a name="create_calls_voiceeffect"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsVoiceeffect") createCallsVoiceeffect

> Add audio voice effects to the an in-progress voice call.


```php
function createCallsVoiceeffect($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for the in-progress voice call. |
| audioDirection |  ``` Optional ```  | The direction the audio effect should be placed on. If IN, the effects will occur on the incoming audio stream. If OUT, the effects will occur on the outgoing audio stream. |
| pitchSemiTones |  ``` Optional ```  | Set the pitch in semitone (half-step) intervals. Value between -14 and 14 |
| pitchOctaves |  ``` Optional ```  | Set the pitch in octave intervals.. Value between -1 and 1 |
| pitch |  ``` Optional ```  | Set the pitch (lowness/highness) of the audio. The higher the value, the higher the pitch. Value greater than 0 |
| rate |  ``` Optional ```  | Set the rate for audio. The lower the value, the lower the rate. value greater than 0 |
| tempo |  ``` Optional ```  | Set the tempo (speed) of the audio. A higher value denotes a faster tempo. Value greater than 0 |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$audioDirection = string::IN;
$collect['audioDirection'] = $audioDirection;

$pitchSemiTones = 151.583213106069;
$collect['pitchSemiTones'] = $pitchSemiTones;

$pitchOctaves = 151.583213106069;
$collect['pitchOctaves'] = $pitchOctaves;

$pitch = 151.583213106069;
$collect['pitch'] = $pitch;

$rate = 151.583213106069;
$collect['rate'] = $rate;

$tempo = 151.583213106069;
$collect['tempo'] = $tempo;


$result = $call->createCallsVoiceeffect($collect);

```


### <a name="create_calls_groupcall"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsGroupcall") createCallsGroupcall

> Group Call


```php
function createCallsGroupcall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | This number to display on Caller ID as calling |
| to |  ``` Required ```  | Please enter multiple E164 number. You can add max 10 numbers. Add numbers separated with comma. e.g : 1111111111,2222222222 |
| url |  ``` Required ```  | URL requested once the call connects |
| groupConfirmKey |  ``` Required ```  | Define the DTMF that the called party should send to bridge the call. Allowed Values : 0-9, #, * |
| groupConfirmFile |  ``` Required ```  | Specify the audio file you want to play when the called party picks up the call |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once call connects. |
| statusCallBackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| statusCallBackMethod |  ``` Optional ```  | Specifies the HTTP methodlinkclass used to request StatusCallbackUrl. |
| fallBackUrl |  ``` Optional ```  | URL requested if the initial Url parameter fails or encounters an error |
| fallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| heartBeatUrl |  ``` Optional ```  | URL that can be requested every 60 seconds during the call to notify of elapsed time and pass other general information. |
| heartBeatMethod |  ``` Optional ```  | Specifies the HTTP method used to request HeartbeatUrl. |
| timeout |  ``` Optional ```  | Time (in seconds) we should wait while the call is ringing before canceling the call |
| playDtmf |  ``` Optional ```  | DTMF Digits to play to the call once it connects. 0-9, #, or * |
| hideCallerId |  ``` Optional ```  | Specifies if the caller id will be hidden |
| record |  ``` Optional ```  | Specifies if the call should be recorded |
| recordCallBackUrl |  ``` Optional ```  | Recording parameters will be sent here upon completion |
| recordCallBackMethod |  ``` Optional ```  | Method used to request the RecordCallback URL. |
| transcribe |  ``` Optional ```  | Specifies if the call recording should be transcribed |
| transcribeCallBackUrl |  ``` Optional ```  | Transcription parameters will be sent here upon completion |



#### Example Usage

```php
$from = 'From';
$collect['from'] = $from;

$to = 'To';
$collect['to'] = $to;

$url = 'Url';
$collect['url'] = $url;

$groupConfirmKey = 'GroupConfirmKey';
$collect['groupConfirmKey'] = $groupConfirmKey;

$groupConfirmFile = string::MP3;
$collect['groupConfirmFile'] = $groupConfirmFile;

$method = 'Method';
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statusCallBackMethod = 'StatusCallBackMethod';
$collect['statusCallBackMethod'] = $statusCallBackMethod;

$fallBackUrl = 'FallBackUrl';
$collect['fallBackUrl'] = $fallBackUrl;

$fallBackMethod = 'FallBackMethod';
$collect['fallBackMethod'] = $fallBackMethod;

$heartBeatUrl = 'HeartBeatUrl';
$collect['heartBeatUrl'] = $heartBeatUrl;

$heartBeatMethod = 'HeartBeatMethod';
$collect['heartBeatMethod'] = $heartBeatMethod;

$timeout = 109;
$collect['timeout'] = $timeout;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$hideCallerId = 'HideCallerId';
$collect['hideCallerId'] = $hideCallerId;

$record = false;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = 'RecordCallBackMethod';
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$transcribe = false;
$collect['transcribe'] = $transcribe;

$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$collect['transcribeCallBackUrl'] = $transcribeCallBackUrl;


$result = $call->createCallsGroupcall($collect);

```


### <a name="create_calls_makecall"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createCallsMakecall") createCallsMakecall

> You can experiment with initiating a call through Ytel and view the request response generated when doing so and get the response in json


```php
function createCallsMakecall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | A valid Ytel Voice enabled number (E.164 format) that will be initiating the phone call. |
| to |  ``` Required ```  | To number |
| url |  ``` Required ```  | URL requested once the call connects |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once call connects. |
| statusCallBackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| statusCallBackMethod |  ``` Optional ```  | Specifies the HTTP methodlinkclass used to request StatusCallbackUrl. |
| fallBackUrl |  ``` Optional ```  | URL requested if the initial Url parameter fails or encounters an error |
| fallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| heartBeatUrl |  ``` Optional ```  | URL that can be requested every 60 seconds during the call to notify of elapsed tim |
| heartBeatMethod |  ``` Optional ```  | Specifies the HTTP method used to request HeartbeatUrl. |
| timeout |  ``` Optional ```  | Time (in seconds) Ytel should wait while the call is ringing before canceling the call |
| playDtmf |  ``` Optional ```  | DTMF Digits to play to the call once it connects. 0-9, #, or * |
| hideCallerId |  ``` Optional ```  | Specifies if the caller id will be hidden |
| record |  ``` Optional ```  | Specifies if the call should be recorded |
| recordCallBackUrl |  ``` Optional ```  | Recording parameters will be sent here upon completion |
| recordCallBackMethod |  ``` Optional ```  | Method used to request the RecordCallback URL. |
| transcribe |  ``` Optional ```  | Specifies if the call recording should be transcribed |
| transcribeCallBackUrl |  ``` Optional ```  | Transcription parameters will be sent here upon completion |
| ifMachine |  ``` Optional ```  | How Ytel should handle the receiving numbers voicemail machine |
| ifMachineUrl |  ``` Optional ```  | URL requested when IfMachine=continue |
| ifMachineMethod |  ``` Optional ```  | Method used to request the IfMachineUrl. |
| feedback |  ``` Optional ```  | Specify if survey should be enable or not |
| surveyId |  ``` Optional ```  | The unique identifier for the survey. |



#### Example Usage

```php
$from = 'From';
$collect['from'] = $from;

$to = 'To';
$collect['to'] = $to;

$url = 'Url';
$collect['url'] = $url;

$method = 'Method';
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statusCallBackMethod = 'StatusCallBackMethod';
$collect['statusCallBackMethod'] = $statusCallBackMethod;

$fallBackUrl = 'FallBackUrl';
$collect['fallBackUrl'] = $fallBackUrl;

$fallBackMethod = 'FallBackMethod';
$collect['fallBackMethod'] = $fallBackMethod;

$heartBeatUrl = 'HeartBeatUrl';
$collect['heartBeatUrl'] = $heartBeatUrl;

$heartBeatMethod = 'HeartBeatMethod';
$collect['heartBeatMethod'] = $heartBeatMethod;

$timeout = 109;
$collect['timeout'] = $timeout;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$hideCallerId = false;
$collect['hideCallerId'] = $hideCallerId;

$record = false;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = 'RecordCallBackMethod';
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$transcribe = false;
$collect['transcribe'] = $transcribe;

$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$collect['transcribeCallBackUrl'] = $transcribeCallBackUrl;

$ifMachine = string::CONTINUE;
$collect['ifMachine'] = $ifMachine;

$ifMachineUrl = 'IfMachineUrl';
$collect['ifMachineUrl'] = $ifMachineUrl;

$ifMachineMethod = 'IfMachineMethod';
$collect['ifMachineMethod'] = $ifMachineMethod;

$feedback = false;
$collect['feedback'] = $feedback;

$surveyId = 'SurveyId';
$collect['surveyId'] = $surveyId;


$result = $call->createCallsMakecall($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="phone_number_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PhoneNumberController") PhoneNumberController

### Get singleton instance

The singleton instance of the ``` PhoneNumberController ``` class can be accessed from the API Client.

```php
$phoneNumber = $client->getPhoneNumber();
```

### <a name="create_incomingphone_getdidscore"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneGetdidscore") createIncomingphoneGetdidscore

> Get DID Score Number


```php
function createIncomingphoneGetdidscore($phonenumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phonenumber |  ``` Required ```  | Specifies the multiple phone numbers for check updated spamscore . |



#### Example Usage

```php
$phonenumber = 'Phonenumber';

$result = $phoneNumber->createIncomingphoneGetdidscore($phonenumber);

```


### <a name="create_incomingphone_bulkbuy"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneBulkbuy") createIncomingphoneBulkbuy

> Purchase a selected number of DID's from specific area codes to be used with your Ytel account.


```php
function createIncomingphoneBulkbuy($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| numberType |  ``` Required ```  | The capability the number supports. |
| areaCode |  ``` Required ```  | Specifies the area code for the returned list of available numbers. Only available for North American numbers. |
| quantity |  ``` Required ```  | A positive integer that tells how many number you want to buy at a time. |
| leftover |  ``` Optional ```  | If desired quantity is unavailable purchase what is available . |



#### Example Usage

```php
$numberType = string::ALL;
$collect['numberType'] = $numberType;

$areaCode = 'AreaCode';
$collect['areaCode'] = $areaCode;

$quantity = 'Quantity';
$collect['quantity'] = $quantity;

$leftover = 'Leftover';
$collect['leftover'] = $leftover;


$result = $phoneNumber->createIncomingphoneBulkbuy($collect);

```


### <a name="create_incomingphone_listnumber"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneListnumber") createIncomingphoneListnumber

> Retrieve a list of purchased phones numbers associated with your Ytel account.


```php
function createIncomingphoneListnumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| numberType |  ``` Optional ```  | The capability supported by the number.Number type either SMS,Voice or all |
| friendlyName |  ``` Optional ```  | A human-readable label added to the number object. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$numberType = string::ALL;
$collect['numberType'] = $numberType;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;


$result = $phoneNumber->createIncomingphoneListnumber($collect);

```


### <a name="create_incomingphone_buynumber"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneBuynumber") createIncomingphoneBuynumber

> Purchase a phone number to be used with your Ytel account


```php
function createIncomingphoneBuynumber($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $phoneNumber->createIncomingphoneBuynumber($phoneNumber);

```


### <a name="create_incomingphone_releasenumber_by_response_type_post"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneReleasenumberByResponseTypePost") createIncomingphoneReleasenumberByResponseTypePost

> Remove a purchased Ytel number from your account.


```php
function createIncomingphoneReleasenumberByResponseTypePost($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |
| responseType |  ``` Required ```  | Response type format xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'ResponseType';
$collect['responseType'] = $responseType;


$result = $phoneNumber->createIncomingphoneReleasenumberByResponseTypePost($collect);

```


### <a name="create_incomingphone_viewnumber"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneViewnumber") createIncomingphoneViewnumber

> Retrieve the details for a phone number by its number.


```php
function createIncomingphoneViewnumber($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel 10-digit phone number (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $phoneNumber->createIncomingphoneViewnumber($phoneNumber);

```


### <a name="create_incomingphone_transferphonenumbers"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneTransferphonenumbers") createIncomingphoneTransferphonenumbers

> Transfer phone number that has been purchased for from one account to another account.


```php
function createIncomingphoneTransferphonenumbers($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phonenumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |
| fromaccountsid |  ``` Required ```  | A specific Accountsid from where Number is getting transfer. |
| toaccountsid |  ``` Required ```  | A specific Accountsid to which Number is getting transfer. |



#### Example Usage

```php
$phonenumber = 'phonenumber';
$collect['phonenumber'] = $phonenumber;

$fromaccountsid = 'fromaccountsid';
$collect['fromaccountsid'] = $fromaccountsid;

$toaccountsid = 'toaccountsid';
$collect['toaccountsid'] = $toaccountsid;


$result = $phoneNumber->createIncomingphoneTransferphonenumbers($collect);

```


### <a name="create_incomingphone_massreleasenumber"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneMassreleasenumber") createIncomingphoneMassreleasenumber

> Remove a purchased Ytel number from your account.


```php
function createIncomingphoneMassreleasenumber($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel comma separated numbers (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $phoneNumber->createIncomingphoneMassreleasenumber($phoneNumber);

```


### <a name="create_incomingphone_massupdatenumber"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneMassupdatenumber") createIncomingphoneMassupdatenumber

> Update properties for a Ytel numbers that has been purchased for your account. Refer to the parameters list for the list of properties that can be updated.


```php
function createIncomingphoneMassupdatenumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid comma(,) separated Ytel numbers. (E.164 format). |
| voiceUrl |  ``` Required ```  | The URL returning InboundXML incoming calls should execute when connected. |
| friendlyName |  ``` Optional ```  | A human-readable value for labeling the number. |
| voiceMethod |  ``` Optional ```  | Specifies the HTTP method used to request the VoiceUrl once incoming call connects. |
| voiceFallbackUrl |  ``` Optional ```  | URL used if any errors occur during execution of InboundXML on a call or at initial request of the voice url |
| voiceFallbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the VoiceFallbackUrl once incoming call connects. |
| hangupCallback |  ``` Optional ```  | URL that can be requested to receive notification when and how incoming call has ended. |
| hangupCallbackMethod |  ``` Optional ```  | The HTTP method Ytel will use when requesting the HangupCallback URL. |
| heartbeatUrl |  ``` Optional ```  | URL that can be used to monitor the phone number. |
| heartbeatMethod |  ``` Optional ```  | The HTTP method Ytel will use when requesting the HeartbeatUrl. |
| smsUrl |  ``` Optional ```  | URL requested when an SMS is received. |
| smsMethod |  ``` Optional ```  | The HTTP method Ytel will use when requesting the SmsUrl. |
| smsFallbackUrl |  ``` Optional ```  | URL used if any errors occur during execution of InboundXML from an SMS or at initial request of the SmsUrl. |
| smsFallbackMethod |  ``` Optional ```  | The HTTP method Ytel will use when URL requested if the SmsUrl is not available. |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$voiceUrl = 'VoiceUrl';
$collect['voiceUrl'] = $voiceUrl;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$voiceMethod = 'VoiceMethod';
$collect['voiceMethod'] = $voiceMethod;

$voiceFallbackUrl = 'VoiceFallbackUrl';
$collect['voiceFallbackUrl'] = $voiceFallbackUrl;

$voiceFallbackMethod = 'VoiceFallbackMethod';
$collect['voiceFallbackMethod'] = $voiceFallbackMethod;

$hangupCallback = 'HangupCallback';
$collect['hangupCallback'] = $hangupCallback;

$hangupCallbackMethod = 'HangupCallbackMethod';
$collect['hangupCallbackMethod'] = $hangupCallbackMethod;

$heartbeatUrl = 'HeartbeatUrl';
$collect['heartbeatUrl'] = $heartbeatUrl;

$heartbeatMethod = 'HeartbeatMethod';
$collect['heartbeatMethod'] = $heartbeatMethod;

$smsUrl = 'SmsUrl';
$collect['smsUrl'] = $smsUrl;

$smsMethod = 'SmsMethod';
$collect['smsMethod'] = $smsMethod;

$smsFallbackUrl = 'SmsFallbackUrl';
$collect['smsFallbackUrl'] = $smsFallbackUrl;

$smsFallbackMethod = 'SmsFallbackMethod';
$collect['smsFallbackMethod'] = $smsFallbackMethod;


$result = $phoneNumber->createIncomingphoneMassupdatenumber($collect);

```


### <a name="create_incomingphone_updatenumber"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneUpdatenumber") createIncomingphoneUpdatenumber

> Update properties for a Ytel number that has been purchased for your account. Refer to the parameters list for the list of properties that can be updated.


```php
function createIncomingphoneUpdatenumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel number (E.164 format). |
| voiceUrl |  ``` Required ```  | URL requested once the call connects |
| friendlyName |  ``` Optional ```  | Phone number friendly name description |
| voiceMethod |  ``` Optional ```  | Post or Get |
| voiceFallbackUrl |  ``` Optional ```  | URL requested if the voice URL is not available |
| voiceFallbackMethod |  ``` Optional ```  | Post or Get |
| hangupCallback |  ``` Optional ```  | callback url after a hangup occurs |
| hangupCallbackMethod |  ``` Optional ```  | Post or Get |
| heartbeatUrl |  ``` Optional ```  | URL requested once the call connects |
| heartbeatMethod |  ``` Optional ```  | URL that can be requested every 60 seconds during the call to notify of elapsed time |
| smsUrl |  ``` Optional ```  | URL requested when an SMS is received |
| smsMethod |  ``` Optional ```  | Post or Get |
| smsFallbackUrl |  ``` Optional ```  | URL used if any errors occur during execution of InboundXML from an SMS or at initial request of the SmsUrl. |
| smsFallbackMethod |  ``` Optional ```  | The HTTP method Ytel will use when URL requested if the SmsUrl is not available. |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$voiceUrl = 'VoiceUrl';
$collect['voiceUrl'] = $voiceUrl;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$voiceMethod = 'VoiceMethod';
$collect['voiceMethod'] = $voiceMethod;

$voiceFallbackUrl = 'VoiceFallbackUrl';
$collect['voiceFallbackUrl'] = $voiceFallbackUrl;

$voiceFallbackMethod = 'VoiceFallbackMethod';
$collect['voiceFallbackMethod'] = $voiceFallbackMethod;

$hangupCallback = 'HangupCallback';
$collect['hangupCallback'] = $hangupCallback;

$hangupCallbackMethod = 'HangupCallbackMethod';
$collect['hangupCallbackMethod'] = $hangupCallbackMethod;

$heartbeatUrl = 'HeartbeatUrl';
$collect['heartbeatUrl'] = $heartbeatUrl;

$heartbeatMethod = 'HeartbeatMethod';
$collect['heartbeatMethod'] = $heartbeatMethod;

$smsUrl = 'SmsUrl';
$collect['smsUrl'] = $smsUrl;

$smsMethod = 'SmsMethod';
$collect['smsMethod'] = $smsMethod;

$smsFallbackUrl = 'SmsFallbackUrl';
$collect['smsFallbackUrl'] = $smsFallbackUrl;

$smsFallbackMethod = 'SmsFallbackMethod';
$collect['smsFallbackMethod'] = $smsFallbackMethod;


$result = $phoneNumber->createIncomingphoneUpdatenumber($collect);

```


### <a name="create_incomingphone_availablenumber"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createIncomingphoneAvailablenumber") createIncomingphoneAvailablenumber

> Retrieve a list of available phone numbers that can be purchased and used for your Ytel account.


```php
function createIncomingphoneAvailablenumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| numbertype |  ``` Required ```  | Number type either SMS,Voice or all |
| areacode |  ``` Required ```  | Specifies the area code for the returned list of available numbers. Only available for North American numbers. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return. |



#### Example Usage

```php
$numbertype = string::ALL;
$collect['numbertype'] = $numbertype;

$areacode = 'areacode';
$collect['areacode'] = $areacode;

$pagesize = 10;
$collect['pagesize'] = $pagesize;


$result = $phoneNumber->createIncomingphoneAvailablenumber($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sms_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SMSController") SMSController

### Get singleton instance

The singleton instance of the ``` SMSController ``` class can be accessed from the API Client.

```php
$sMS = $client->getSMS();
```

### <a name="create_sms_viewdetailsms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createSmsViewdetailsms") createSmsViewdetailsms

> Retrieve a single SMS message object with details by its SmsSid.


```php
function createSmsViewdetailsms($messageSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for a sms message. |



#### Example Usage

```php
$messageSid = 'MessageSid';

$result = $sMS->createSmsViewdetailsms($messageSid);

```


### <a name="create_sms_viewsms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createSmsViewsms") createSmsViewsms

> Retrieve a single SMS message object by its SmsSid.


```php
function createSmsViewsms($messageSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for a sms message. |



#### Example Usage

```php
$messageSid = 'MessageSid';

$result = $sMS->createSmsViewsms($messageSid);

```


### <a name="create_sms_getinboundsms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createSmsGetinboundsms") createSmsGetinboundsms

> Retrieve a list of Inbound SMS message objects.


```php
function createSmsGetinboundsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| from |  ``` Optional ```  | Filter SMS message objects from this valid 10-digit phone number (E.164 format). |
| to |  ``` Optional ```  | Filter SMS message objects to this valid 10-digit phone number (E.164 format). |
| dateSent |  ``` Optional ```  | Filter sms message objects by this date. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$from = 'From';
$collect['from'] = $from;

$to = 'To';
$collect['to'] = $to;

$dateSent = 'DateSent';
$collect['dateSent'] = $dateSent;


$result = $sMS->createSmsGetinboundsms($collect);

```


### <a name="create_sms_listsms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createSmsListsms") createSmsListsms

> Retrieve a list of Outbound SMS message objects.


```php
function createSmsListsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Filter SMS message objects from this valid 10-digit phone number (E.164 format). |
| to |  ``` Optional ```  | Filter SMS message objects to this valid 10-digit phone number (E.164 format). |
| dateSent |  ``` Optional ```  | Only list SMS messages sent in the specified date range |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$from = 'From';
$collect['from'] = $from;

$to = 'To';
$collect['to'] = $to;

$dateSent = 'DateSent';
$collect['dateSent'] = $dateSent;


$result = $sMS->createSmsListsms($collect);

```


### <a name="create_sms_sendsms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createSmsSendsms") createSmsSendsms

> Send an SMS from a Ytel number


```php
function createSmsSendsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | The 10-digit SMS-enabled Ytel number (E.164 format) in which the message is sent. |
| to |  ``` Required ```  | The 10-digit phone number (E.164 format) that will receive the message. |
| body |  ``` Required ```  | The body message that is to be sent in the text. |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once SMS sent. |
| messageStatusCallback |  ``` Optional ```  | URL that can be requested to receive notification when SMS has Sent. A set of default parameters will be sent here once the SMS is finished. |
| smartsms |  ``` Optional ```  ``` DefaultValue ```  | Check's 'to' number can receive sms or not using Carrier API, if wireless = true then text sms is sent, else wireless = false then call is recieved to end user with audible message. |
| deliveryStatus |  ``` Optional ```  ``` DefaultValue ```  | Delivery reports are a method to tell your system if the message has arrived on the destination phone. |



#### Example Usage

```php
$from = 'From';
$collect['from'] = $from;

$to = 'To';
$collect['to'] = $to;

$body = 'Body';
$collect['body'] = $body;

$method = 'Method';
$collect['method'] = $method;

$messageStatusCallback = 'MessageStatusCallback';
$collect['messageStatusCallback'] = $messageStatusCallback;

$smartsms = false;
$collect['smartsms'] = $smartsms;

$deliveryStatus = false;
$collect['deliveryStatus'] = $deliveryStatus;


$result = $sMS->createSmsSendsms($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="shared_short_code_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SharedShortCodeController") SharedShortCodeController

### Get singleton instance

The singleton instance of the ``` SharedShortCodeController ``` class can be accessed from the API Client.

```php
$sharedShortCode = $client->getSharedShortCode();
```

### <a name="create_shortcode_viewshortcode"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createShortcodeViewshortcode") createShortcodeViewshortcode

> The response returned here contains all resource properties associated with the given Shortcode.


```php
function createShortcodeViewshortcode($shortcode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid Shortcode to your Ytel account |



#### Example Usage

```php
$shortcode = 'Shortcode';

$result = $sharedShortCode->createShortcodeViewshortcode($shortcode);

```


### <a name="create_keyword_view"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createKeywordView") createKeywordView

> View a set of properties for a single keyword.


```php
function createKeywordView($keywordid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| keywordid |  ``` Required ```  | The unique identifier of each keyword |



#### Example Usage

```php
$keywordid = 'Keywordid';

$result = $sharedShortCode->createKeywordView($keywordid);

```


### <a name="create_shortcode_updateshortcode"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createShortcodeUpdateshortcode") createShortcodeUpdateshortcode

> Update Assignment


```php
function createShortcodeUpdateshortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid shortcode to your Ytel account |
| friendlyName |  ``` Optional ```  | User generated name of the shortcode |
| callbackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| callbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required StatusCallBackUrl once call connects. |
| fallbackUrl |  ``` Optional ```  | URL used if any errors occur during execution of InboundXML or at initial request of the required Url provided with the POST. |
| fallbackUrlMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$callbackUrl = 'CallbackUrl';
$collect['callbackUrl'] = $callbackUrl;

$callbackMethod = 'CallbackMethod';
$collect['callbackMethod'] = $callbackMethod;

$fallbackUrl = 'FallbackUrl';
$collect['fallbackUrl'] = $fallbackUrl;

$fallbackUrlMethod = 'FallbackUrlMethod';
$collect['fallbackUrlMethod'] = $fallbackUrlMethod;


$result = $sharedShortCode->createShortcodeUpdateshortcode($collect);

```


### <a name="create_template_view"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createTemplateView") createTemplateView

> View a Shared ShortCode Template


```php
function createTemplateView($templateId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| templateId |  ``` Required ```  | The unique identifier for a template object |



#### Example Usage

```php
$templateId = uniqid();

$result = $sharedShortCode->createTemplateView($templateId);

```


### <a name="create_shortcode_listshortcode"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createShortcodeListshortcode") createShortcodeListshortcode

> Retrieve a list of shortcode assignment associated with your Ytel account.


```php
function createShortcodeListshortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;


$result = $sharedShortCode->createShortcodeListshortcode($collect);

```


### <a name="create_keyword_lists"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createKeywordLists") createKeywordLists

> Retrieve a list of keywords associated with your Ytel account.


```php
function createKeywordLists($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| keyword |  ``` Optional ```  | Only list keywords of keyword |
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$keyword = 'Keyword';
$collect['keyword'] = $keyword;

$shortcode = 201;
$collect['shortcode'] = $shortcode;


$result = $sharedShortCode->createKeywordLists($collect);

```


### <a name="create_template_lists"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createTemplateLists") createTemplateLists

> List Shortcode Templates by Type


```php
function createTemplateLists($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Optional ```  ``` DefaultValue ```  | The type (category) of template Valid values: marketing, authorization |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| shortcode |  ``` Optional ```  | Only list templates of type |



#### Example Usage

```php
$type = 'authorization';
$collect['type'] = $type;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;


$result = $sharedShortCode->createTemplateLists($collect);

```


### <a name="create_shortcode_sendsms"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createShortcodeSendsms") createShortcodeSendsms

> Send an SMS from a Ytel ShortCode


```php
function createShortcodeSendsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | The Short Code number that is the sender of this message |
| to |  ``` Required ```  | A valid 10-digit number that should receive the message |
| templateid |  ``` Required ```  | The unique identifier for the template used for the message |
| data |  ``` Required ```  | format of your data, example: {companyname}:test,{otpcode}:1234 |
| method |  ``` Optional ```  ``` DefaultValue ```  | Specifies the HTTP method used to request the required URL once the Short Code message is sent. |
| messageStatusCallback |  ``` Optional ```  | URL that can be requested to receive notification when Short Code message was sent. |



#### Example Usage

```php
$shortcode = 'shortcode';
$collect['shortcode'] = $shortcode;

$to = 'to';
$collect['to'] = $to;

$templateid = uniqid();
$collect['templateid'] = $templateid;

$data = 'data';
$collect['data'] = $data;

$method = 'GET';
$collect['method'] = $method;

$messageStatusCallback = 'MessageStatusCallback';
$collect['messageStatusCallback'] = $messageStatusCallback;


$result = $sharedShortCode->createShortcodeSendsms($collect);

```


### <a name="create_shortcode_getinboundsms"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createShortcodeGetinboundsms") createShortcodeGetinboundsms

> List All Inbound ShortCode


```php
function createShortcodeGetinboundsms($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | From Number to Inbound ShortCode |
| shortcode |  ``` Optional ```  | Only list messages sent to this Short Code |
| datecreated |  ``` Optional ```  | Only list messages sent with the specified date |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$from = 'from';
$collect['from'] = $from;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$datecreated = 'Datecreated';
$collect['datecreated'] = $datecreated;


$result = $sharedShortCode->createShortcodeGetinboundsms($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="conference_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ConferenceController") ConferenceController

### Get singleton instance

The singleton instance of the ``` ConferenceController ``` class can be accessed from the API Client.

```php
$conference = $client->getConference();
```

### <a name="create_conferences_play_audio"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesPlayAudio") createConferencesPlayAudio

> Play an audio file during a conference.


```php
function createConferencesPlayAudio($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |
| audioUrl |  ``` Required ```  | The URL for the audio file that is to be played during the conference. Multiple audio files can be chained by using a semicolon. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;

$audioUrl = string::MP3;
$collect['audioUrl'] = $audioUrl;


$result = $conference->createConferencesPlayAudio($collect);

```


### <a name="create_conferences_hangup_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesHangupParticipant") createConferencesHangupParticipant

> Remove a participant from a conference.


```php
function createConferencesHangupParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;


$result = $conference->createConferencesHangupParticipant($collect);

```


### <a name="create_conferences_viewconference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesViewconference") createConferencesViewconference

> Retrieve information about a conference by its ConferenceSid.


```php
function createConferencesViewconference($conferenceSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier of each conference resource |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';

$result = $conference->createConferencesViewconference($conferenceSid);

```


### <a name="create_conferences_listconference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesListconference") createConferencesListconference

> Retrieve a list of conference objects.


```php
function createConferencesListconference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| friendlyName |  ``` Optional ```  | Only return conferences with the specified FriendlyName |
| dateCreated |  ``` Optional ```  | Conference created date |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $conference->createConferencesListconference($collect);

```


### <a name="create_conferences_list_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesListParticipant") createConferencesListParticipant

> Retrieve a list of participants for an in-progress conference.


```php
function createConferencesListParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference. |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| muted |  ``` Optional ```  | Specifies if participant should be muted. |
| deaf |  ``` Optional ```  | Specifies if the participant should hear audio in the conference. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$muted = true;
$collect['muted'] = $muted;

$deaf = true;
$collect['deaf'] = $deaf;


$result = $conference->createConferencesListParticipant($collect);

```


### <a name="create_conferences_view_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesViewParticipant") createConferencesViewParticipant

> Retrieve information about a participant by its ParticipantSid.


```php
function createConferencesViewParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;


$result = $conference->createConferencesViewParticipant($collect);

```


### <a name="create_conferences_add_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesAddParticipant") createConferencesAddParticipant

> Add Participant in conference 


```php
function createConferencesAddParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantNumber |  ``` Required ```  | The phone number of the participant to be added. |
| muted |  ``` Optional ```  | Specifies if participant should be muted. |
| deaf |  ``` Optional ```  | Specifies if the participant should hear audio in the conference. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantNumber = 'ParticipantNumber';
$collect['participantNumber'] = $participantNumber;

$muted = true;
$collect['muted'] = $muted;

$deaf = true;
$collect['deaf'] = $deaf;


$result = $conference->createConferencesAddParticipant($collect);

```


### <a name="create_conferences_create_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesCreateConference") createConferencesCreateConference

> Here you can experiment with initiating a conference call through Ytel and view the request response generated when doing so.


```php
function createConferencesCreateConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | A valid 10-digit number (E.164 format) that will be initiating the conference call. |
| to |  ``` Required ```  | A valid 10-digit number (E.164 format) that is to receive the conference call. |
| url |  ``` Required ```  | URL requested once the conference connects |
| method |  ``` Optional ```  ``` DefaultValue ```  | Specifies the HTTP method used to request the required URL once call connects. |
| statusCallBackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the conference is finished. |
| statusCallBackMethod |  ``` Optional ```  | Specifies the HTTP methodlinkclass used to request StatusCallbackUrl. |
| fallbackUrl |  ``` Optional ```  | URL requested if the initial Url parameter fails or encounters an error |
| fallbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| record |  ``` Optional ```  | Specifies if the conference should be recorded. |
| recordCallBackUrl |  ``` Optional ```  | Recording parameters will be sent here upon completion. |
| recordCallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once conference connects. |
| scheduleTime |  ``` Optional ```  | Schedule conference in future. Schedule time must be greater than current time |
| timeout |  ``` Optional ```  | The number of seconds the call stays on the line while waiting for an answer. The max time limit is 999 and the default limit is 60 seconds but lower times can be set. |



#### Example Usage

```php
$from = 'From';
$collect['from'] = $from;

$to = 'To';
$collect['to'] = $to;

$url = 'Url';
$collect['url'] = $url;

$method = 'POST';
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statusCallBackMethod = 'StatusCallBackMethod';
$collect['statusCallBackMethod'] = $statusCallBackMethod;

$fallbackUrl = 'FallbackUrl';
$collect['fallbackUrl'] = $fallbackUrl;

$fallbackMethod = 'FallbackMethod';
$collect['fallbackMethod'] = $fallbackMethod;

$record = true;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = 'RecordCallBackMethod';
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$scheduleTime = 'ScheduleTime';
$collect['scheduleTime'] = $scheduleTime;

$timeout = 201;
$collect['timeout'] = $timeout;


$result = $conference->createConferencesCreateConference($collect);

```


### <a name="create_conferences_deaf_mute_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConferencesDeafMuteParticipant") createConferencesDeafMuteParticipant

> Deaf Mute Participant


```php
function createConferencesDeafMuteParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | ID of the active conference |
| participantSid |  ``` Required ```  | ID of an active participant |
| muted |  ``` Optional ```  | Mute a participant |
| deaf |  ``` Optional ```  | Make it so a participant cant hear |



#### Example Usage

```php
$conferenceSid = 'conferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;

$muted = true;
$collect['muted'] = $muted;

$deaf = true;
$collect['deaf'] = $deaf;


$result = $conference->createConferencesDeafMuteParticipant($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="carrier_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CarrierController") CarrierController

### Get singleton instance

The singleton instance of the ``` CarrierController ``` class can be accessed from the API Client.

```php
$carrier = $client->getCarrier();
```

### <a name="create_carrier_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".CarrierController.createCarrierLookup") createCarrierLookup

> Get the Carrier Lookup


```php
function createCarrierLookup($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit number (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $carrier->createCarrierLookup($phoneNumber);

```


### <a name="create_carrier_lookuplist"></a>![Method: ](https://apidocs.io/img/method.png ".CarrierController.createCarrierLookuplist") createCarrierLookuplist

> Retrieve a list of carrier lookup objects.


```php
function createCarrierLookuplist($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;


$result = $carrier->createCarrierLookuplist($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="email_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EmailController") EmailController

### Get singleton instance

The singleton instance of the ``` EmailController ``` class can be accessed from the API Client.

```php
$email = $client->getEmail();
```

### <a name="create_email_deleteinvalidemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailDeleteinvalidemail") createEmailDeleteinvalidemail

> Remove an email from the invalid email list.


```php
function createEmailDeleteinvalidemail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the invalid email list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createEmailDeleteinvalidemail($email);

```


### <a name="create_email_listblockemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailListblockemail") createEmailListblockemail

> Retrieve a list of emails that have been blocked.


```php
function createEmailListblockemail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of blocked emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->createEmailListblockemail($collect);

```


### <a name="create_email_listspamemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailListspamemail") createEmailListspamemail

> Retrieve a list of emails that are on the spam list.


```php
function createEmailListspamemail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of spam emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->createEmailListspamemail($collect);

```


### <a name="create_email_listbounceemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailListbounceemail") createEmailListbounceemail

> Retrieve a list of emails that have bounced.


```php
function createEmailListbounceemail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of bounced emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->createEmailListbounceemail($collect);

```


### <a name="create_email_deletebouncesemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailDeletebouncesemail") createEmailDeletebouncesemail

> Remove an email address from the bounced list.


```php
function createEmailDeletebouncesemail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address to be remove from the bounced email list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createEmailDeletebouncesemail($email);

```


### <a name="create_email_listinvalidemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailListinvalidemail") createEmailListinvalidemail

> Retrieve a list of invalid email addresses.


```php
function createEmailListinvalidemail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of invalid emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->createEmailListinvalidemail($collect);

```


### <a name="create_email_listunsubscribedemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailListunsubscribedemail") createEmailListunsubscribedemail

> Retrieve a list of email addresses from the unsubscribe list.


```php
function createEmailListunsubscribedemail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of unsubscribed emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->createEmailListunsubscribedemail($collect);

```


### <a name="create_email_deleteunsubscribedemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailDeleteunsubscribedemail") createEmailDeleteunsubscribedemail

> Remove an email address from the list of unsubscribed emails.


```php
function createEmailDeleteunsubscribedemail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the unsubscribe list. |



#### Example Usage

```php
$email = 'email';

$result = $email->createEmailDeleteunsubscribedemail($email);

```


### <a name="create_email_addunsubscribesemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailAddunsubscribesemail") createEmailAddunsubscribesemail

> Add an email to the unsubscribe list


```php
function createEmailAddunsubscribesemail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be added to the unsubscribe list |



#### Example Usage

```php
$email = 'email';

$result = $email->createEmailAddunsubscribesemail($email);

```


### <a name="create_email_deleteblocksemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailDeleteblocksemail") createEmailDeleteblocksemail

> Remove an email from blocked emails list.


```php
function createEmailDeleteblocksemail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address to be remove from the blocked list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createEmailDeleteblocksemail($email);

```


### <a name="create_email_deletespamemail"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailDeletespamemail") createEmailDeletespamemail

> Remove an email from the spam email list.


```php
function createEmailDeletespamemail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the spam list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createEmailDeletespamemail($email);

```


### <a name="create_email_sendemails"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createEmailSendemails") createEmailSendemails

> Create and submit an email message to one or more email addresses.


```php
function createEmailSendemails($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| to |  ``` Required ```  | A valid address that will receive the email. Multiple addresses can be separated by using commas. |
| type |  ``` Required ```  | Specifies the type of email to be sent |
| subject |  ``` Required ```  | The subject of the mail. Must be a valid string. |
| message |  ``` Required ```  | The email message that is to be sent in the text. |
| from |  ``` Optional ```  | A valid address that will send the email. |
| cc |  ``` Optional ```  | Carbon copy. A valid address that will receive the email. Multiple addresses can be separated by using commas. |
| bcc |  ``` Optional ```  | Blind carbon copy. A valid address that will receive the email. Multiple addresses can be separated by using commas. |
| attachment |  ``` Optional ```  | A file that is attached to the email. Must be less than 7 MB in size. |



#### Example Usage

```php
$to = 'To';
$collect['to'] = $to;

$type = string::TEXT;
$collect['type'] = $type;

$subject = 'Subject';
$collect['subject'] = $subject;

$message = 'Message';
$collect['message'] = $message;

$from = 'From';
$collect['from'] = $from;

$cc = 'Cc';
$collect['cc'] = $cc;

$bcc = 'Bcc';
$collect['bcc'] = $bcc;

$attachment = 'Attachment';
$collect['attachment'] = $attachment;


$result = $email->createEmailSendemails($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="account_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AccountController") AccountController

### Get singleton instance

The singleton instance of the ``` AccountController ``` class can be accessed from the API Client.

```php
$account = $client->getAccount();
```

### <a name="create_accounts_viewaccount"></a>![Method: ](https://apidocs.io/img/method.png ".AccountController.createAccountsViewaccount") createAccountsViewaccount

> Retrieve information regarding your Ytel account by a specific date. The response object will contain data such as account status, balance, and account usage totals.


```php
function createAccountsViewaccount($date)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| date |  ``` Required ```  | Filter account information based on date. |



#### Example Usage

```php
$date = 'Date';

$result = $account->createAccountsViewaccount($date);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sub_account_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SubAccountController") SubAccountController

### Get singleton instance

The singleton instance of the ``` SubAccountController ``` class can be accessed from the API Client.

```php
$subAccount = $client->getSubAccount();
```

### <a name="create_user_subaccountactivation"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.createUserSubaccountactivation") createUserSubaccountactivation

> Suspend or unsuspend


```php
function createUserSubaccountactivation($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subAccountSID |  ``` Required ```  | The SubaccountSid to be activated or suspended |
| mActivate |  ``` Required ```  | 0 to suspend or 1 to activate |



#### Example Usage

```php
$subAccountSID = 'SubAccountSID';
$collect['subAccountSID'] = $subAccountSID;

$mActivate = int::ACTIVATE;
$collect['mActivate'] = $mActivate;


$result = $subAccount->createUserSubaccountactivation($collect);

```


### <a name="create_user_deletesubaccount"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.createUserDeletesubaccount") createUserDeletesubaccount

> Delete sub account or merge numbers into parent


```php
function createUserDeletesubaccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subAccountSID |  ``` Required ```  | The SubaccountSid to be deleted |
| mergeNumber |  ``` Required ```  | 0 to delete or 1 to merge numbers to parent account. |



#### Example Usage

```php
$subAccountSID = 'SubAccountSID';
$collect['subAccountSID'] = $subAccountSID;

$mergeNumber = int::DELETE;
$collect['mergeNumber'] = $mergeNumber;


$result = $subAccount->createUserDeletesubaccount($collect);

```


### <a name="create_user_createsubaccount"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.createUserCreatesubaccount") createUserCreatesubaccount

> Create a sub user account under the parent account


```php
function createUserCreatesubaccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| firstName |  ``` Required ```  | Sub account user first name |
| lastName |  ``` Required ```  | sub account user last name |
| email |  ``` Required ```  | Sub account email address |
| friendlyName |  ``` Required ```  | Descriptive name of the sub account |
| password |  ``` Required ```  | The password of the sub account.  Please make sure to make as password that is at least 8 characters long, contain a symbol, uppercase and a number. |



#### Example Usage

```php
$firstName = 'FirstName';
$collect['firstName'] = $firstName;

$lastName = 'LastName';
$collect['lastName'] = $lastName;

$email = 'Email';
$collect['email'] = $email;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$password = 'Password';
$collect['password'] = $password;


$result = $subAccount->createUserCreatesubaccount($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="address_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AddressController") AddressController

### Get singleton instance

The singleton instance of the ``` AddressController ``` class can be accessed from the API Client.

```php
$address = $client->getAddress();
```

### <a name="address_deleteaddress"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.addressDeleteaddress") addressDeleteaddress

> To delete Address to your address book


```php
function addressDeleteaddress($addressid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be deleted. |



#### Example Usage

```php
$addressid = 'addressid';

$result = $address->addressDeleteaddress($addressid);

```


### <a name="address_verifyaddress"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.addressVerifyaddress") addressVerifyaddress

> Validates an address given.


```php
function addressVerifyaddress($addressid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be verified. |



#### Example Usage

```php
$addressid = 'addressid';

$result = $address->addressVerifyaddress($addressid);

```


### <a name="address_viewaddress"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.addressViewaddress") addressViewaddress

> View Address Specific address Book by providing the address id


```php
function addressViewaddress($addressid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be retrieved. |



#### Example Usage

```php
$addressid = 'addressid';

$result = $address->addressViewaddress($addressid);

```


### <a name="address_createaddress"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.addressCreateaddress") addressCreateaddress

> To add an address to your address book, you create a new address object. You can retrieve and delete individual addresses as well as get a list of addresses. Addresses are identified by a unique random ID.


```php
function addressCreateaddress($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Required ```  | Name of user |
| address |  ``` Required ```  | Address of user. |
| country |  ``` Required ```  | Must be a 2 letter country short-name code (ISO 3166) |
| state |  ``` Required ```  | Must be a 2 letter State eg. CA for US. For Some Countries it can be greater than 2 letters. |
| city |  ``` Required ```  | City Name. |
| zip |  ``` Required ```  | Zip code of city. |
| description |  ``` Optional ```  | Description of addresses. |
| email |  ``` Optional ```  | Email Id of user. |
| phone |  ``` Optional ```  | Phone number of user. |



#### Example Usage

```php
$name = 'Name';
$collect['name'] = $name;

$address = 'Address';
$collect['address'] = $address;

$country = 'Country';
$collect['country'] = $country;

$state = 'State';
$collect['state'] = $state;

$city = 'City';
$collect['city'] = $city;

$zip = 'Zip';
$collect['zip'] = $zip;

$description = 'Description';
$collect['description'] = $description;

$email = 'email';
$collect['email'] = $email;

$phone = 'Phone';
$collect['phone'] = $phone;


$result = $address->addressCreateaddress($collect);

```


### <a name="address_listaddress"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.addressListaddress") addressListaddress

> List All Address 


```php
function addressListaddress($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | How many results to return, default is 10, max is 100, must be an integer |
| addressid |  ``` Optional ```  | addresses Sid |
| dateCreated |  ``` Optional ```  | date created address. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$addressid = 'addressid';
$collect['addressid'] = $addressid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $address->addressListaddress($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="recording_controller"></a>![Class: ](https://apidocs.io/img/class.png ".RecordingController") RecordingController

### Get singleton instance

The singleton instance of the ``` RecordingController ``` class can be accessed from the API Client.

```php
$recording = $client->getRecording();
```

### <a name="create_recording_deleterecording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.createRecordingDeleterecording") createRecordingDeleterecording

> Remove a recording from your Ytel account.


```php
function createRecordingDeleterecording($recordingsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingsid |  ``` Required ```  | The unique identifier for a recording. |



#### Example Usage

```php
$recordingsid = 'recordingsid';

$result = $recording->createRecordingDeleterecording($recordingsid);

```


### <a name="create_recording_viewrecording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.createRecordingViewrecording") createRecordingViewrecording

> Retrieve the recording of a call by its RecordingSid. This resource will return information regarding the call such as start time, end time, duration, and so forth.


```php
function createRecordingViewrecording($recordingsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingsid |  ``` Required ```  | The unique identifier for the recording. |



#### Example Usage

```php
$recordingsid = 'recordingsid';

$result = $recording->createRecordingViewrecording($recordingsid);

```


### <a name="create_recording_listrecording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.createRecordingListrecording") createRecordingListrecording

> Retrieve a list of recording objects.


```php
function createRecordingListrecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| datecreated |  ``` Optional ```  | Filter results by creation date |
| callsid |  ``` Optional ```  | The unique identifier for a call. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$datecreated = 'Datecreated';
$collect['datecreated'] = $datecreated;

$callsid = 'callsid';
$collect['callsid'] = $callsid;


$result = $recording->createRecordingListrecording($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="transcription_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TranscriptionController") TranscriptionController

### Get singleton instance

The singleton instance of the ``` TranscriptionController ``` class can be accessed from the API Client.

```php
$transcription = $client->getTranscription();
```

### <a name="create_transcriptions_audiourltranscription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createTranscriptionsAudiourltranscription") createTranscriptionsAudiourltranscription

> Transcribe an audio recording from a file.


```php
function createTranscriptionsAudiourltranscription($audiourl)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| audiourl |  ``` Required ```  | URL pointing to the location of the audio file that is to be transcribed. |



#### Example Usage

```php
$audiourl = 'audiourl';

$result = $transcription->createTranscriptionsAudiourltranscription($audiourl);

```


### <a name="create_transcriptions_recordingtranscription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createTranscriptionsRecordingtranscription") createTranscriptionsRecordingtranscription

> Transcribe a recording by its RecordingSid.


```php
function createTranscriptionsRecordingtranscription($recordingSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | The unique identifier for a recording object. |



#### Example Usage

```php
$recordingSid = 'recordingSid';

$result = $transcription->createTranscriptionsRecordingtranscription($recordingSid);

```


### <a name="create_transcriptions_viewtranscription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createTranscriptionsViewtranscription") createTranscriptionsViewtranscription

> Retrieve information about a transaction by its TranscriptionSid.


```php
function createTranscriptionsViewtranscription($transcriptionsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transcriptionsid |  ``` Required ```  | The unique identifier for a transcription object. |



#### Example Usage

```php
$transcriptionsid = 'transcriptionsid';

$result = $transcription->createTranscriptionsViewtranscription($transcriptionsid);

```


### <a name="create_transcriptions_listtranscription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createTranscriptionsListtranscription") createTranscriptionsListtranscription

> Retrieve a list of transcription objects for your Ytel account.


```php
function createTranscriptionsListtranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| status |  ``` Optional ```  | The state of the transcription. |
| dateTranscribed |  ``` Optional ```  | The date the transcription took place. |



#### Example Usage

```php
$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$status = string::INPROGRESS;
$collect['status'] = $status;

$dateTranscribed = 'dateTranscribed';
$collect['dateTranscribed'] = $dateTranscribed;


$result = $transcription->createTranscriptionsListtranscription($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="usage_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsageController") UsageController

### Get singleton instance

The singleton instance of the ``` UsageController ``` class can be accessed from the API Client.

```php
$usage = $client->getUsage();
```

### <a name="create_usage_listusage"></a>![Method: ](https://apidocs.io/img/method.png ".UsageController.createUsageListusage") createUsageListusage

> Retrieve usage metrics regarding your Ytel account. The results includes inbound/outbound voice calls and inbound/outbound SMS messages as well as carrier lookup requests.


```php
function createUsageListusage($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| productCode |  ``` Optional ```  ``` DefaultValue ```  | Filter usage results by product type. |
| startDate |  ``` Optional ```  ``` DefaultValue ```  | Filter usage objects by start date. |
| endDate |  ``` Optional ```  ``` DefaultValue ```  | Filter usage objects by end date. |
| includeSubAccounts |  ``` Optional ```  | Will include all subaccount usage data |



#### Example Usage

```php
$productCode = int::ALL;
$collect['productCode'] = $productCode;

$startDate = '2016-09-06';
$collect['startDate'] = $startDate;

$endDate = '2016-09-06';
$collect['endDate'] = $endDate;

$includeSubAccounts = 'IncludeSubAccounts';
$collect['includeSubAccounts'] = $includeSubAccounts;


$result = $usage->createUsageListusage($collect);

```


[Back to List of Controllers](#list_of_controllers)



