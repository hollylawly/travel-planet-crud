<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array of specific hotels to populate database
        $hotels = [
            [
                'name' => 'Marriott',
                'location' => 'Seattle, WA',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'Aria',
                'location' => 'Las Vegas, NV',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'MGM Grand',
                'location' => 'Las Vegas, NV',
                'description' => 'International luxurious hotel.',
                'image' => 'https://placeimg.com/640/480/arch'
            ]
        ];

        foreach ($hotels as $hotel) {
            Hotel::create(array(
                'name' => $hotel['name'],
                'location' => $hotel['location'],
                'description' => $hotel['description'],
                'image' => $hotel['image']
            ));
        }
    }
}