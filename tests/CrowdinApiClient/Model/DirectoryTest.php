<?php

namespace CrowdinApiClient\Tests\Model;

use CrowdinApiClient\Model\Directory;
use PHPUnit\Framework\TestCase;

class DirectoryTest extends TestCase
{
    /**
     * @var array
     */
    public $data = [
        'id' => 4,
        'projectId' => 2,
        'branchId' => 34,
        'directoryId' => 0,
        'name' => 'main',
        'title' => '<Description materials>',
        'exportPattern' => '/localization/%locale%/%file_name%',
        'priority' => 'normal',
        'createdAt' => '2019-09-19T14:14:00+00:00',
        'updatedAt' => '2019-09-19T14:14:00+00:00',
    ];

    /**
     * @var Directory
     */
    public $directory;

    public function testLoadData()
    {
        $this->directory = new Directory($this->data);
        $this->checkData();
    }

    public function testSetData()
    {
        $this->directory = new Directory();
        $this->directory->setBranchId($this->data['branchId']);
        $this->directory->setDirectoryId($this->data['directoryId']);
        $this->directory->setName($this->data['name']);
        $this->directory->setTitle($this->data['title']);
        $this->directory->setExportPattern($this->data['exportPattern']);
        $this->directory->setPriority($this->data['priority']);

        $this->assertEquals($this->data['branchId'], $this->directory->getBranchId());
        $this->assertEquals($this->data['directoryId'], $this->directory->getDirectoryId());
        $this->assertEquals($this->data['name'], $this->directory->getName());
        $this->assertEquals($this->data['title'], $this->directory->getTitle());
        $this->assertEquals($this->data['exportPattern'], $this->directory->getExportPattern());
        $this->assertEquals($this->data['priority'], $this->directory->getPriority());
    }

    public function checkData()
    {
        $this->assertEquals($this->data['id'], $this->directory->getId());
        $this->assertEquals($this->data['projectId'], $this->directory->getProjectId());
        $this->assertEquals($this->data['branchId'], $this->directory->getBranchId());
        $this->assertEquals($this->data['directoryId'], $this->directory->getDirectoryId());
        $this->assertEquals($this->data['name'], $this->directory->getName());
        $this->assertEquals($this->data['title'], $this->directory->getTitle());
        $this->assertEquals($this->data['exportPattern'], $this->directory->getExportPattern());
        $this->assertEquals($this->data['priority'], $this->directory->getPriority());
        $this->assertEquals($this->data['createdAt'], $this->directory->getCreatedAt());
        $this->assertEquals($this->data['updatedAt'], $this->directory->getUpdatedAt());
    }
}
