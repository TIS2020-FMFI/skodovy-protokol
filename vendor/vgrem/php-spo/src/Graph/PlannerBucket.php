<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * The **plannerBucket** resource represents a bucket (or "custom column") for tasks in a plan in Office 365. It is contained in a [plannerPlan](plannerplan.md) and can have a collection of [plannerTasks](plannertask.md).
 */
class PlannerBucket extends ClientObject
{
    /**
     * Name of the bucket.
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * Name of the bucket.
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * Plan ID to which the bucket belongs.
     * @return string
     */
    public function getPlanId()
    {
        if (!$this->isPropertyAvailable("PlanId")) {
            return null;
        }
        return $this->getProperty("PlanId");
    }
    /**
     * Plan ID to which the bucket belongs.
     * @var string
     */
    public function setPlanId($value)
    {
        $this->setProperty("PlanId", $value, true);
    }
    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined [here](planner-order-hint-format.md).
     * @return string
     */
    public function getOrderHint()
    {
        if (!$this->isPropertyAvailable("OrderHint")) {
            return null;
        }
        return $this->getProperty("OrderHint");
    }
    /**
     * Hint used to order items of this type in a list view. The format is defined as outlined [here](planner-order-hint-format.md).
     * @var string
     */
    public function setOrderHint($value)
    {
        $this->setProperty("OrderHint", $value, true);
    }
}