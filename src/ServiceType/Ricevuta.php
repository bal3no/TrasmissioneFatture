<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ricevuta ServiceType
 * @subpackage Services
 */
class Ricevuta extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RicevutaConsegna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FileSdI_Type $ricevuta
     * @return void|bool
     */
    public function RicevutaConsegna(\StructType\FileSdI_Type $ricevuta)
    {
        try {
            $this->setResult($this->getSoapClient()->RicevutaConsegna($ricevuta));
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
