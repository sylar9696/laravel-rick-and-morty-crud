<?php

use Illuminate\Database\Seeder;
use App\Models\Character;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = config( 'characters' );

        foreach ($characters as $character) {
            $new_character = new Character();

            $new_character -> fill( $character );

            $new_character -> save();
        }
    }
}
