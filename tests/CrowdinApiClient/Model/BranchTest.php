<?php

namespace CrowdinApiClient\Tests\Model;

use CrowdinApiClient\Model\Branch;
use PHPUnit\Framework\TestCase;

class BranchTest extends TestCase
{
    /**
     * @var array
     */
    public $data = [
        'id' => 34,
        'projectId' => 2,
        'name' => 'develop-master',
        'title' => 'Master branch',
        'exportPattern' => '%three_letters_code%',
        'priority' => 'normal',
        'createdAt' => '2019-09-16T13:48:04+00:00',
        'updatedAt' => '2019-09-19T13:25:27+00:00',
    ];

    /**
     * @var Branch
     */
    public $branch;

    public function testLoadData(): void
    {
        $this->branch = new Branch($this->data);
        $this->checkData();
    }

    /**
     * @depends testLoadData
     */
    public function testSetData(): void
    {
        $this->branch = new Branch();
        $this->branch->setName($this->data['name']);
        $this->branch->setTitle($this->data['title']);
        $this->branch->setExportPattern($this->data['exportPattern']);
        $this->branch->setPriority($this->data['priority']);

        $this->assertEquals($this->data['name'], $this->branch->getName());
        $this->assertEquals($this->data['title'], $this->branch->getTitle());
        $this->assertEquals($this->data['exportPattern'], $this->branch->getExportPattern());
        $this->assertEquals($this->data['priority'], $this->branch->getPriority());
    }

    public function checkData(): void
    {
        $this->assertEquals($this->data['id'], $this->branch->getId());
        $this->assertEquals($this->data['projectId'], $this->branch->getProjectId());
        $this->assertEquals($this->data['name'], $this->branch->getName());
        $this->assertEquals($this->data['title'], $this->branch->getTitle());
        $this->assertEquals($this->data['exportPattern'], $this->branch->getExportPattern());
        $this->assertEquals($this->data['priority'], $this->branch->getPriority());
        $this->assertEquals($this->data['createdAt'], $this->branch->getCreatedAt());
        $this->assertEquals($this->data['updatedAt'], $this->branch->getUpdatedAt());
    }
}
