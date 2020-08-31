<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NutritionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NutritionsTable Test Case
 */
class NutritionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NutritionsTable
     */
    public $Nutritions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Nutritions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Nutritions') ? [] : ['className' => NutritionsTable::class];
        $this->Nutritions = TableRegistry::getTableLocator()->get('Nutritions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nutritions);

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
