#Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](http://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Message360-PHP)

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

![Open project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Message360-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Message360-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Message360-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Message360-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](http://apidocs.io/illustration/php?step=createFile&workspaceFolder=Message360-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Message360-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Message360-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](http://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Message360-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](http://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Message360-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](http://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Message360-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](http://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Message360-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](http://apidocs.io/illustration/php?step=runProject&workspaceFolder=Message360-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication and 
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$basicAuthUserName = "basicAuthUserName"; // The username to use with basic authentication
$basicAuthPassword = "basicAuthPassword"; // The password to use with basic authentication

$client = new Message360Client($basicAuthUserName, $basicAuthPassword);
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [ConferenceController](#conference_controller)
* [TranscriptionController](#transcription_controller)
* [PhoneNumberController](#phone_number_controller)
* [UsageController](#usage_controller)
* [WebRTCController](#web_rtc_controller)
* [RecordingController](#recording_controller)
* [EmailController](#email_controller)
* [SMSController](#sms_controller)
* [AccountController](#account_controller)
* [CallController](#call_controller)
* [CarrierController](#carrier_controller)

### <a name="conference_controller"></a>![Class: ](http://apidocs.io/img/class.png ".ConferenceController") ConferenceController

#### Get singleton instance

The singleton instance of the ``` ConferenceController ``` class can be accessed from the API Client.

```php
$conference = $client->getConference();
```

#### <a name="create_view_participant"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.createViewParticipant") createViewParticipant

> View Participant


```php
function createViewParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | unique conference sid |
| participantSid |  ``` Required ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$participantSid = 'ParticipantSid';
$collect['participantSid'] = $participantSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->createViewParticipant($collect);

```


#### <a name="create_list_participant"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.createListParticipant") createListParticipant

> List Participant


```php
function createListParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferenceSid |  ``` Required ```  | unique conference sid |
| page |  ``` Optional ```  | page number |
| pagesize |  ``` Optional ```  | TODO: Add a parameter description |
| muted |  ``` Optional ```  | TODO: Add a parameter description |
| deaf |  ``` Optional ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$conferenceSid = 'ConferenceSid';
$collect['conferenceSid'] = $conferenceSid;

$page = 13;
$collect['page'] = $page;

$pagesize = 13;
$collect['pagesize'] = $pagesize;

$muted = false;
$collect['muted'] = $muted;

$deaf = false;
$collect['deaf'] = $deaf;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->createListParticipant($collect);

```


#### <a name="add_participant"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.addParticipant") addParticipant

> Add Participant in conference 


```php
function addParticipant($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferencesid |  ``` Required ```  | Unique Conference Sid |
| participantnumber |  ``` Required ```  | Particiant Number |
| tocountrycode |  ``` Required ```  | TODO: Add a parameter description |
| muted |  ``` Optional ```  | TODO: Add a parameter description |
| deaf |  ``` Optional ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$conferencesid = 'conferencesid';
$collect['conferencesid'] = $conferencesid;

$participantnumber = 'participantnumber';
$collect['participantnumber'] = $participantnumber;

$tocountrycode = 13;
$collect['tocountrycode'] = $tocountrycode;

$muted = false;
$collect['muted'] = $muted;

$deaf = false;
$collect['deaf'] = $deaf;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->addParticipant($collect);

```


#### <a name="create_view_conference"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.createViewConference") createViewConference

> View Conference


```php
function createViewConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferencesid |  ``` Required ```  | The unique identifier of each conference resource |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$conferencesid = 'conferencesid';
$collect['conferencesid'] = $conferencesid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->createViewConference($collect);

```


#### <a name="create_list_conference"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.createListConference") createListConference

> List Conference


```php
function createListConference($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| friendlyName |  ``` Optional ```  | Only return conferences with the specified FriendlyName |
| status |  ``` Optional ```  | TODO: Add a parameter description |
| dateCreated |  ``` Optional ```  | TODO: Add a parameter description |
| dateUpdated |  ``` Optional ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 13;
$collect['page'] = $page;

$pageSize = 13;
$collect['pageSize'] = $pageSize;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$status = string::CANCELED;
$collect['status'] = $status;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;

$dateUpdated = 'DateUpdated';
$collect['dateUpdated'] = $dateUpdated;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $conference->createListConference($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="transcription_controller"></a>![Class: ](http://apidocs.io/img/class.png ".TranscriptionController") TranscriptionController

#### Get singleton instance

The singleton instance of the ``` TranscriptionController ``` class can be accessed from the API Client.

```php
$transcription = $client->getTranscription();
```

#### <a name="create_list_transcription"></a>![Method: ](http://apidocs.io/img/method.png ".TranscriptionController.createListTranscription") createListTranscription

> Get All transcriptions


```php
function createListTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | TODO: Add a parameter description |
| pageSize |  ``` Optional ```  | TODO: Add a parameter description |
| status |  ``` Optional ```  | TODO: Add a parameter description |
| dateTranscribed |  ``` Optional ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 13;
$collect['page'] = $page;

$pageSize = 13;
$collect['pageSize'] = $pageSize;

$status = string::INPROGRESS;
$collect['status'] = $status;

$dateTranscribed = 'DateTranscribed';
$collect['dateTranscribed'] = $dateTranscribed;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->createListTranscription($collect);

```


#### <a name="create_view_transcription"></a>![Method: ](http://apidocs.io/img/method.png ".TranscriptionController.createViewTranscription") createViewTranscription

> View Specific Transcriptions


```php
function createViewTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transcriptionSid |  ``` Required ```  | Unique Transcription ID |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$transcriptionSid = 'TranscriptionSid';
$collect['transcriptionSid'] = $transcriptionSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->createViewTranscription($collect);

```


#### <a name="create_recording_transcription"></a>![Method: ](http://apidocs.io/img/method.png ".TranscriptionController.createRecordingTranscription") createRecordingTranscription

> Recording Transcriptions


```php
function createRecordingTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Unique Recording sid |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$collect['recordingSid'] = $recordingSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->createRecordingTranscription($collect);

```


#### <a name="create_audio_url_transcription"></a>![Method: ](http://apidocs.io/img/method.png ".TranscriptionController.createAudioURLTranscription") createAudioURLTranscription

> Audio URL Transcriptions


```php
function createAudioURLTranscription($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| audioUrl |  ``` Required ```  | Audio url |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$audioUrl = 'AudioUrl';
$collect['audioUrl'] = $audioUrl;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $transcription->createAudioURLTranscription($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="phone_number_controller"></a>![Class: ](http://apidocs.io/img/class.png ".PhoneNumberController") PhoneNumberController

#### Get singleton instance

The singleton instance of the ``` PhoneNumberController ``` class can be accessed from the API Client.

```php
$phoneNumber = $client->getPhoneNumber();
```

#### <a name="create_available_phone_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createAvailablePhoneNumber") createAvailablePhoneNumber

> Available Phone Number


```php
function createAvailablePhoneNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| numberType |  ``` Required ```  | Number type either SMS,Voice or all |
| areaCode |  ``` Required ```  | Phone Number Area Code |
| pageSize |  ``` Optional ```  | Page Size |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$numberType = 'NumberType';
$collect['numberType'] = $numberType;

$areaCode = 'AreaCode';
$collect['areaCode'] = $areaCode;

$pageSize = 13;
$collect['pageSize'] = $pageSize;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->createAvailablePhoneNumber($collect);

```


#### <a name="create_list_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createListNumber") createListNumber

> List Account's Phone number details


```php
function createListNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| numberType |  ``` Optional ```  | TODO: Add a parameter description |
| friendlyName |  ``` Optional ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 13;
$collect['page'] = $page;

$pageSize = 13;
$collect['pageSize'] = $pageSize;

$numberType = 'NumberType';
$collect['numberType'] = $numberType;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->createListNumber($collect);

```


#### <a name="create_view_number_details"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createViewNumberDetails") createViewNumberDetails

> Get Phone Number Details


```php
function createViewNumberDetails($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Get Phone number Detail |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->createViewNumberDetails($collect);

```


#### <a name="create_release_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createReleaseNumber") createReleaseNumber

> Release number from account


```php
function createReleaseNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Phone number to be relase |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->createReleaseNumber($collect);

```


#### <a name="create_buy_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createBuyNumber") createBuyNumber

> Buy Phone Number 


```php
function createBuyNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Phone number to be purchase |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->createBuyNumber($collect);

```


#### <a name="update_phone_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.updatePhoneNumber") updatePhoneNumber

> Update Phone Number Details


```php
function updatePhoneNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | TODO: Add a parameter description |
| friendlyName |  ``` Optional ```  | TODO: Add a parameter description |
| voiceUrl |  ``` Optional ```  | URL requested once the call connects |
| voiceMethod |  ``` Optional ```  | TODO: Add a parameter description |
| voiceFallbackUrl |  ``` Optional ```  | URL requested if the voice URL is not available |
| voiceFallbackMethod |  ``` Optional ```  | TODO: Add a parameter description |
| hangupCallback |  ``` Optional ```  | TODO: Add a parameter description |
| hangupCallbackMethod |  ``` Optional ```  | TODO: Add a parameter description |
| heartbeatUrl |  ``` Optional ```  | URL requested once the call connects |
| heartbeatMethod |  ``` Optional ```  | URL that can be requested every 60 seconds during the call to notify of elapsed time |
| smsUrl |  ``` Optional ```  | URL requested when an SMS is received |
| smsMethod |  ``` Optional ```  | TODO: Add a parameter description |
| smsFallbackUrl |  ``` Optional ```  | URL requested once the call connects |
| smsFallbackMethod |  ``` Optional ```  | URL requested if the sms URL is not available |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$collect['phoneNumber'] = $phoneNumber;

$friendlyName = 'FriendlyName';
$collect['friendlyName'] = $friendlyName;

$voiceUrl = 'VoiceUrl';
$collect['voiceUrl'] = $voiceUrl;

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

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $phoneNumber->updatePhoneNumber($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="usage_controller"></a>![Class: ](http://apidocs.io/img/class.png ".UsageController") UsageController

#### Get singleton instance

The singleton instance of the ``` UsageController ``` class can be accessed from the API Client.

```php
$usage = $client->getUsage();
```

#### <a name="create_list_usage"></a>![Method: ](http://apidocs.io/img/method.png ".UsageController.createListUsage") createListUsage

> Get all usage 


```php
function createListUsage($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| productCode |  ``` Required ```  ``` DefaultValue ```  | Product Code |
| startDate |  ``` Required ```  ``` DefaultValue ```  | Start Usage Date |
| endDate |  ``` Required ```  ``` DefaultValue ```  | End Usage Date |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$productCode = '0';
$collect['productCode'] = $productCode;

$startDate = '2016-09-06';
$collect['startDate'] = $startDate;

$endDate = '2016-09-06';
$collect['endDate'] = $endDate;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $usage->createListUsage($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="web_rtc_controller"></a>![Class: ](http://apidocs.io/img/class.png ".WebRTCController") WebRTCController

#### Get singleton instance

The singleton instance of the ``` WebRTCController ``` class can be accessed from the API Client.

```php
$webRTC = $client->getWebRTC();
```

#### <a name="create_check_funds"></a>![Method: ](http://apidocs.io/img/method.png ".WebRTCController.createCheckFunds") createCheckFunds

> TODO: Add a method description


```php
function createCheckFunds($options)
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


$webRTC->createCheckFunds($collect);

```


#### <a name="create_authenticate_number"></a>![Method: ](http://apidocs.io/img/method.png ".WebRTCController.createAuthenticateNumber") createAuthenticateNumber

> Authenticate a message360 number for use


```php
function createAuthenticateNumber($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Phone number to authenticate for use |
| accountSid |  ``` Required ```  | Your message360 Account SID |
| authToken |  ``` Required ```  | Your message360 token |



#### Example Usage

```php
$phoneNumber = 'phone_number';
$collect['phoneNumber'] = $phoneNumber;

$accountSid = 'account_sid';
$collect['accountSid'] = $accountSid;

$authToken = 'auth_token';
$collect['authToken'] = $authToken;


$webRTC->createAuthenticateNumber($collect);

```


#### <a name="create_token"></a>![Method: ](http://apidocs.io/img/method.png ".WebRTCController.createToken") createToken

> message360 webrtc


```php
function createToken($options)
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


$webRTC->createToken($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="recording_controller"></a>![Class: ](http://apidocs.io/img/class.png ".RecordingController") RecordingController

#### Get singleton instance

The singleton instance of the ``` RecordingController ``` class can be accessed from the API Client.

```php
$recording = $client->getRecording();
```

#### <a name="create_view_recording"></a>![Method: ](http://apidocs.io/img/method.png ".RecordingController.createViewRecording") createViewRecording

> View a specific Recording


```php
function createViewRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Search Recording sid |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$collect['recordingSid'] = $recordingSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $recording->createViewRecording($collect);

```


#### <a name="create_delete_recording"></a>![Method: ](http://apidocs.io/img/method.png ".RecordingController.createDeleteRecording") createDeleteRecording

> Delete Recording Record


```php
function createDeleteRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Unique Recording Sid to be delete |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$collect['recordingSid'] = $recordingSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $recording->createDeleteRecording($collect);

```


#### <a name="create_list_recording"></a>![Method: ](http://apidocs.io/img/method.png ".RecordingController.createListRecording") createListRecording

> List out Recordings


```php
function createListRecording($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| dateCreated |  ``` Optional ```  | TODO: Add a parameter description |
| callSid |  ``` Optional ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 105;
$collect['page'] = $page;

$pageSize = 105;
$collect['pageSize'] = $pageSize;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;

$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $recording->createListRecording($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="email_controller"></a>![Class: ](http://apidocs.io/img/class.png ".EmailController") EmailController

#### Get singleton instance

The singleton instance of the ``` EmailController ``` class can be accessed from the API Client.

```php
$email = $client->getEmail();
```

#### <a name="create_delete_spam"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteSpam") createDeleteSpam

> Deletes a email address marked as spam from the spam list


```php
function createDeleteSpam($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | Email address |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->createDeleteSpam($collect);

```


#### <a name="create_delete_block"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteBlock") createDeleteBlock

> Deletes a blocked email


```php
function createDeleteBlock($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | Email address to remove from block list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->createDeleteBlock($collect);

```


#### <a name="add_unsubscribes"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.addUnsubscribes") addUnsubscribes

> Add an email to the unsubscribe list


```php
function addUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email to add to the unsubscribe list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->addUnsubscribes($collect);

```


#### <a name="create_send_email"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createSendEmail") createSendEmail

> Send out an email


```php
function createSendEmail($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| to |  ``` Required ```  | The to email address |
| from |  ``` Required ```  | The from email address |
| type |  ``` Required ```  ``` DefaultValue ```  | email format type, html or text |
| subject |  ``` Required ```  | Email subject |
| message |  ``` Required ```  | The body of the email message |
| cc |  ``` Optional ```  | CC Email address |
| bcc |  ``` Optional ```  | BCC Email address |
| attachment |  ``` Optional ```  | File to be attached.File must be less than 7MB. |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



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

$cc = 'cc';
$collect['cc'] = $cc;

$bcc = 'bcc';
$collect['bcc'] = $bcc;

$attachment = 'attachment';
$collect['attachment'] = $attachment;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->createSendEmail($collect);

```


#### <a name="create_delete_unsubscribes"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteUnsubscribes") createDeleteUnsubscribes

> Delete emails from the unsubscribe list


```php
function createDeleteUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email to remove from the unsubscribe list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->createDeleteUnsubscribes($collect);

```


#### <a name="create_list_unsubscribes"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListUnsubscribes") createListUnsubscribes

> List all unsubscribed email addresses


```php
function createListUnsubscribes($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |
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


$result = $email->createListUnsubscribes($collect);

```


#### <a name="create_list_invalid"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListInvalid") createListInvalid

> List out all invalid email addresses


```php
function createListInvalid($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |
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


$result = $email->createListInvalid($collect);

```


#### <a name="create_delete_bounces"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteBounces") createDeleteBounces

> Delete an email address from the bounced address list


```php
function createDeleteBounces($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address to remove from the bounce list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$collect['email'] = $email;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->createDeleteBounces($collect);

```


#### <a name="create_list_bounces"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListBounces") createListBounces

> List out all email addresses that have bounced


```php
function createListBounces($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |
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


$result = $email->createListBounces($collect);

```


#### <a name="create_list_spam"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListSpam") createListSpam

> List out all email addresses marked as spam


```php
function createListSpam($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| responseType |  ``` Required ```  ``` DefaultValue ```  | Response format, xml or json |
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


$result = $email->createListSpam($collect);

```


#### <a name="create_list_blocks"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListBlocks") createListBlocks

> Outputs email addresses on your blocklist


```php
function createListBlocks($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| offset |  ``` Optional ```  | Where to start in the output list |
| limit |  ``` Optional ```  | Maximum number of records to return |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$offset = 'offset';
$collect['offset'] = $offset;

$limit = 'limit';
$collect['limit'] = $limit;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $email->createListBlocks($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="sms_controller"></a>![Class: ](http://apidocs.io/img/class.png ".SMSController") SMSController

#### Get singleton instance

The singleton instance of the ``` SMSController ``` class can be accessed from the API Client.

```php
$sMS = $client->getSMS();
```

#### <a name="create_send_sms"></a>![Method: ](http://apidocs.io/img/method.png ".SMSController.createSendSMS") createSendSMS

> Send an SMS from a message360 number


```php
function createSendSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fromcountrycode |  ``` Required ```  ``` DefaultValue ```  | From Country Code |
| from |  ``` Required ```  | SMS enabled Message360 number to send this message from |
| tocountrycode |  ``` Required ```  ``` DefaultValue ```  | To country code |
| to |  ``` Required ```  | Number to send the SMS to |
| body |  ``` Required ```  | Text Message To Send |
| method |  ``` Optional ```  | Specifies the HTTP method used to request the required URL once SMS sent. |
| messagestatuscallback |  ``` Optional ```  | URL that can be requested to receive notification when SMS has Sent. A set of default parameters will be sent here once the SMS is finished. |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$fromcountrycode = 1;
$collect['fromcountrycode'] = $fromcountrycode;

$from = 'from';
$collect['from'] = $from;

$tocountrycode = 1;
$collect['tocountrycode'] = $tocountrycode;

$to = 'to';
$collect['to'] = $to;

$body = 'body';
$collect['body'] = $body;

$method = string::GET;
$collect['method'] = $method;

$messagestatuscallback = 'messagestatuscallback';
$collect['messagestatuscallback'] = $messagestatuscallback;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sMS->createSendSMS($collect);

```


#### <a name="create_view_sms"></a>![Method: ](http://apidocs.io/img/method.png ".SMSController.createViewSMS") createViewSMS

> View Particular SMS


```php
function createViewSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messagesid |  ``` Required ```  | Message sid |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$messagesid = 'messagesid';
$collect['messagesid'] = $messagesid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sMS->createViewSMS($collect);

```


#### <a name="create_list_sms"></a>![Method: ](http://apidocs.io/img/method.png ".SMSController.createListSMS") createListSMS

> List All SMS


```php
function createListSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Which page of the overall response will be returned. Zero indexed |
| pagesize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | Messages sent from this number |
| to |  ``` Optional ```  | Messages sent to this number |
| datesent |  ``` Optional ```  | Only list SMS messages sent in the specified date range |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 105;
$collect['page'] = $page;

$pagesize = 105;
$collect['pagesize'] = $pagesize;

$from = 'from';
$collect['from'] = $from;

$to = 'to';
$collect['to'] = $to;

$datesent = 'datesent';
$collect['datesent'] = $datesent;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sMS->createListSMS($collect);

```


#### <a name="create_list_inbound_sms"></a>![Method: ](http://apidocs.io/img/method.png ".SMSController.createListInboundSMS") createListInboundSMS

> List All Inbound SMS


```php
function createListInboundSMS($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Which page of the overall response will be returned. Zero indexed |
| pagesize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| from |  ``` Optional ```  | From Number to Inbound SMS |
| to |  ``` Optional ```  | To Number to get Inbound SMS |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 105;
$collect['page'] = $page;

$pagesize = 'pagesize';
$collect['pagesize'] = $pagesize;

$from = 'from';
$collect['from'] = $from;

$to = 'to';
$collect['to'] = $to;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $sMS->createListInboundSMS($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="account_controller"></a>![Class: ](http://apidocs.io/img/class.png ".AccountController") AccountController

#### Get singleton instance

The singleton instance of the ``` AccountController ``` class can be accessed from the API Client.

```php
$account = $client->getAccount();
```

#### <a name="create_view_account"></a>![Method: ](http://apidocs.io/img/method.png ".AccountController.createViewAccount") createViewAccount

> Display Account Description


```php
function createViewAccount($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| date |  ``` Required ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$date = 'date';
$collect['date'] = $date;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $account->createViewAccount($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="call_controller"></a>![Class: ](http://apidocs.io/img/class.png ".CallController") CallController

#### Get singleton instance

The singleton instance of the ``` CallController ``` class can be accessed from the API Client.

```php
$call = $client->getCall();
```

#### <a name="create_view_call"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createViewCall") createViewCall

> View Call Response


```php
function createViewCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callsid |  ``` Required ```  | Call Sid id for particular Call |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$callsid = 'callsid';
$collect['callsid'] = $callsid;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->createViewCall($collect);

```


#### <a name="create_make_call"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createMakeCall") createMakeCall

> You can experiment with initiating a call through Message360 and view the request response generated when doing so and get the response in json


```php
function createMakeCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fromCountryCode |  ``` Required ```  | from country code |
| from |  ``` Required ```  | This number to display on Caller ID as calling |
| toCountryCode |  ``` Required ```  | To cuntry code number |
| to |  ``` Required ```  | To number |
| url |  ``` Required ```  | URL requested once the call connects |
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
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$fromCountryCode = 'FromCountryCode';
$collect['fromCountryCode'] = $fromCountryCode;

$from = 'From';
$collect['from'] = $from;

$toCountryCode = 'ToCountryCode';
$collect['toCountryCode'] = $toCountryCode;

$to = 'To';
$collect['to'] = $to;

$url = 'Url';
$collect['url'] = $url;

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

$heartBeatMethod = false;
$collect['heartBeatMethod'] = $heartBeatMethod;

$timeout = 105;
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

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->createMakeCall($collect);

```


#### <a name="create_play_audio"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createPlayAudio") createPlayAudio

> Play Dtmf and send the Digit


```php
function createPlayAudio($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| length |  ``` Required ```  | Time limit in seconds for audio play back |
| direction |  ``` Required ```  | The leg of the call audio will be played to |
| loop |  ``` Required ```  | Repeat audio playback indefinitely |
| mix |  ``` Required ```  | If false, all other audio will be muted |
| callSid |  ``` Optional ```  | The unique identifier of each call resource |
| audioUrl |  ``` Optional ```  | URL to sound that should be played. You also can add more than one audio file using semicolons e.g. http://example.com/audio1.mp3;http://example.com/audio2.wav |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$length = 105;
$collect['length'] = $length;

$direction = string::IN;
$collect['direction'] = $direction;

$loop = false;
$collect['loop'] = $loop;

$mix = false;
$collect['mix'] = $mix;

$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$audioUrl = 'AudioUrl';
$collect['audioUrl'] = $audioUrl;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->createPlayAudio($collect);

```


#### <a name="create_record_call"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createRecordCall") createRecordCall

> Record a Call


```php
function createRecordCall($options)
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
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$record = false;
$collect['record'] = $record;

$direction = string::IN;
$collect['direction'] = $direction;

$timeLimit = 105;
$collect['timeLimit'] = $timeLimit;

$callBackUrl = 'CallBackUrl';
$collect['callBackUrl'] = $callBackUrl;

$fileformat = string::MP3;
$collect['fileformat'] = $fileformat;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->createRecordCall($collect);

```


#### <a name="create_voice_effect"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createVoiceEffect") createVoiceEffect

> Voice Effect


```php
function createVoiceEffect($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | TODO: Add a parameter description |
| audioDirection |  ``` Optional ```  | TODO: Add a parameter description |
| pitchSemiTones |  ``` Optional ```  | value between -14 and 14 |
| pitchOctaves |  ``` Optional ```  | value between -1 and 1 |
| pitch |  ``` Optional ```  | value greater than 0 |
| rate |  ``` Optional ```  | value greater than 0 |
| tempo |  ``` Optional ```  | value greater than 0 |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$audioDirection = string::IN;
$collect['audioDirection'] = $audioDirection;

$pitchSemiTones = 105.024928052456;
$collect['pitchSemiTones'] = $pitchSemiTones;

$pitchOctaves = 105.024928052456;
$collect['pitchOctaves'] = $pitchOctaves;

$pitch = 105.024928052456;
$collect['pitch'] = $pitch;

$rate = 105.024928052456;
$collect['rate'] = $rate;

$tempo = 105.024928052456;
$collect['tempo'] = $tempo;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->createVoiceEffect($collect);

```


#### <a name="create_send_digit"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createSendDigit") createSendDigit

> Play Dtmf and send the Digit


```php
function createSendDigit($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | The unique identifier of each call resource |
| playDtmf |  ``` Required ```  | DTMF digits to play to the call. 0-9, #, *, W, or w |
| playDtmfDirection |  ``` Optional ```  | The leg of the call DTMF digits should be sent to |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$playDtmf = 'PlayDtmf';
$collect['playDtmf'] = $playDtmf;

$playDtmfDirection = string::IN;
$collect['playDtmfDirection'] = $playDtmfDirection;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->createSendDigit($collect);

```


#### <a name="create_interrupted_call"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createInterruptedCall") createInterruptedCall

> Interrupt the Call by Call Sid


```php
function createInterruptedCall($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callSid |  ``` Required ```  | Call SId |
| url |  ``` Optional ```  | URL the in-progress call will be redirected to |
| method |  ``` Optional ```  | The method used to request the above Url parameter |
| status |  ``` Optional ```  | Status to set the in-progress call to |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$callSid = 'CallSid';
$collect['callSid'] = $callSid;

$url = 'Url';
$collect['url'] = $url;

$method = string::GET;
$collect['method'] = $method;

$status = string::CANCELED;
$collect['status'] = $status;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $call->createInterruptedCall($collect);

```


#### <a name="create_list_calls"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createListCalls") createListCalls

> A list of calls associated with your Message360 account


```php
function createListCalls($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Which page of the overall response will be returned. Zero indexed |
| pageSize |  ``` Optional ```  | Number of individual resources listed in the response per page |
| to |  ``` Optional ```  | Only list calls to this number |
| from |  ``` Optional ```  | Only list calls from this number |
| dateCreated |  ``` Optional ```  | Only list calls starting within the specified date range |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 'Page';
$collect['page'] = $page;

$pageSize = 'PageSize';
$collect['pageSize'] = $pageSize;

$to = 'To';
$collect['to'] = $to;

$from = 'From';
$collect['from'] = $from;

$dateCreated = 'DateCreated';
$collect['dateCreated'] = $dateCreated;

$responseType = 'json';
$collect['responseType'] = $responseType;


$call->createListCalls($collect);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="carrier_controller"></a>![Class: ](http://apidocs.io/img/class.png ".CarrierController") CarrierController

#### Get singleton instance

The singleton instance of the ``` CarrierController ``` class can be accessed from the API Client.

```php
$carrier = $client->getCarrier();
```

#### <a name="create_carrier_lookup"></a>![Method: ](http://apidocs.io/img/method.png ".CarrierController.createCarrierLookup") createCarrierLookup

> Get the Carrier Lookup


```php
function createCarrierLookup($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phonenumber |  ``` Required ```  | The number to lookup |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phonenumber = 'phonenumber';
$collect['phonenumber'] = $phonenumber;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $carrier->createCarrierLookup($collect);

```


#### <a name="create_carrier_lookup_list"></a>![Method: ](http://apidocs.io/img/method.png ".CarrierController.createCarrierLookupList") createCarrierLookupList

> Get the All Purchase Number's Carrier lookup


```php
function createCarrierLookupList($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Page Number |
| pagesize |  ``` Optional ```  | Page Size |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$page = 'page';
$collect['page'] = $page;

$pagesize = 'pagesize';
$collect['pagesize'] = $pagesize;

$responseType = 'json';
$collect['responseType'] = $responseType;


$result = $carrier->createCarrierLookupList($collect);

```


[Back to List of Controllers](#list_of_controllers)



