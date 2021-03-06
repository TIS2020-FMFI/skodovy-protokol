<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 *  Represents an item in a sharepoint list.
 */
class ListItem extends ClientObject
{
    /**
     * @return SharepointIds
     */
    public function getSharepointIds()
    {
        if (!$this->isPropertyAvailable("SharepointIds")) {
            return null;
        }
        return $this->getProperty("SharepointIds");
    }
    /**
     * @var SharepointIds
     */
    public function setSharepointIds($value)
    {
        $this->setProperty("SharepointIds", $value, true);
    }
    /**
     * @return ItemAnalytics
     */
    public function getAnalytics()
    {
        if (!$this->isPropertyAvailable("Analytics")) {
            $this->setProperty("Analytics", new ItemAnalytics($this->getContext(), new ResourcePath("Analytics", $this->getResourcePath())));
        }
        return $this->getProperty("Analytics");
    }
    /**
     * @return DriveItem
     */
    public function getDriveItem()
    {
        if (!$this->isPropertyAvailable("DriveItem")) {
            $this->setProperty("DriveItem", new DriveItem($this->getContext(), new ResourcePath("DriveItem", $this->getResourcePath())));
        }
        return $this->getProperty("DriveItem");
    }
    /**
     * @return ContentTypeInfo
     */
    public function getContentType()
    {
        if (!$this->isPropertyAvailable("ContentType")) {
            return null;
        }
        return $this->getProperty("ContentType");
    }
    /**
     * @var ContentTypeInfo
     */
    public function setContentType($value)
    {
        $this->setProperty("ContentType", $value, true);
    }
    /**
     * @return FieldValueSet
     */
    public function getFields()
    {
        if (!$this->isPropertyAvailable("Fields")) {
            $this->setProperty("Fields", new FieldValueSet($this->getContext(), new ResourcePath("Fields", $this->getResourcePath())));
        }
        return $this->getProperty("Fields");
    }
}