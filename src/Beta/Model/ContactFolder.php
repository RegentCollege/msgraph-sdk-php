<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContactFolder File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* ContactFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ContactFolder extends Entity
{
    /**
    * Gets the parentFolderId
    *
    * @return string The parentFolderId
    */
    public function getParentFolderId()
    {
        if (array_key_exists("parentFolderId", $this->_propDict)) {
            return $this->_propDict["parentFolderId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentFolderId
    *
    * @param string $val The parentFolderId
    *
    * @return ContactFolder
    */
    public function setParentFolderId($val)
    {
        $this->_propDict["parentFolderId"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return ContactFolder
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the wellKnownName
    *
    * @return string The wellKnownName
    */
    public function getWellKnownName()
    {
        if (array_key_exists("wellKnownName", $this->_propDict)) {
            return $this->_propDict["wellKnownName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wellKnownName
    *
    * @param string $val The wellKnownName
    *
    * @return ContactFolder
    */
    public function setWellKnownName($val)
    {
        $this->_propDict["wellKnownName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contacts
     *
     * @return array The contacts
     */
    public function getContacts()
    {
        if (array_key_exists("contacts", $this->_propDict)) {
           return $this->_propDict["contacts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contacts
    *
    * @param Contact $val The contacts
    *
    * @return ContactFolder
    */
    public function setContacts($val)
    {
		$this->_propDict["contacts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the childFolders
     *
     * @return array The childFolders
     */
    public function getChildFolders()
    {
        if (array_key_exists("childFolders", $this->_propDict)) {
           return $this->_propDict["childFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the childFolders
    *
    * @param ContactFolder $val The childFolders
    *
    * @return ContactFolder
    */
    public function setChildFolders($val)
    {
		$this->_propDict["childFolders"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return ContactFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    
}