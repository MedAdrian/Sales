<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @package App\Models
 */
class Sale extends Model
{
    protected $table = 'sale';

    /**
     * Retrieves a Collection of ItemSale.
     *
     * @return Collection
     */
    public function getItems()
    {
        return @ItemSale::where('sale_id', $this->id)->get();
    }
}
