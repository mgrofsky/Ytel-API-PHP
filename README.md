# Getting started

message360 API version 3

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Message360-PHP)

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

The following section explains how to use the Message360 library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Message360-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Message360-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Message360-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Message360-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Message360-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Message360-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Message360-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Message360-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Message360-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Message360-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Message360-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Message360-PHP)

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

$client = new Message360Lib\Message360Client($basicAuthUserName, $basicAuthPassword);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [SharedShortCodeController](#shared_short_code_controller)
* [ConferenceController](#conference_controller)
* [TranscriptionController](#transcription_controller)
* [PhoneNumberController](#phone_number_controller)
* [UsageController](#usage_controller)
* [WebRTCController](#web_rtc_controller)
* [RecordingController](#recording_controller)
* [EmailController](#email_controller)
* [SMSController](#sms_controller)
* [CallController](#call_controller)
* [CarrierController](#carrier_controller)
* [AddressController](#address_controller)
* [SubAccountController](#sub_account_controller)
* [AccountController](#account_controller)
* [ShortCodeController](#short_code_controller)

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
| templateid |  ``` Required ```  | The unique identifier for a template object |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$templateid = uniqid();
$collect['templateid'] = $templateid;

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
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Messages sent from this number |
| to |  ``` Optional ```  | Messages sent to this number |
| datesent |  ``` Optional ```  | Only list SMS messages sent in the specified date range |



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
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | From Number to Inbound ShortCode |
| shortcode |  ``` Optional ```  | Only list messages sent to this Short Code |
| dateReceived |  ``` Optional ```  | Only list messages sent with the specified date |



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

$dateReceived = 'DateReceived';
$collect['dateReceived'] = $dateReceived;


$result = $sharedShortCode->listInboundSharedShortcodes($collect);

```


### <a name="send_shared_shortcode"></a>![Method: ](https://apidocs.io/img/method.png ".SharedShortCodeController.sendSharedShortcode") sendSharedShortcode

> Send an SMS from a message360 ShortCode


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

> Retrieve a list of keywords associated with your message360 account.


```php
function listKeyword($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| keyword |  ``` Optional ```  | Only list keywords of keyword |
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$keyword = 'Keyword';
$collect['keyword'] = $keyword;

$shortcode = 94;
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
| shortcode |  ``` Required ```  | List of valid Shortcode to your message360 account |
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

> Retrieve a list of shortcode assignment associated with your message360 account.


```php
function listAssignment($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| shortcode |  ``` Optional ```  | Only list keywords of shortcode |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

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
| shortcode |  ``` Required ```  | List of valid shortcode to your message360 account |
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

$muted = false;
$collect['muted'] = $muted;

$deaf = false;
$collect['deaf'] = $deaf;


$result = $conference->deafMuteParticipant($collect);

```


### <a name="view_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.viewParticipant") viewParticipant

> View Participant


```php
function viewParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | unique conference sid |
| participantSid |  ``` Required ```  | TODO: Add a parameter description |
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


### <a name="add_participant"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.addParticipant") addParticipant

> Add Participant in conference 


```php
function addParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferencesid |  ``` Required ```  | Unique Conference Sid |
| participantnumber |  ``` Required ```  | Particiant Number |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| muted |  ``` Optional ```  | add muted |
| deaf |  ``` Optional ```  | add without volume |



#### Example Usage

```php
$conferencesid = 'conferencesid';
$collect['conferencesid'] = $conferencesid;

$participantnumber = 'participantnumber';
$collect['participantnumber'] = $participantnumber;

$responseType = 'json';
$collect['responseType'] = $responseType;

$muted = false;
$collect['muted'] = $muted;

$deaf = false;
$collect['deaf'] = $deaf;


$result = $conference->addParticipant($collect);

```


### <a name="view_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.viewConference") viewConference

> View Conference


```php
function viewConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferencesid |  ``` Required ```  | The unique identifier of each conference resource |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$conferencesid = 'conferencesid';
$collect['conferencesid'] = $conferencesid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->viewConference($collect);

```


### <a name="create_conference"></a>![Method: ](https://apidocs.io/img/method.png ".ConferenceController.createConference") createConference

> Here you can experiment with initiating a conference call through message360 and view the request response generated when doing so.


```php
function createConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | This number to display on Caller ID as calling |
| to |  ``` Required ```  | To number |
| url |  ``` Required ```  | URL requested once the call connects |
| method |  ``` Required ```  ``` DefaultValue ```  | Specifies the HTTP method used to request the required URL once call connects. |
| recordCallbackUrl |  ``` Required ```  | Recording parameters will be sent here upon completion. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| statusCallBackUrl |  ``` Optional ```  | URL that can be requested to receive notification when call has ended. A set of default parameters will be sent here once the conference is finished. |
| statusCallBackMethod |  ``` Optional ```  | Specifies the HTTP methodlinkclass used to request StatusCallbackUrl. |
| fallBackUrl |  ``` Optional ```  | URL requested if the initial Url parameter fails or encounters an error |
| fallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| record |  ``` Optional ```  | Specifies if the conference should be recorded. |
| recordCallbackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once conference connects. |
| schdeuleTime |  ``` Optional ```  | Schedule conference in future. Schedule time must be greater than current time |
| timeout |  ``` Optional ```  | The number of seconds the call stays on the line while waiting for an answer. The max time limit is 999 and the default limit is 60 seconds but lower times can be set. |



#### Example Usage

```php
$from = 'From';
$collect['from'] = $from;

$to = 'To';
$collect['to'] = $to;

$url = 'Url';
$collect['url'] = $url;

$method = string::POST;
$collect['method'] = $method;

$recordCallbackUrl = 'RecordCallbackUrl';
$collect['recordCallbackUrl'] = $recordCallbackUrl;

$responseType = 'json';
$collect['responseType'] = $responseType;

$statusCallBackUrl = 'StatusCallBackUrl';
$collect['statusCallBackUrl'] = $statusCallBackUrl;

$statusCallBackMethod = string::GET;
$collect['statusCallBackMethod'] = $statusCallBackMethod;

$fallBackUrl = 'FallBackUrl';
$collect['fallBackUrl'] = $fallBackUrl;

$fallBackMethod = string::GET;
$collect['fallBackMethod'] = $fallBackMethod;

$record = false;
$collect['record'] = $record;

$recordCallbackMethod = string::GET;
$collect['recordCallbackMethod'] = $recordCallbackMethod;

$schdeuleTime = 'SchdeuleTime';
$collect['schdeuleTime'] = $schdeuleTime;

$timeout = 94;
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

> List Participant


```php
function listParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | unique conference sid |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response format, xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | page number |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Amount of records to return per page |
| muted |  ``` Optional ```  | Participants that are muted |
| deaf |  ``` Optional ```  | Participants cant hear |



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

> List Conference


```php
function listConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| friendlyName |  ``` Optional ```  | Only return conferences with the specified FriendlyName |
| dateCreated |  ``` Optional ```  | Conference created date |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;


$result = $conference->listConference($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="transcription_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TranscriptionController") TranscriptionController

### Get singleton instance

The singleton instance of the ``` TranscriptionController ``` class can be accessed from the API Client.

```php
$transcription = $client->getTranscription();
```

### <a name="list_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.listTranscription") listTranscription

> Get All transcriptions


```php
function listTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | page number |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Amount of data per page |
| status |  ``` Optional ```  | Transcription status |
| dateTranscribed |  ``` Optional ```  | Transcription date |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$status = string::INPROGRESS;
$collect['status'] = $status;

$dateTranscribed = 'DateTranscribed';
$collect['dateTranscribed'] = $dateTranscribed;


$result = $transcription->listTranscription($collect);

```


### <a name="view_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.viewTranscription") viewTranscription

> View Specific Transcriptions


```php
function viewTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transcriptionSid |  ``` Required ```  | Unique Transcription ID |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$transcriptionSid = 'TranscriptionSid';
$collect['transcriptionSid'] = $transcriptionSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->viewTranscription($collect);

```


### <a name="recording_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.recordingTranscription") recordingTranscription

> Recording Transcriptions


```php
function recordingTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Unique Recording sid |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$collect['recordingSid'] = $recordingSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->recordingTranscription($collect);

```


### <a name="audio_url_transcription"></a>![Method: ](https://apidocs.io/img/method.png ".TranscriptionController.audioURLTranscription") audioURLTranscription

> Audio URL Transcriptions


```php
function audioURLTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| audioUrl |  ``` Required ```  | Audio url |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$audioUrl = 'AudioUrl';
$collect['audioUrl'] = $audioUrl;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->audioURLTranscription($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="phone_number_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PhoneNumberController") PhoneNumberController

### Get singleton instance

The singleton instance of the ``` PhoneNumberController ``` class can be accessed from the API Client.

```php
$phoneNumber = $client->getPhoneNumber();
```

### <a name="available_phone_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.availablePhoneNumber") availablePhoneNumber

> Available Phone Number


```php
function availablePhoneNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| numberType |  ``` Required ```  | Number type either SMS,Voice or all |
| areaCode |  ``` Required ```  | Phone Number Area Code |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Page Size |



#### Example Usage

```php
$numberType = string::ALL;
$collect['numberType'] = $numberType;

$areaCode = 'AreaCode';
$collect['areaCode'] = $areaCode;

$responseType = 'json';
$collect['responseType'] = $responseType;

$pageSize = 10;
$collect['pageSize'] = $pageSize;


$result = $phoneNumber->availablePhoneNumber($collect);

```


### <a name="list_number"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.listNumber") listNumber

> List Account's Phone number details


```php
function listNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| numberType |  ``` Optional ```  | SMS or Voice |
| friendlyName |  ``` Optional ```  | Friendly name of the number |



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


### <a name="view_number_details"></a>![Method: ](https://apidocs.io/img/method.png ".PhoneNumberController.viewNumberDetails") viewNumberDetails

> Get Phone Number Details


```php
function viewNumberDetails($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Get Phone number Detail |
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

> Release number from account


```php
function releaseNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Phone number to be relase |
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

> Buy Phone Number 


```php
function buyNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Phone number to be purchase |
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

> Update Phone Number Details


```php
function updatePhoneNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | The phone number to update |
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
| smsFallbackUrl |  ``` Optional ```  | URL requested once the call connects |
| smsFallbackMethod |  ``` Optional ```  | URL requested if the sms URL is not available |



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


[Back to List of Controllers](#list_of_controllers)

## <a name="usage_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UsageController") UsageController

### Get singleton instance

The singleton instance of the ``` UsageController ``` class can be accessed from the API Client.

```php
$usage = $client->getUsage();
```

### <a name="list_usage"></a>![Method: ](https://apidocs.io/img/method.png ".UsageController.listUsage") listUsage

> Get all usage 


```php
function listUsage($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| productCode |  ``` Optional ```  ``` DefaultValue ```  | Product Code |
| startDate |  ``` Optional ```  ``` DefaultValue ```  | Start Usage Date |
| endDate |  ``` Optional ```  ``` DefaultValue ```  | End Usage Date |



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


$result = $usage->listUsage($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="web_rtc_controller"></a>![Class: ](https://apidocs.io/img/class.png ".WebRTCController") WebRTCController

### Get singleton instance

The singleton instance of the ``` WebRTCController ``` class can be accessed from the API Client.

```php
$webRTC = $client->getWebRTC();
```

### <a name="check_funds"></a>![Method: ](https://apidocs.io/img/method.png ".WebRTCController.checkFunds") checkFunds

> TODO: Add a method description


```php
function checkFunds($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountSid |  ``` Required ```  | Your message360 Account SID |
| authToken |  ``` Required ```  | Your message360 Token |



#### Example Usage

```php
$accountSid = 'account_sid';
$collect['accountSid'] = $accountSid;

$authToken = 'auth_token';
$collect['authToken'] = $authToken;


$result = $webRTC->checkFunds($collect);

```


### <a name="create_token"></a>![Method: ](https://apidocs.io/img/method.png ".WebRTCController.createToken") createToken

> message360 webrtc


```php
function createToken($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| accountSid |  ``` Required ```  | Your message360 Account SID |
| authToken |  ``` Required ```  | Your message360 Token |
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


[Back to List of Controllers](#list_of_controllers)

## <a name="recording_controller"></a>![Class: ](https://apidocs.io/img/class.png ".RecordingController") RecordingController

### Get singleton instance

The singleton instance of the ``` RecordingController ``` class can be accessed from the API Client.

```php
$recording = $client->getRecording();
```

### <a name="view_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.viewRecording") viewRecording

> View a specific Recording


```php
function viewRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Search Recording sid |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$collect['recordingSid'] = $recordingSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $recording->viewRecording($collect);

```


### <a name="delete_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.deleteRecording") deleteRecording

> Delete Recording Record


```php
function deleteRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Unique Recording Sid to be delete |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$collect['recordingSid'] = $recordingSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $recording->deleteRecording($collect);

```


### <a name="list_recording"></a>![Method: ](https://apidocs.io/img/method.png ".RecordingController.listRecording") listRecording

> List out Recordings


```php
function listRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| dateCreated |  ``` Optional ```  | Recording date |
| callSid |  ``` Optional ```  | Call ID |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;

$callSid = 'CallSid';
$collect['callSid'] = $callSid;


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

> Deletes a email address marked as spam from the spam list


```php
function deleteSpam($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| email |  ``` Required ```  | Email address |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$email = 'email';
$collect['email'] = $email;


$result = $email->deleteSpam($collect);

```


### <a name="delete_block"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteBlock") deleteBlock

> Deletes a blocked email


```php
function deleteBlock($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | Email address to remove from block list |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$email = 'email';
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
| email |  ``` Required ```  | The email to add to the unsubscribe list |
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

> Send out an email


```php
function sendEmail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| to |  ``` Required ```  | The to email address |
| from |  ``` Required ```  | The from email address |
| type |  ``` Required ```  ``` DefaultValue ```  | email format type, html or text |
| subject |  ``` Required ```  | Email subject |
| message |  ``` Required ```  | The body of the email message |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| cc |  ``` Optional ```  | CC Email address |
| bcc |  ``` Optional ```  | BCC Email address |
| attachment |  ``` Optional ```  | File to be attached.File must be less than 7MB. |



#### Example Usage

```php
$to = 'to';
$collect['to'] = $to;

$from = 'from';
$collect['from'] = $from;

$type = string::HTML;
$collect['type'] = $type;

$subject = 'subject';
$collect['subject'] = $subject;

$message = 'message';
$collect['message'] = $message;

$responseType = 'json';
$collect['responseType'] = $responseType;

$cc = 'cc';
$collect['cc'] = $cc;

$bcc = 'bcc';
$collect['bcc'] = $bcc;

$attachment = 'attachment';
$collect['attachment'] = $attachment;


$result = $email->sendEmail($collect);

```


### <a name="delete_unsubscribes"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteUnsubscribes") deleteUnsubscribes

> Delete emails from the unsubscribe list


```php
function deleteUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email to remove from the unsubscribe list |
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

> List all unsubscribed email addresses


```php
function listUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | Starting record of the list |
| limit |  ``` Optional ```  | Maximum number of records to be returned |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'offset';
$collect['offset'] = $offset;

$limit = 'limit';
$collect['limit'] = $limit;


$result = $email->listUnsubscribes($collect);

```


### <a name="list_invalid"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listInvalid") listInvalid

> List out all invalid email addresses


```php
function listInvalid($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offet |  ``` Optional ```  | Starting record for listing out emails |
| limit |  ``` Optional ```  | Maximum number of records to return |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offet = 'offet';
$collect['offet'] = $offet;

$limit = 'limit';
$collect['limit'] = $limit;


$result = $email->listInvalid($collect);

```


### <a name="delete_bounces"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteBounces") deleteBounces

> Delete an email address from the bounced address list


```php
function deleteBounces($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| email |  ``` Required ```  | The email address to remove from the bounce list |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$email = 'email';
$collect['email'] = $email;


$result = $email->deleteBounces($collect);

```


### <a name="list_bounces"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listBounces") listBounces

> List out all email addresses that have bounced


```php
function listBounces($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | The record to start the list at |
| limit |  ``` Optional ```  | The maximum number of records to return |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'offset';
$collect['offset'] = $offset;

$limit = 'limit';
$collect['limit'] = $limit;


$result = $email->listBounces($collect);

```


### <a name="list_spam"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listSpam") listSpam

> List out all email addresses marked as spam


```php
function listSpam($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | The record number to start the list at |
| limit |  ``` Optional ```  | Maximum number of records to return |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'offset';
$collect['offset'] = $offset;

$limit = 'limit';
$collect['limit'] = $limit;


$result = $email->listSpam($collect);

```


### <a name="list_blocks"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.listBlocks") listBlocks

> Outputs email addresses on your blocklist


```php
function listBlocks($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| offset |  ``` Optional ```  | Where to start in the output list |
| limit |  ``` Optional ```  | Maximum number of records to return |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$offset = 'offset';
$collect['offset'] = $offset;

$limit = 'limit';
$collect['limit'] = $limit;


$result = $email->listBlocks($collect);

```


### <a name="delete_invalid"></a>![Method: ](https://apidocs.io/img/method.png ".EmailController.deleteInvalid") deleteInvalid

> This endpoint allows you to delete entries in the Invalid Emails list.


```php
function deleteInvalid($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | Email that was marked invalid |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Json or xml |



#### Example Usage

```php
$email = 'email';
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

> Send an SMS from a message360 number


```php
function sendSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | SMS enabled Message360 number to send this message from |
| to |  ``` Required ```  | Number to send the SMS to |
| body |  ``` Required ```  | Text Message To Send |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once SMS sent. |
| messagestatuscallback |  ``` Optional ```  | URL that can be requested to receive notification when SMS has Sent. A set of default parameters will be sent here once the SMS is finished. |
| smartsms |  ``` Optional ```  ``` DefaultValue ```  | Check's 'to' number can receive sms or not using Carrier API, if wireless = true then text sms is sent, else wireless = false then call is recieved to end user with audible message. |



#### Example Usage

```php
$from = 'from';
$collect['from'] = $from;

$to = 'to';
$collect['to'] = $to;

$body = 'body';
$collect['body'] = $body;

$responseType = 'json';
$collect['responseType'] = $responseType;

$method = string::GET;
$collect['method'] = $method;

$messagestatuscallback = 'messagestatuscallback';
$collect['messagestatuscallback'] = $messagestatuscallback;

$smartsms = false;
$collect['smartsms'] = $smartsms;


$result = $sMS->sendSMS($collect);

```


### <a name="view_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.viewSMS") viewSMS

> View a Particular SMS


```php
function viewSMS($options)
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


$result = $sMS->viewSMS($collect);

```


### <a name="list_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.listSMS") listSMS

> List All SMS


```php
function listSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Messages sent from this number |
| to |  ``` Optional ```  | Messages sent to this number |
| datesent |  ``` Optional ```  | Only list SMS messages sent in the specified date range |



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

$to = 'to';
$collect['to'] = $to;

$datesent = 'datesent';
$collect['datesent'] = $datesent;


$result = $sMS->listSMS($collect);

```


### <a name="list_inbound_sms"></a>![Method: ](https://apidocs.io/img/method.png ".SMSController.listInboundSMS") listInboundSMS

> List All Inbound SMS


```php
function listInboundSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | From Number to Inbound SMS |
| to |  ``` Optional ```  | To Number to get Inbound SMS |
| dateSent |  ``` Optional ```  | Filter sms message objects by this date. |



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

$to = 'to';
$collect['to'] = $to;

$dateSent = 'DateSent';
$collect['dateSent'] = $dateSent;


$result = $sMS->listInboundSMS($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="call_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CallController") CallController

### Get singleton instance

The singleton instance of the ``` CallController ``` class can be accessed from the API Client.

```php
$call = $client->getCall();
```

### <a name="make_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.makeCall") makeCall

> You can experiment with initiating a call through Message360 and view the request response generated when doing so and get the response in json


```php
function makeCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | This number to display on Caller ID as calling |
| to |  ``` Required ```  | To number |
| url |  ``` Required ```  | URL requested once the call connects |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once call connects. |
| statusCallBackUrl |  ``` Optional ```  | specifies the HTTP methodlinkclass used to request StatusCallbackUrl. |
| statusCallBackMethod |  ``` Optional ```  | Specifies the HTTP methodlinkclass used to request StatusCallbackUrl. |
| fallBackUrl |  ``` Optional ```  | URL requested if the initial Url parameter fails or encounters an error |
| fallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| heartBeatUrl |  ``` Optional ```  | URL that can be requested every 60 seconds during the call to notify of elapsed tim |
| heartBeatMethod |  ``` Optional ```  | Specifies the HTTP method used to request HeartbeatUrl. |
| timeout |  ``` Optional ```  | Time (in seconds) Message360 should wait while the call is ringing before canceling the call |
| playDtmf |  ``` Optional ```  | DTMF Digits to play to the call once it connects. 0-9, #, or * |
| hideCallerId |  ``` Optional ```  | Specifies if the caller id will be hidden |
| record |  ``` Optional ```  | Specifies if the call should be recorded |
| recordCallBackUrl |  ``` Optional ```  | Recording parameters will be sent here upon completion |
| recordCallBackMethod |  ``` Optional ```  | Method used to request the RecordCallback URL. |
| transcribe |  ``` Optional ```  | Specifies if the call recording should be transcribed |
| transcribeCallBackUrl |  ``` Optional ```  | Transcription parameters will be sent here upon completion |
| ifMachine |  ``` Optional ```  | How Message360 should handle the receiving numbers voicemail machine |
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

$timeout = 186;
$collect['timeout'] = $timeout;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$hideCallerId = true;
$collect['hideCallerId'] = $hideCallerId;

$record = true;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = string::GET;
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$transcribe = true;
$collect['transcribe'] = $transcribe;

$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$collect['transcribeCallBackUrl'] = $transcribeCallBackUrl;

$ifMachine = string::CONTINUE;
$collect['ifMachine'] = $ifMachine;

$ifMachineUrl = 'IfMachineUrl';
$collect['ifMachineUrl'] = $ifMachineUrl;

$ifMachineMethod = string::GET;
$collect['ifMachineMethod'] = $ifMachineMethod;

$feedback = true;
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

$length = 144;
$collect['length'] = $length;

$direction = string::IN;
$collect['direction'] = $direction;

$mix = true;
$collect['mix'] = $mix;


$result = $call->playAudio($collect);

```


### <a name="record_call"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.recordCall") recordCall

> Record a Call


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

$record = true;
$collect['record'] = $record;

$responseType = 'json';
$collect['responseType'] = $responseType;

$direction = string::IN;
$collect['direction'] = $direction;

$timeLimit = 144;
$collect['timeLimit'] = $timeLimit;

$callBackUrl = 'CallBackUrl';
$collect['callBackUrl'] = $callBackUrl;

$fileformat = string::MP3;
$collect['fileformat'] = $fileformat;


$result = $call->recordCall($collect);

```


### <a name="voice_effect"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.voiceEffect") voiceEffect

> Voice Effect


```php
function voiceEffect($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier for the in-progress voice call. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| audioDirection |  ``` Optional ```  | The direction the audio effect should be placed on. If IN, the effects will occur on the incoming audio stream. If OUT, the effects will occur on the outgoing audio stream. |
| pitchSemiTones |  ``` Optional ```  | value between -14 and 14 |
| pitchOctaves |  ``` Optional ```  | value between -1 and 1 |
| pitch |  ``` Optional ```  | value greater than 0 |
| rate |  ``` Optional ```  | value greater than 0 |
| tempo |  ``` Optional ```  | value greater than 0 |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$responseType = 'json';
$collect['responseType'] = $responseType;

$audioDirection = string::IN;
$collect['audioDirection'] = $audioDirection;

$pitchSemiTones = 144.736672679305;
$collect['pitchSemiTones'] = $pitchSemiTones;

$pitchOctaves = 144.736672679305;
$collect['pitchOctaves'] = $pitchOctaves;

$pitch = 144.736672679305;
$collect['pitch'] = $pitch;

$rate = 144.736672679305;
$collect['rate'] = $rate;

$tempo = 144.736672679305;
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
| callSid |  ``` Required ```  | Call SId |
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
| statusCallBackUrl |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once call connects. |
| statusCallBackMethod |  ``` Optional ```  | Specifies the HTTP methodlinkclass used to request StatusCallbackUrl. |
| fallBackUrl |  ``` Optional ```  | URL requested if the initial Url parameter fails or encounters an error |
| fallBackMethod |  ``` Optional ```  | Specifies the HTTP method used to request the required FallbackUrl once call connects. |
| heartBeatUrl |  ``` Optional ```  | URL that can be requested every 60 seconds during the call to notify of elapsed tim |
| heartBeatMethod |  ``` Optional ```  | Specifies the HTTP method used to request HeartbeatUrl. |
| timeout |  ``` Optional ```  | Time (in seconds) Message360 should wait while the call is ringing before canceling the call |
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

$timeout = 144;
$collect['timeout'] = $timeout;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$hideCallerId = 'HideCallerId';
$collect['hideCallerId'] = $hideCallerId;

$record = true;
$collect['record'] = $record;

$recordCallBackUrl = 'RecordCallBackUrl';
$collect['recordCallBackUrl'] = $recordCallBackUrl;

$recordCallBackMethod = string::GET;
$collect['recordCallBackMethod'] = $recordCallBackMethod;

$transcribe = true;
$collect['transcribe'] = $transcribe;

$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$collect['transcribeCallBackUrl'] = $transcribeCallBackUrl;


$result = $call->groupCall($collect);

```


### <a name="list_calls"></a>![Method: ](https://apidocs.io/img/method.png ".CallController.listCalls") listCalls

> A list of calls associated with your Message360 account


```php
function listCalls($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| to |  ``` Optional ```  | Only list calls to this number |
| from |  ``` Optional ```  | Only list calls from this number |
| dateCreated |  ``` Optional ```  | Only list calls starting within the specified date range |



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

> API endpoint used to send a Ringless Voicemail


```php
function sendRinglessVM($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| from |  ``` Required ```  | This number to display on Caller ID as calling |
| rVMCallerId |  ``` Required ```  | Alternate caller ID required for RVM |
| to |  ``` Required ```  | To number |
| voiceMailURL |  ``` Required ```  | URL to an audio file |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| method |  ``` Optional ```  ``` DefaultValue ```  | Not currently used in this version |
| statusCallBackUrl |  ``` Optional ```  | URL to post the status of the Ringless request |
| statsCallBackMethod |  ``` Optional ```  | POST or GET |



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

> View Call Response


```php
function viewCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callsid |  ``` Required ```  | Call Sid id for particular Call |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$callsid = 'callsid';
$collect['callsid'] = $callsid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->viewCall($collect);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="carrier_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CarrierController") CarrierController

### Get singleton instance

The singleton instance of the ``` CarrierController ``` class can be accessed from the API Client.

```php
$carrier = $client->getCarrier();
```

### <a name="carrier_lookup_list"></a>![Method: ](https://apidocs.io/img/method.png ".CarrierController.carrierLookupList") carrierLookupList

> Get the All Purchase Number's Carrier lookup


```php
function carrierLookupList($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Page Number |
| pagesize |  ``` Optional ```  ``` DefaultValue ```  | Page Size |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pagesize = 10;
$collect['pagesize'] = $pagesize;


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
| phonenumber |  ``` Required ```  | The number to lookup |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$phonenumber = 'phonenumber';
$collect['phonenumber'] = $phonenumber;

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
| addressSID |  ``` Required ```  | The identifier of the address to be retrieved. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response Type either json or xml |



#### Example Usage

```php
$addressSID = 'AddressSID';
$collect['addressSID'] = $addressSID;

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
| page |  ``` Optional ```  ``` DefaultValue ```  | Return requested # of items starting the value, default=0, must be an integer |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | How many results to return, default is 10, max is 100, must be an integer |
| addressSID |  ``` Optional ```  | addresses Sid |
| dateCreated |  ``` Optional ```  | date created address. |



#### Example Usage

```php
$responseType = 'json';
$collect['responseType'] = $responseType;

$page = 1;
$collect['page'] = $page;

$pageSize = 10;
$collect['pageSize'] = $pageSize;

$addressSID = 'AddressSID';
$collect['addressSID'] = $addressSID;

$dateCreated = 'DateCreated';
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
| addressSID |  ``` Required ```  | The identifier of the address to be verified. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type either json or xml |



#### Example Usage

```php
$addressSID = 'AddressSID';
$collect['addressSID'] = $addressSID;

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
| addressSID |  ``` Required ```  | The identifier of the address to be deleted. |
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type either json or xml |



#### Example Usage

```php
$addressSID = 'AddressSID';
$collect['addressSID'] = $addressSID;

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

> Display Account Description


```php
function viewAccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| date |  ``` Required ```  | TODO: Add a parameter description |
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
| method |  ``` Optional ```  | Callback status method, POST or GET |
| messagestatuscallback |  ``` Optional ```  | Callback url for SMS status |



#### Example Usage

```php
$shortcode = 144;
$collect['shortcode'] = $shortcode;

$to = 144.736672679305;
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

> Retrive a list of inbound Sms Short Code messages associated with your message360 account.


```php
function listInboundShortcode($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response type format xml or json |
| page |  ``` Optional ```  ``` DefaultValue ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Only list SMS messages sent from this number |
| shortcode |  ``` Optional ```  | Only list SMS messages sent to Shortcode |
| dateReceived |  ``` Optional ```  | Only list SMS messages sent in the specified date MAKE REQUEST |



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

$shortcode = 'Shortcode';
$collect['shortcode'] = $shortcode;

$dateReceived = 'DateReceived';
$collect['dateReceived'] = $dateReceived;


$result = $shortCode->listInboundShortcode($collect);

```


[Back to List of Controllers](#list_of_controllers)



