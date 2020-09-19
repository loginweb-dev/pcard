<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Block;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = Page::create([
            'name'      => 'Landingpage Pcard',
            'slug'      => 'landingpage-pcard',
            'description' => 'Pagina de Destino Tarjetas card',
            'direction' => 'pages.landing',
            'user_id' => 1,
            'details'   => null
        ]);
    }
}
