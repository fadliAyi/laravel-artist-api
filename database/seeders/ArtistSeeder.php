<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'name' => 'Raisa',
            'about' => 'Raisa Andriana adalah seorang model, pemeran dan penyanyi Indonesia. Sebelum berkarier sebagai penyanyi solo, ia merupakan vokalis dari grup musik bentukan Kevin Aprilio, Andante yang kemudian menjadi Vierra–sekarang Vierratale.',
            'type' => 'solo',
            'gender' => 'wanita'
        ]);
        DB::table('artists')->insert([
            'name' => 'Paramore',
            'about' => 'Paramore merupakan sebuah grup musik asal Amerika Serikat yang dibentuk pada tahun 2004. Grup musik ini bermarkas di Franklin, Tennessee. Saat ini mereka beranggotakan 3 orang yaitu vokalis Hayley Williams, gitaris Taylor York dan drummer Zac Farro.',
            'type' => 'band',
            'gender' => 'wanita'
        ]);
    }
}
