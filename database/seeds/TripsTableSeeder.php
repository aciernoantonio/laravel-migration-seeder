<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [

            [
                'city' => 'madrid',
                'flight_duration' => 12,
                'image' => 'https://travel.thewom.it/pictures/2022/01/17/madrid_17.jpeg',
                'price' => 400,00,
            ],

            [
                'city' => 'roma',
                'flight_duration' => 3,
                'image' => 'https://blog.blacklane.com/wp-content/uploads/2019/04/iStock-539115110.jpg',
                'price' => 150,00,
            ],

            [
                'city' => 'london',
                'flight_duration' => 6,
                'image' => 'https://cdn.londonandpartners.com/-/media/images/london/visit/things-to-do/sightseeing/london-attractions/tower-bridge/thames_copyright_visitlondon_antoinebuchet640x360.jpg?mw=640&hash=27AEBE2D1B7279A196CC1B4548638A9679BE107A',
                'price' => 320,00,
            ],

        ];

        foreach ($trips as $trip) {
            $newTrip = new Trip();
            $newTrip->city = $trip['city'];
            $newTrip->flight_duration = $trip['flight_duration'];
            $newTrip->image = $trip['image'];
            $newTrip->price = $trip['price'];
            $newTrip->save();
        }

    }
}
