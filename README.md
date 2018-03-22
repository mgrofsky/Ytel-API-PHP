# Getting started

Ytel API version 3

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Ytel-PHP)

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

The following section explains how to use the Ytel library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Ytel-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Ytel-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Ytel-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Ytel-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Ytel-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Ytel-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Ytel-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Ytel-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Ytel-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Ytel-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Ytel-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Ytel-PHP)

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

$client = new YtelLib\YtelClient($basicAuthUserName, $basicAuthPassword);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [WebRTCController](#web_rtc_controller)
* [SharedShortCodeController](#shared_short_code_controller)
* [ConferenceController](#conference_controller)
* [PhoneNumberController](#phone_number_controller)
* [TranscriptionController](#transcription_controller)
* [RecordingController](#recording_controller)
* [EmailController](#email_controller)
* [SMSController](#sms_controller)
* [CallController](#call_controller)
* [CarrierController](#carrier_controller)
* [AddressController](#address_controller)
* [SubAccountController](#sub_account_controller)
* [AccountController](#account_controller)
* [UsageController](#usage_controller)
* [ShortCodeController](#short_code_controller)
* [PostCardController](#post_card_controller)
* [LetterController](#letter_controller)
* [AreaMailController](#area_mail_controller)

## <a name="web_rtc_controller"></a>![Class: ](https://apidocs.io/img/class.png ".WebRTCController") WebRTCController

### Get singleton instance

The singleton instance of the ``` WebRTCController ``` class can be accessed from the API Client.

```php
$webRTC = $client->getWebRTC();
```

### <a name="create_token"></a>![Method: ](https://apidocs.io/img/method.png ".WebRTCController.createToken") createToken

> Ytel webrtc


```php
function createToken($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountSid |  ``` Required ```  | Your Ytel Account SID |
| authToken |  ``` Required ```  | Your Ytel Token |
| username |  ``` Required ```  | WebRTC username authentication |
| password |  ``` Required ```  | WebRTC password authentication |



#### Example Usage

```php
$accountSid = 'account_sid';
$collect['accountSid'] = $accountSid;

$authToken = 'auth_token';
$collect['authToken'] = $authToken;

$username = 'username';
$collect['username'] = $username;

$password = 'password';
$collect['password'] = $password;


$result = $webRTC->createToken($collect);

```


### <a name="check_funds"></a>![Method: ](https://apidocs.io/img/method.png ".WebRTCController.checkFunds") checkFunds

> TODO: Add a method description


```php
function checkFunds($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountSid |  ``` Required ```  | Your Ytel Account SID |
| authToken |  ``` Required ```  | Your Ytel Token |



#### Example Usage

```php
$accountSid = 'account_sid';
$collect['accountSid'] = $accountSid;

$authToken = 'auth_token';
$collect['authToken'] = $authToken;


$result = $webRTC->checkFunds($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="shared_short_code_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SharedShortCodeController") SharedShortCodeController

### Get singleton instance

The singleton instance of the ``` SharedShortCodeController ``` class can be accessed from the API Client.

```php
$sharedShortCode = $client->getSharedShortCode();
```

### <a name="view_template"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.viewTemplate") viewTemplate

> View a Shared ShortCode Template


```php
function viewTemplate($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| templateId |  ``` Required ```  | The unique identifier for a template object |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$templateId = uniqid();
$collect['templateId'] = $templateId;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sharedShortCode->viewTemplate($collect);

```


### <a name="view_shared_shortcodes"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.viewSharedShortcodes") viewSharedShortcodes

> View a ShortCode Message


```php
function viewSharedShortcodes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messagesid |  ``` Required ```  | Message sid |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$messagesid = 'messagesid';
$collect['messagesid'] = $messagesid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sharedShortCode->viewSharedShortcodes($collect);

```


### <a name="list_outbound_shared_shortcodes"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.listOutboundSharedShortcodes") listOutboundSharedShortcodes

> List ShortCode Messages


```php
function listOutboundSharedShortcodes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| shortcode |  ``` Optional ```  | Only list messages sent from this Short Code |
| to |  ``` Optional ```  | Only list messages sent to this number |
| datesent |  ``` Optional ```  | Only list SMS messages sent in the specified date range |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$to = 'to';
$collect['to'] = $to;

$datesent = 'datesent';
$collect['datesent'] = $datesent;


$result = $sharedShortCode->listOutboundSharedShortcodes($collect);

```


### <a name="list_inbound_shared_shortcodes"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.listInboundSharedShortcodes") listInboundSharedShortcodes

> List All Inbound ShortCode


```php
function listInboundSharedShortcodes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | From Number to Inbound ShortCode |
| shortcode |  ``` Optional ```  | Only list messages sent to this Short Code |
| datecreated |  ``` Optional ```  | Only list messages sent with the specified date |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $sharedShortCode->listInboundSharedShortcodes($collect);

```


### <a name="send_shared_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.sendSharedShortcode") sendSharedShortcode

> Send an SMS from a Ytel ShortCode


```php
function sendSharedShortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | The Short Code number that is the sender of this message |
| to |  ``` Required ```  | A valid 10-digit number that should receive the message |
| templateid |  ``` Required ```  | The unique identifier for the template used for the message |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$data = 'data';
$collect['data'] = $data;

$method = string::GET;
$collect['method'] = $method;

$messageStatusCallback = 'MessageStatusCallback';
$collect['messageStatusCallback'] = $messageStatusCallback;


$result = $sharedShortCode->sendSharedShortcode($collect);

```


### <a name="list_templates"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.listTemplates") listTemplates

> List Shortcode Templates by Type


```php
function listTemplates($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| type |  ``` Optional ```  ``` DefaultValue ```  | The type (category) of template Valid values: marketing, authorization |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| shortcode |  ``` Optional ```  | Only list templates of type |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$type = 'authorization';
$collect['type'] = $type;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;


$result = $sharedShortCode->listTemplates($collect);

```


### <a name="view_keyword"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.viewKeyword") viewKeyword

> View a set of properties for a single keyword.


```php
function viewKeyword($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| keywordid |  ``` Required ```  | The unique identifier of each keyword |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$keywordid = 'Keywordid';
$collect['keywordid'] = $keywordid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sharedShortCode->viewKeyword($collect);

```


### <a name="list_keyword"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.listKeyword") listKeyword

> Retrieve a list of keywords associated with your Ytel account.


```php
function listKeyword($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| keyword |  ``` Optional ```  | Only list keywords of keyword |
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$keyword = 'Keyword';
$collect['keyword'] = $keyword;

$shortcode = 213;
$collect['shortcode'] = $shortcode;


$result = $sharedShortCode->listKeyword($collect);

```


### <a name="view_assignement"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.viewAssignement") viewAssignement

> The response returned here contains all resource properties associated with the given Shortcode.


```php
function viewAssignement($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid Shortcode to your Ytel account |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sharedShortCode->viewAssignement($collect);

```


### <a name="list_assignment"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.listAssignment") listAssignment

> Retrieve a list of shortcode assignment associated with your Ytel account.


```php
function listAssignment($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;


$result = $sharedShortCode->listAssignment($collect);

```


### <a name="update_assignment"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.updateAssignment") updateAssignment

> TODO: Add a method description


```php
function updateAssignment($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid shortcode to your Ytel account |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| friendlyName |  ``` Optional ```  | User generated name of the shortcode |
| callbackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| callbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required StatusCallBackUrl once call connects. |
| fallbackUrl |  ``` Optional ```  | URL used if any errors occur during execution of InboundXML or at initial request of the required Url provided with the POST. |
| fallbackUrlMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$responseType = 'json';
$collect['responseType'] = $responseType;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$callbackUrl = 'CallbackUrl';
$collect['callbackUrl'] = $callbackUrl;

$callbackMethod = string::GET;
$collect['callbackMethod'] = $callbackMethod;

$fallbackUrl = 'FallbackUrl';
$collect['fallbackUrl'] = $fallbackUrl;

$fallbackUrlMethod = string::GET;
$collect['fallbackUrlMethod'] = $fallbackUrlMethod;


$result = $sharedShortCode->updateAssignment($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="conference_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ConferenceController") ConferenceController

### Get singleton instance

The singleton instance of the ``` ConferenceController ``` class can be accessed from the API Client.

```php
$conference = $client->getConference();
```

### <a name="deaf_mute_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.deafMuteParticipant") deafMuteParticipant

> Deaf Mute Participant


```php
function deafMuteParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | ID of the active conference |
| participantSid |  ``` Required ```  | ID of an active participant |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
| muted |  ``` Optional ```  | Mute a participant |
| deaf |  ``` Optional ```  | Make it so a participant cant hear |



#### Example Usage

```php
$conferenceSid = 'conferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;

$responseType = 'json';
$collect['responseType'] = $responseType;

$muted = true;
$collect['muted'] = $muted;

$deaf = true;
$collect['deaf'] = $deaf;


$result = $conference->deafMuteParticipant($collect);

```


### <a name="view_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.viewParticipant") viewParticipant

> Retrieve information about a participant by its ParticipantSid.


```php
function viewParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->viewParticipant($collect);

```


### <a name="view_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.viewConference") viewConference

> Retrieve information about a conference by its ConferenceSid.


```php
function viewConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier of each conference resource |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->viewConference($collect);

```


### <a name="add_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.addParticipant") addParticipant

> Add Participant in conference 


```php
function addParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantNumber |  ``` Required ```  | The phone number of the participant to be added. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| muted |  ``` Optional ```  | Specifies if participant should be muted. |
| deaf |  ``` Optional ```  | Specifies if the participant should hear audio in the conference. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantNumber = 'ParticipantNumber';
$collect['participantNumber'] = $participantNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;

$muted = true;
$collect['muted'] = $muted;

$deaf = true;
$collect['deaf'] = $deaf;


$result = $conference->addParticipant($collect);

```


### <a name="create_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConference") createConference

> Here you can experiment with initiating a conference call through Ytel and view the request response generated when doing so.


```php
function createConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | A valid 10-digit number (E.164 format) that will be initiating the conference call. |
| to |  ``` Required ```  | A valid 10-digit number (E.164 format) that is to receive the conference call. |
| url |  ``` Required ```  | URL requested once the conference connects |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$method = string::POST;
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statusCallBackMethod = string::GET;
$collect['statusCallBackMethod'] = $statusCallBackMethod;

$fallbackUrl = 'FallbackUrl';
$collect['fallbackUrl'] = $fallbackUrl;

$fallbackMethod = string::GET;
$collect['fallbackMethod'] = $fallbackMethod;

$record = false;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = string::GET;
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$scheduleTime = 'ScheduleTime';
$collect['scheduleTime'] = $scheduleTime;

$timeout = 50;
$collect['timeout'] = $timeout;


$result = $conference->createConference($collect);

```


### <a name="hangup_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.hangupParticipant") hangupParticipant

> Remove a participant from a conference.


```php
function hangupParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->hangupParticipant($collect);

```


### <a name="play_conference_audio"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.playConferenceAudio") playConferenceAudio

> Play an audio file during a conference.


```php
function playConferenceAudio($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference object. |
| participantSid |  ``` Required ```  | The unique identifier for a participant object. |
| audioUrl |  ``` Required ```  | The URL for the audio file that is to be played during the conference. Multiple audio files can be chained by using a semicolon. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;

$audioUrl = string::MP3;
$collect['audioUrl'] = $audioUrl;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->playConferenceAudio($collect);

```


### <a name="list_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.listParticipant") listParticipant

> Retrieve a list of participants for an in-progress conference.


```php
function listParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | The unique identifier for a conference. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response format, xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| muted |  ``` Optional ```  | Specifies if participant should be muted. |
| deaf |  ``` Optional ```  | Specifies if the participant should hear audio in the conference. |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$muted = false;
$collect['muted'] = $muted;

$deaf = false;
$collect['deaf'] = $deaf;


$result = $conference->listParticipant($collect);

```


### <a name="list_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.listConference") listConference

> Retrieve a list of conference objects.


```php
function listConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| friendlyName |  ``` Optional ```  | Only return conferences with the specified FriendlyName |
| dateCreated |  ``` Optional ```  | Conference created date |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $conference->listConference($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="phone_number_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PhoneNumberController") PhoneNumberController

### Get singleton instance

The singleton instance of the ``` PhoneNumberController ``` class can be accessed from the API Client.

```php
$phoneNumber = $client->getPhoneNumber();
```

### <a name="available_phone_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.availablePhoneNumber") availablePhoneNumber

> Retrieve a list of available phone numbers that can be purchased and used for your Ytel account.


```php
function availablePhoneNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| numbertype |  ``` Required ```  | Number type either SMS,Voice or all |
| areacode |  ``` Required ```  | Specifies the area code for the returned list of available numbers. Only available for North American numbers. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return. |



#### Example Usage

```php
$numbertype = string::ALL;
$collect['numbertype'] = $numbertype;

$areacode = 'areacode';
$collect['areacode'] = $areacode;

$responseType = 'json';
$collect['responseType'] = $responseType;

$pagesize = 10;
$collect['pagesize'] = $pagesize;


$result = $phoneNumber->availablePhoneNumber($collect);

```


### <a name="mass_release_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.massReleaseNumber") massReleaseNumber

> Remove a purchased Ytel number from your account.


```php
function massReleaseNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel comma separated numbers (E.164 format). |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->massReleaseNumber($collect);

```


### <a name="view_number_details"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.viewNumberDetails") viewNumberDetails

> Retrieve the details for a phone number by its number.


```php
function viewNumberDetails($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel 10-digit phone number (E.164 format). |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->viewNumberDetails($collect);

```


### <a name="release_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.releaseNumber") releaseNumber

> Remove a purchased Ytel number from your account.


```php
function releaseNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->releaseNumber($collect);

```


### <a name="buy_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.buyNumber") buyNumber

> Purchase a phone number to be used with your Ytel account


```php
function buyNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->buyNumber($collect);

```


### <a name="update_phone_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.updatePhoneNumber") updatePhoneNumber

> Update properties for a Ytel number that has been purchased for your account. Refer to the parameters list for the list of properties that can be updated.


```php
function updatePhoneNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid Ytel number (E.164 format). |
| voiceUrl |  ``` Required ```  | URL requested once the call connects |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$voiceMethod = string::GET;
$collect['voiceMethod'] = $voiceMethod;

$voiceFallbackUrl = 'VoiceFallbackUrl';
$collect['voiceFallbackUrl'] = $voiceFallbackUrl;

$voiceFallbackMethod = string::GET;
$collect['voiceFallbackMethod'] = $voiceFallbackMethod;

$hangupCallback = 'HangupCallback';
$collect['hangupCallback'] = $hangupCallback;

$hangupCallbackMethod = string::GET;
$collect['hangupCallbackMethod'] = $hangupCallbackMethod;

$heartbeatUrl = 'HeartbeatUrl';
$collect['heartbeatUrl'] = $heartbeatUrl;

$heartbeatMethod = string::GET;
$collect['heartbeatMethod'] = $heartbeatMethod;

$smsUrl = 'SmsUrl';
$collect['smsUrl'] = $smsUrl;

$smsMethod = string::GET;
$collect['smsMethod'] = $smsMethod;

$smsFallbackUrl = 'SmsFallbackUrl';
$collect['smsFallbackUrl'] = $smsFallbackUrl;

$smsFallbackMethod = string::GET;
$collect['smsFallbackMethod'] = $smsFallbackMethod;


$result = $phoneNumber->updatePhoneNumber($collect);

```


### <a name="transfer_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.transferNumber") transferNumber

> Transfer phone number that has been purchased for from one account to another account.


```php
function transferNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phonenumber |  ``` Required ```  | A valid 10-digit Ytel number (E.164 format). |
| fromaccountsid |  ``` Required ```  | A specific Accountsid from where Number is getting transfer. |
| toaccountsid |  ``` Required ```  | A specific Accountsid to which Number is getting transfer. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phonenumber = 'phonenumber';
$collect['phonenumber'] = $phonenumber;

$fromaccountsid = 'fromaccountsid';
$collect['fromaccountsid'] = $fromaccountsid;

$toaccountsid = 'toaccountsid';
$collect['toaccountsid'] = $toaccountsid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->transferNumber($collect);

```


### <a name="list_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.listNumber") listNumber

> Retrieve a list of purchased phones numbers associated with your Ytel account.


```php
function listNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| numberType |  ``` Optional ```  | The capability supported by the number.Number type either SMS,Voice or all |
| friendlyName |  ``` Optional ```  | A human-readable label added to the number object. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$numberType = string::ALL;
$collect['numberType'] = $numberType;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;


$result = $phoneNumber->listNumber($collect);

```


### <a name="mass_update_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.massUpdateNumber") massUpdateNumber

> Update properties for a Ytel numbers that has been purchased for your account. Refer to the parameters list for the list of properties that can be updated.


```php
function massUpdateNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid comma(,) separated Ytel numbers. (E.164 format). |
| voiceUrl |  ``` Required ```  | The URL returning InboundXML incoming calls should execute when connected. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$voiceMethod = string::GET;
$collect['voiceMethod'] = $voiceMethod;

$voiceFallbackUrl = 'VoiceFallbackUrl';
$collect['voiceFallbackUrl'] = $voiceFallbackUrl;

$voiceFallbackMethod = string::GET;
$collect['voiceFallbackMethod'] = $voiceFallbackMethod;

$hangupCallback = 'HangupCallback';
$collect['hangupCallback'] = $hangupCallback;

$hangupCallbackMethod = string::GET;
$collect['hangupCallbackMethod'] = $hangupCallbackMethod;

$heartbeatUrl = 'HeartbeatUrl';
$collect['heartbeatUrl'] = $heartbeatUrl;

$heartbeatMethod = string::GET;
$collect['heartbeatMethod'] = $heartbeatMethod;

$smsUrl = 'SmsUrl';
$collect['smsUrl'] = $smsUrl;

$smsMethod = string::GET;
$collect['smsMethod'] = $smsMethod;

$smsFallbackUrl = 'SmsFallbackUrl';
$collect['smsFallbackUrl'] = $smsFallbackUrl;

$smsFallbackMethod = string::GET;
$collect['smsFallbackMethod'] = $smsFallbackMethod;


$result = $phoneNumber->massUpdateNumber($collect);

```


### <a name="get_did_score_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.getDIDScoreNumber") getDIDScoreNumber

> Get DID Score Number


```php
function getDIDScoreNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phonenumber |  ``` Required ```  | Specifies the multiple phone numbers for check updated spamscore . |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phonenumber = 'Phonenumber';
$collect['phonenumber'] = $phonenumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->getDIDScoreNumber($collect);

```


### <a name="bulk_buy_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.bulkBuyNumber") bulkBuyNumber

> Purchase a selected number of DID's from specific area codes to be used with your Ytel account.


```php
function bulkBuyNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| numberType |  ``` Required ```  | The capability the number supports. |
| areaCode |  ``` Required ```  | Specifies the area code for the returned list of available numbers. Only available for North American numbers. |
| quantity |  ``` Required ```  | A positive integer that tells how many number you want to buy at a time. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| leftover |  ``` Optional ```  | If desired quantity is unavailable purchase what is available . |



#### Example Usage

```php
$numberType = string::ALL;
$collect['numberType'] = $numberType;

$areaCode = 'AreaCode';
$collect['areaCode'] = $areaCode;

$quantity = 'Quantity';
$collect['quantity'] = $quantity;

$responseType = 'json';
$collect['responseType'] = $responseType;

$leftover = 'Leftover';
$collect['leftover'] = $leftover;


$result = $phoneNumber->bulkBuyNumber($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="transcription_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TranscriptionController") TranscriptionController

### Get singleton instance

The singleton instance of the ``` TranscriptionController ``` class can be accessed from the API Client.

```php
$transcription = $client->getTranscription();
```

### <a name="view_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.viewTranscription") viewTranscription

> Retrieve information about a transaction by its TranscriptionSid.


```php
function viewTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transcriptionsid |  ``` Required ```  | The unique identifier for a transcription object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$transcriptionsid = 'transcriptionsid';
$collect['transcriptionsid'] = $transcriptionsid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->viewTranscription($collect);

```


### <a name="recording_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.recordingTranscription") recordingTranscription

> Transcribe a message360 recording by its RecordingSid.


```php
function recordingTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | The unique identifier for a recording object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$recordingSid = 'recordingSid';
$collect['recordingSid'] = $recordingSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->recordingTranscription($collect);

```


### <a name="audio_url_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.audioURLTranscription") audioURLTranscription

> Transcribe an audio recording from a file.


```php
function audioURLTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| audiourl |  ``` Required ```  | URL pointing to the location of the audio file that is to be transcribed. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$audiourl = 'audiourl';
$collect['audiourl'] = $audiourl;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->audioURLTranscription($collect);

```


### <a name="list_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.listTranscription") listTranscription

> Retrieve a list of transcription objects for your Ytel account.


```php
function listTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| status |  ``` Optional ```  | The state of the transcription. |
| dateTranscribed |  ``` Optional ```  | The date the transcription took place. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$status = string::INPROGRESS;
$collect['status'] = $status;

$dateTranscribed = 'dateTranscribed';
$collect['dateTranscribed'] = $dateTranscribed;


$result = $transcription->listTranscription($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="recording_controller"></a>![Class: ](https://apidocs.io/img/class.png ".RecordingController") RecordingController

### Get singleton instance

The singleton instance of the ``` RecordingController ``` class can be accessed from the API Client.

```php
$recording = $client->getRecording();
```

### <a name="view_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.viewRecording") viewRecording

> Retrieve the recording of a call by its RecordingSid. This resource will return information regarding the call such as start time, end time, duration, and so forth.


```php
function viewRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingsid |  ``` Required ```  | The unique identifier for the recording. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$recordingsid = 'recordingsid';
$collect['recordingsid'] = $recordingsid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $recording->viewRecording($collect);

```


### <a name="delete_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.deleteRecording") deleteRecording

> Remove a recording from your Ytel account.


```php
function deleteRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingsid |  ``` Required ```  | The unique identifier for a recording. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$recordingsid = 'recordingsid';
$collect['recordingsid'] = $recordingsid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $recording->deleteRecording($collect);

```


### <a name="list_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.listRecording") listRecording

> Retrieve a list of recording objects.


```php
function listRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| datecreated |  ``` Optional ```  | Filter results by creation date |
| callsid |  ``` Optional ```  | The unique identifier for a call. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$datecreated = 'Datecreated';
$collect['datecreated'] = $datecreated;

$callsid = 'callsid';
$collect['callsid'] = $callsid;


$result = $recording->listRecording($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="email_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EmailController") EmailController

### Get singleton instance

The singleton instance of the ``` EmailController ``` class can be accessed from the API Client.

```php
$email = $client->getEmail();
```

### <a name="delete_spam"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteSpam") deleteSpam

> Remove an email from the spam email list.


```php
function deleteSpam($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| email |  ``` Required ```  | A valid email address that is to be remove from the spam list. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$email = 'Email';
$collect['email'] = $email;


$result = $email->deleteSpam($collect);

```


### <a name="delete_block"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteBlock") deleteBlock

> Remove an email from blocked emails list.


```php
function deleteBlock($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address to be remove from the blocked list. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$email = 'Email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->deleteBlock($collect);

```


### <a name="add_unsubscribes"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.addUnsubscribes") addUnsubscribes

> Add an email to the unsubscribe list


```php
function addUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be added to the unsubscribe list |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$email = 'email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->addUnsubscribes($collect);

```


### <a name="send_email"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.sendEmail") sendEmail

> Create and submit an email message to one or more email addresses.


```php
function sendEmail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| to |  ``` Required ```  | A valid address that will receive the email. Multiple addresses can be separated by using commas. |
| type |  ``` Required ```  ``` DefaultValue ```  | Specifies the type of email to be sent |
| subject |  ``` Required ```  | The subject of the mail. Must be a valid string. |
| message |  ``` Required ```  | The email message that is to be sent in the text. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| from |  ``` Optional ```  | A valid address that will send the email. |
| cc |  ``` Optional ```  | Carbon copy. A valid address that will receive the email. Multiple addresses can be separated by using commas. |
| bcc |  ``` Optional ```  | Blind carbon copy. A valid address that will receive the email. Multiple addresses can be separated by using commas. |
| attachment |  ``` Optional ```  | A file that is attached to the email. Must be less than 7 MB in size. |



#### Example Usage

```php
$to = 'To';
$collect['to'] = $to;

$type = string::HTML;
$collect['type'] = $type;

$subject = 'Subject';
$collect['subject'] = $subject;

$message = 'Message';
$collect['message'] = $message;

$responseType = 'json';
$collect['responseType'] = $responseType;

$from = 'From';
$collect['from'] = $from;

$cc = 'Cc';
$collect['cc'] = $cc;

$bcc = 'Bcc';
$collect['bcc'] = $bcc;

$attachment = 'Attachment';
$collect['attachment'] = $attachment;


$result = $email->sendEmail($collect);

```


### <a name="delete_unsubscribes"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteUnsubscribes") deleteUnsubscribes

> Remove an email address from the list of unsubscribed emails.


```php
function deleteUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the unsubscribe list. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$email = 'email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->deleteUnsubscribes($collect);

```


### <a name="list_unsubscribes"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listUnsubscribes") listUnsubscribes

> Retrieve a list of email addresses from the unsubscribe list.


```php
function listUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | The starting point of the list of unsubscribed emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->listUnsubscribes($collect);

```


### <a name="list_invalid"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listInvalid") listInvalid

> Retrieve a list of invalid email addresses.


```php
function listInvalid($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | The starting point of the list of invalid emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->listInvalid($collect);

```


### <a name="delete_bounces"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteBounces") deleteBounces

> Remove an email address from the bounced list.


```php
function deleteBounces($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| email |  ``` Required ```  | The email address to be remove from the bounced email list. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$email = 'Email';
$collect['email'] = $email;


$result = $email->deleteBounces($collect);

```


### <a name="list_bounces"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listBounces") listBounces

> Retrieve a list of emails that have bounced.


```php
function listBounces($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | The starting point of the list of bounced emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->listBounces($collect);

```


### <a name="list_spam"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listSpam") listSpam

> Retrieve a list of emails that are on the spam list.


```php
function listSpam($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | The starting point of the list of spam emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->listSpam($collect);

```


### <a name="list_blocks"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listBlocks") listBlocks

> Retrieve a list of emails that have been blocked.


```php
function listBlocks($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | The starting point of the list of blocked emails that should be returned. |
| limit |  ``` Optional ```  | The count of results that should be returned. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'Offset';
$collect['offset'] = $offset;

$limit = 'Limit';
$collect['limit'] = $limit;


$result = $email->listBlocks($collect);

```


### <a name="delete_invalid"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteInvalid") deleteInvalid

> Remove an email from the invalid email list.


```php
function deleteInvalid($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | A valid email address that is to be remove from the invalid email list. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$email = 'Email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->deleteInvalid($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sms_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SMSController") SMSController

### Get singleton instance

The singleton instance of the ``` SMSController ``` class can be accessed from the API Client.

```php
$sMS = $client->getSMS();
```

### <a name="send_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.sendSMS") sendSMS

> Send an SMS from a Ytel number


```php
function sendSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | The 10-digit SMS-enabled Ytel number (E.164 format) in which the message is sent. |
| to |  ``` Required ```  | The 10-digit phone number (E.164 format) that will receive the message. |
| body |  ``` Required ```  | The body message that is to be sent in the text. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$method = string::GET;
$collect['method'] = $method;

$messageStatusCallback = 'MessageStatusCallback';
$collect['messageStatusCallback'] = $messageStatusCallback;

$smartsms = false;
$collect['smartsms'] = $smartsms;

$deliveryStatus = false;
$collect['deliveryStatus'] = $deliveryStatus;


$result = $sMS->sendSMS($collect);

```


### <a name="view_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.viewSMS") viewSMS

> Retrieve a single SMS message object by its SmsSid.


```php
function viewSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for a sms message. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$messageSid = 'MessageSid';
$collect['messageSid'] = $messageSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sMS->viewSMS($collect);

```


### <a name="list_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.listSMS") listSMS

> Retrieve a list of Outbound SMS message objects.


```php
function listSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Filter SMS message objects from this valid 10-digit phone number (E.164 format). |
| to |  ``` Optional ```  | Filter SMS message objects to this valid 10-digit phone number (E.164 format). |
| dateSent |  ``` Optional ```  | Only list SMS messages sent in the specified date range |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $sMS->listSMS($collect);

```


### <a name="list_inbound_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.listInboundSMS") listInboundSMS

> Retrieve a list of Inbound SMS message objects.


```php
function listInboundSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| from |  ``` Optional ```  | Filter SMS message objects from this valid 10-digit phone number (E.164 format). |
| to |  ``` Optional ```  | Filter SMS message objects to this valid 10-digit phone number (E.164 format). |
| dateSent |  ``` Optional ```  | Filter sms message objects by this date. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $sMS->listInboundSMS($collect);

```


### <a name="view_detail_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.viewDetailSMS") viewDetailSMS

> Retrieve a single SMS message object with details by its SmsSid.


```php
function viewDetailSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for a sms message. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$messageSid = 'MessageSid';
$collect['messageSid'] = $messageSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sMS->viewDetailSMS($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="call_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CallController") CallController

### Get singleton instance

The singleton instance of the ``` CallController ``` class can be accessed from the API Client.

```php
$call = $client->getCall();
```

### <a name="make_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.makeCall") makeCall

> You can experiment with initiating a call through Ytel and view the request response generated when doing so and get the response in json


```php
function makeCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | A valid Ytel Voice enabled number (E.164 format) that will be initiating the phone call. |
| to |  ``` Required ```  | To number |
| url |  ``` Required ```  | URL requested once the call connects |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$method = string::GET;
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statusCallBackMethod = string::GET;
$collect['statusCallBackMethod'] = $statusCallBackMethod;

$fallBackUrl = 'FallBackUrl';
$collect['fallBackUrl'] = $fallBackUrl;

$fallBackMethod = string::GET;
$collect['fallBackMethod'] = $fallBackMethod;

$heartBeatUrl = 'HeartBeatUrl';
$collect['heartBeatUrl'] = $heartBeatUrl;

$heartBeatMethod = string::GET;
$collect['heartBeatMethod'] = $heartBeatMethod;

$timeout = 8;
$collect['timeout'] = $timeout;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$hideCallerId = false;
$collect['hideCallerId'] = $hideCallerId;

$record = false;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = string::GET;
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$transcribe = false;
$collect['transcribe'] = $transcribe;

$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$collect['transcribeCallBackUrl'] = $transcribeCallBackUrl;

$ifMachine = string::CONTINUE;
$collect['ifMachine'] = $ifMachine;

$ifMachineUrl = 'IfMachineUrl';
$collect['ifMachineUrl'] = $ifMachineUrl;

$ifMachineMethod = string::GET;
$collect['ifMachineMethod'] = $ifMachineMethod;

$feedback = false;
$collect['feedback'] = $feedback;

$surveyId = 'SurveyId';
$collect['surveyId'] = $surveyId;


$result = $call->makeCall($collect);

```


### <a name="play_audio"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.playAudio") playAudio

> Play Dtmf and send the Digit


```php
function playAudio($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier of each call resource |
| audioUrl |  ``` Required ```  | URL to sound that should be played. You also can add more than one audio file using semicolons e.g. http://example.com/audio1.mp3;http://example.com/audio2.wav |
| sayText |  ``` Required ```  | Valid alphanumeric string that should be played to the In-progress call. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$length = 8;
$collect['length'] = $length;

$direction = string::IN;
$collect['direction'] = $direction;

$mix = false;
$collect['mix'] = $mix;


$result = $call->playAudio($collect);

```


### <a name="record_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.recordCall") recordCall

> Start or stop recording of an in-progress voice call.


```php
function recordCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier of each call resource |
| record |  ``` Required ```  | Set true to initiate recording or false to terminate recording |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response format, xml or json |
| direction |  ``` Optional ```  | The leg of the call to record |
| timeLimit |  ``` Optional ```  | Time in seconds the recording duration should not exceed |
| callBackUrl |  ``` Optional ```  | URL consulted after the recording completes |
| fileformat |  ``` Optional ```  | Format of the recording file. Can be .mp3 or .wav |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$record = false;
$collect['record'] = $record;

$responseType = 'json';
$collect['responseType'] = $responseType;

$direction = string::IN;
$collect['direction'] = $direction;

$timeLimit = 8;
$collect['timeLimit'] = $timeLimit;

$callBackUrl = 'CallBackUrl';
$collect['callBackUrl'] = $callBackUrl;

$fileformat = string::MP3;
$collect['fileformat'] = $fileformat;


$result = $call->recordCall($collect);

```


### <a name="voice_effect"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.voiceEffect") voiceEffect

> Add audio voice effects to the an in-progress voice call.


```php
function voiceEffect($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for the in-progress voice call. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$audioDirection = string::IN;
$collect['audioDirection'] = $audioDirection;

$pitchSemiTones = 8.41970279972055;
$collect['pitchSemiTones'] = $pitchSemiTones;

$pitchOctaves = 8.41970279972055;
$collect['pitchOctaves'] = $pitchOctaves;

$pitch = 8.41970279972055;
$collect['pitch'] = $pitch;

$rate = 8.41970279972055;
$collect['rate'] = $rate;

$tempo = 8.41970279972055;
$collect['tempo'] = $tempo;


$result = $call->voiceEffect($collect);

```


### <a name="send_digit"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.sendDigit") sendDigit

> Play Dtmf and send the Digit


```php
function sendDigit($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier of each call resource |
| playDtmf |  ``` Required ```  | DTMF digits to play to the call. 0-9, #, *, W, or w |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| playDtmfDirection |  ``` Optional ```  | The leg of the call DTMF digits should be sent to |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$responseType = 'json';
$collect['responseType'] = $responseType;

$playDtmfDirection = string::IN;
$collect['playDtmfDirection'] = $playDtmfDirection;


$result = $call->sendDigit($collect);

```


### <a name="interrupted_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.interruptedCall") interruptedCall

> Interrupt the Call by Call Sid


```php
function interruptedCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for voice call that is in progress. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| url |  ``` Optional ```  | URL the in-progress call will be redirected to |
| method |  ``` Optional ```  | The method used to request the above Url parameter |
| status |  ``` Optional ```  | Status to set the in-progress call to |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$responseType = 'json';
$collect['responseType'] = $responseType;

$url = 'Url';
$collect['url'] = $url;

$method = string::GET;
$collect['method'] = $method;

$status = string::CANCELED;
$collect['status'] = $status;


$result = $call->interruptedCall($collect);

```


### <a name="list_calls"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.listCalls") listCalls

> A list of calls associated with your Ytel account


```php
function listCalls($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| to |  ``` Optional ```  | Filter calls that were sent to this 10-digit number (E.164 format). |
| from |  ``` Optional ```  | Filter calls that were sent from this 10-digit number (E.164 format). |
| dateCreated |  ``` Optional ```  | Return calls that are from a specified date. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $call->listCalls($collect);

```


### <a name="send_ringless_vm"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.sendRinglessVM") sendRinglessVM

> Initiate an outbound Ringless Voicemail through Ytel.


```php
function sendRinglessVM($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | A valid Ytel Voice enabled number (E.164 format) that will be initiating the phone call. |
| rVMCallerId |  ``` Required ```  | A required secondary Caller ID for RVM to work. |
| to |  ``` Required ```  | A valid number (E.164 format) that will receive the phone call. |
| voiceMailURL |  ``` Required ```  | The URL requested once the RVM connects. A set of default parameters will be sent here. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$method = string::GET;
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statsCallBackMethod = string::GET;
$collect['statsCallBackMethod'] = $statsCallBackMethod;


$result = $call->sendRinglessVM($collect);

```


### <a name="view_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.viewCall") viewCall

> Retrieve a single voice call’s information by its CallSid.


```php
function viewCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callsid |  ``` Required ```  | The unique identifier for the voice call. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$callsid = 'callsid';
$collect['callsid'] = $callsid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->viewCall($collect);

```


### <a name="view_call_detail"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.viewCallDetail") viewCallDetail

> Retrieve a single voice call’s information by its CallSid.


```php
function viewCallDetail(
        $callSid,
        $responseType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for the voice call. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$callSid = 'callSid';
$responseType = 'json';

$result = $call->viewCallDetail($callSid, $responseType);

```


### <a name="group_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.groupCall") groupCall

> Group Call


```php
function groupCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | This number to display on Caller ID as calling |
| to |  ``` Required ```  | Please enter multiple E164 number. You can add max 10 numbers. Add numbers separated with comma. e.g : 1111111111,2222222222 |
| url |  ``` Required ```  | URL requested once the call connects |
| responseType |  ``` Required ```  ``` DefaultValue ```  | TODO: Add a parameter description |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$groupConfirmKey = 'GroupConfirmKey';
$collect['groupConfirmKey'] = $groupConfirmKey;

$groupConfirmFile = string::MP3;
$collect['groupConfirmFile'] = $groupConfirmFile;

$method = string::GET;
$collect['method'] = $method;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statusCallBackMethod = string::GET;
$collect['statusCallBackMethod'] = $statusCallBackMethod;

$fallBackUrl = 'FallBackUrl';
$collect['fallBackUrl'] = $fallBackUrl;

$fallBackMethod = string::GET;
$collect['fallBackMethod'] = $fallBackMethod;

$heartBeatUrl = 'HeartBeatUrl';
$collect['heartBeatUrl'] = $heartBeatUrl;

$heartBeatMethod = string::GET;
$collect['heartBeatMethod'] = $heartBeatMethod;

$timeout = 99;
$collect['timeout'] = $timeout;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$hideCallerId = 'HideCallerId';
$collect['hideCallerId'] = $hideCallerId;

$record = false;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = string::GET;
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$transcribe = false;
$collect['transcribe'] = $transcribe;

$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$collect['transcribeCallBackUrl'] = $transcribeCallBackUrl;


$result = $call->groupCall($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="carrier_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CarrierController") CarrierController

### Get singleton instance

The singleton instance of the ``` CarrierController ``` class can be accessed from the API Client.

```php
$carrier = $client->getCarrier();
```

### <a name="carrier_lookup_list"></a>![Method: ](https://apidocs.io/img/method.png ".CarrierController.carrierLookupList") carrierLookupList

> Retrieve a list of carrier lookup objects.


```php
function carrierLookupList($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;


$result = $carrier->carrierLookupList($collect);

```


### <a name="carrier_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".CarrierController.carrierLookup") carrierLookup

> Get the Carrier Lookup


```php
function carrierLookup($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | A valid 10-digit number (E.164 format). |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $carrier->carrierLookup($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="address_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AddressController") AddressController

### Get singleton instance

The singleton instance of the ``` AddressController ``` class can be accessed from the API Client.

```php
$address = $client->getAddress();
```

### <a name="create_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.createAddress") createAddress

> To add an address to your address book, you create a new address object. You can retrieve and delete individual addresses as well as get a list of addresses. Addresses are identified by a unique random ID.


```php
function createAddress($options)
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
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type either json or xml |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$description = 'Description';
$collect['description'] = $description;

$email = 'email';
$collect['email'] = $email;

$phone = 'Phone';
$collect['phone'] = $phone;


$result = $address->createAddress($collect);

```


### <a name="view_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.viewAddress") viewAddress

> View Address Specific address Book by providing the address id


```php
function viewAddress($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be retrieved. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$addressid = 'addressid';
$collect['addressid'] = $addressid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $address->viewAddress($collect);

```


### <a name="list_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.listAddress") listAddress

> List All Address 


```php
function listAddress($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | How many results to return, default is 10, max is 100, must be an integer |
| addressid |  ``` Optional ```  | addresses Sid |
| dateCreated |  ``` Optional ```  | date created address. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$addressid = 'addressid';
$collect['addressid'] = $addressid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $address->listAddress($collect);

```


### <a name="verify_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.verifyAddress") verifyAddress

> Validates an address given.


```php
function verifyAddress($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be verified. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type either json or xml |



#### Example Usage

```php
$addressid = 'addressid';
$collect['addressid'] = $addressid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $address->verifyAddress($collect);

```


### <a name="delete_address"></a>![Method: ](https://apidocs.io/img/method.png ".AddressController.deleteAddress") deleteAddress

> To delete Address to your address book


```php
function deleteAddress($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressid |  ``` Required ```  | The identifier of the address to be deleted. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type either json or xml |



#### Example Usage

```php
$addressid = 'addressid';
$collect['addressid'] = $addressid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $address->deleteAddress($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="sub_account_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SubAccountController") SubAccountController

### Get singleton instance

The singleton instance of the ``` SubAccountController ``` class can be accessed from the API Client.

```php
$subAccount = $client->getSubAccount();
```

### <a name="delete_sub_account"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.deleteSubAccount") deleteSubAccount

> Delete sub account or merge numbers into parent


```php
function deleteSubAccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subAccountSID |  ``` Required ```  | The SubaccountSid to be deleted |
| mergeNumber |  ``` Required ```  ``` DefaultValue ```  | 0 to delete or 1 to merge numbers to parent account. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$subAccountSID = 'SubAccountSID';
$collect['subAccountSID'] = $subAccountSID;

$mergeNumber = int::DELETE;
$collect['mergeNumber'] = $mergeNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $subAccount->deleteSubAccount($collect);

```


### <a name="suspend_sub_account"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.suspendSubAccount") suspendSubAccount

> Suspend or unsuspend


```php
function suspendSubAccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subAccountSID |  ``` Required ```  | The SubaccountSid to be activated or suspended |
| activate |  ``` Required ```  ``` DefaultValue ```  | 0 to suspend or 1 to activate |
| responseType |  ``` Required ```  ``` DefaultValue ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subAccountSID = 'SubAccountSID';
$collect['subAccountSID'] = $subAccountSID;

$activate = int::DEACTIVATE;
$collect['activate'] = $activate;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $subAccount->suspendSubAccount($collect);

```


### <a name="create_sub_account"></a>![Method: ](https://apidocs.io/img/method.png ".SubAccountController.createSubAccount") createSubAccount

> Create a sub user account under the parent account


```php
function createSubAccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| firstName |  ``` Required ```  | Sub account user first name |
| lastName |  ``` Required ```  | sub account user last name |
| email |  ``` Required ```  | Sub account email address |
| friendlyName |  ``` Required ```  | Descriptive name of the sub account |
| password |  ``` Required ```  | The password of the sub account.  Please make sure to make as password that is at least 8 characters long, contain a symbol, uppercase and a number. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



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

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $subAccount->createSubAccount($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="account_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AccountController") AccountController

### Get singleton instance

The singleton instance of the ``` AccountController ``` class can be accessed from the API Client.

```php
$account = $client->getAccount();
```

### <a name="view_account"></a>![Method: ](https://apidocs.io/img/method.png ".AccountController.viewAccount") viewAccount

> Retrieve information regarding your Ytel account by a specific date. The response object will contain data such as account status, balance, and account usage totals.


```php
function viewAccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| date |  ``` Required ```  | Filter account information based on date. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$date = 'Date';
$collect['date'] = $date;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $account->viewAccount($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="usage_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsageController") UsageController

### Get singleton instance

The singleton instance of the ``` UsageController ``` class can be accessed from the API Client.

```php
$usage = $client->getUsage();
```

### <a name="list_usage"></a>![Method: ](https://apidocs.io/img/method.png ".UsageController.listUsage") listUsage

> Retrieve usage metrics regarding your Ytel account. The results includes inbound/outbound voice calls and inbound/outbound SMS messages as well as carrier lookup requests.


```php
function listUsage($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| productCode |  ``` Optional ```  ``` DefaultValue ```  | Filter usage results by product type. |
| startDate |  ``` Optional ```  ``` DefaultValue ```  | Filter usage objects by start date. |
| endDate |  ``` Optional ```  ``` DefaultValue ```  | Filter usage objects by end date. |
| includeSubAccounts |  ``` Optional ```  | Will include all subaccount usage data |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$productCode = int::ALL;
$collect['productCode'] = $productCode;

$startDate = '2016-09-06';
$collect['startDate'] = $startDate;

$endDate = '2016-09-06';
$collect['endDate'] = $endDate;

$includeSubAccounts = 'IncludeSubAccounts';
$collect['includeSubAccounts'] = $includeSubAccounts;


$result = $usage->listUsage($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="short_code_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ShortCodeController") ShortCodeController

### Get singleton instance

The singleton instance of the ``` ShortCodeController ``` class can be accessed from the API Client.

```php
$shortCode = $client->getShortCode();
```

### <a name="send_dedicated_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.sendDedicatedShortcode") sendDedicatedShortcode

> TODO: Add a method description


```php
function sendDedicatedShortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | Your dedicated shortcode |
| to |  ``` Required ```  | The number to send your SMS to |
| body |  ``` Required ```  | The body of your message |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once the Short Code message is sent.GET or POST |
| messagestatuscallback |  ``` Optional ```  | URL that can be requested to receive notification when Short Code message was sent. |



#### Example Usage

```php
$shortcode = 191;
$collect['shortcode'] = $shortcode;

$to = 191.410266583045;
$collect['to'] = $to;

$body = 'body';
$collect['body'] = $body;

$responseType = 'json';
$collect['responseType'] = $responseType;

$method = string::GET;
$collect['method'] = $method;

$messagestatuscallback = 'messagestatuscallback';
$collect['messagestatuscallback'] = $messagestatuscallback;


$result = $shortCode->sendDedicatedShortcode($collect);

```


### <a name="view_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.viewShortcode") viewShortcode

> View a single Sms Short Code message.


```php
function viewShortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messageSid |  ``` Required ```  | The unique identifier for the sms resource |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$messageSid = 'MessageSid';
$collect['messageSid'] = $messageSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $shortCode->viewShortcode($collect);

```


### <a name="list_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.listShortcode") listShortcode

> Retrieve a list of Short Code message objects.


```php
function listShortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| shortcode |  ``` Optional ```  | Only list messages sent from this Short Code |
| to |  ``` Optional ```  | Only list messages sent to this number |
| dateSent |  ``` Optional ```  | Only list messages sent with the specified date |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $shortCode->listShortcode($collect);

```


### <a name="list_inbound_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.listInboundShortcode") listInboundShortcode

> Retrive a list of inbound Sms Short Code messages associated with your Ytel account.


```php
function listInboundShortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Only list SMS messages sent from this number |
| shortcode |  ``` Optional ```  | Only list SMS messages sent to Shortcode |
| datecreated |  ``` Optional ```  | Only list SMS messages sent in the specified date MAKE REQUEST |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $shortCode->listInboundShortcode($collect);

```


### <a name="view_dedicated_shortcode_assignment"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.viewDedicatedShortcodeAssignment") viewDedicatedShortcodeAssignment

> Retrieve a single Short Code object by its shortcode assignment.


```php
function viewDedicatedShortcodeAssignment($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid Dedicated Short Code to your Ytel account |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $shortCode->viewDedicatedShortcodeAssignment($collect);

```


### <a name="update_dedicated_short_code_assignment"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.updateDedicatedShortCodeAssignment") updateDedicatedShortCodeAssignment

> Update a dedicated shortcode.


```php
function updateDedicatedShortCodeAssignment($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| shortcode |  ``` Required ```  | List of valid dedicated shortcode to your Ytel account. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| friendlyName |  ``` Optional ```  | User generated name of the dedicated shortcode. |
| callbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required StatusCallBackUrl once call connects. |
| callbackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the call is finished. |
| fallbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| fallbackUrl |  ``` Optional ```  | URL used if any errors occur during execution of InboundXML or at initial request of the required Url provided with the POST. |



#### Example Usage

```php
$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $shortCode->updateDedicatedShortCodeAssignment($collect);

```


### <a name="list_short_code_assignment"></a>![Method: ](https://apidocs.io/img/method.png ".ShortCodeController.listShortCodeAssignment") listShortCodeAssignment

> Retrieve a list of Short Code assignment associated with your Ytel account.


```php
function listShortCodeAssignment($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| shortcode |  ``` Optional ```  | Only list Short Code Assignment sent from this Short Code |
| page |  ``` Optional ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  | The count of objects to return per page. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$page = 'page';
$collect['page'] = $page;

$pagesize = 'pagesize';
$collect['pagesize'] = $pagesize;


$result = $shortCode->listShortCodeAssignment($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="post_card_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PostCardController") PostCardController

### Get singleton instance

The singleton instance of the ``` PostCardController ``` class can be accessed from the API Client.

```php
$postCard = $client->getPostCard();
```

### <a name="view_postcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.viewPostcard") viewPostcard

> Retrieve a postcard object by its PostcardId.


```php
function viewPostcard($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| postcardid |  ``` Required ```  | The unique identifier for a postcard object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$postcardid = 'postcardid';
$collect['postcardid'] = $postcardid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $postCard->viewPostcard($collect);

```


### <a name="create_postcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.createPostcard") createPostcard

> Create, print, and mail a postcard to an address. The postcard front must be supplied as a PDF, image, or an HTML string. The back can be a PDF, image, HTML string, or it can be automatically generated by supplying a custom message.


```php
function createPostcard($options)
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
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$description = 'description';
$collect['description'] = $description;

$htmldata = 'htmldata';
$collect['htmldata'] = $htmldata;


$result = $postCard->createPostcard($collect);

```


### <a name="list_postcards"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.listPostcards") listPostcards

> Retrieve a list of postcard objects. The postcards objects are sorted by creation date, with the most recently created postcards appearing first.


```php
function listPostcards($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| postcardid |  ``` Optional ```  | The unique identifier for a postcard object. |
| dateCreated |  ``` Optional ```  | The date the postcard was created. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$postcardid = 'postcardid';
$collect['postcardid'] = $postcardid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $postCard->listPostcards($collect);

```


### <a name="delete_postcard"></a>![Method: ](https://apidocs.io/img/method.png ".PostCardController.deletePostcard") deletePostcard

> Remove a postcard object.


```php
function deletePostcard($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| postcardid |  ``` Required ```  | The unique identifier of a postcard object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$postcardid = 'postcardid';
$collect['postcardid'] = $postcardid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $postCard->deletePostcard($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="letter_controller"></a>![Class: ](https://apidocs.io/img/class.png ".LetterController") LetterController

### Get singleton instance

The singleton instance of the ``` LetterController ``` class can be accessed from the API Client.

```php
$letter = $client->getLetter();
```

### <a name="view_letter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.viewLetter") viewLetter

> Retrieve a letter object by its LetterSid.


```php
function viewLetter($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| lettersid |  ``` Required ```  | The unique identifier for a letter object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$lettersid = 'lettersid';
$collect['lettersid'] = $lettersid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $letter->viewLetter($collect);

```


### <a name="create_letter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.createLetter") createLetter

> Create, print, and mail a letter to an address. The letter file must be supplied as a PDF or an HTML string.


```php
function createLetter($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| to |  ``` Required ```  | The AddressId or an object structured when creating an address by addresses/Create. |
| from |  ``` Required ```  | The AddressId or an object structured when creating an address by addresses/Create. |
| attachbyid |  ``` Required ```  | Set an existing letter by attaching its LetterId. |
| file |  ``` Required ```  | File can be a 8.5"x11" PDF uploaded file or URL that links to a file. |
| color |  ``` Required ```  | Specify if letter should be printed in color. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

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


$result = $letter->createLetter($collect);

```


### <a name="list_letters"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.listLetters") listLetters

> Retrieve a list of letter objects. The letter objects are sorted by creation date, with the most recently created letters appearing first.


```php
function listLetters($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| lettersid |  ``` Optional ```  | The unique identifier for a letter object. |
| dateCreated |  ``` Optional ```  | The date the letter was created. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$lettersid = 'lettersid';
$collect['lettersid'] = $lettersid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $letter->listLetters($collect);

```


### <a name="delete_letter"></a>![Method: ](https://apidocs.io/img/method.png ".LetterController.deleteLetter") deleteLetter

> Remove a letter object by its LetterId.


```php
function deleteLetter($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| lettersid |  ``` Required ```  | The unique identifier for a letter object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$lettersid = 'lettersid';
$collect['lettersid'] = $lettersid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $letter->deleteLetter($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="area_mail_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AreaMailController") AreaMailController

### Get singleton instance

The singleton instance of the ``` AreaMailController ``` class can be accessed from the API Client.

```php
$areaMail = $client->getAreaMail();
```

### <a name="create_area_mail"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.createAreaMail") createAreaMail

> Create a new AreaMail object.


```php
function createAreaMail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| routes |  ``` Required ```  | List of routes that AreaMail should be delivered to.  A single route can be either a zipcode or a carrier route.List of routes that AreaMail should be delivered to.  A single route can be either a zipcode or a carrier route. A carrier route is in the form of 92610-C043 where the carrier route is composed of 5 numbers for zipcode, 1 letter for carrier route type, and 3 numbers for carrier route code. Delivery can be sent to mutliple routes by separating them with a commas. Valid Values: 92656, 92610-C043 |
| attachbyid |  ``` Required ```  | Set an existing areamail by attaching its AreamailId. |
| front |  ``` Required ```  | The front of the AreaMail item to be created. This can be a URL, local file, or an HTML string. Supported file types are PDF, PNG, and JPEG. Back required |
| back |  ``` Required ```  | The back of the AreaMail item to be created. This can be a URL, local file, or an HTML string. Supported file types are PDF, PNG, and JPEG. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
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

$responseType = 'json';
$collect['responseType'] = $responseType;

$description = 'description';
$collect['description'] = $description;

$targettype = 'targettype';
$collect['targettype'] = $targettype;

$htmldata = 'htmldata';
$collect['htmldata'] = $htmldata;


$result = $areaMail->createAreaMail($collect);

```


### <a name="view_area_mail"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.viewAreaMail") viewAreaMail

> Retrieve an AreaMail object by its AreaMailId.


```php
function viewAreaMail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| areamailid |  ``` Required ```  | The unique identifier for an AreaMail object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$areamailid = 'areamailid';
$collect['areamailid'] = $areamailid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $areaMail->viewAreaMail($collect);

```


### <a name="list_area_mail"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.listAreaMail") listAreaMail

> Retrieve a list of AreaMail objects.


```php
function listAreaMail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |
| page |  ``` Optional ```  ``` DefaultValue ```  | The page count to retrieve from the total results in the collection. Page indexing starts at 1. |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | The count of objects to return per page. |
| areamailsid |  ``` Optional ```  | The unique identifier for an AreaMail object. |
| dateCreated |  ``` Optional ```  | The date the AreaMail was created. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;

$areamailsid = 'areamailsid';
$collect['areamailsid'] = $areamailsid;

$dateCreated = 'dateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $areaMail->listAreaMail($collect);

```


### <a name="delete_area_mail"></a>![Method: ](https://apidocs.io/img/method.png ".AreaMailController.deleteAreaMail") deleteAreaMail

> Remove an AreaMail object by its AreaMailId.


```php
function deleteAreaMail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| areamailid |  ``` Required ```  | The unique identifier for an AreaMail object. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$areamailid = 'areamailid';
$collect['areamailid'] = $areamailid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $areaMail->deleteAreaMail($collect);

```


[Back to List of Controllers](#list_of_controllers)



