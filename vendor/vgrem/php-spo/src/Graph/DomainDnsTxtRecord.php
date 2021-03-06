<?php

/**
 * Generated by phpSPO model generator 2020-05-24T22:10:26+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class DomainDnsTxtRecord extends ClientObject
{
    /**
     * @return string
     */
    public function getText()
    {
        if (!$this->isPropertyAvailable("Text")) {
            return null;
        }
        return $this->getProperty("Text");
    }
    /**
     * @var string
     */
    public function setText($value)
    {
        $this->setProperty("Text", $value, true);
    }
}