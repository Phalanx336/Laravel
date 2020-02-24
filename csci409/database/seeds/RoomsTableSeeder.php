<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
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
            $rooms = [
                //[
                    //'name' => 'Port Orleans French Quarter',
                    //'address_1' => '2201 Orleans Drive',
                    //'city' => 'Orlando',
                    //'state' => 'FL',
                    //'zip' => '32830',
                    //'description' => 'International luxurious hotel.',
                    //'image' => 'https://placeimg.com/640/480/arch'
                //],
                /*[
                    'user_id' => '1',
                    'room_id' => '1',
                    'num_of_guests' => '4',
                    'arrival' => '########',
                    'departure' => '########'
                ],*/
                [
                    'hotel_id' => '1',
                    'type' => 'Luxury Suite',
                    'description' => '2000 sqft, 3 king sized beds, full kitchen.',
                    'price' => '980',
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'hotel_id' => '1',
                    'type' => 'Double',
                    'description' => 'Two queen beds',
                    'price' => '200',
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'hotel_id' => '2',
                    'type' => 'Suite',
                    'description' => 'International luxurious room.',
                    'price' => '350',
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'hotel_id' => '2',
                    'type' => 'Economy',
                    'description' => 'One queen bed, mini fridge.',
                    'price' => '87.99',
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'hotel_id' => '3',
                    'type' => 'Suite',
                    'description' => 'One ultra wide king bed, full kitchen.',
                    'price' => '399',
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
            ];

            //Loop through hotels array and create a hotel using the hotel model and mass assignment
            foreach ($rooms as $room) {
                Hotel::create(array(
                    'hotel_id' => $room['hotel_id'],
                    'type' => $room['type'],
                    'description' => $room['description'],
                    'price' => $room['price'],
                    'image' => $room['image']
                ));
            }
        }
}}
