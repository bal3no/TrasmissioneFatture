<?php

namespace SDICoop/TrasmissioneFatture\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Attestazione ServiceType
 * @subpackage Services
 */
class Attestazione extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AttestazioneTrasmissioneFattura
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SDICoop/TrasmissioneFatture\StructType\FileSdI_Type $attestazioneTrasmissioneFattura
     * @return void|bool
     */
    public function AttestazioneTrasmissioneFattura(\SDICoop/TrasmissioneFatture\StructType\FileSdI_Type $attestazioneTrasmissioneFattura)
    {
        try {
            $this->setResult($this->getSoapClient()->AttestazioneTrasmissioneFattura($attestazioneTrasmissioneFattura));
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
