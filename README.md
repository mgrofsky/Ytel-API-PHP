# Getting started

Ytel API version 3

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Ytel%20API%20V3-PHP)

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

The following section explains how to use the YtelAPIV3 library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Ytel%20API%20V3-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Ytel%20API%20V3-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Ytel%20API%20V3-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Ytel%20API%20V3-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Ytel%20API%20V3-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Ytel%20API%20V3-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Ytel%20API%20V3-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Ytel%20API%20V3-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Ytel%20API%20V3-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Ytel%20API%20V3-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Ytel%20API%20V3-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Ytel%20API%20V3-PHP)

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

$client = new YtelAPIV3Lib\YtelAPIV3Client($basicAuthUserName, $basicAuthPassword);
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

### <a name="create_list_shortcodes"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createListShortcodes") createListShortcodes

> Retrieve a list of Short Code assignment associated with your Ytel account.


```php
function createListShortcodes(
        $shortcode = null,
        $page = null,
        $pagesize = null)
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
$page = 'page';
$pagesize = 'pagesize';

$result = $shortCode->createListShortcodes($shortcode, $page, $pagesize);

```


### <a name="create_view_sms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createViewSMS") createViewSMS

> Retrieve a single Short Code object by its shortcode assignment.


```php
function createViewSMS($shortcode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid Dedicated Short Code to your Ytel account |



#### Example Usage

```php
$shortcode = 'Shortcode';

$result = $shortCode->createViewSMS($shortcode);

```


### <a name="create_view_sms1"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createViewSMS1") createViewSMS1

> View a single Sms Short Code message.


```php
function createViewSMS1($messageSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for the sms resource |



#### Example Usage

```php
$messageSid = 'MessageSid';

$result = $shortCode->createViewSMS1($messageSid);

```


### <a name="create_list_sms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createListSMS") createListSMS

> Retrieve a list of Short Code messages.


```php
function createListSMS(
        $shortcode = null,
        $to = null,
        $dateSent = null,
        $page = null,
        $pageSize = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Optional ```  | Only list messages sent from this Short Code |
| to |  ``` Optional ```  | Only list messages sent to this number |
| dateSent |  ``` Optional ```  | Only list messages sent with the specified date |
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  | The count of objects to return per page. |



#### Example Usage

```php
$shortcode = 'Shortcode';
$to = 'To';
$dateSent = 'DateSent';
$page = 190;
$pageSize = 190;

$result = $shortCode->createListSMS($shortcode, $to, $dateSent, $page, $pageSize);

```


### <a name="create_send_sms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createSendSMS") createSendSMS

> Send Dedicated Shortcode


```php
function createSendSMS(
        $shortcode,
        $to,
        $body,
        $method = null,
        $messagestatuscallback = null)
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
$shortcode = 190;
$to = 190.921114199292;
$body = 'body';
$method = 'method';
$messagestatuscallback = 'messagestatuscallback';

$result = $shortCode->createSendSMS($shortcode, $to, $body, $method, $messagestatuscallback);

```


### <a name="create_list_inbound_sms"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.createListInboundSMS") createListInboundSMS

> Retrive a list of inbound Sms Short Code messages associated with your Ytel account.


```php
function createListInboundSMS(
        $page = null,
        $pagesize = null,
        $from = null,
        $shortcode = null,
        $datecreated = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Only list SMS messages sent from this number |
| shortcode |  ``` Optional ```  | Only list SMS messages sent to Shortcode |
| datecreated |  ``` Optional ```  | Only list SMS messages sent in the specified date MAKE REQUEST |



#### Example Usage

```php
$page = 190;
$pagesize = 190;
$from = 'From';
$shortcode = 'Shortcode';
$datecreated = 'Datecreated';

$result = $shortCode->createListInboundSMS($page, $pagesize, $from, $shortcode, $datecreated);

```


### <a name="update_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.updateShortcode") updateShortcode

> Update a dedicated shortcode.


```php
function updateShortcode(
        $shortcode,
        $friendlyName = null,
        $callbackMethod = null,
        $callbackUrl = null,
        $fallbackMethod = null,
        $fallbackUrl = null)
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
$friendlyName = 'FriendlyName';
$callbackMethod = 'CallbackMethod';
$callbackUrl = 'CallbackUrl';
$fallbackMethod = 'FallbackMethod';
$fallbackUrl = 'FallbackUrl';

$result = $shortCode->updateShortcode($shortcode, $friendlyName, $callbackMethod, $callbackUrl, $fallbackMethod, $fallbackUrl);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="area_mail_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AreaMailController") AreaMailController

### Get singleton instance

The singleton instance of the ``` AreaMailController ``` class can be accessed from the API Client.

```php
$areaMail = $client->getAreaMail();
```

### <a name="create_delete_area_mail"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createDeleteAreaMail") createDeleteAreaMail

> Remove an AreaMail object by its AreaMailId.


```php
function createDeleteAreaMail($areamailid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| areamailid |  ``` Required ```  | The unique identifier for an AreaMail object. |



#### Example Usage

```php
$areamailid = 'areamailid';

$result = $areaMail->createDeleteAreaMail($areamailid);

```


### <a name="create_view_area_mail"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createViewAreaMail") createViewAreaMail

> Retrieve an AreaMail object by its AreaMailId.


```php
function createViewAreaMail($areamailid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| areamailid |  ``` Required ```  | The unique identifier for an AreaMail object. |



#### Example Usage

```php
$areamailid = 'areamailid';

$result = $areaMail->createViewAreaMail($areamailid);

```


### <a name="create_list_area_mails"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createListAreaMails") createListAreaMails

> Retrieve a list of AreaMail objects.


```php
function createListAreaMails(
        $page = null,
        $pagesize = null,
        $areamailsid = null,
        $dateCreated = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |
| areamailsid |  ``` Optional ```  | The unique identifier for an AreaMail object. |
| dateCreated |  ``` Optional ```  | The date the AreaMail was created. |



#### Example Usage

```php
$page = 232;
$pagesize = 232;
$areamailsid = 'areamailsid';
$dateCreated = 'dateCreated';

$result = $areaMail->createListAreaMails($page, $pagesize, $areamailsid, $dateCreated);

```


### <a name="create_area_mail"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createAreaMail") createAreaMail

> Create a new AreaMail object.


```php
function createAreaMail(
        $routes,
        $attachbyid,
        $front,
        $back,
        $description = null,
        $targettype = null,
        $htmldata = null)
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
$attachbyid = 'attachbyid';
$front = 'front';
$back = 'back';
$description = 'description';
$targettype = 'targettype';
$htmldata = 'htmldata';

$result = $areaMail->createAreaMail($routes, $attachbyid, $front, $back, $description, $targettype, $htmldata);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="post_card_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PostCardController") PostCardController

### Get singleton instance

The singleton instance of the ``` PostCardController ``` class can be accessed from the API Client.

```php
$postCard = $client->getPostCard();
```

### <a name="create_delete_postcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.createDeletePostcard") createDeletePostcard

> Remove a postcard object.


```php
function createDeletePostcard($postcardid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| postcardid |  ``` Required ```  | The unique identifier of a postcard object. |



#### Example Usage

```php
$postcardid = 'postcardid';

