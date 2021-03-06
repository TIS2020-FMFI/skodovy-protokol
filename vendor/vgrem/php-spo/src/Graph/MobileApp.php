<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class MobileApp extends ClientObject
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
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return string
     */
    public function getPublisher()
    {
        if (!$this->isPropertyAvailable("Publisher")) {
            return null;
        }
        return $this->getProperty("Publisher");
    }
    /**
     * @var string
     */
    public function setPublisher($value)
    {
        $this->setProperty("Publisher", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsFeatured()
    {
        if (!$this->isPropertyAvailable("IsFeatured")) {
            return null;
        }
        return $this->getProperty("IsFeatured");
    }
    /**
     * @var bool
     */
    public function setIsFeatured($value)
    {
        $this->setProperty("IsFeatured", $value, true);
    }
    /**
     * @return string
     */
    public function getPrivacyInformationUrl()
    {
        if (!$this->isPropertyAvailable("PrivacyInformationUrl")) {
            return null;
        }
        return $this->getProperty("PrivacyInformationUrl");
    }
    /**
     * @var string
     */
    public function setPrivacyInformationUrl($value)
    {
        $this->setProperty("PrivacyInformationUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getInformationUrl()
    {
        if (!$this->isPropertyAvailable("InformationUrl")) {
            return null;
        }
        return $this->getProperty("InformationUrl");
    }
    /**
     * @var string
     */
    public function setInformationUrl($value)
    {
        $this->setProperty("InformationUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getOwner()
    {
        if (!$this->isPropertyAvailable("Owner")) {
            return null;
        }
        return $this->getProperty("Owner");
    }
    /**
     * @var string
     */
    public function setOwner($value)
    {
        $this->setProperty("Owner", $value, true);
    }
    /**
     * @return string
     */
    public function getDeveloper()
    {
        if (!$this->isPropertyAvailable("Developer")) {
            return null;
        }
        return $this->getProperty("Developer");
    }
    /**
     * @var string
     */
    public function setDeveloper($value)
    {
        $this->setProperty("Developer", $value, true);
    }
    /**
     * @return string
     */
    public function getNotes()
    {
        if (!$this->isPropertyAvailable("Notes")) {
            return null;
        }
        return $this->getProperty("Notes");
    }
    /**
     * @var string
     */
    public function setNotes($value)
    {
        $this->setProperty("Notes", $value, true);
    }
    /**
     * @return MimeContent
     */
    public function getLargeIcon()
    {
        if (!$this->isPropertyAvailable("LargeIcon")) {
            return null;
        }
        return $this->getProperty("LargeIcon");
    }
    /**
     * @var MimeContent
     */
    public function setLargeIcon($value)
    {
        $this->setProperty("LargeIcon", $value, true);
    }
}