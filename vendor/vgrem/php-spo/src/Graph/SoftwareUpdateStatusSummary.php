<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class SoftwareUpdateStatusSummary extends ClientObject
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
     * @return integer
     */
    public function getCompliantDeviceCount()
    {
        if (!$this->isPropertyAvailable("CompliantDeviceCount")) {
            return null;
        }
        return $this->getProperty("CompliantDeviceCount");
    }
    /**
     * @var integer
     */
    public function setCompliantDeviceCount($value)
    {
        $this->setProperty("CompliantDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getNonCompliantDeviceCount()
    {
        if (!$this->isPropertyAvailable("NonCompliantDeviceCount")) {
            return null;
        }
        return $this->getProperty("NonCompliantDeviceCount");
    }
    /**
     * @var integer
     */
    public function setNonCompliantDeviceCount($value)
    {
        $this->setProperty("NonCompliantDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getRemediatedDeviceCount()
    {
        if (!$this->isPropertyAvailable("RemediatedDeviceCount")) {
            return null;
        }
        return $this->getProperty("RemediatedDeviceCount");
    }
    /**
     * @var integer
     */
    public function setRemediatedDeviceCount($value)
    {
        $this->setProperty("RemediatedDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getErrorDeviceCount()
    {
        if (!$this->isPropertyAvailable("ErrorDeviceCount")) {
            return null;
        }
        return $this->getProperty("ErrorDeviceCount");
    }
    /**
     * @var integer
     */
    public function setErrorDeviceCount($value)
    {
        $this->setProperty("ErrorDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getUnknownDeviceCount()
    {
        if (!$this->isPropertyAvailable("UnknownDeviceCount")) {
            return null;
        }
        return $this->getProperty("UnknownDeviceCount");
    }
    /**
     * @var integer
     */
    public function setUnknownDeviceCount($value)
    {
        $this->setProperty("UnknownDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getConflictDeviceCount()
    {
        if (!$this->isPropertyAvailable("ConflictDeviceCount")) {
            return null;
        }
        return $this->getProperty("ConflictDeviceCount");
    }
    /**
     * @var integer
     */
    public function setConflictDeviceCount($value)
    {
        $this->setProperty("ConflictDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getNotApplicableDeviceCount()
    {
        if (!$this->isPropertyAvailable("NotApplicableDeviceCount")) {
            return null;
        }
        return $this->getProperty("NotApplicableDeviceCount");
    }
    /**
     * @var integer
     */
    public function setNotApplicableDeviceCount($value)
    {
        $this->setProperty("NotApplicableDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getCompliantUserCount()
    {
        if (!$this->isPropertyAvailable("CompliantUserCount")) {
            return null;
        }
        return $this->getProperty("CompliantUserCount");
    }
    /**
     * @var integer
     */
    public function setCompliantUserCount($value)
    {
        $this->setProperty("CompliantUserCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getNonCompliantUserCount()
    {
        if (!$this->isPropertyAvailable("NonCompliantUserCount")) {
            return null;
        }
        return $this->getProperty("NonCompliantUserCount");
    }
    /**
     * @var integer
     */
    public function setNonCompliantUserCount($value)
    {
        $this->setProperty("NonCompliantUserCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getRemediatedUserCount()
    {
        if (!$this->isPropertyAvailable("RemediatedUserCount")) {
            return null;
        }
        return $this->getProperty("RemediatedUserCount");
    }
    /**
     * @var integer
     */
    public function setRemediatedUserCount($value)
    {
        $this->setProperty("RemediatedUserCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getErrorUserCount()
    {
        if (!$this->isPropertyAvailable("ErrorUserCount")) {
            return null;
        }
        return $this->getProperty("ErrorUserCount");
    }
    /**
     * @var integer
     */
    public function setErrorUserCount($value)
    {
        $this->setProperty("ErrorUserCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getUnknownUserCount()
    {
        if (!$this->isPropertyAvailable("UnknownUserCount")) {
            return null;
        }
        return $this->getProperty("UnknownUserCount");
    }
    /**
     * @var integer
     */
    public function setUnknownUserCount($value)
    {
        $this->setProperty("UnknownUserCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getConflictUserCount()
    {
        if (!$this->isPropertyAvailable("ConflictUserCount")) {
            return null;
        }
        return $this->getProperty("ConflictUserCount");
    }
    /**
     * @var integer
     */
    public function setConflictUserCount($value)
    {
        $this->setProperty("ConflictUserCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getNotApplicableUserCount()
    {
        if (!$this->isPropertyAvailable("NotApplicableUserCount")) {
            return null;
        }
        return $this->getProperty("NotApplicableUserCount");
    }
    /**
     * @var integer
     */
    public function setNotApplicableUserCount($value)
    {
        $this->setProperty("NotApplicableUserCount", $value, true);
    }
}