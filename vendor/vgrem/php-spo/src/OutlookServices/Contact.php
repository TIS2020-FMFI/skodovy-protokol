<?php

/**
 * This file was generated by phpSPO model generator 2020-04-25T20:52:14+00:00 16.0.20008.12009
 */
namespace Office365\OutlookServices;

/**
 * A contact, which is an item in Outlook for users to organize and save information about the people and organizations
 * that they communicate with. Contacts are contained in contact folders.
 */
class Contact extends Item
{
    /**
     * The name of the contact's assistant.
     * @var string
     */
    public $AssistantName;
    /**
     * The ID of the contact's parent folder.
     * @var string
     */
    public $ParentFolderId;
    /**
     * The contact's birthday.
     * @var string
     */
    public $Birthday;
    /**
     * The contact's given name.
     * @var string
     */
    public $GivenName;
    /**
     * The contact's initials.
     * @var string
     */
    public $Initials;
    /**
     * The contact's surname.
     * @var string
     */
    public $Surname;
    /**
     * The contact's job title.
     * @var string
     */
    public $JobTitle;
    /**
     * The contact's company name.
     * @var string
     */
    public $CompanyName;
    /**
     * @var string
     */
    public $Department;
    /**
     * @var array
     */
    public $BusinessPhones;
    /**
     * @var string
     */
    public $MobilePhone1;
    /**
     * The contact's email addresses.
     * @var array
     */
    public $EmailAddresses;
    /**
     * The contact's generation.
     * @var string
     */
    public $Generation;
    /**
     * The contact's home address.
     * @var PhysicalAddress
     */
    public $HomeAddress;
    /**
     * The contact's business address.
     * @var PhysicalAddress
     */
    public $BusinessAddress;
    /**
     * @var PhysicalAddress
     */
    public $OtherAddress;
    /**
     * @var array
     */
    public $HomePhones;
    /**
     * The contact's instant messaging (IM) addresses.
     * @var array
     */
    public $ImAddresses;
    /**
     * The name of the contact's manager.
     * @var string
     */
    public $Manager;
    /**
     * The contact's middle name.
     * @var string
     */
    public $MiddleName;
    /**
     * The contact's nickname.
     * @var string
     */
    public $NickName;
    /**
     * The contact's notes.
     * @var string
     */
    public $PersonalNotes;
    /**
     * The contact's website.
     * @var string
     */
    public $BusinessHomePage;
    /**
     * @var string
     */
    public $FileAs;
    /**
     * @var string
     */
    public $DisplayName;
    /**
     * @var string
     */
    public $Title;
    /**
     * @var string
     */
    public $YomiGivenName;
    /**
     * @var string
     */
    public $YomiSurname;
    /**
     * @var string
     */
    public $YomiCompanyName;
    /**
     * @var string
     */
    public $OfficeLocation;
    /**
     * @var string
     */
    public $Profession;
    /**
     * @return PhysicalAddress
     */
    public function getHomeAddress()
    {
        if (!$this->isPropertyAvailable("HomeAddress")) {
            return null;
        }
        return $this->getProperty("HomeAddress");
    }
    /**
     * @var PhysicalAddress
     */
    public function setHomeAddress($value)
    {
        $this->setProperty("HomeAddress", $value, true);
    }
    /**
     * @return PhysicalAddress
     */
    public function getBusinessAddress()
    {
        if (!$this->isPropertyAvailable("BusinessAddress")) {
            return null;
        }
        return $this->getProperty("BusinessAddress");
    }
    /**
     * @var PhysicalAddress
     */
    public function setBusinessAddress($value)
    {
        $this->setProperty("BusinessAddress", $value, true);
    }
    /**
     * @return PhysicalAddress
     */
    public function getOtherAddress()
    {
        if (!$this->isPropertyAvailable("OtherAddress")) {
            return null;
        }
        return $this->getProperty("OtherAddress");
    }
    /**
     * @var PhysicalAddress
     */
    public function setOtherAddress($value)
    {
        $this->setProperty("OtherAddress", $value, true);
    }
    /**
     * @var string
     */
    public $SpouseName;
    /**
     * @var array
     */
    public $Children;
}