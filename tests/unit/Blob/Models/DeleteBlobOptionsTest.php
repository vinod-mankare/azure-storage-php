<?php

/**
 * LICENSE: The MIT License (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * https://github.com/azure/azure-storage-php/LICENSE
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Tests\Unit\Blob\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @link      https://github.com/azure/azure-storage-php
 */
namespace MicrosoftAzure\Storage\Tests\Unit\Blob\Models;
use MicrosoftAzure\Storage\Tests\Framework\TestResources;
use MicrosoftAzure\Storage\Blob\Models\AccessCondition;
use MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions;

/**
 * Unit tests for class DeleteBlobOptions
 *
 * @category  Microsoft
 * @package   MicrosoftAzure\Storage\Tests\Unit\Blob\Models
 * @author    Azure Storage PHP SDK <dmsh@microsoft.com>
 * @copyright 2016 Microsoft Corporation
 * @license   https://github.com/azure/azure-storage-php/LICENSE
 * @version   Release: 0.10.1
 * @link      https://github.com/azure/azure-storage-php
 */
class DeleteBlobOptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::setLeaseId
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::getLeaseId
     */
    public function testSetLeaseId()
    {
        // Setup
        $expected = '0x8CAFB82EFF70C46';
        $options = new DeleteBlobOptions();
        $options->setLeaseId($expected);
        
        // Test
        $options->setLeaseId($expected);
        
        // Assert
        $this->assertEquals($expected, $options->getLeaseId());
    }
    
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::getAccessCondition
     */
    public function testGetAccessCondition()
    {
        // Setup
        $expected = AccessCondition::none();
        $result = new DeleteBlobOptions();
        $result->setAccessCondition($expected);
        
        // Test
        $actual = $result->getAccessCondition();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::setAccessCondition
     */
    public function testSetAccessCondition()
    {
        // Setup
        $expected = AccessCondition::none();
        $result = new DeleteBlobOptions();
        
        // Test
        $result->setAccessCondition($expected);
        
        // Assert
        $this->assertEquals($expected, $result->getAccessCondition());
    }
    
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::setSnapshot
     */
    public function testSetSnapshot()
    {
        // Setup
        $blob = new DeleteBlobOptions();
        $expected = TestResources::QUEUE1_NAME;
        
        // Test
        $blob->setSnapshot($expected);
        
        // Assert
        $this->assertEquals($expected, $blob->getSnapshot());
    }
    
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::getSnapshot
     */
    public function testGetSnapshot()
    {
        // Setup
        $blob = new DeleteBlobOptions();
        $expected = TestResources::QUEUE_URI;
        $blob->setSnapshot($expected);
        
        // Test
        $actual = $blob->getSnapshot();
        
        // Assert
        $this->assertEquals($expected, $actual);
    }
    
    /**
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::setDeleteSnaphotsOnly
     * @covers MicrosoftAzure\Storage\Blob\Models\DeleteBlobOptions::getDeleteSnaphotsOnly
     */
    public function testSetDeleteSnaphotsOnly()
    {
        // Setup
        $expected = true;
        $options = new DeleteBlobOptions();
        $options->setDeleteSnaphotsOnly($expected);
        
        // Test
        $options->setDeleteSnaphotsOnly($expected);
        
        // Assert
        $this->assertEquals($expected, $options->getDeleteSnaphotsOnly());
    }
}


