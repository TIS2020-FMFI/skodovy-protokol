<?php

/**
 * Generated by phpSPO model generator 2020-05-29T07:19:37+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class IosManagedAppProtection extends ClientObject
{
    /**
     * @return string
     */
    public function getMinimumRequiredSdkVersion()
    {
        if (!$this->isPropertyAvailable("MinimumRequiredSdkVersion")) {
            return null;
        }
        return $this->getProperty("MinimumRequiredSdkVersion");
    }
    /**
     * @var string
     */
    public function setMinimumRequiredSdkVersion($value)
    {
        $this->setProperty("MinimumRequiredSdkVersion", $value, true);
    }
    /**
     * @return integer
     */
    public function getDeployedAppCount()
    {
        if (!$this->isPropertyAvailable("DeployedAppCount")) {
            return null;
        }
        return $this->getProperty("DeployedAppCount");
    }
    /**
     * @var integer
     */
    public function setDeployedAppCount($value)
    {
        $this->setProperty("DeployedAppCount", $value, true);
    }
    /**
     * @return bool
     */
    public function getFaceIdBlocked()
    {
        if (!$this->isPropertyAvailable("FaceIdBlocked")) {
            return null;
        }
        return $this->getProperty("FaceIdBlocked");
    }
    /**
     * @var bool
     */
    public function setFaceIdBlocked($value)
    {
        $this->setProperty("FaceIdBlocked", $value, true);
    }
    /**
     * @return ManagedAppPolicyDeploymentSummary
     */
    public function getDeploymentSummary()
    {
        if (!$this->isPropertyAvailable("DeploymentSummary")) {
            $this->setProperty("DeploymentSummary", new ManagedAppPolicyDeploymentSummary($this->getContext(), new ResourcePath("DeploymentSummary", $this->getResourcePath())));
        }
        return $this->getProperty("DeploymentSummary");
    }
    /**
     * @return string
     */
    public function getCustomBrowserProtocol()
    {
        if (!$this->isPropertyAvailable("CustomBrowserProtocol")) {
            return null;
        }
        return $this->getProperty("CustomBrowserProtocol");
    }
    /**
     * @var string
     */
    public function setCustomBrowserProtocol($value)
    {
        $this->setProperty("CustomBrowserProtocol", $value, true);
    }
}