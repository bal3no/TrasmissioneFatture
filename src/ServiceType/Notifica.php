<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Notifica ServiceType
 * @subpackage Services
 */
class Notifica extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named NotificaMancataConsegna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FileSdI_Type $mancataConsegna
     * @return void|bool
     */
    public function NotificaMancataConsegna(\StructType\FileSdI_Type $mancataConsegna)
    {
        try {
            $this->setResult($this->getSoapClient()->NotificaMancataConsegna($mancataConsegna));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named NotificaScarto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FileSdI_Type $scarto
     * @return void|bool
     */
    public function NotificaScarto(\StructType\FileSdI_Type $scarto)
    {
        try {
            $this->setResult($this->getSoapClient()->NotificaScarto($scarto));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named NotificaEsito
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FileSdI_Type $esito
     * @return void|bool
     */
    public function NotificaEsito(\StructType\FileSdI_Type $esito)
    {
        try {
            $this->setResult($this->getSoapClient()->NotificaEsito($esito));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named NotificaDecorrenzaTermini
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FileSdI_Type $decorrenzaTermini
     * @return void|bool
     */
    public function NotificaDecorrenzaTermini(\StructType\FileSdI_Type $decorrenzaTermini)
    {
        try {
            $this->setResult($this->getSoapClient()->NotificaDecorrenzaTermini($decorrenzaTermini));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return void
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
