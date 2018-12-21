<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'TrasmissioneFatture_v1.1.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'TrasmissioneFatture_v1.1.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \SDICoop\TrasmissioneFatture\ClassMap::get(),
);
/**
 * Samples for Ricevuta ServiceType
 */
$ricevuta = new \SDICoop\TrasmissioneFatture\ServiceType\Ricevuta($options);
/**
 * Sample call for RicevutaConsegna operation/method
 */
if ($ricevuta->RicevutaConsegna(new \SDICoop\TrasmissioneFatture\StructType\FileSdI_Type()) !== false) {
    print_r($ricevuta->getResult());
} else {
    print_r($ricevuta->getLastError());
}
/**
 * Samples for Notifica ServiceType
 */
$notifica = new \SDICoop\TrasmissioneFatture\ServiceType\Notifica($options);
/**
 * Sample call for NotificaMancataConsegna operation/method
 */
if ($notifica->NotificaMancataConsegna(new \SDICoop\TrasmissioneFatture\StructType\FileSdI_Type()) !== false) {
    print_r($notifica->getResult());
} else {
    print_r($notifica->getLastError());
}
/**
 * Sample call for NotificaScarto operation/method
 */
if ($notifica->NotificaScarto(new \SDICoop\TrasmissioneFatture\StructType\FileSdI_Type()) !== false) {
    print_r($notifica->getResult());
} else {
    print_r($notifica->getLastError());
}
/**
 * Sample call for NotificaEsito operation/method
 */
if ($notifica->NotificaEsito(new \SDICoop\TrasmissioneFatture\StructType\FileSdI_Type()) !== false) {
    print_r($notifica->getResult());
} else {
    print_r($notifica->getLastError());
}
/**
 * Sample call for NotificaDecorrenzaTermini operation/method
 */
if ($notifica->NotificaDecorrenzaTermini(new \SDICoop\TrasmissioneFatture\StructType\FileSdI_Type()) !== false) {
    print_r($notifica->getResult());
} else {
    print_r($notifica->getLastError());
}
/**
 * Samples for Attestazione ServiceType
 */
$attestazione = new \SDICoop\TrasmissioneFatture\ServiceType\Attestazione($options);
/**
 * Sample call for AttestazioneTrasmissioneFattura operation/method
 */
if ($attestazione->AttestazioneTrasmissioneFattura(new \SDICoop\TrasmissioneFatture\StructType\FileSdI_Type()) !== false) {
    print_r($attestazione->getResult());
} else {
    print_r($attestazione->getLastError());
}
