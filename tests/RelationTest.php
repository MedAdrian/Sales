<?php

/**
 * Class RelationTest
 */
class RelationTest extends TestCase
{
    /**
     * Test relation from Sale to item.
     *
     * @return void
     */
    public function testLoadItemsBySale()
    {
        /** @var \App\Models\Sale $Sale */
        $Sale = \App\Models\Sale::find(1);
        $SalesCollection = $Sale->getItems();

        $this->assertEquals(3, $SalesCollection->count());
        $this->assertEquals(get_class($SalesCollection->first()->getItem()), 'App\Models\Item');
    }
}
