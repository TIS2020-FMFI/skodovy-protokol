<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class DeviceInstallState extends ClientObject
{
    /**
     * @return string
     */
    public function getDeviceName()
    {
        if (!$this->isPropertyAvailable("DeviceName")) {
            return null;
        }
        return $this->getProperty("DeviceName");
    }
    /**
     * @var string
     */
    public function setDeviceName($value)
    {
        $this->setProperty("DeviceName", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceId()
    {
        if (!$this->isPropertyAvailable("DeviceId")) {
            return null;
        }
        return $this->getProperty("DeviceId");
    }
    /**
     * @var string
     */
    public function setDeviceId($value)
    {
        $this->setProperty("DeviceId", $value, true);
    }
    /**
     * @return string
     */
    public function getErrorCode()
    {
        if (!$this->isPropertyAvailable("ErrorCode")) {
            return null;
        }
        return $this->getProperty("ErrorCode");
    }
    /**
     * @var string
     */
    public function setErrorCode($value)
    {
        $this->setProperty("ErrorCode", $value, true);
    }
    /**
     * @return string
     */
    public function getOsVersion()
    {
        if (!$this->isPropertyAvailable("OsVersion")) {
            return null;
        }
        return $this->getProperty("OsVersion");
    }
    /**
     * @var string
     */
    public function setOsVersion($value)
    {
        $this->setProperty("OsVersion", $value, true);
    }
    /**
     * @return string
     */
    public function getOsDescription()
    {
        if (!$this->isPropertyAvailable("OsDescription")) {
            return null;
        }
        return $this->getProperty("OsDescription");
    }
    /**
     * @var string
     */
    public function setOsDescription($value)
    {
        $this->setProperty("OsDescription", $value, true);
    }
    /**
     * @return string
     */
    public function getUserName()
    {
        if (!$this->isPropertyAvailable("UserName")) {
            return null;
        }
        return $this->getProperty("UserName");
    }
    /**
     * @var string
     */
    public function setUserName($value)
    {
        $this->setProperty("UserName", $value, true);
    }
}