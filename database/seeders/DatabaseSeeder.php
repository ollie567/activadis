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
        DB::table('activiteiten')->insert([
            'activiteitnaam' => 'water skiën',
            'activiteitlocatie' => 'stroombroek in braamt',
            'activeitomschrijving' => 'In braamt ga je water skiën',
            'activeit-eten' => true,
            'activiteitmindeelnemers' => 10,
            'activiteitmaxdeelnemers' => 20,
            'activiteitkosten' => 30.00,
            'activiteitbenodigheden' => '',
            'activiteitbegintijd' => '12:00',
            'activiteiteindtijd' => '14:00',
            'activiteitafbeelding' => 'https://www.vakantie-met-kinderen.com/images/patrick-waterski-twente-800.jpg',
        ]);
        DB::table('activiteiten')->insert([
            'activiteitnaam' => 'duiken',
            'activiteitlocatie' => 'stroombroek in braamt',
            'activeitomschrijving' => 'In braamt ga je duiken',
            'activeit-eten' => true,
            'activiteitmindeelnemers' => 5,
            'activiteitmaxdeelnemers' => 10,
            'activiteitkosten' => 30.00,
            'activiteitbenodigheden' => 'duikbewijs',
            'activiteitbegintijd' => '14:00',
            'activiteiteindtijd' => '16:00',
            'activiteitafbeelding' => 'https://static.nationalgeographic.nl/files/styles/image_3200/public/duiken-in-ondergelopen-park-in-oostenrijk-1649.webp',
        ]);
    }
}
