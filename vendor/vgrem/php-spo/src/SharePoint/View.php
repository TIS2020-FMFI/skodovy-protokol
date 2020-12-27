<?php

/**
 * This file was generated by phpSPO model generator 2020-08-19T18:20:51+00:00 16.0.20405.12008
 */
namespace Office365\SharePoint;

use Office365\Runtime\Actions\DeleteEntityQuery;
use Office365\Runtime\Actions\InvokeMethodQuery;
use Office365\Runtime\Actions\UpdateEntityQuery;
use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Specifies 
 * a list 
 * view.The PageRenderType property is not included in the default 
 * scalar property set for this type.
 */
class View extends ClientObject
{
    /**
     * Updates view resource
     */
    public function update()
    {
        $qry = new UpdateEntityQuery($this);
        $this->getContext()->addQueryAndResultObject($qry, $this);
    }
    /**
     * Gets a value that specifies the collection of fields in the list view.
     * @return ViewFieldCollection
     */
    public function getViewFields()
    {
        if (!$this->isPropertyAvailable('ViewFields')) {
            $this->setProperty("ViewFields", new ViewFieldCollection($this->getContext(), new ResourcePath("ViewFields", $this->getResourcePath())));
        }
        return $this->getProperty("ViewFields");
    }
    /**
     * The recommended way to delete a view is to send a DELETE request to the View resource endpoint,
     * as shown in View request examples.
     * @return View
     */
    public function deleteObject()
    {
        $qry = new DeleteEntityQuery($this);
        $this->getContext()->addQuery($qry);
        return $this;
    }
    /**
     * Returns the list view as HTML.
     * @return View
     */
    public function renderAsHtml()
    {
        $qry = new InvokeMethodQuery($this, "renderashtml");
        $this->getContext()->addQuery($qry);
        return $this;
    }
    /**
     * Specifies fields 
     * (2) and functions that define totals shown in a list view.It MUST be 
     * NULL or an XML fragment that 
     * conforms to the following XML schema: 
     * <xs:sequence><xs:element name="FieldRef" 
     * type="FieldRefDefinitionAggregation" minOccurs="0" 
     * maxOccurs="unbounded" /></xs:sequence> 
     * where FieldRefDefinitionAggregation is specified in [MS-WSSCAML] 
     * section 2.3.2.2.
     * @return string
     */
    public function getAggregations()
    {
        if (!$this->isPropertyAvailable("Aggregations")) {
            return null;
        }
        return $this->getProperty("Aggregations");
    }
    /**
     * Specifies fields 
     * (2) and functions that define totals shown in a list view.It MUST be 
     * NULL or an XML fragment that 
     * conforms to the following XML schema: 
     * <xs:sequence><xs:element name="FieldRef" 
     * type="FieldRefDefinitionAggregation" minOccurs="0" 
     * maxOccurs="unbounded" /></xs:sequence> 
     * where FieldRefDefinitionAggregation is specified in [MS-WSSCAML] 
     * section 2.3.2.2.
     * @var string
     */
    public function setAggregations($value)
    {
        $this->setProperty("Aggregations", $value, true);
    }
    /**
     * Specifies 
     * whether totals are shown in the list view. It MUST be 
     * NULL If Aggregations is NULL; otherwise it MUST be "On" or 
     * "Off".
     * @return string
     */
    public function getAggregationsStatus()
    {
        if (!$this->isPropertyAvailable("AggregationsStatus")) {
            return null;
        }
        return $this->getProperty("AggregationsStatus");
    }
    /**
     * Specifies 
     * whether totals are shown in the list view. It MUST be 
     * NULL If Aggregations is NULL; otherwise it MUST be "On" or 
     * "Off".
     * @var string
     */
    public function setAggregationsStatus($value)
    {
        $this->setProperty("AggregationsStatus", $value, true);
    }
    /**
     * Specifies 
     * the base 
     * view identifier of the list view.It MUST be 
     * an integer encoded as a string. Its value MUST be equal to or greater than 0. 
     * Its value MUST be equal to or less than 255.
     * @return string
     */
    public function getBaseViewId()
    {
        if (!$this->isPropertyAvailable("BaseViewId")) {
            return null;
        }
        return $this->getProperty("BaseViewId");
    }
    /**
     * Specifies 
     * the base 
     * view identifier of the list view.It MUST be 
     * an integer encoded as a string. Its value MUST be equal to or greater than 0. 
     * Its value MUST be equal to or less than 255.
     * @var string
     */
    public function setBaseViewId($value)
    {
        $this->setProperty("BaseViewId", $value, true);
    }
    /**
     * Specifies 
     * the width of columns.
     * @return string
     */
    public function getColumnWidth()
    {
        if (!$this->isPropertyAvailable("ColumnWidth")) {
            return null;
        }
        return $this->getProperty("ColumnWidth");
    }
    /**
     * Specifies 
     * the width of columns.
     * @var string
     */
    public function setColumnWidth($value)
    {
        $this->setProperty("ColumnWidth", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the content type with 
     * which the view is associated.
     * @return ContentTypeId
     */
    public function getContentTypeId()
    {
        if (!$this->isPropertyAvailable("ContentTypeId")) {
            return null;
        }
        return $this->getProperty("ContentTypeId");
    }
    /**
     * Specifies 
     * the identifier of the content type with 
     * which the view is associated.
     * @var ContentTypeId
     */
    public function setContentTypeId($value)
    {
        $this->setProperty("ContentTypeId", $value, true);
    }
    /**
     * Specifies 
     * the Custom Formatter used for the view.
     * @return string
     */
    public function getCustomFormatter()
    {
        if (!$this->isPropertyAvailable("CustomFormatter")) {
            return null;
        }
        return $this->getProperty("CustomFormatter");
    }
    /**
     * Specifies 
     * the Custom Formatter used for the view.
     * @var string
     */
    public function setCustomFormatter($value)
    {
        $this->setProperty("CustomFormatter", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is the default 
     * list view.
     * @return bool
     */
    public function getDefaultView()
    {
        if (!$this->isPropertyAvailable("DefaultView")) {
            return null;
        }
        return $this->getProperty("DefaultView");
    }
    /**
     * Specifies 
     * whether the list view is the default 
     * list view.
     * @var bool
     */
    public function setDefaultView($value)
    {
        $this->setProperty("DefaultView", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is the default 
     * list view for the content type 
     * specified by ContentTypeId.
     * @return bool
     */
    public function getDefaultViewForContentType()
    {
        if (!$this->isPropertyAvailable("DefaultViewForContentType")) {
            return null;
        }
        return $this->getProperty("DefaultViewForContentType");
    }
    /**
     * Specifies 
     * whether the list view is the default 
     * list view for the content type 
     * specified by ContentTypeId.
     * @var bool
     */
    public function setDefaultViewForContentType($value)
    {
        $this->setProperty("DefaultViewForContentType", $value, true);
    }
    /**
     * Specifies 
     * whether the list view was 
     * modified in an editor.
     * @return bool
     */
    public function getEditorModified()
    {
        if (!$this->isPropertyAvailable("EditorModified")) {
            return null;
        }
        return $this->getProperty("EditorModified");
    }
    /**
     * Specifies 
     * whether the list view was 
     * modified in an editor.
     * @var bool
     */
    public function setEditorModified($value)
    {
        $this->setProperty("EditorModified", $value, true);
    }
    /**
     * Specifies 
     * the column and row formatting for the list view.It MUST be 
     * NULL or an XML fragment that 
     * conforms to ViewFormatDefinitions as specified in [MS-WSSCAML] 
     * section 2.3.2.21.
     * @return string
     */
    public function getFormats()
    {
        if (!$this->isPropertyAvailable("Formats")) {
            return null;
        }
        return $this->getProperty("Formats");
    }
    /**
     * Specifies 
     * the column and row formatting for the list view.It MUST be 
     * NULL or an XML fragment that 
     * conforms to ViewFormatDefinitions as specified in [MS-WSSCAML] 
     * section 2.3.2.21.
     * @var string
     */
    public function setFormats($value)
    {
        $this->setProperty("Formats", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is hidden.
     * @return bool
     */
    public function getHidden()
    {
        if (!$this->isPropertyAvailable("Hidden")) {
            return null;
        }
        return $this->getProperty("Hidden");
    }
    /**
     * Specifies 
     * whether the list view is hidden.
     * @var bool
     */
    public function setHidden($value)
    {
        $this->setProperty("Hidden", $value, true);
    }
    /**
     * Specifies 
     * the XML 
     * document that represents the list view.It MUST 
     * NOT be NULL. It MUST be exactly one XML fragment 
     * conforming to ViewDefinitions as specified in [MS-WSSCAML] 
     * section 2.3.2.16.
     * @return string
     */
    public function getHtmlSchemaXml()
    {
        if (!$this->isPropertyAvailable("HtmlSchemaXml")) {
            return null;
        }
        return $this->getProperty("HtmlSchemaXml");
    }
    /**
     * Specifies 
     * the XML 
     * document that represents the list view.It MUST 
     * NOT be NULL. It MUST be exactly one XML fragment 
     * conforming to ViewDefinitions as specified in [MS-WSSCAML] 
     * section 2.3.2.16.
     * @var string
     */
    public function setHtmlSchemaXml($value)
    {
        $this->setProperty("HtmlSchemaXml", $value, true);
    }
    /**
     * Specifies 
     * the base 
     * view identifier of the list view.It MUST be 
     * an integer encoded as a string. Its value MUST be equal to or greater than 0. 
     * Its value MUST be equal to or less than 255.
     * @return string
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * the base 
     * view identifier of the list view.It MUST be 
     * an integer encoded as a string. Its value MUST be equal to or greater than 0. 
     * Its value MUST be equal to or less than 255.
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * of the image for the list view.It MUST be 
     * a server-relative 
     * URL or an absolute URL.
     * @return string
     */
    public function getImageUrl()
    {
        if (!$this->isPropertyAvailable("ImageUrl")) {
            return null;
        }
        return $this->getProperty("ImageUrl");
    }
    /**
     * Specifies 
     * the URL 
     * of the image for the list view.It MUST be 
     * a server-relative 
     * URL or an absolute URL.
     * @var string
     */
    public function setImageUrl($value)
    {
        $this->setProperty("ImageUrl", $value, true);
    }
    /**
     * Specifies 
     * whether the current folder is displayed 
     * in the list view.
     * @return bool
     */
    public function getIncludeRootFolder()
    {
        if (!$this->isPropertyAvailable("IncludeRootFolder")) {
            return null;
        }
        return $this->getProperty("IncludeRootFolder");
    }
    /**
     * Specifies 
     * whether the current folder is displayed 
     * in the list view.
     * @var bool
     */
    public function setIncludeRootFolder($value)
    {
        $this->setProperty("IncludeRootFolder", $value, true);
    }
    /**
     * Specifies 
     * the joins that are used in the list view.It MUST be 
     * NULL or an XML fragment that conforms to ListJoinsDefinition as 
     * specified in [MS-WSSCAML] 
     * section 2.2.2.21.
     * @return string
     */
    public function getViewJoins()
    {
        if (!$this->isPropertyAvailable("ViewJoins")) {
            return null;
        }
        return $this->getProperty("ViewJoins");
    }
    /**
     * Specifies 
     * the joins that are used in the list view.It MUST be 
     * NULL or an XML fragment that conforms to ListJoinsDefinition as 
     * specified in [MS-WSSCAML] 
     * section 2.2.2.21.
     * @var string
     */
    public function setViewJoins($value)
    {
        $this->setProperty("ViewJoins", $value, true);
    }
    /**
     * Gets the 
     * name of an external ECMAScript ([ECMA-262-1999]) 
     * file containing any logic for this list view.
     * @return string
     */
    public function getJSLink()
    {
        if (!$this->isPropertyAvailable("JSLink")) {
            return null;
        }
        return $this->getProperty("JSLink");
    }
    /**
     * Gets the 
     * name of an external ECMAScript ([ECMA-262-1999]) 
     * file containing any logic for this list view.
     * @var string
     */
    public function setJSLink($value)
    {
        $this->setProperty("JSLink", $value, true);
    }
    /**
     * Specifies 
     * the View (section 3.2.5.137) XML 
     * that conforms to the ViewDefinition type as defined in [MS-WSSCAML] 
     * section 2.3.2.17.<122>
     * @return string
     */
    public function getListViewXml()
    {
        if (!$this->isPropertyAvailable("ListViewXml")) {
            return null;
        }
        return $this->getProperty("ListViewXml");
    }
    /**
     * Specifies 
     * the View (section 3.2.5.137) XML 
     * that conforms to the ViewDefinition type as defined in [MS-WSSCAML] 
     * section 2.3.2.17.<122>
     * @var string
     */
    public function setListViewXml($value)
    {
        $this->setProperty("ListViewXml", $value, true);
    }
    /**
     * Specifies 
     * the view method for the list view.It MUST be 
     * NULL or an XML document where 
     * the root 
     * element is a valid Method XML fragment as 
     * specified in [MS-WSSCAP] 
     * section 2.2.5.2.
     * @return string
     */
    public function getMethod()
    {
        if (!$this->isPropertyAvailable("Method")) {
            return null;
        }
        return $this->getProperty("Method");
    }
    /**
     * Specifies 
     * the view method for the list view.It MUST be 
     * NULL or an XML document where 
     * the root 
     * element is a valid Method XML fragment as 
     * specified in [MS-WSSCAP] 
     * section 2.2.5.2.
     * @var string
     */
    public function setMethod($value)
    {
        $this->setProperty("Method", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is the default 
     * mobile list view. 
     * @return bool
     */
    public function getMobileDefaultView()
    {
        if (!$this->isPropertyAvailable("MobileDefaultView")) {
            return null;
        }
        return $this->getProperty("MobileDefaultView");
    }
    /**
     * Specifies 
     * whether the list view is the default 
     * mobile list view. 
     * @var bool
     */
    public function setMobileDefaultView($value)
    {
        $this->setProperty("MobileDefaultView", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is a mobile 
     * list view.
     * @return bool
     */
    public function getMobileView()
    {
        if (!$this->isPropertyAvailable("MobileView")) {
            return null;
        }
        return $this->getProperty("MobileView");
    }
    /**
     * Specifies 
     * whether the list view is a mobile 
     * list view.
     * @var bool
     */
    public function setMobileView($value)
    {
        $this->setProperty("MobileView", $value, true);
    }
    /**
     * Specifies 
     * the content approval type for the list view.It MUST be 
     * one of the following: NULL, "", "Moderator", 
     * "Contributor", or "HideUnapproved".
     * @return string
     */
    public function getModerationType()
    {
        if (!$this->isPropertyAvailable("ModerationType")) {
            return null;
        }
        return $this->getProperty("ModerationType");
    }
    /**
     * Specifies 
     * the content approval type for the list view.It MUST be 
     * one of the following: NULL, "", "Moderator", 
     * "Contributor", or "HideUnapproved".
     * @var string
     */
    public function setModerationType($value)
    {
        $this->setProperty("ModerationType", $value, true);
    }
    /**
     * @return string
     */
    public function getNewDocumentTemplates()
    {
        if (!$this->isPropertyAvailable("NewDocumentTemplates")) {
            return null;
        }
        return $this->getProperty("NewDocumentTemplates");
    }
    /**
     * @var string
     */
    public function setNewDocumentTemplates($value)
    {
        $this->setProperty("NewDocumentTemplates", $value, true);
    }
    /**
     * Specifies 
     * whether list items can be 
     * reordered in the list view.
     * @return bool
     */
    public function getOrderedView()
    {
        if (!$this->isPropertyAvailable("OrderedView")) {
            return null;
        }
        return $this->getProperty("OrderedView");
    }
    /**
     * Specifies 
     * whether list items can be 
     * reordered in the list view.
     * @var bool
     */
    public function setOrderedView($value)
    {
        $this->setProperty("OrderedView", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is a paged 
     * view.
     * @return bool
     */
    public function getPaged()
    {
        if (!$this->isPropertyAvailable("Paged")) {
            return null;
        }
        return $this->getProperty("Paged");
    }
    /**
     * Specifies 
     * whether the list view is a paged 
     * view.
     * @var bool
     */
    public function setPaged($value)
    {
        $this->setProperty("Paged", $value, true);
    }
    /**
     * @return integer
     */
    public function getPageRenderType()
    {
        if (!$this->isPropertyAvailable("PageRenderType")) {
            return null;
        }
        return $this->getProperty("PageRenderType");
    }
    /**
     * @var integer
     */
    public function setPageRenderType($value)
    {
        $this->setProperty("PageRenderType", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is a personal 
     * view. If the value is "false", the list 
     * view is a public view.
     * @return bool
     */
    public function getPersonalView()
    {
        if (!$this->isPropertyAvailable("PersonalView")) {
            return null;
        }
        return $this->getProperty("PersonalView");
    }
    /**
     * Specifies 
     * whether the list view is a personal 
     * view. If the value is "false", the list 
     * view is a public view.
     * @var bool
     */
    public function setPersonalView($value)
    {
        $this->setProperty("PersonalView", $value, true);
    }
    /**
     * Specifies 
     * the dependent 
     * lookup field to be used by the list view.It MUST be 
     * NULL or an XML fragment that 
     * conforms to ProjectedFieldsDefinition as specified in [MS-WSSCAML] 
     * section 2.2.2.19.
     * @return string
     */
    public function getViewProjectedFields()
    {
        if (!$this->isPropertyAvailable("ViewProjectedFields")) {
            return null;
        }
        return $this->getProperty("ViewProjectedFields");
    }
    /**
     * Specifies 
     * the dependent 
     * lookup field to be used by the list view.It MUST be 
     * NULL or an XML fragment that 
     * conforms to ProjectedFieldsDefinition as specified in [MS-WSSCAML] 
     * section 2.2.2.19.
     * @var string
     */
    public function setViewProjectedFields($value)
    {
        $this->setProperty("ViewProjectedFields", $value, true);
    }
    /**
     * Specifies 
     * the query 
     * that is used by the list view.It MUST be 
     * NULL or a valid XML fragment that 
     * conforms to CamlQueryRoot as specified in [MS-WSSCAML] 
     * section 2.2.2.1.
     * @return string
     */
    public function getViewQuery()
    {
        if (!$this->isPropertyAvailable("ViewQuery")) {
            return null;
        }
        return $this->getProperty("ViewQuery");
    }
    /**
     * Specifies 
     * the query 
     * that is used by the list view.It MUST be 
     * NULL or a valid XML fragment that 
     * conforms to CamlQueryRoot as specified in [MS-WSSCAML] 
     * section 2.2.2.1.
     * @var string
     */
    public function setViewQuery($value)
    {
        $this->setProperty("ViewQuery", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is 
     * read-only.
     * @return bool
     */
    public function getReadOnlyView()
    {
        if (!$this->isPropertyAvailable("ReadOnlyView")) {
            return null;
        }
        return $this->getProperty("ReadOnlyView");
    }
    /**
     * Specifies 
     * whether the list view is 
     * read-only.
     * @var bool
     */
    public function setReadOnlyView($value)
    {
        $this->setProperty("ReadOnlyView", $value, true);
    }
    /**
     * Specifies 
     * whether the list view requires 
     * client integration rights.
     * @return bool
     */
    public function getRequiresClientIntegration()
    {
        if (!$this->isPropertyAvailable("RequiresClientIntegration")) {
            return null;
        }
        return $this->getProperty("RequiresClientIntegration");
    }
    /**
     * Specifies 
     * whether the list view requires 
     * client integration rights.
     * @var bool
     */
    public function setRequiresClientIntegration($value)
    {
        $this->setProperty("RequiresClientIntegration", $value, true);
    }
    /**
     * Specifies 
     * the maximum number of list items to 
     * display in a visual page of the list view.Its value 
     * MUST be equal to or less than 2147483647. 
     * @return integer
     */
    public function getRowLimit()
    {
        if (!$this->isPropertyAvailable("RowLimit")) {
            return null;
        }
        return $this->getProperty("RowLimit");
    }
    /**
     * Specifies 
     * the maximum number of list items to 
     * display in a visual page of the list view.Its value 
     * MUST be equal to or less than 2147483647. 
     * @var integer
     */
    public function setRowLimit($value)
    {
        $this->setProperty("RowLimit", $value, true);
    }
    /**
     * Specifies 
     * the scope for the list view.
     * @return integer
     */
    public function getScope()
    {
        if (!$this->isPropertyAvailable("Scope")) {
            return null;
        }
        return $this->getProperty("Scope");
    }
    /**
     * Specifies 
     * the scope for the list view.
     * @var integer
     */
    public function setScope($value)
    {
        $this->setProperty("Scope", $value, true);
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the list view page.It MUST 
     * NOT be NULL. It MUST NOT be empty. It MUST be a URL of server-relative form. 
     * @return string
     */
    public function getServerRelativeUrl()
    {
        if (!$this->isPropertyAvailable("ServerRelativeUrl")) {
            return null;
        }
        return $this->getProperty("ServerRelativeUrl");
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the list view page.It MUST 
     * NOT be NULL. It MUST NOT be empty. It MUST be a URL of server-relative form. 
     * @var string
     */
    public function setServerRelativeUrl($value)
    {
        $this->setProperty("ServerRelativeUrl", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the view style for the list view.It MUST be 
     * NULL or conform to ViewStyleReference as specified in [MS-WSSCAML] 
     * section 2.3.2.20.
     * @return string
     */
    public function getStyleId()
    {
        if (!$this->isPropertyAvailable("StyleId")) {
            return null;
        }
        return $this->getProperty("StyleId");
    }
    /**
     * Specifies 
     * the identifier of the view style for the list view.It MUST be 
     * NULL or conform to ViewStyleReference as specified in [MS-WSSCAML] 
     * section 2.3.2.20.
     * @var string
     */
    public function setStyleId($value)
    {
        $this->setProperty("StyleId", $value, true);
    }
    /**
     * @return bool
     */
    public function getTabularView()
    {
        if (!$this->isPropertyAvailable("TabularView")) {
            return null;
        }
        return $this->getProperty("TabularView");
    }
    /**
     * @var bool
     */
    public function setTabularView($value)
    {
        $this->setProperty("TabularView", $value, true);
    }
    /**
     * Specifies 
     * whether the list view is a 
     * threaded view.
     * @return bool
     */
    public function getThreaded()
    {
        if (!$this->isPropertyAvailable("Threaded")) {
            return null;
        }
        return $this->getProperty("Threaded");
    }
    /**
     * Specifies 
     * whether the list view is a 
     * threaded view.
     * @var bool
     */
    public function setThreaded($value)
    {
        $this->setProperty("Threaded", $value, true);
    }
    /**
     * Specifies 
     * the display 
     * name of the list view.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 255. 
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * Specifies 
     * the display 
     * name of the list view.It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 255. 
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Specifies 
     * the toolbar 
     * for the list view.It MUST be 
     * NULL or conform to the following XML schema:<xs:complexType><xs:sequence><xs:any minOccurs="0" maxOccurs="unbounded" namespace="##any" processContents="skip"/></xs:sequence><xs:anyAttribute processContents="skip"/></xs:complexType>
     * @return string
     */
    public function getToolbar()
    {
        if (!$this->isPropertyAvailable("Toolbar")) {
            return null;
        }
        return $this->getProperty("Toolbar");
    }
    /**
     * Specifies 
     * the toolbar 
     * for the list view.It MUST be 
     * NULL or conform to the following XML schema:<xs:complexType><xs:sequence><xs:any minOccurs="0" maxOccurs="unbounded" namespace="##any" processContents="skip"/></xs:sequence><xs:anyAttribute processContents="skip"/></xs:complexType>
     * @var string
     */
    public function setToolbar($value)
    {
        $this->setProperty("Toolbar", $value, true);
    }
    /**
     * Specifies 
     * the name of the template for the toolbar that is used 
     * in the list view, specified 
     * in [MS-WSSCAML] 
     * section 2.3.2.17.2.
     * @return string
     */
    public function getToolbarTemplateName()
    {
        if (!$this->isPropertyAvailable("ToolbarTemplateName")) {
            return null;
        }
        return $this->getProperty("ToolbarTemplateName");
    }
    /**
     * Specifies 
     * the name of the template for the toolbar that is used 
     * in the list view, specified 
     * in [MS-WSSCAML] 
     * section 2.3.2.17.2.
     * @var string
     */
    public function setToolbarTemplateName($value)
    {
        $this->setProperty("ToolbarTemplateName", $value, true);
    }
    /**
     * Specifies 
     * the type of the list view.It MUST be one of the following: 
     * "HTML", "GRID", "CALENDAR", 
     * "RECURRENCE", "CHART", or "GANTT".
     * @return string
     */
    public function getViewType()
    {
        if (!$this->isPropertyAvailable("ViewType")) {
            return null;
        }
        return $this->getProperty("ViewType");
    }
    /**
     * Specifies 
     * the type of the list view.It MUST be one of the following: 
     * "HTML", "GRID", "CALENDAR", 
     * "RECURRENCE", "CHART", or "GANTT".
     * @var string
     */
    public function setViewType($value)
    {
        $this->setProperty("ViewType", $value, true);
    }
    /**
     * Specifies 
     * a reference 
     * to the field (2) that is 
     * used to render the Calendar View or Gantt view. If the view is a Calendar View 
     * or Gantt View, this section MUST be specified. For other view types, it MUST be 
     * ignored.It MUST be 
     * NULL or an XML fragment that 
     * conforms to the following XML schema:<xs:sequence><xs:element name="FieldRef" type="FieldRefDefinitionViewData" minOccurs="3" maxOccurs="5"/></xs:sequence> 
     * where FieldRefDefinitionViewData is specified in [MS-WSSCAML] 
     * section 2.3.2.18.
     * @return string
     */
    public function getViewData()
    {
        if (!$this->isPropertyAvailable("ViewData")) {
            return null;
        }
        return $this->getProperty("ViewData");
    }
    /**
     * Specifies 
     * a reference 
     * to the field (2) that is 
     * used to render the Calendar View or Gantt view. If the view is a Calendar View 
     * or Gantt View, this section MUST be specified. For other view types, it MUST be 
     * ignored.It MUST be 
     * NULL or an XML fragment that 
     * conforms to the following XML schema:<xs:sequence><xs:element name="FieldRef" type="FieldRefDefinitionViewData" minOccurs="3" maxOccurs="5"/></xs:sequence> 
     * where FieldRefDefinitionViewData is specified in [MS-WSSCAML] 
     * section 2.3.2.18.
     * @var string
     */
    public function setViewData($value)
    {
        $this->setProperty("ViewData", $value, true);
    }
    /**
     * Specifies 
     * how the view is layed out.
     * @return Visualization
     */
    public function getVisualizationInfo()
    {
        if (!$this->isPropertyAvailable("VisualizationInfo")) {
            return null;
        }
        return $this->getProperty("VisualizationInfo");
    }
    /**
     * Specifies 
     * how the view is layed out.
     * @var Visualization
     */
    public function setVisualizationInfo($value)
    {
        $this->setProperty("VisualizationInfo", $value, true);
    }
    /**
     * @return string
     */
    public function getGridLayout()
    {
        if (!$this->isPropertyAvailable("GridLayout")) {
            return null;
        }
        return $this->getProperty("GridLayout");
    }
    /**
     * @var string
     */
    public function setGridLayout($value)
    {
        $this->setProperty("GridLayout", $value, true);
    }
    /**
     * @return string
     */
    public function getViewType2()
    {
        if (!$this->isPropertyAvailable("ViewType2")) {
            return null;
        }
        return $this->getProperty("ViewType2");
    }
    /**
     * @var string
     */
    public function setViewType2($value)
    {
        $this->setProperty("ViewType2", $value, true);
    }
    /**
     * @return string
     */
    public function getCalendarViewStyles()
    {
        if (!$this->isPropertyAvailable("CalendarViewStyles")) {
            return null;
        }
        return $this->getProperty("CalendarViewStyles");
    }
    /**
     * @var string
     */
    public function setCalendarViewStyles($value)
    {
        $this->setProperty("CalendarViewStyles", $value, true);
    }
    /**
     * @return string
     */
    public function getAssosciatedContentTypeId()
    {
        if (!$this->isPropertyAvailable("AssosciatedContentTypeId")) {
            return null;
        }
        return $this->getProperty("AssosciatedContentTypeId");
    }
    /**
     * @var string
     */
    public function setAssosciatedContentTypeId($value)
    {
        $this->setProperty("AssosciatedContentTypeId", $value, true);
    }
    /**
     * @return string
     */
    public function getAssociatedContentTypeId()
    {
        if (!$this->isPropertyAvailable("AssociatedContentTypeId")) {
            return null;
        }
        return $this->getProperty("AssociatedContentTypeId");
    }
    /**
     * @var string
     */
    public function setAssociatedContentTypeId($value)
    {
        $this->setProperty("AssociatedContentTypeId", $value, true);
    }
    /**
     * Specifies 
     * the server relative path of the list view page.It MUST 
     * NOT be NULL. 
     * @return SPResourcePath
     */
    public function getServerRelativePath()
    {
        if (!$this->isPropertyAvailable("ServerRelativePath")) {
            return null;
        }
        return $this->getProperty("ServerRelativePath");
    }
    /**
     * Specifies 
     * the server relative path of the list view page.It MUST 
     * NOT be NULL. 
     * @var SPResourcePath
     */
    public function setServerRelativePath($value)
    {
        $this->setProperty("ServerRelativePath", $value, true);
    }
}