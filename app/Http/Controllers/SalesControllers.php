<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class SalesControllers
 *
 * @package App\Http\Controllers
 */
class SalesControllers extends Controller
{
    /**
     * Retrieves a Collection of Sales based on a day of sale.
     *
     * @param null $dayOfSale
     * @return Collection|static[]
     */
    public function list($dayOfSale = null)
    {
        $QuerBuilder = @Sale::query();

        if (!empty($dayOfSale)) {
            $QuerBuilder = $QuerBuilder->where('day_of_sale', '>=', $dayOfSale);
        }

        return $QuerBuilder->get();
    }

    /**
     * Creates a Sale.
     *
     * @param Request $request
     */
    public function create(Request $request)
    {
        $Sales = new Sale();
        $Sales->day_of_sale = date('Y-m-d H:i:s');
    }

    /**
     * Updates the item list of a Sale.
     *
     * @param $id
     * @param array $items
     * @return Sale
     * @throws \Exception
     */
    public function update($id, array $items = [])
    {
        /** @var Sale $Sale */
        $Sale = Sale::find($id);
        $Sale->removeItems()->addItems($items);

        return $Sale;
    }
}
