<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileHashType File
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

use Microsoft\Graph\Core\Enum;

/**
* FileHashType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class FileHashType extends Enum
{
    /**
    * The Enum FileHashType
    */
    const UNKNOWN = "unknown";
    const SHA1 = "sha1";
    const SHA256 = "sha256";
    const MD5 = "md5";
    const AUTHENTICODE_HASH256 = "authenticodeHash256";
    const LS_HASH = "lsHash";
    const CTPH = "ctph";
    const PE_SHA1 = "peSha1";
    const PE_SHA256 = "peSha256";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}