$result = $postCard->createDeletePostcard($postcardid);

```


### <a name="create_view_postcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.createViewPostcard") createViewPostcard

> Retrieve a postcard object by its PostcardId.


```php
function createViewPostcard($postcardid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| postcardid |  ``` Required ```  | The unique identifier for a postcard object. |



#### Example Usage

```php
$postcardid = 'postcardid';

$result = $postCard->createViewPostcard($postcardid);

```


### <a name="create_postcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.createPostcard") createPostcard

> Create, print, and mail a postcard to an address. The postcard front must be supplied as a PDF, image, or an HTML string. The back can be a PDF, image, HTML string, or it can be automatically generated by supplying a custom message.


```php
function createPostcard(
        $to,
        $from,
        $attachbyid,
        $front,
        $back,
        $message,
        $setting,
        $description = null,
        $htmldata = null)
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
$from = 'from';
$attachbyid = 'attachbyid';
$front = 'front';
$back = 'back';
$message = 'message';
$setting = 'setting';
$description = 'description';
$htmldata = 'htmldata';

$result = $postCard->createPostcard($to, $from, $attachbyid, $front, $back, $message, $setting, $description, $htmldata);

```


### <a name="create_list_postcards"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.createListPostcards") createListPostcards

> Retrieve a list of postcard objects. The postcards objects are sorted by creation date, with the most recently created postcards appearing first.


```php
function createListPostcards(
        $page = null,
        $pagesize = null,
        $postcardid = null,
        $dateCreated = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |
| postcardid |  ``` Optional ```  | The unique identifier for a postcard object. |
| dateCreated |  ``` Optional ```  | The date the postcard was created. |



#### Example Usage

```php
$page = 232;
$pagesize = 232;
$postcardid = 'postcardid';
$dateCreated = 'dateCreated';

$result = $postCard->createListPostcards($page, $pagesize, $postcardid, $dateCreated);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="letter_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LetterController") LetterController

### Get singleton instance

The singleton instance of the ``` LetterController ``` class can be accessed from the API Client.

```php
$letter = $client->getLetter();
```

### <a name="create_delete_letter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createDeleteLetter") createDeleteLetter

> Remove a letter object by its LetterId.


```php
function createDeleteLetter($lettersid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| lettersid |  ``` Required ```  | The unique identifier for a letter object. |



#### Example Usage

```php
$lettersid = 'lettersid';

$result = $letter->createDeleteLetter($lettersid);

```


### <a name="create_view_letter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createViewLetter") createViewLetter

> Retrieve a letter object by its LetterSid.


```php
function createViewLetter($lettersid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| lettersid |  ``` Required ```  | The unique identifier for a letter object. |



#### Example Usage

```php
$lettersid = 'lettersid';

$result = $letter->createViewLetter($lettersid);

```


### <a name="create_letter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createLetter") createLetter

> Create, print, and mail a letter to an address. The letter file must be supplied as a PDF or an HTML string.


```php
function createLetter(
        $to,
        $from,
        $attachbyid,
        $file,
        $color,
        $description = null,
        $extraservice = null,
        $doublesided = null,
        $template = null,
        $htmldata = null)
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
$from = 'from';
$attachbyid = 'attachbyid';
$file = 'file';
$color = 'color';
$description = 'description';
$extraservice = 'extraservice';
$doublesided = 'doublesided';
$template = 'template';
$htmldata = 'htmldata';

$result = $letter->createLetter($to, $from, $attachbyid, $file, $color, $description, $extraservice, $doublesided, $template, $htmldata);

```


### <a name="create_list_letters"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createListLetters") createListLetters

> Retrieve a list of letter objects. The letter objects are sorted by creation date, with the most recently created letters appearing first.


```php
function createListLetters(
        $page = null,
        $pagesize = null,
        $lettersid = null,
        $dateCreated = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |
| lettersid |  ``` Optional ```  | The unique identifier for a letter object. |
| dateCreated |  ``` Optional ```  | The date the letter was created. |



#### Example Usage

```php
$page = 232;
$pagesize = 232;
$lettersid = 'lettersid';
$dateCreated = 'dateCreated';

$result = $letter->createListLetters($page, $pagesize, $lettersid, $dateCreated);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="call_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CallController") CallController

### Get singleton instance

The singleton instance of the ``` CallController ``` class can be accessed from the API Client.

```php
$call = $client->getCall();
```

### <a name="create_view_call1"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createViewCall1") createViewCall1

> Retrieve a single voice call’s information by its CallSid.


```php
function createViewCall1($callSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for the voice call. |



#### Example Usage

```php
$callSid = 'callSid';

$result = $call->createViewCall1($callSid);

