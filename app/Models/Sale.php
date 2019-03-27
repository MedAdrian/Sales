<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Sale
 *
 * @package App\Models
 */
class Sale extends Model
{
    protected $table = 'sale';
    public $timestamps = false;

    /**
     * Retrieves a Collection of ItemSale.
     *
     * @return Collection
     */
    public function getItems()
    {
        return @ItemSale::where('sale_id', $this->id)->get();
    }

    /**
     * Adds Items.
     *
     * @param array $items
     */
    public function addItems(array $items = [])
    {
        /** @var ItemSale $itemSale */
        foreach ($items as $item) {
            $SaleItem = new ItemSale();
            $SaleItem->sale_id = $this->id;
            $SaleItem->item_id = $item->id;
            $SaleItem->save();
        }
    }

    /**
     * Removes ItemSales.
     *
     * @return $this
     * @throws \Exception
     */
    public function removeItems()
    {
        /** @var ItemSale $itemSale */
        foreach ($this->getItems() as $itemSale) {
            $itemSale->delete();
        }

        return $this;
    }
}

