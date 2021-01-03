<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:04:37+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

class WorkbookChartAreaFormat extends ClientObject
{
    /**
     * @return WorkbookChartFill
     */
    public function getFill()
    {
        if (!$this->isPropertyAvailable("Fill")) {
            $this->setProperty("Fill", new WorkbookChartFill($this->getContext(), new ResourcePath("Fill", $this->getResourcePath())));
        }
        return $this->getProperty("Fill");
    }
    /**
     * @return WorkbookChartFont
     */
    public function getFont()
    {
        if (!$this->isPropertyAvailable("Font")) {
            $this->setProperty("Font", new WorkbookChartFont($this->getContext(), new ResourcePath("Font", $this->getResourcePath())));
        }
        return $this->getProperty("Font");
    }
}