<?php

/**
 * Generated by phpSPO model generator 2020-05-29T07:19:37+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class EventMessageRequest extends ClientObject
{
    /**
     * @return bool
     */
    public function getResponseRequested()
    {
        if (!$this->isPropertyAvailable("ResponseRequested")) {
            return null;
        }
        return $this->getProperty("ResponseRequested");
    }
    /**
     * @var bool
     */
    public function setResponseRequested($value)
    {
        $this->setProperty("ResponseRequested", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowNewTimeProposals()
    {
        if (!$this->isPropertyAvailable("AllowNewTimeProposals")) {
            return null;
        }
        return $this->getProperty("AllowNewTimeProposals");
    }
    /**
     * @var bool
     */
    public function setAllowNewTimeProposals($value)
    {
        $this->setProperty("AllowNewTimeProposals", $value, true);
    }
}