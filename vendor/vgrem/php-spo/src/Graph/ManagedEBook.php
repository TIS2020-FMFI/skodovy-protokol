<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class ManagedEBook extends ClientObject
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
     * @return MimeContent
     */
    public function getLargeCover()
    {
        if (!$this->isPropertyAvailable("LargeCover")) {
            return null;
        }
        return $this->getProperty("LargeCover");
    }
    /**
     * @var MimeContent
     */
    public function setLargeCover($value)
    {
        $this->setProperty("LargeCover", $value, true);
    }
    /**
     * @return EBookInstallSummary
     */
    public function getInstallSummary()
    {
        if (!$this->isPropertyAvailable("InstallSummary")) {
            $this->setProperty("InstallSummary", new EBookInstallSummary($this->getContext(), new ResourcePath("InstallSummary", $this->getResourcePath())));
        }
        return $this->getProperty("InstallSummary");
    }
}