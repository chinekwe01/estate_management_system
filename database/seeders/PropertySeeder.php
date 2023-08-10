<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
        [
            'property_name' => 'Land',
            'description' => '2 plots, fenced with gate',
            'status' => 'occupied',
            'owner' => 'John Smith',
            'phone_number' => '08156238459',
            'address' => 'No.4, Jerry lane',
            'price' => 'N1,200,000',
        ],
        [
            'property_name' => 'Room',
            'description' => '2 bedroom apartment with kitchen and bathroom',
            'status' => 'free',
            'owner' => 'Miles Monroe',
            'phone_number' => '08156238459',
            'address' => 'No.4, Mike Dwan streeet, Bori',
            'price' => 'N400,000',
        ],
        [
            'property_name' => '4bed room',
            'description' => 'Well furnished with water and constant light',
            'status' => 'occupied',
            'owner' => 'Grace Mike',
            'phone_number' => '08156238459',
            'address' => 'No.4, Woji estate',
            'price' => 'N900,000',
        ],
        [
            'property_name' => 'Land',
            'description' => '10 plots, fenced with gate',
            'status' => 'free',
            'owner' => 'Anti Salome',
            'phone_number' => '08156238459',
            'address' => 'No.4, Rumudara street',
            'price' => 'N8,200,000',
        ],
    ];
    foreach ($properties as $key => $property) {
        Property::create($property);
    }
    }
}
