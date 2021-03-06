<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:07:25+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class InferenceClassificationOverride extends ClientObject
{
    /**
     * @return EmailAddress
     */
    public function getSenderEmailAddress()
    {
        if (!$this->isPropertyAvailable("SenderEmailAddress")) {
            return null;
        }
        return $this->getProperty("SenderEmailAddress");
    }
    /**
     * @var EmailAddress
     */
    public function setSenderEmailAddress($value)
    {
        $this->setProperty("SenderEmailAddress", $value, true);
    }
}