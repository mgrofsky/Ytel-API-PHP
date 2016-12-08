<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ) on 12/08/2016
 */

namespace Message360Lib;

use Message360Lib\Controllers;

/**
 * Message360 client class
 */
class Message360Client
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($basicAuthUserName = NULL, $basicAuthPassword = NULL)
    {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
 
    /**
     * Singleton access to Conference controller
     * @return Controllers\ConferenceController The *Singleton* instance
     */
    public function getConference()
    {
        return Controllers\ConferenceController::getInstance();
    }
 
    /**
     * Singleton access to Email controller
     * @return Controllers\EmailController The *Singleton* instance
     */
    public function getEmail()
    {
        return Controllers\EmailController::getInstance();
    }
 
    /**
     * Singleton access to NumberVerification controller
     * @return Controllers\NumberVerificationController The *Singleton* instance
     */
    public function getNumberVerification()
    {
        return Controllers\NumberVerificationController::getInstance();
    }
 
    /**
     * Singleton access to Carrier controller
     * @return Controllers\CarrierController The *Singleton* instance
     */
    public function getCarrier()
    {
        return Controllers\CarrierController::getInstance();
    }
 
    /**
     * Singleton access to Call controller
     * @return Controllers\CallController The *Singleton* instance
     */
    public function getCall()
    {
        return Controllers\CallController::getInstance();
    }
 
    /**
     * Singleton access to SMS controller
     * @return Controllers\SMSController The *Singleton* instance
     */
    public function getSMS()
    {
        return Controllers\SMSController::getInstance();
    }
 
    /**
     * Singleton access to Account controller
     * @return Controllers\AccountController The *Singleton* instance
     */
    public function getAccount()
    {
        return Controllers\AccountController::getInstance();
    }
 
    /**
     * Singleton access to WebRTC controller
     * @return Controllers\WebRTCController The *Singleton* instance
     */
    public function getWebRTC()
    {
        return Controllers\WebRTCController::getInstance();
    }
 
    /**
     * Singleton access to SubAccount controller
     * @return Controllers\SubAccountController The *Singleton* instance
     */
    public function getSubAccount()
    {
        return Controllers\SubAccountController::getInstance();
    }
 
    /**
     * Singleton access to Address controller
     * @return Controllers\AddressController The *Singleton* instance
     */
    public function getAddress()
    {
        return Controllers\AddressController::getInstance();
    }
 
    /**
     * Singleton access to PhoneNumber controller
     * @return Controllers\PhoneNumberController The *Singleton* instance
     */
    public function getPhoneNumber()
    {
        return Controllers\PhoneNumberController::getInstance();
    }
 
    /**
     * Singleton access to Recording controller
     * @return Controllers\RecordingController The *Singleton* instance
     */
    public function getRecording()
    {
        return Controllers\RecordingController::getInstance();
    }
 
    /**
     * Singleton access to Transcription controller
     * @return Controllers\TranscriptionController The *Singleton* instance
     */
    public function getTranscription()
    {
        return Controllers\TranscriptionController::getInstance();
    }
 
    /**
     * Singleton access to Usage controller
     * @return Controllers\UsageController The *Singleton* instance
     */
    public function getUsage()
    {
        return Controllers\UsageController::getInstance();
    }
}