```


### <a name="create_view_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createViewCall") createViewCall

> Retrieve a single voice call’s information by its CallSid.


```php
function createViewCall($callsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callsid |  ``` Required ```  | The unique identifier for the voice call. |



#### Example Usage

```php
$callsid = 'callsid';

$result = $call->createViewCall($callsid);

```


### <a name="create_play_dtmf"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createPlayDTMF") createPlayDTMF

> Play Dtmf and send the Digit


```php
function createPlayDTMF(
        $callSid,
        $playDtmf,
        $playDtmfDirection = null)
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
$playDtmf = 'PlayDtmf';
$playDtmfDirection = string::IN;

$result = $call->createPlayDTMF($callSid, $playDtmf, $playDtmfDirection);

```


### <a name="create_make_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createMakeCall") createMakeCall

> You can experiment with initiating a call through Ytel and view the request response generated when doing so and get the response in json


```php
function createMakeCall(
        $from,
        $to,
        $url,
        $method = null,
        $statusCallBackUrl = null,
        $statusCallBackMethod = null,
        $fallBackUrl = null,
        $fallBackMethod = null,
        $heartBeatUrl = null,
        $heartBeatMethod = null,
        $timeout = null,
        $playDtmf = null,
        $hideCallerId = null,
        $record = null,
        $recordCallBackUrl = null,
        $recordCallBackMethod = null,
        $transcribe = null,
        $transcribeCallBackUrl = null,
        $ifMachine = null,
        $ifMachineUrl = null,
        $ifMachineMethod = null,
        $feedback = null,
        $surveyId = null)
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
$to = 'To';
$url = 'Url';
$method = 'Method';
$statusCallBackUrl = 'StatusCallBackUrl';
$statusCallBackMethod = 'StatusCallBackMethod';
$fallBackUrl = 'FallBackUrl';
$fallBackMethod = 'FallBackMethod';
$heartBeatUrl = 'HeartBeatUrl';
$heartBeatMethod = 'HeartBeatMethod';
$timeout = 232;
$playDtmf = 'PlayDtmf';
$hideCallerId = true;
$record = true;
$recordCallBackUrl = 'RecordCallBackUrl';
$recordCallBackMethod = 'RecordCallBackMethod';
$transcribe = true;
$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$ifMachine = string::CONTINUE;
$ifMachineUrl = 'IfMachineUrl';
$ifMachineMethod = 'IfMachineMethod';
$feedback = true;
$surveyId = 'SurveyId';

$result = $call->createMakeCall($from, $to, $url, $method, $statusCallBackUrl, $statusCallBackMethod, $fallBackUrl, $fallBackMethod, $heartBeatUrl, $heartBeatMethod, $timeout, $playDtmf, $hideCallerId, $record, $recordCallBackUrl, $recordCallBackMethod, $transcribe, $transcribeCallBackUrl, $ifMachine, $ifMachineUrl, $ifMachineMethod, $feedback, $surveyId);

```


### <a name="create_play_audio"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createPlayAudio") createPlayAudio

> Play Audio from a url


```php
function createPlayAudio(
        $callSid,
        $audioUrl,
        $sayText,
        $length = null,
        $direction = null,
        $mix = null)
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
$audioUrl = 'AudioUrl';
$sayText = 'SayText';
$length = 232;
$direction = string::IN;
$mix = true;

$result = $call->createPlayAudio($callSid, $audioUrl, $sayText, $length, $direction, $mix);

```


### <a name="create_record_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createRecordCall") createRecordCall

> Start or stop recording of an in-progress voice call.


```php
function createRecordCall(
        $callSid,
        $record,
        $direction = null,
        $timeLimit = null,
        $callBackUrl = null,
        $fileformat = null)
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
$record = true;
$direction = string::IN;
$timeLimit = 232;
$callBackUrl = 'CallBackUrl';
$fileformat = string::MP3;

$result = $call->createRecordCall($callSid, $record, $direction, $timeLimit, $callBackUrl, $fileformat);

```


### <a name="create_voice_effect"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createVoiceEffect") createVoiceEffect

> Add audio voice effects to the an in-progress voice call.


```php
function createVoiceEffect(
        $callSid,
        $audioDirection = null,
        $pitchSemiTones = null,
        $pitchOctaves = null,
        $pitch = null,
        $rate = null,
        $tempo = null)
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
$audioDirection = string::IN;
$pitchSemiTones = 141.149005534197;
$pitchOctaves = 141.149005534197;
$pitch = 141.149005534197;
$rate = 141.149005534197;
$tempo = 141.149005534197;

$result = $call->createVoiceEffect($callSid, $audioDirection, $pitchSemiTones, $pitchOctaves, $pitch, $rate, $tempo);

```


### <a name="create_interrupt_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createInterruptCall") createInterruptCall

> Interrupt the Call by Call Sid


```php
function createInterruptCall(
        $callSid,
        $url = null,
        $method = null,
        $status = null)
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
$url = 'Url';
$method = 'Method';
$status = string::CANCELED;

$result = $call->createInterruptCall($callSid, $url, $method, $status);

```


### <a name="create_list_calls"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createListCalls") createListCalls

> A list of calls associated with your Ytel account


```php
function createListCalls(
        $page = null,
        $pageSize = null,
        $to = null,
        $from = null,
        $dateCreated = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| to |  ``` Optional ```  | Filter calls that were sent to this 10-digit number (E.164 format). |
| from |  ``` Optional ```  | Filter calls that were sent from this 10-digit number (E.164 format). |
| dateCreated |  ``` Optional ```  | Return calls that are from a specified date. |



#### Example Usage

```php
$page = 141;
$pageSize = 141;
$to = 'To';
$from = 'From';
$dateCreated = 'DateCreated';

$result = $call->createListCalls($page, $pageSize, $to, $from, $dateCreated);

```


### <a name="create_send_rvm"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createSendRVM") createSendRVM

> Initiate an outbound Ringless Voicemail through Ytel.


```php
function createSendRVM(
        $from,
        $rVMCallerId,
        $to,
        $voiceMailURL,
        $method = null,
        $statusCallBackUrl = null,
        $statsCallBackMethod = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | A valid Ytel Voice enabled number (E.164 format) that will be initiating the phone call. |
| rVMCallerId |  ``` Required ```  | A required secondary Caller ID for RVM to work. |
| to |  ``` Required ```  | A valid number (E.164 format) that will receive the phone call. |
| voiceMailURL |  ``` Required ```  | The URL requested once the RVM connects. A set of default parameters will be sent here. |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once call connects. |
| statusCallBackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| statsCallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required StatusCallBackUrl once call connects. |



#### Example Usage

```php
$from = 'From';
$rVMCallerId = 'RVMCallerId';
$to = 'To';
$voiceMailURL = 'VoiceMailURL';
$method = 'Method';
$statusCallBackUrl = 'StatusCallBackUrl';
$statsCallBackMethod = 'StatsCallBackMethod';

$result = $call->createSendRVM($from, $rVMCallerId, $to, $voiceMailURL, $method, $statusCallBackUrl, $statsCallBackMethod);

```


### <a name="create_group_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.createGroupCall") createGroupCall

> Group Call


```php
function createGroupCall(
        $from,
        $to,
        $url,
        $groupConfirmKey,
        $groupConfirmFile,
        $method = null,
        $statusCallBackUrl = null,
        $statusCallBackMethod = null,
        $fallBackUrl = null,
        $fallBackMethod = null,
        $heartBeatUrl = null,
        $heartBeatMethod = null,
        $timeout = null,
        $playDtmf = null,
        $hideCallerId = null,
        $record = null,
        $recordCallBackUrl = null,
        $recordCallBackMethod = null,
        $transcribe = null,
        $transcribeCallBackUrl = null)
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
$to = 'To';
$url = 'Url';
$groupConfirmKey = 'GroupConfirmKey';
$groupConfirmFile = string::MP3;
$method = 'Method';
$statusCallBackUrl = 'StatusCallBackUrl';
$statusCallBackMethod = 'StatusCallBackMethod';
$fallBackUrl = 'FallBackUrl';
$fallBackMethod = 'FallBackMethod';
$heartBeatUrl = 'HeartBeatUrl';
$heartBeatMethod = 'HeartBeatMethod';
$timeout = 141;
$playDtmf = 'PlayDtmf';
$hideCallerId = 'HideCallerId';
$record = true;
$recordCallBackUrl = 'RecordCallBackUrl';
$recordCallBackMethod = 'RecordCallBackMethod';
$transcribe = true;
$transcribeCallBackUrl = 'TranscribeCallBackUrl';

$result = $call->createGroupCall($from, $to, $url, $groupConfirmKey, $groupConfirmFile, $method, $statusCallBackUrl, $statusCallBackMethod, $fallBackUrl, $fallBackMethod, $heartBeatUrl, $heartBeatMethod, $timeout, $playDtmf, $hideCallerId, $record, $recordCallBackUrl, $recordCallBackMethod, $transcribe, $transcribeCallBackUrl);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="phone_number_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PhoneNumberController") PhoneNumberController

### Get singleton instance

The singleton instance of the ``` PhoneNumberController ``` class can be accessed from the API Client.

```php
$phoneNumber = $client->getPhoneNumber();
```

### <a name="create_get_did_score"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createGetDIDScore") createGetDIDScore

> Get DID Score Number


```php
function createGetDIDScore($phonenumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phonenumber |  ``` Required ```  | Specifies the multiple phone numbers for check updated spamscore . |



#### Example Usage

```php
$phonenumber = 'Phonenumber';

$result = $phoneNumber->createGetDIDScore($phonenumber);

```


### <a name="create_move_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createMoveNumber") createMoveNumber

> Transfer phone number that has been purchased for from one account to another account.


```php
function createMoveNumber(
        $phonenumber,
        $fromaccountsid,
        $toaccountsid)
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
$fromaccountsid = 'fromaccountsid';
$toaccountsid = 'toaccountsid';

$result = $phoneNumber->createMoveNumber($phonenumber, $fromaccountsid, $toaccountsid);

```


### <a name="create_purchase_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createPurchaseNumber") createPurchaseNumber

> Purchase a phone number to be used with your Ytel account


```php
function createPurchaseNumber($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $phoneNumber->createPurchaseNumber($phoneNumber);

```


### <a name="create_release_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createReleaseNumber") createReleaseNumber

> Remove a purchased Ytel number from your account.


```php
function createReleaseNumber(
        $responseType,
        $phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  | Response type format xml or json |
| phoneNumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |



#### Example Usage

```php
$responseType = 'ResponseType';
$phoneNumber = 'PhoneNumber';

$result = $phoneNumber->createReleaseNumber($responseType, $phoneNumber);

```


### <a name="create_view_details"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createViewDetails") createViewDetails

> Retrieve the details for a phone number by its number.


```php
function createViewDetails($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel 10-digit phone number (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $phoneNumber->createViewDetails($phoneNumber);

```


### <a name="create_bulk_release"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createBulkRelease") createBulkRelease

> Remove a purchased Ytel number from your account.


```php
function createBulkRelease($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel comma separated numbers (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $phoneNumber->createBulkRelease($phoneNumber);

```


### <a name="create_available_numbers"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createAvailableNumbers") createAvailableNumbers

> Retrieve a list of available phone numbers that can be purchased and used for your Ytel account.


```php
function createAvailableNumbers(
        $numbertype,
        $areacode,
        $pagesize = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| numbertype |  ``` Required ```  | Number type either SMS,Voice or all |
| areacode |  ``` Required ```  | Specifies the area code for the returned list of available numbers. Only available for North American numbers. |
| pagesize |  ``` Optional ```  | The count of objects to return. |



#### Example Usage

```php
$numbertype = string::ALL;
$areacode = 'areacode';
$pagesize = 141;

$result = $phoneNumber->createAvailableNumbers($numbertype, $areacode, $pagesize);

```


### <a name="update_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.updateNumber") updateNumber

> Update properties for a Ytel number that has been purchased for your account. Refer to the parameters list for the list of properties that can be updated.


```php
function updateNumber(
        $phoneNumber,
        $voiceUrl,
        $friendlyName = null,
        $voiceMethod = null,
        $voiceFallbackUrl = null,
        $voiceFallbackMethod = null,
        $hangupCallback = null,
        $hangupCallbackMethod = null,
        $heartbeatUrl = null,
        $heartbeatMethod = null,
        $smsUrl = null,
        $smsMethod = null,
        $smsFallbackUrl = null,
        $smsFallbackMethod = null)
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
$voiceUrl = 'VoiceUrl';
$friendlyName = 'FriendlyName';
$voiceMethod = 'VoiceMethod';
$voiceFallbackUrl = 'VoiceFallbackUrl';
$voiceFallbackMethod = 'VoiceFallbackMethod';
$hangupCallback = 'HangupCallback';
$hangupCallbackMethod = 'HangupCallbackMethod';
$heartbeatUrl = 'HeartbeatUrl';
$heartbeatMethod = 'HeartbeatMethod';
$smsUrl = 'SmsUrl';
$smsMethod = 'SmsMethod';
$smsFallbackUrl = 'SmsFallbackUrl';
$smsFallbackMethod = 'SmsFallbackMethod';

$result = $phoneNumber->updateNumber($phoneNumber, $voiceUrl, $friendlyName, $voiceMethod, $voiceFallbackUrl, $voiceFallbackMethod, $hangupCallback, $hangupCallbackMethod, $heartbeatUrl, $heartbeatMethod, $smsUrl, $smsMethod, $smsFallbackUrl, $smsFallbackMethod);

```


### <a name="create_list_numbers"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createListNumbers") createListNumbers

> Retrieve a list of purchased phones numbers associated with your Ytel account.


```php
function createListNumbers(
        $page = null,
        $pageSize = null,
        $numberType = null,
        $friendlyName = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Which page of the overall response will be returned. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| numberType |  ``` Optional ```  | The capability supported by the number.Number type either SMS,Voice or all |
| friendlyName |  ``` Optional ```  | A human-readable label added to the number object. |



#### Example Usage

```php
$page = 141;
$pageSize = 141;
$numberType = string::ALL;
$friendlyName = 'FriendlyName';

$result = $phoneNumber->createListNumbers($page, $pageSize, $numberType, $friendlyName);

```


### <a name="create_bulk_update_numbers"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createBulkUpdateNumbers") createBulkUpdateNumbers

> Update properties for a Ytel numbers that has been purchased for your account. Refer to the parameters list for the list of properties that can be updated.


```php
function createBulkUpdateNumbers(
        $phoneNumber,
        $voiceUrl,
        $friendlyName = null,
        $voiceMethod = null,
        $voiceFallbackUrl = null,
        $voiceFallbackMethod = null,
        $hangupCallback = null,
        $hangupCallbackMethod = null,
        $heartbeatUrl = null,
        $heartbeatMethod = null,
        $smsUrl = null,
        $smsMethod = null,
        $smsFallbackUrl = null,
        $smsFallbackMethod = null)
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
$voiceUrl = 'VoiceUrl';
$friendlyName = 'FriendlyName';
$voiceMethod = 'VoiceMethod';
$voiceFallbackUrl = 'VoiceFallbackUrl';
$voiceFallbackMethod = 'VoiceFallbackMethod';
$hangupCallback = 'HangupCallback';
$hangupCallbackMethod = 'HangupCallbackMethod';
$heartbeatUrl = 'HeartbeatUrl';
$heartbeatMethod = 'HeartbeatMethod';
$smsUrl = 'SmsUrl';
$smsMethod = 'SmsMethod';
$smsFallbackUrl = 'SmsFallbackUrl';
$smsFallbackMethod = 'SmsFallbackMethod';

$result = $phoneNumber->createBulkUpdateNumbers($phoneNumber, $voiceUrl, $friendlyName, $voiceMethod, $voiceFallbackUrl, $voiceFallbackMethod, $hangupCallback, $hangupCallbackMethod, $heartbeatUrl, $heartbeatMethod, $smsUrl, $smsMethod, $smsFallbackUrl, $smsFallbackMethod);

```


### <a name="create_bulk_buy_numbers"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.createBulkBuyNumbers") createBulkBuyNumbers

> Purchase a selected number of DID's from specific area codes to be used with your Ytel account.


```php
function createBulkBuyNumbers(
        $numberType,
        $areaCode,
        $quantity,
        $leftover = null)
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
$areaCode = 'AreaCode';
$quantity = 'Quantity';
$leftover = 'Leftover';

$result = $phoneNumber->createBulkBuyNumbers($numberType, $areaCode, $quantity, $leftover);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sms_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SMSController") SMSController

### Get singleton instance

The singleton instance of the ``` SMSController ``` class can be accessed from the API Client.

```php
$sMS = $client->getSMS();
```

### <a name="create_view_sms1"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createViewSMS1") createViewSMS1

> Retrieve a single SMS message object with details by its SmsSid.


```php
function createViewSMS1($messageSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for a sms message. |



#### Example Usage

```php
$messageSid = 'MessageSid';

$result = $sMS->createViewSMS1($messageSid);

```


### <a name="create_view_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createViewSMS") createViewSMS

> Retrieve a single SMS message object by its SmsSid.


```php
function createViewSMS($messageSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for a sms message. |



#### Example Usage

```php
$messageSid = 'MessageSid';

$result = $sMS->createViewSMS($messageSid);

```


### <a name="create_send_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createSendSMS") createSendSMS

> Send an SMS from a Ytel number


```php
function createSendSMS(
        $from,
        $to,
        $body,
        $method = null,
        $messageStatusCallback = null,
        $smartsms = null,
        $deliveryStatus = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | The 10-digit SMS-enabled Ytel number (E.164 format) in which the message is sent. |
| to |  ``` Required ```  | The 10-digit phone number (E.164 format) that will receive the message. |
| body |  ``` Required ```  | The body message that is to be sent in the text. |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once SMS sent. |
| messageStatusCallback |  ``` Optional ```  | URL that can be requested to receive notification when SMS has Sent. A set of default parameters will be sent here once the SMS is finished. |
| smartsms |  ``` Optional ```  | Check's 'to' number can receive sms or not using Carrier API, if wireless = true then text sms is sent, else wireless = false then call is recieved to end user with audible message. |
| deliveryStatus |  ``` Optional ```  | Delivery reports are a method to tell your system if the message has arrived on the destination phone. |



#### Example Usage

```php
$from = 'From';
$to = 'To';
$body = 'Body';
$method = 'Method';
$messageStatusCallback = 'MessageStatusCallback';
$smartsms = false;
$deliveryStatus = false;

$result = $sMS->createSendSMS($from, $to, $body, $method, $messageStatusCallback, $smartsms, $deliveryStatus);

```


### <a name="create_list_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createListSMS") createListSMS

> Retrieve a list of Outbound SMS message objects.


```php
function createListSMS(
        $page = null,
        $pageSize = null,
        $from = null,
        $to = null,
        $dateSent = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Filter SMS message objects from this valid 10-digit phone number (E.164 format). |
| to |  ``` Optional ```  | Filter SMS message objects to this valid 10-digit phone number (E.164 format). |
| dateSent |  ``` Optional ```  | Only list SMS messages sent in the specified date range |



#### Example Usage

```php
$page = 49;
$pageSize = 49;
$from = 'From';
$to = 'To';
$dateSent = 'DateSent';

$result = $sMS->createListSMS($page, $pageSize, $from, $to, $dateSent);

```


### <a name="create_list_inbound_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.createListInboundSMS") createListInboundSMS

> Retrieve a list of Inbound SMS message objects.


```php
function createListInboundSMS(
        $page = null,
        $pageSize = null,
        $from = null,
        $to = null,
        $dateSent = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  | The count of objects to return per page. |
| from |  ``` Optional ```  | Filter SMS message objects from this valid 10-digit phone number (E.164 format). |
| to |  ``` Optional ```  | Filter SMS message objects to this valid 10-digit phone number (E.164 format). |
| dateSent |  ``` Optional ```  | Filter sms message objects by this date. |



#### Example Usage

```php
$page = 49;
$pageSize = 49;
$from = 'From';
$to = 'To';
$dateSent = 'DateSent';

$result = $sMS->createListInboundSMS($page, $pageSize, $from, $to, $dateSent);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="shared_short_code_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SharedShortCodeController") SharedShortCodeController

### Get singleton instance

The singleton instance of the ``` SharedShortCodeController ``` class can be accessed from the API Client.

```php
$sharedShortCode = $client->getSharedShortCode();
```

### <a name="create_view_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createViewShortcode") createViewShortcode

> The response returned here contains all resource properties associated with the given Shortcode.


```php
function createViewShortcode($shortcode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid Shortcode to your Ytel account |



#### Example Usage

```php
$shortcode = 'Shortcode';

$result = $sharedShortCode->createViewShortcode($shortcode);

```


### <a name="create_view_keyword"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createViewKeyword") createViewKeyword

> View a set of properties for a single keyword.


```php
function createViewKeyword($keywordid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| keywordid |  ``` Required ```  | The unique identifier of each keyword |



#### Example Usage

```php
$keywordid = 'Keywordid';

$result = $sharedShortCode->createViewKeyword($keywordid);

```


### <a name="create_view_template"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createViewTemplate") createViewTemplate

> View a Shared ShortCode Template


```php
function createViewTemplate($templateId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| templateId |  ``` Required ```  | The unique identifier for a template object |



#### Example Usage

```php
$templateId = uniqid();

$result = $sharedShortCode->createViewTemplate($templateId);

```


### <a name="create_list_inbound_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createListInboundSMS") createListInboundSMS

> List All Inbound ShortCode


```php
function createListInboundSMS(
        $datecreated = null,
        $page = null,
        $pagesize = null,
        $from = null,
        $shortcode = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| datecreated |  ``` Optional ```  | Only list messages sent with the specified date |
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | From Number to Inbound ShortCode |
| shortcode |  ``` Optional ```  | Only list messages sent to this Short Code |



#### Example Usage

```php
$datecreated = 'Datecreated';
$page = 49;
$pagesize = 49;
$from = 'from';
$shortcode = 'Shortcode';

$result = $sharedShortCode->createListInboundSMS($datecreated, $page, $pagesize, $from, $shortcode);

```


### <a name="create_send_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createSendSMS") createSendSMS

> Send an SMS from a Ytel ShortCode


```php
function createSendSMS(
        $shortcode,
        $to,
        $templateid,
        $data,
        $method = null,
        $messageStatusCallback = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | The Short Code number that is the sender of this message |
| to |  ``` Required ```  | A valid 10-digit number that should receive the message |
| templateid |  ``` Required ```  | The unique identifier for the template used for the message |
| data |  ``` Required ```  | format of your data, example: {companyname}:test,{otpcode}:1234 |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once the Short Code message is sent. |
| messageStatusCallback |  ``` Optional ```  | URL that can be requested to receive notification when Short Code message was sent. |



#### Example Usage

```php
$shortcode = 'shortcode';
$to = 'to';
$templateid = uniqid();
$data = 'data';
$method = 'Method';
$messageStatusCallback = 'MessageStatusCallback';

$result = $sharedShortCode->createSendSMS($shortcode, $to, $templateid, $data, $method, $messageStatusCallback);

```


### <a name="create_list_templates"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createListTemplates") createListTemplates

> List Shortcode Templates by Type


```php
function createListTemplates(
        $type = null,
        $page = null,
        $pagesize = null,
        $shortcode = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Optional ```  | The type (category) of template Valid values: marketing, authorization |
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |
| shortcode |  ``` Optional ```  | Only list templates of type |



#### Example Usage

```php
$type = 'type';
$page = 49;
$pagesize = 49;
$shortcode = 'Shortcode';

$result = $sharedShortCode->createListTemplates($type, $page, $pagesize, $shortcode);

```


### <a name="create_list_keywords"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createListKeywords") createListKeywords

> Retrieve a list of keywords associated with your Ytel account.


```php
function createListKeywords(
        $page = null,
        $pagesize = null,
        $keyword = null,
        $shortcode = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| keyword |  ``` Optional ```  | Only list keywords of keyword |
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |



#### Example Usage

```php
$page = 49;
$pagesize = 49;
$keyword = 'Keyword';
$shortcode = 49;

$result = $sharedShortCode->createListKeywords($page, $pagesize, $keyword, $shortcode);

```


### <a name="create_list_shortcodes"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.createListShortcodes") createListShortcodes

> Retrieve a list of shortcode assignment associated with your Ytel account.


```php
function createListShortcodes(
        $shortcode = null,
        $page = null,
        $pagesize = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | Number of individual resources listed in the response per page |



#### Example Usage

```php
$shortcode = 'Shortcode';
$page = 49;
$pagesize = 49;

$result = $sharedShortCode->createListShortcodes($shortcode, $page, $pagesize);

```


### <a name="update_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.updateShortcode") updateShortcode

> Update Assignment


```php
function updateShortcode(
        $shortcode,
        $friendlyName = null,
        $callbackUrl = null,
        $callbackMethod = null,
        $fallbackUrl = null,
        $fallbackUrlMethod = null)
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
$friendlyName = 'FriendlyName';
$callbackUrl = 'CallbackUrl';
$callbackMethod = 'CallbackMethod';
$fallbackUrl = 'FallbackUrl';
$fallbackUrlMethod = 'FallbackUrlMethod';

$result = $sharedShortCode->updateShortcode($shortcode, $friendlyName, $callbackUrl, $callbackMethod, $fallbackUrl, $fallbackUrlMethod);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="conference_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ConferenceController") ConferenceController

### Get singleton instance

The singleton instance of the ``` ConferenceController ``` class can be accessed from the API Client.

```php
$conference = $client->getConference();
```

### <a name="create_play_audio"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createPlayAudio") createPlayAudio

> Play an audio file during a conference.


```php
function createPlayAudio(
        $conferenceSid,
        $participantSid,
        $audioUrl)
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
$participantSid = 'ParticipantSid';
$audioUrl = string::MP3;

$result = $conference->createPlayAudio($conferenceSid, $participantSid, $audioUrl);

```


### <a name="create_hangup_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createHangupParticipant") createHangupParticipant

> Remove a participant from a conference.


```php
function createHangupParticipant(
        $participantSid,
        $conferenceSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |



#### Example Usage

```php
$participantSid = 'ParticipantSid';
$conferenceSid = 'ConferenceSid';

$result = $conference->createHangupParticipant($participantSid, $conferenceSid);

```


### <a name="create_view_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createViewConference") createViewConference

> Retrieve information about a conference by its ConferenceSid.


```php
function createViewConference($conferenceSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier of each conference resource |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';

$result = $conference->createViewConference($conferenceSid);

```


### <a name="create_view_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createViewParticipant") createViewParticipant

> Retrieve information about a participant by its ParticipantSid.


```php
function createViewParticipant(
        $conferenceSid,
        $participantSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$participantSid = 'ParticipantSid';

$result = $conference->createViewParticipant($conferenceSid, $participantSid);

```


### <a name="create_silence_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createSilenceParticipant") createSilenceParticipant

> Deaf Mute Participant


```php
function createSilenceParticipant(
        $conferenceSid,
        $participantSid,
        $muted = null,
        $deaf = null)
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
$participantSid = 'ParticipantSid';
$muted = false;
$deaf = false;

$result = $conference->createSilenceParticipant($conferenceSid, $participantSid, $muted, $deaf);

```


### <a name="add_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.addParticipant") addParticipant

> Add Participant in conference 


```php
function addParticipant(
        $conferenceSid,
        $participantNumber,
        $muted = null,
        $deaf = null)
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
$participantNumber = 'ParticipantNumber';
$muted = false;
$deaf = false;

$result = $conference->addParticipant($conferenceSid, $participantNumber, $muted, $deaf);

```


### <a name="create_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConference") createConference

> Here you can experiment with initiating a conference call through Ytel and view the request response generated when doing so.


```php
function createConference(
        $url,
        $from,
        $to,
        $method = null,
        $statusCallBackUrl = null,
        $statusCallBackMethod = null,
        $fallbackUrl = null,
        $fallbackMethod = null,
        $record = null,
        $recordCallBackUrl = null,
        $recordCallBackMethod = null,
        $scheduleTime = null,
        $timeout = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| url |  ``` Required ```  | URL requested once the conference connects |
| from |  ``` Required ```  | A valid 10-digit number (E.164 format) that will be initiating the conference call. |
| to |  ``` Required ```  | A valid 10-digit number (E.164 format) that is to receive the conference call. |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once call connects. |
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
$url = 'Url';
$from = 'From';
$to = 'To';
$method = 'Method';
$statusCallBackUrl = 'StatusCallBackUrl';
$statusCallBackMethod = 'StatusCallBackMethod';
$fallbackUrl = 'FallbackUrl';
$fallbackMethod = 'FallbackMethod';
$record = false;
$recordCallBackUrl = 'RecordCallBackUrl';
$recordCallBackMethod = 'RecordCallBackMethod';
$scheduleTime = 'ScheduleTime';
$timeout = 49;

$result = $conference->createConference($url, $from, $to, $method, $statusCallBackUrl, $statusCallBackMethod, $fallbackUrl, $fallbackMethod, $record, $recordCallBackUrl, $recordCallBackMethod, $scheduleTime, $timeout);

```


### <a name="create_list_participants"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createListParticipants") createListParticipants

> Retrieve a list of participants for an in-progress conference.


```php
function createListParticipants(
        $conferenceSid,
        $page = null,
        $pagesize = null,
        $muted = null,
        $deaf = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference. |
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |
| muted |  ``` Optional ```  | Specifies if participant should be muted. |
| deaf |  ``` Optional ```  | Specifies if the participant should hear audio in the conference. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$page = 49;
$pagesize = 49;
$muted = false;
$deaf = false;

$result = $conference->createListParticipants($conferenceSid, $page, $pagesize, $muted, $deaf);

```


### <a name="create_list_conferences"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createListConferences") createListConferences

> Retrieve a list of conference objects.


```php
function createListConferences(
        $page = null,
        $pagesize = null,
        $friendlyName = null,
        $dateCreated = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| friendlyName |  ``` Optional ```  | Only return conferences with the specified FriendlyName |
| dateCreated |  ``` Optional ```  | Conference created date |



#### Example Usage

```php
$page = 49;
$pagesize = 49;
$friendlyName = 'FriendlyName';
$dateCreated = 'DateCreated';

$result = $conference->createListConferences($page, $pagesize, $friendlyName, $dateCreated);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="carrier_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CarrierController") CarrierController

### Get singleton instance

The singleton instance of the ``` CarrierController ``` class can be accessed from the API Client.

```php
$carrier = $client->getCarrier();
```

### <a name="create_lookup_carrier"></a>![Method: ](https://apidocs.io/img/method.png ".CarrierController.createLookupCarrier") createLookupCarrier

> Get the Carrier Lookup


```php
function createLookupCarrier($phoneNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit number (E.164 format). |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';

$result = $carrier->createLookupCarrier($phoneNumber);

```


### <a name="create_carrier_results"></a>![Method: ](https://apidocs.io/img/method.png ".CarrierController.createCarrierResults") createCarrierResults

> Retrieve a list of carrier lookup objects.


```php
function createCarrierResults(
        $page = null,
        $pageSize = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  | The count of objects to return per page. |



#### Example Usage

```php
$page = 91;
$pageSize = 91;

$result = $carrier->createCarrierResults($page, $pageSize);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="email_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EmailController") EmailController

### Get singleton instance

The singleton instance of the ``` EmailController ``` class can be accessed from the API Client.

```php
$email = $client->getEmail();
```

### <a name="create_remove_invalid_email"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createRemoveInvalidEmail") createRemoveInvalidEmail

> Remove an email from the invalid email list.


```php
function createRemoveInvalidEmail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the invalid email list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createRemoveInvalidEmail($email);

```


### <a name="create_blocked_emails"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createBlockedEmails") createBlockedEmails

> Retrieve a list of emails that have been blocked.


```php
function createBlockedEmails(
        $offset = null,
        $limit = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of blocked emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$limit = 'Limit';

$result = $email->createBlockedEmails($offset, $limit);

```


### <a name="create_spam_emails"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createSpamEmails") createSpamEmails

> Retrieve a list of emails that are on the spam list.


```php
function createSpamEmails(
        $offset = null,
        $limit = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of spam emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$limit = 'Limit';

$result = $email->createSpamEmails($offset, $limit);

```


### <a name="create_bounced_emails"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createBouncedEmails") createBouncedEmails

> Retrieve a list of emails that have bounced.


```php
function createBouncedEmails(
        $offset = null,
        $limit = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of bounced emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$limit = 'Limit';

$result = $email->createBouncedEmails($offset, $limit);

```


### <a name="create_remove_bounced_email"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createRemoveBouncedEmail") createRemoveBouncedEmail

> Remove an email address from the bounced list.


```php
function createRemoveBouncedEmail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address to be remove from the bounced email list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createRemoveBouncedEmail($email);

```


### <a name="create_invalid_emails"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createInvalidEmails") createInvalidEmails

> Retrieve a list of invalid email addresses.


```php
function createInvalidEmails(
        $offset = null,
        $limit = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of invalid emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$limit = 'Limit';

$result = $email->createInvalidEmails($offset, $limit);

```


### <a name="create_list_unsubscribed_emails"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createListUnsubscribedEmails") createListUnsubscribedEmails

> Retrieve a list of email addresses from the unsubscribe list.


```php
function createListUnsubscribedEmails(
        $offset = null,
        $limit = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | The starting point of the list of unsubscribed emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$offset = 'Offset';
$limit = 'Limit';

$result = $email->createListUnsubscribedEmails($offset, $limit);

```


### <a name="create_remove_unsubscribed_email"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createRemoveUnsubscribedEmail") createRemoveUnsubscribedEmail

> Remove an email address from the list of unsubscribed emails.


```php
function createRemoveUnsubscribedEmail($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the unsubscribe list. |



#### Example Usage

```php
$email = 'email';

$result = $email->createRemoveUnsubscribedEmail($email);

```


### <a name="add_email_unsubscribe"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.addEmailUnsubscribe") addEmailUnsubscribe

> Add an email to the unsubscribe list


```php
function addEmailUnsubscribe($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be added to the unsubscribe list |



#### Example Usage

```php
$email = 'email';

$result = $email->addEmailUnsubscribe($email);

```


### <a name="create_remove_blocked_address"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createRemoveBlockedAddress") createRemoveBlockedAddress

> Remove an email from blocked emails list.


```php
function createRemoveBlockedAddress($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address to be remove from the blocked list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createRemoveBlockedAddress($email);

```


### <a name="create_remove_spam_address"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createRemoveSpamAddress") createRemoveSpamAddress

> Remove an email from the spam email list.


```php
function createRemoveSpamAddress($email)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the spam list. |



#### Example Usage

```php
$email = 'Email';

$result = $email->createRemoveSpamAddress($email);

```


### <a name="create_send_email"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.createSendEmail") createSendEmail

> Create and submit an email message to one or more email addresses.


```php
function createSendEmail(
        $to,
        $type,
        $subject,
        $message,
        $from = null,
        $cc = null,
        $bcc = null,
        $attachment = null)
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
$type = string::TEXT;
$subject = 'Subject';
$message = 'Message';
$from = 'From';
$cc = 'Cc';
$bcc = 'Bcc';
$attachment = 'Attachment';

$result = $email->createSendEmail($to, $type, $subject, $message, $from, $cc, $bcc, $attachment);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="account_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AccountController") AccountController

### Get singleton instance

The singleton instance of the ``` AccountController ``` class can be accessed from the API Client.

```php
$account = $client->getAccount();
```

### <a name="create_view_account"></a>![Method: ](https://apidocs.io/img/method.png ".AccountController.createViewAccount") createViewAccount

> Retrieve information regarding your Ytel account by a specific date. The response object will contain data such as account status, balance, and account usage totals.


```php
function createViewAccount($date)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| date |  ``` Required ```  | Filter account information based on date. |



#### Example Usage

```php
$date = 'Date';

$result = $account->createViewAccount($date);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sub_account_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SubAccountController") SubAccountController

### Get singleton instance

The singleton instance of the ``` SubAccountController ``` class can be accessed from the API Client.

```php
$subAccount = $client->getSubAccount();
```

### <a name="create_toggle_subaccount_status"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.createToggleSubaccountStatus") createToggleSubaccountStatus

> Suspend or unsuspend


```php
function createToggleSubaccountStatus(
        $subAccountSID,
        $mActivate)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subAccountSID |  ``` Required ```  | The SubaccountSid to be activated or suspended |
| mActivate |  ``` Required ```  | 0 to suspend or 1 to activate |



#### Example Usage

```php
$subAccountSID = 'SubAccountSID';
$mActivate = int::ENUM_1;

$result = $subAccount->createToggleSubaccountStatus($subAccountSID, $mActivate);

```


### <a name="create_delete_subaccount"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.createDeleteSubaccount") createDeleteSubaccount

> Delete sub account or merge numbers into parent


```php
function createDeleteSubaccount(
        $subAccountSID,
        $mergeNumber)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subAccountSID |  ``` Required ```  | The SubaccountSid to be deleted |
| mergeNumber |  ``` Required ```  | 0 to delete or 1 to merge numbers to parent account. |



#### Example Usage

```php
$subAccountSID = 'SubAccountSID';
$mergeNumber = int::ENUM_0;

$result = $subAccount->createDeleteSubaccount($subAccountSID, $mergeNumber);

```


### <a name="create_subaccount"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.createSubaccount") createSubaccount

> Create a sub user account under the parent account


```php
function createSubaccount(
        $firstName,
        $lastName,
        $email,
        $friendlyName,
        $password)
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
$lastName = 'LastName';
$email = 'Email';
$friendlyName = 'FriendlyName';
$password = 'Password';

$result = $subAccount->createSubaccount($firstName, $lastName, $email, $friendlyName, $password);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="address_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AddressController") AddressController

### Get singleton instance

The singleton instance of the ``` AddressController ``` class can be accessed from the API Client.

```php
$address = $client->getAddress();
```

### <a name="create_delete_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.createDeleteAddress") createDeleteAddress

> To delete Address to your address book


```php
function createDeleteAddress($addressid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be deleted. |



#### Example Usage

```php
$addressid = 'addressid';

$result = $address->createDeleteAddress($addressid);

```


### <a name="create_verify_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.createVerifyAddress") createVerifyAddress

> Validates an address given.


```php
function createVerifyAddress($addressid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be verified. |



#### Example Usage

```php
$addressid = 'addressid';

$result = $address->createVerifyAddress($addressid);

```


### <a name="create_view_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.createViewAddress") createViewAddress

> View Address Specific address Book by providing the address id


```php
function createViewAddress($addressid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be retrieved. |



#### Example Usage

```php
$addressid = 'addressid';

$result = $address->createViewAddress($addressid);

```


### <a name="create_list_addresses"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.createListAddresses") createListAddresses

> List All Address 


```php
function createListAddresses(
        $page = null,
        $pagesize = null,
        $addressid = null,
        $dateCreated = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | How many results to return, default is 10, max is 100, must be an integer |
| addressid |  ``` Optional ```  | addresses Sid |
| dateCreated |  ``` Optional ```  | date created address. |



#### Example Usage

```php
$page = 91;
$pagesize = 91;
$addressid = 'addressid';
$dateCreated = 'dateCreated';

$result = $address->createListAddresses($page, $pagesize, $addressid, $dateCreated);

```


### <a name="create_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.createAddress") createAddress

> To add an address to your address book, you create a new address object. You can retrieve and delete individual addresses as well as get a list of addresses. Addresses are identified by a unique random ID.


```php
function createAddress(
        $name,
        $address,
        $country,
        $state,
        $city,
        $zip,
        $description = null,
        $email = null,
        $phone = null)
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
$address = 'Address';
$country = 'Country';
$state = 'State';
$city = 'City';
$zip = 'Zip';
$description = 'Description';
$email = 'email';
$phone = 'Phone';

$result = $address->createAddress($name, $address, $country, $state, $city, $zip, $description, $email, $phone);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="recording_controller"></a>![Class: ](https://apidocs.io/img/class.png ".RecordingController") RecordingController

### Get singleton instance

The singleton instance of the ``` RecordingController ``` class can be accessed from the API Client.

```php
$recording = $client->getRecording();
```

### <a name="create_delete_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.createDeleteRecording") createDeleteRecording

> Remove a recording from your Ytel account.


```php
function createDeleteRecording($recordingsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingsid |  ``` Required ```  | The unique identifier for a recording. |



#### Example Usage

```php
$recordingsid = 'recordingsid';

$result = $recording->createDeleteRecording($recordingsid);

```


### <a name="create_view_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.createViewRecording") createViewRecording

> Retrieve the recording of a call by its RecordingSid. This resource will return information regarding the call such as start time, end time, duration, and so forth.


```php
function createViewRecording($recordingsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingsid |  ``` Required ```  | The unique identifier for the recording. |



#### Example Usage

```php
$recordingsid = 'recordingsid';

$result = $recording->createViewRecording($recordingsid);

```


### <a name="create_list_recordings"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.createListRecordings") createListRecordings

> Retrieve a list of recording objects.


```php
function createListRecordings(
        $page = null,
        $pagesize = null,
        $datecreated = null,
        $callsid = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |
| datecreated |  ``` Optional ```  | Filter results by creation date |
| callsid |  ``` Optional ```  | The unique identifier for a call. |



#### Example Usage

```php
$page = 254;
$pagesize = 254;
$datecreated = 'Datecreated';
$callsid = 'callsid';

$result = $recording->createListRecordings($page, $pagesize, $datecreated, $callsid);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="transcription_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TranscriptionController") TranscriptionController

### Get singleton instance

The singleton instance of the ``` TranscriptionController ``` class can be accessed from the API Client.

```php
$transcription = $client->getTranscription();
```

### <a name="create_transcribe_audio_url"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createTranscribeAudioURL") createTranscribeAudioURL

> Transcribe an audio recording from a file.


```php
function createTranscribeAudioURL($audiourl)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| audiourl |  ``` Required ```  | URL pointing to the location of the audio file that is to be transcribed. |



#### Example Usage

```php
$audiourl = 'audiourl';

$result = $transcription->createTranscribeAudioURL($audiourl);

```


### <a name="create_transcribe_recording"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createTranscribeRecording") createTranscribeRecording

> Transcribe a recording by its RecordingSid.


```php
function createTranscribeRecording($recordingSid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | The unique identifier for a recording object. |



#### Example Usage

```php
$recordingSid = 'recordingSid';

$result = $transcription->createTranscribeRecording($recordingSid);

```


### <a name="create_view_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createViewTranscription") createViewTranscription

> Retrieve information about a transaction by its TranscriptionSid.


```php
function createViewTranscription($transcriptionsid)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transcriptionsid |  ``` Required ```  | The unique identifier for a transcription object. |



#### Example Usage

```php
$transcriptionsid = 'transcriptionsid';

$result = $transcription->createViewTranscription($transcriptionsid);

```


### <a name="create_list_transcriptions"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.createListTranscriptions") createListTranscriptions

> Retrieve a list of transcription objects for your Ytel account.


```php
function createListTranscriptions(
        $page = null,
        $pagesize = null,
        $status = null,
        $dateTranscribed = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |
| status |  ``` Optional ```  | The state of the transcription. |
| dateTranscribed |  ``` Optional ```  | The date the transcription took place. |



#### Example Usage

```php
$page = 254;
$pagesize = 254;
$status = string::INPROGRESS;
$dateTranscribed = 'dateTranscribed';

$result = $transcription->createListTranscriptions($page, $pagesize, $status, $dateTranscribed);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="usage_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsageController") UsageController

### Get singleton instance

The singleton instance of the ``` UsageController ``` class can be accessed from the API Client.

```php
$usage = $client->getUsage();
```

### <a name="create_list_usage"></a>![Method: ](https://apidocs.io/img/method.png ".UsageController.createListUsage") createListUsage

> Retrieve usage metrics regarding your Ytel account. The results includes inbound/outbound voice calls and inbound/outbound SMS messages as well as carrier lookup requests.


```php
function createListUsage(
        $productCode = null,
        $startDate = null,
        $endDate = null,
        $includeSubAccounts = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| productCode |  ``` Optional ```  | Filter usage results by product type. |
| startDate |  ``` Optional ```  | Filter usage objects by start date. |
| endDate |  ``` Optional ```  | Filter usage objects by end date. |
| includeSubAccounts |  ``` Optional ```  | Will include all subaccount usage data |



#### Example Usage

```php
$productCode = int::ENUM_0;
$startDate = 'startDate';
$endDate = 'endDate';
$includeSubAccounts = 'IncludeSubAccounts';

$result = $usage->createListUsage($productCode, $startDate, $endDate, $includeSubAccounts);

```


[Back to List of Controllers](#list_of_controllers)



