<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Navbar;
  
class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Actors',
                'route' => 'actor',
                'ordering' => 1,
            ],
            [
                'name' => 'Movies',
                'route' => 'movies.index',
                'ordering' => 2,
            ],
            [
                'name' => 'Reviews',
                'route' => 'reviews',
                'ordering' => 3,
            ]
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
}
