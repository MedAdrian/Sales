use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    $this->call([
        ItemsTableSeeder::class,
        SalesTableSeeder::class,
        SalesItemsTableSeeder::class,
    ]);
}