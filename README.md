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
* [EmailController](#email_controller)
* [SMSController](#sms_controller)
* [AccountController](#account_controller)
* [RecordingController](#recording_controller)
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
function createViewParticipant(
        $conferenceSid,
        $participantSid,
        $responseType = 'json')
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
$participantSid = 'ParticipantSid';
$responseType = 'json';

$result = $conference->createViewParticipant($conferenceSid, $participantSid, $responseType);

```


#### <a name="create_list_participant"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.createListParticipant") createListParticipant

> List Participant


```php
function createListParticipant(
        $conferenceSid,
        $page = NULL,
        $pagesize = NULL,
        $muted = NULL,
        $deaf = NULL,
        $responseType = 'json')
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
$page = 52;
$pagesize = 52;
$muted = false;
$deaf = false;
$responseType = 'json';

$result = $conference->createListParticipant($conferenceSid, $page, $pagesize, $muted, $deaf, $responseType);

```


#### <a name="add_participant"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.addParticipant") addParticipant

> Add Participant in conference 


```php
function addParticipant(
        $conferencesid,
        $participantnumber,
        $tocountrycode,
        $muted = NULL,
        $deaf = NULL,
        $responseType = 'json')
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
$participantnumber = 'participantnumber';
$tocountrycode = 52;
$muted = false;
$deaf = false;
$responseType = 'json';

$result = $conference->addParticipant($conferencesid, $participantnumber, $tocountrycode, $muted, $deaf, $responseType);

```


#### <a name="create_view_conference"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.createViewConference") createViewConference

> View Conference


```php
function createViewConference(
        $conferencesid,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| conferencesid |  ``` Required ```  | The unique identifier of each conference resource |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$conferencesid = 'conferencesid';
$responseType = 'json';

$result = $conference->createViewConference($conferencesid, $responseType);

```


#### <a name="create_list_conference"></a>![Method: ](http://apidocs.io/img/method.png ".ConferenceController.createListConference") createListConference

> List Conference


```php
function createListConference(
        $page = NULL,
        $pageSize = NULL,
        $friendlyName = NULL,
        $status = NULL,
        $dateCreated = NULL,
        $dateUpdated = NULL,
        $responseType = 'json')
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
$page = 52;
$pageSize = 52;
$friendlyName = 'FriendlyName';
$status = string::CANCELED;
$dateCreated = 'DateCreated';
$dateUpdated = 'DateUpdated';
$responseType = 'json';

$result = $conference->createListConference($page, $pageSize, $friendlyName, $status, $dateCreated, $dateUpdated, $responseType);

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
function createListTranscription(
        $page = NULL,
        $pageSize = NULL,
        $status = NULL,
        $dateTranscribed = NULL,
        $responseType = 'json')
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
$page = 52;
$pageSize = 52;
$status = string::INPROGRESS;
$dateTranscribed = 'DateTranscribed';
$responseType = 'json';

$result = $transcription->createListTranscription($page, $pageSize, $status, $dateTranscribed, $responseType);

```


#### <a name="create_recording_transcription"></a>![Method: ](http://apidocs.io/img/method.png ".TranscriptionController.createRecordingTranscription") createRecordingTranscription

> Recording Transcriptions


```php
function createRecordingTranscription(
        $recordingSid,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Unique Recording sid |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$responseType = 'json';

$result = $transcription->createRecordingTranscription($recordingSid, $responseType);

```


#### <a name="create_view_transcription"></a>![Method: ](http://apidocs.io/img/method.png ".TranscriptionController.createViewTranscription") createViewTranscription

> View Specific Transcriptions


```php
function createViewTranscription(
        $transcriptionSid,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transcriptionSid |  ``` Required ```  | Unique Transcription ID |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$transcriptionSid = 'TranscriptionSid';
$responseType = 'json';

$result = $transcription->createViewTranscription($transcriptionSid, $responseType);

```


#### <a name="create_audio_url_transcription"></a>![Method: ](http://apidocs.io/img/method.png ".TranscriptionController.createAudioURLTranscription") createAudioURLTranscription

> Audio URL Transcriptions


```php
function createAudioURLTranscription(
        $audioUrl,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| audioUrl |  ``` Required ```  | Audio url |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$audioUrl = 'AudioUrl';
$responseType = 'json';

$result = $transcription->createAudioURLTranscription($audioUrl, $responseType);

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
function createAvailablePhoneNumber(
        $numberType,
        $areaCode,
        $pageSize = NULL,
        $responseType = 'json')
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
$areaCode = 'AreaCode';
$pageSize = 144;
$responseType = 'json';

$result = $phoneNumber->createAvailablePhoneNumber($numberType, $areaCode, $pageSize, $responseType);

```


#### <a name="create_list_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createListNumber") createListNumber

> List Account's Phone number details


```php
function createListNumber(
        $page = NULL,
        $pageSize = NULL,
        $numberType = NULL,
        $friendlyName = NULL,
        $responseType = 'json')
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
$page = 144;
$pageSize = 144;
$numberType = 'NumberType';
$friendlyName = 'FriendlyName';
$responseType = 'json';

$result = $phoneNumber->createListNumber($page, $pageSize, $numberType, $friendlyName, $responseType);

```


#### <a name="create_release_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createReleaseNumber") createReleaseNumber

> Release number from account


```php
function createReleaseNumber(
        $phoneNumber,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Phone number to be relase |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$responseType = 'json';

$result = $phoneNumber->createReleaseNumber($phoneNumber, $responseType);

```


#### <a name="create_buy_number"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createBuyNumber") createBuyNumber

> Buy Phone Number 


```php
function createBuyNumber(
        $phoneNumber,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Phone number to be purchase |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$responseType = 'json';

$result = $phoneNumber->createBuyNumber($phoneNumber, $responseType);

```


#### <a name="create_view_number_details"></a>![Method: ](http://apidocs.io/img/method.png ".PhoneNumberController.createViewNumberDetails") createViewNumberDetails

> Get Phone Number Details


```php
function createViewNumberDetails(
        $phoneNumber,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phoneNumber |  ``` Required ```  | Get Phone number Detail |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phoneNumber = 'PhoneNumber';
$responseType = 'json';

$result = $phoneNumber->createViewNumberDetails($phoneNumber, $responseType);

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
function createListUsage(
        $productCode,
        $startDate,
        $endDate,
        $responseType = 'json')
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
$startDate = '2016-09-06';
$endDate = '2016-09-06';
$responseType = 'json';

$result = $usage->createListUsage($productCode, $startDate, $endDate, $responseType);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="email_controller"></a>![Class: ](http://apidocs.io/img/class.png ".EmailController") EmailController

#### Get singleton instance

The singleton instance of the ``` EmailController ``` class can be accessed from the API Client.

```php
$email = $client->getEmail();
```

#### <a name="create_send_email"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createSendEmail") createSendEmail

> Send out an email


```php
function createSendEmail(
        $to,
        $from,
        $type,
        $subject,
        $message,
        $cc = NULL,
        $bcc = NULL,
        $attachment = NULL,
        $responseType = 'json')
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
$from = 'from';
$type = string::HTML;
$subject = 'subject';
$message = 'message';
$cc = 'cc';
$bcc = 'bcc';
$attachment = 'attachment';
$responseType = 'json';

$result = $email->createSendEmail($to, $from, $type, $subject, $message, $cc, $bcc, $attachment, $responseType);

```


#### <a name="create_delete_unsubscribes"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteUnsubscribes") createDeleteUnsubscribes

> Delete emails from the unsubscribe list


```php
function createDeleteUnsubscribes(
        $email,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email to remove from the unsubscribe list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$responseType = 'json';

$result = $email->createDeleteUnsubscribes($email, $responseType);

```


#### <a name="create_list_unsubscribes"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListUnsubscribes") createListUnsubscribes

> List all unsubscribed email addresses


```php
function createListUnsubscribes(
        $responseType = 'json',
        $offset = NULL,
        $limit = NULL)
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
$offset = 'offset';
$limit = 'limit';

$result = $email->createListUnsubscribes($responseType, $offset, $limit);

```


#### <a name="add_unsubscribes"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.addUnsubscribes") addUnsubscribes

> Add an email to the unsubscribe list


```php
function addUnsubscribes(
        $email,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email to add to the unsubscribe list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$responseType = 'json';

$result = $email->addUnsubscribes($email, $responseType);

```


#### <a name="create_delete_spam"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteSpam") createDeleteSpam

> Deletes a email address marked as spam from the spam list


```php
function createDeleteSpam(
        $email,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | Email address |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$responseType = 'json';

$result = $email->createDeleteSpam($email, $responseType);

```


#### <a name="create_delete_block"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteBlock") createDeleteBlock

> Deletes a blocked email


```php
function createDeleteBlock(
        $email,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | Email address to remove from block list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$responseType = 'json';

$result = $email->createDeleteBlock($email, $responseType);

```


#### <a name="create_list_invalid"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListInvalid") createListInvalid

> List out all invalid email addresses


```php
function createListInvalid(
        $responseType = 'json',
        $offet = NULL,
        $limit = NULL)
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
$offet = 'offet';
$limit = 'limit';

$result = $email->createListInvalid($responseType, $offet, $limit);

```


#### <a name="create_delete_bounces"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createDeleteBounces") createDeleteBounces

> Delete an email address from the bounced address list


```php
function createDeleteBounces(
        $email,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address to remove from the bounce list |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$email = 'email';
$responseType = 'json';

$result = $email->createDeleteBounces($email, $responseType);

```


#### <a name="create_list_bounces"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListBounces") createListBounces

> List out all email addresses that have bounced


```php
function createListBounces(
        $responseType = 'json',
        $offset = NULL,
        $limit = NULL)
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
$offset = 'offset';
$limit = 'limit';

$result = $email->createListBounces($responseType, $offset, $limit);

```


#### <a name="create_list_spam"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListSpam") createListSpam

> List out all email addresses marked as spam


```php
function createListSpam(
        $responseType,
        $offset = NULL,
        $limit = NULL)
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
$offset = 'offset';
$limit = 'limit';

$result = $email->createListSpam($responseType, $offset, $limit);

```


#### <a name="create_list_blocks"></a>![Method: ](http://apidocs.io/img/method.png ".EmailController.createListBlocks") createListBlocks

> Outputs email addresses on your blocklist


```php
function createListBlocks(
        $offset = NULL,
        $limit = NULL,
        $responseType = 'json')
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
$limit = 'limit';
$responseType = 'json';

$result = $email->createListBlocks($offset, $limit, $responseType);

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
function createSendSMS(
        $fromcountrycode,
        $from,
        $tocountrycode,
        $to,
        $body,
        $method = NULL,
        $messagestatuscallback = NULL,
        $responseType = 'json')
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
$from = 'from';
$tocountrycode = 1;
$to = 'to';
$body = 'body';
$method = string::GET;
$messagestatuscallback = 'messagestatuscallback';
$responseType = 'json';

$result = $sMS->createSendSMS($fromcountrycode, $from, $tocountrycode, $to, $body, $method, $messagestatuscallback, $responseType);

```


#### <a name="create_view_sms"></a>![Method: ](http://apidocs.io/img/method.png ".SMSController.createViewSMS") createViewSMS

> View Particular SMS


```php
function createViewSMS(
        $messagesid,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| messagesid |  ``` Required ```  | Message sid |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$messagesid = 'messagesid';
$responseType = 'json';

$result = $sMS->createViewSMS($messagesid, $responseType);

```


#### <a name="create_list_sms"></a>![Method: ](http://apidocs.io/img/method.png ".SMSController.createListSMS") createListSMS

> List All SMS


```php
function createListSMS(
        $page = NULL,
        $pagesize = NULL,
        $from = NULL,
        $to = NULL,
        $datesent = NULL,
        $responseType = 'json')
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
$page = 144;
$pagesize = 144;
$from = 'from';
$to = 'to';
$datesent = 'datesent';
$responseType = 'json';

$result = $sMS->createListSMS($page, $pagesize, $from, $to, $datesent, $responseType);

```


#### <a name="create_list_inbound_sms"></a>![Method: ](http://apidocs.io/img/method.png ".SMSController.createListInboundSMS") createListInboundSMS

> List All Inbound SMS


```php
function createListInboundSMS(
        $page = NULL,
        $pagesize = NULL,
        $from = NULL,
        $to = NULL,
        $responseType = 'json')
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
$page = 144;
$pagesize = 'pagesize';
$from = 'from';
$to = 'to';
$responseType = 'json';

$result = $sMS->createListInboundSMS($page, $pagesize, $from, $to, $responseType);

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
function createViewAccount(
        $date,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| date |  ``` Required ```  | TODO: Add a parameter description |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response type format xml or json |



#### Example Usage

```php
$date = 'date';
$responseType = 'json';

$result = $account->createViewAccount($date, $responseType);

```


[Back to List of Controllers](#list_of_controllers)

### <a name="recording_controller"></a>![Class: ](http://apidocs.io/img/class.png ".RecordingController") RecordingController

#### Get singleton instance

The singleton instance of the ``` RecordingController ``` class can be accessed from the API Client.

```php
$recording = $client->getRecording();
```

#### <a name="create_delete_recording"></a>![Method: ](http://apidocs.io/img/method.png ".RecordingController.createDeleteRecording") createDeleteRecording

> Delete Recording Record


```php
function createDeleteRecording(
        $recordingSid,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Unique Recording Sid to be delete |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$responseType = 'json';

$result = $recording->createDeleteRecording($recordingSid, $responseType);

```


#### <a name="create_view_recording"></a>![Method: ](http://apidocs.io/img/method.png ".RecordingController.createViewRecording") createViewRecording

> View a specific Recording


```php
function createViewRecording(
        $recordingSid,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recordingSid |  ``` Required ```  | Search Recording sid |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$recordingSid = 'RecordingSid';
$responseType = 'json';

$result = $recording->createViewRecording($recordingSid, $responseType);

```


#### <a name="create_list_recording"></a>![Method: ](http://apidocs.io/img/method.png ".RecordingController.createListRecording") createListRecording

> List out Recordings


```php
function createListRecording(
        $page = NULL,
        $pageSize = NULL,
        $dateCreated = NULL,
        $callSid = NULL,
        $responseType = 'json')
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
$page = 102;
$pageSize = 102;
$dateCreated = 'DateCreated';
$callSid = 'CallSid';
$responseType = 'json';

$result = $recording->createListRecording($page, $pageSize, $dateCreated, $callSid, $responseType);

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
function createViewCall(
        $callsid,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| callsid |  ``` Required ```  | Call Sid id for particular Call |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$callsid = 'callsid';
$responseType = 'json';

$result = $call->createViewCall($callsid, $responseType);

```


#### <a name="create_make_call"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createMakeCall") createMakeCall

> You can experiment with initiating a call through Message360 and view the request response generated when doing so and get the response in json


```php
function createMakeCall(
        $fromCountryCode,
        $from,
        $toCountryCode,
        $to,
        $url,
        $method = NULL,
        $statusCallBackUrl = NULL,
        $statusCallBackMethod = NULL,
        $fallBackUrl = NULL,
        $fallBackMethod = NULL,
        $heartBeatUrl = NULL,
        $heartBeatMethod = NULL,
        $timeout = NULL,
        $playDtmf = NULL,
        $hideCallerId = NULL,
        $record = NULL,
        $recordCallBackUrl = NULL,
        $recordCallBackMethod = NULL,
        $transcribe = NULL,
        $transcribeCallBackUrl = NULL,
        $ifMachine = NULL,
        $responseType = 'json')
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
$from = 'From';
$toCountryCode = 'ToCountryCode';
$to = 'To';
$url = 'Url';
$method = string::GET;
$statusCallBackUrl = 'StatusCallBackUrl';
$statusCallBackMethod = string::GET;
$fallBackUrl = 'FallBackUrl';
$fallBackMethod = string::GET;
$heartBeatUrl = 'HeartBeatUrl';
$heartBeatMethod = false;
$timeout = 102;
$playDtmf = 'PlayDtmf';
$hideCallerId = false;
$record = false;
$recordCallBackUrl = 'RecordCallBackUrl';
$recordCallBackMethod = string::GET;
$transcribe = false;
$transcribeCallBackUrl = 'TranscribeCallBackUrl';
$ifMachine = string::CONTINUE;
$responseType = 'json';

$result = $call->createMakeCall($fromCountryCode, $from, $toCountryCode, $to, $url, $method, $statusCallBackUrl, $statusCallBackMethod, $fallBackUrl, $fallBackMethod, $heartBeatUrl, $heartBeatMethod, $timeout, $playDtmf, $hideCallerId, $record, $recordCallBackUrl, $recordCallBackMethod, $transcribe, $transcribeCallBackUrl, $ifMachine, $responseType);

```


#### <a name="create_play_audio"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createPlayAudio") createPlayAudio

> Play Dtmf and send the Digit


```php
function createPlayAudio(
        $length,
        $direction,
        $loop,
        $mix,
        $callSid = NULL,
        $audioUrl = NULL,
        $responseType = 'json')
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
$length = 102;
$direction = string::IN;
$loop = false;
$mix = false;
$callSid = 'CallSid';
$audioUrl = 'AudioUrl';
$responseType = 'json';

$result = $call->createPlayAudio($length, $direction, $loop, $mix, $callSid, $audioUrl, $responseType);

```


#### <a name="create_record_call"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createRecordCall") createRecordCall

> Record a Call


```php
function createRecordCall(
        $callSid,
        $record,
        $direction = NULL,
        $timeLimit = NULL,
        $callBackUrl = NULL,
        $fileformat = NULL,
        $responseType = 'json')
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
$record = false;
$direction = string::IN;
$timeLimit = 102;
$callBackUrl = 'CallBackUrl';
$fileformat = string::MP3;
$responseType = 'json';

$result = $call->createRecordCall($callSid, $record, $direction, $timeLimit, $callBackUrl, $fileformat, $responseType);

```


#### <a name="create_voice_effect"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createVoiceEffect") createVoiceEffect

> Voice Effect


```php
function createVoiceEffect(
        $callSid,
        $audioDirection = NULL,
        $pitchSemiTones = NULL,
        $pitchOctaves = NULL,
        $pitch = NULL,
        $rate = NULL,
        $tempo = NULL,
        $responseType = 'json')
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
$audioDirection = string::IN;
$pitchSemiTones = 102.321147153769;
$pitchOctaves = 102.321147153769;
$pitch = 102.321147153769;
$rate = 102.321147153769;
$tempo = 102.321147153769;
$responseType = 'json';

$result = $call->createVoiceEffect($callSid, $audioDirection, $pitchSemiTones, $pitchOctaves, $pitch, $rate, $tempo, $responseType);

```


#### <a name="create_send_digit"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createSendDigit") createSendDigit

> Play Dtmf and send the Digit


```php
function createSendDigit(
        $callSid,
        $playDtmf,
        $playDtmfDirection = NULL,
        $responseType = 'json')
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
$playDtmf = 'PlayDtmf';
$playDtmfDirection = string::IN;
$responseType = 'json';

$result = $call->createSendDigit($callSid, $playDtmf, $playDtmfDirection, $responseType);

```


#### <a name="create_interrupted_call"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createInterruptedCall") createInterruptedCall

> Interrupt the Call by Call Sid


```php
function createInterruptedCall(
        $callSid,
        $url = NULL,
        $method = NULL,
        $status = NULL,
        $responseType = 'json')
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
$url = 'Url';
$method = string::GET;
$status = string::CANCELED;
$responseType = 'json';

$result = $call->createInterruptedCall($callSid, $url, $method, $status, $responseType);

```


#### <a name="create_list_calls"></a>![Method: ](http://apidocs.io/img/method.png ".CallController.createListCalls") createListCalls

> A list of calls associated with your Message360 account


```php
function createListCalls(
        $page = NULL,
        $pageSize = NULL,
        $to = NULL,
        $from = NULL,
        $dateCreated = NULL,
        $responseType = 'json')
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
$pageSize = 'PageSize';
$to = 'To';
$from = 'From';
$dateCreated = 'DateCreated';
$responseType = 'json';

$call->createListCalls($page, $pageSize, $to, $from, $dateCreated, $responseType);

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
function createCarrierLookup(
        $phonenumber,
        $responseType = 'json')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phonenumber |  ``` Required ```  | The number to lookup |
| responseType |  ``` Optional ```  ``` DefaultValue ```  | Response format, xml or json |



#### Example Usage

```php
$phonenumber = 'phonenumber';
$responseType = 'json';

$result = $carrier->createCarrierLookup($phonenumber, $responseType);

```


#### <a name="create_carrier_lookup_list"></a>![Method: ](http://apidocs.io/img/method.png ".CarrierController.createCarrierLookupList") createCarrierLookupList

> Get the All Purchase Number's Carrier lookup


```php
function createCarrierLookupList(
        $page = NULL,
        $pagesize = NULL,
        $responseType = 'json')
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
$pagesize = 'pagesize';
$responseType = 'json';

$result = $carrier->createCarrierLookupList($page, $pagesize, $responseType);

```


[Back to List of Controllers](#list_of_controllers)



