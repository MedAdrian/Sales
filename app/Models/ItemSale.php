<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class ItemSale
 *
 * @package App\Models
 */
class ItemSale extends Model
{
    protected $table = 'sale_item';
    public $timestamps = false;

    /**
     * Retrieves a Collection of Items.
     *
     * @return Collection
     */
    public function getItem()
    {
        return @Item::where('id', $this->item_id)->get()[0];
    }
}
