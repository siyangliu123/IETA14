<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MortalityRecordTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MortalityRecordTable Test Case
 */
class MortalityRecordTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MortalityRecordTable
     */
    public $MortalityRecord;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MortalityRecord',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MortalityRecord') ? [] : ['className' => MortalityRecordTable::class];
        $this->MortalityRecord = TableRegistry::getTableLocator()->get('MortalityRecord', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MortalityRecord);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
