<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class OnenoteEntityHierarchyModel extends ClientObject
{
    /**
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * @return IdentitySet
     */
    public function getCreatedBy()
    {
        if (!$this->isPropertyAvailable("CreatedBy")) {
            return null;
        }
        return $this->getProperty("CreatedBy");
    }
    /**
     * @var IdentitySet
     */
    public function setCreatedBy($value)
    {
        $this->setProperty("CreatedBy", $value, true);
    }
    /**
     * @return IdentitySet
     */
    public function getLastModifiedBy()
    {
        if (!$this->isPropertyAvailable("LastModifiedBy")) {
            return null;
        }
        return $this->getProperty("LastModifiedBy");
    }
    /**
     * @var IdentitySet
     */
    public function setLastModifiedBy($value)
    {
        $this->setProperty("LastModifiedBy", $value, true);
    }
}