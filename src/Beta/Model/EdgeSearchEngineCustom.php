<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdgeSearchEngineCustom File
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
* EdgeSearchEngineCustom class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EdgeSearchEngineCustom extends EdgeSearchEngineBase
{
    /**
    * Gets the edgeSearchEngineOpenSearchXmlUrl
    *
    * @return string The edgeSearchEngineOpenSearchXmlUrl
    */
    public function getEdgeSearchEngineOpenSearchXmlUrl()
    {
        if (array_key_exists("edgeSearchEngineOpenSearchXmlUrl", $this->_propDict)) {
            return $this->_propDict["edgeSearchEngineOpenSearchXmlUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the edgeSearchEngineOpenSearchXmlUrl
    *
    * @param string $val The value of the edgeSearchEngineOpenSearchXmlUrl
    *
    * @return EdgeSearchEngineCustom
    */
    public function setEdgeSearchEngineOpenSearchXmlUrl($val)
    {
        $this->_propDict["edgeSearchEngineOpenSearchXmlUrl"] = $val;
        return $this;
    }
}