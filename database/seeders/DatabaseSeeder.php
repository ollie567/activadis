<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gebruikers')->insert([
            'gebruikeremail' => 'admin@gmail.com',
            'gebruikernaam' => 'admin',
            'gebruikerwachtwoord' => 'adminww',
            'is_admin' => true,
        ]);
        DB::table('gebruikers')->insert([
            'gebruikeremail' => 'user@gmail.com',
            'gebruikernaam' => 'user',
            'gebruikerwachtwoord' => 'userww',
            'is_admin' => false,
        ]);
        DB::table('activiteiten')->insert([
            'activiteitnaam' => 'jetskiëen',
            'activiteitlocatie' => 'stroombroek in braamt',
            'activeitomschrijving' => 'In braamt ga je jetskiëen',
            'activeit-eten' => true,
            'activiteitmindeelnemers' => 10,
            'activiteitmaxdeelnemers' => 20,
            'activiteitkosten' => 30.00,
            'activiteitbenodigheden' => 'rijbewijs',
            'activiteitbegintijd' => '14:00',
            'activiteiteindtijd' => '16:00',
            'activiteitafbeelding' => 'https://www.trackjackeurope.com/wp-content/uploads/2020/09/jetski.jpg',
        ]);
    }
}
