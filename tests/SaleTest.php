<?php

use App\Models\Sale;
use App\Models\Item;
use App\Http\Controllers\SalesControllers;

/**
 * Class SaleTest
 */
class SaleTest extends TestCase
{
    /** @var \App\Models\Sale */
    protected $Sale;

    /**
     * Sets up the Sale.
     */
    protected function setSale(): void
    {
        $Sale = new Sale();
        $Sale->day_of_sale = '2017-02-02';
        $Sale->save();
        $this->Sale = $Sale;
    }

    /**
     * Adds items to a Sale.
     */
    protected function addItems(): void
    {
        $this->Sale->addItems([
            Item::find(1),
            Item::find(2),
            Item::find(3),
        ]);
    }

    /**
     * Tests the creation of Items.
     */
    public function testCreateItems()
    {
        $this->setSale();
        $this->addItems();
        $this->assertTrue($this->Sale->getItems()->count() == 3);
    }

    /**
     * Tests the item removal.
     *
     * @throws Exception
     */
    public function testRemoveItems()
    {
        $this->setSale();
        $this->addItems();
        $this->Sale->removeItems();

        $this->assertTrue($this->Sale->getItems()->count() == 0);
    }

    /**
     * Retrieves a list of Sales.
     */
    public function testSaleList()
    {
        /** @var \App\Models\Sale $Sale */
        $SalesController = new SalesControllers();
        $SalesCollection = $SalesController->list('2018-01-01');

        $this->assertTrue($SalesCollection->count() >= 1);
    }

    /**
     * Updates a Sale item list.
     *
     * @throws Exception
     */
    public function testSaleUpdate()
    {
        $this->setSale();
        $this->Sale->addItems([
            Item::find(1)
        ]);

        $this->assertTrue($this->Sale->getItems()->count() == 1);

        /** @var \App\Models\Sale $Sale */
        $SalesController = new SalesControllers();
        $SalesController = $SalesController->update($this->Sale->id, [
            Item::find(2),
            Item::find(3)
        ]);

        $this->assertTrue($SalesController->getItems()->count() == 2);
    }
}