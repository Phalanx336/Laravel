<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            // array of specific hotels to populate database
            $reservations = [
                //[
                    //'name' => 'Port Orleans French Quarter',
                    //'address_1' => '2201 Orleans Drive',
                    //'city' => 'Orlando',
                    //'state' => 'FL',
                    //'zip' => '32830',
                    //'description' => 'International luxurious hotel.',
                    //'image' => 'https://placeimg.com/640/480/arch'
                //],
                [
                    'user_id' => '1',
                    'room_id' => '1',
                    'num_of_guests' => '4',
                    'arrival' => '########',
                    'departure' => '########'
                ],
                [
                    'user_id' => '1',
                    'room_id' => '2',
                    'num_of_guests' => '1',
                    'arrival' => '########',
                    'departure' => '########'
                ],
                [
                    'user_id' => '1',
                    'room_id' => '3',
                    'num_of_guests' => '3',
                    'arrival' => '2020-05-06',
                    'departure' => '2020-05-07'
                ],
                [
                    'user_id' => '1',
                    'room_id' => '4',
                    'num_of_guests' => '2',
                    'arrival' => '########',
                    'departure' => '########'
                ],
                [
                    'user_id' => '1',
                    'room_id' => '2',
                    'num_of_guests' => '2',
                    'arrival' => '########',
                    'departure' => '########'
                ]
            ];

            //Loop through hotels array and create a hotel using the hotel model and mass assignment
            foreach ($reservations as $reservation) {
                Hotel::create(array(
                    'user_id' => $reservation['user_id'],
                    'room_id' => $reservation['room_id'],
                    'num_of_guests' => $reservation['num_of_guests'],
                    'arrival' => $reservation['arrival'],
                    'departure' => $reservation['departure']
                ));
            }
        }
}}
