<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Movies = [
            [
                'name' => 'Learners Licence',
                'director' => 'Beginner',
                'poster' => 'drivingschool/learnerspapers.jpg',
                'price' => 229.99
            ],
            [
                'name' => 'Light Vehicle Rental',
                'director' => 'Light Motor Vehicle',
                'poster' => 'drivingschool/code8.jpg',
                'price' => 799.99
            ],
            [
                'name' => 'Medium Vehicle Rental',
                'director' => 'Medium Motor Vehicle',
                'poster' => 'drivingschool/code10.jpg',
                'price' => 999.99
            ],
            [
                'name' => 'Heavy Vehicle Rental',
                'director' => 'Heavy Truck Motor Vehicle',
                'poster' => 'drivingschool/code14.jpg',
                'price' => 1749.99
            ],
            [
                'name' => '1 X Code08 Lesson',
                'director' => 'Medium Truck Motor Vehicle',
                'poster' => 'drivingschool/womandriving.jpg',
                'price' => 179.99
            ],
            [
                'name' => '1 X Code10 Lesson',
                'director' => 'Medium Truck Motor Vehicle',
                'poster' => 'drivingschool/smalltrucklesson.jpg',
                'price' => 199.99
            ],
            [
                'name' => '1 X Code14 Lesson',
                'director' => 'Heavy Truck Motor Vehicle',
                'poster' => 'drivingschool/truck14lesson.jpg',
                'price' => 349.99
            ],
            [
                'name' => '10 X Code08 Lesson',
                'director' => 'Medium Truck Motor Vehicle',
                'poster' => 'drivingschool/10code8lessons.jpg',
                'price' => 1799.99
            ],
            [
                'name' => '10 X Code10 Lesson',
                'director' => 'Medium Truck Motor Vehicle',
                'poster' => 'drivingschool/10Trucklessons.jpg',
                'price' => 1999.99
            ],
            [
                'name' => '10 X Code14 Lesson',
                'director' => 'Heavy Motor Vehicle',
                'poster' => 'drivingschool/code14lessons.jpg',
                'price' => 3499.99
            ],
            [
                'name' => '20 X Code10 Lesson',
                'director' => 'Medium Motor Vehicle',
                'poster' => 'drivingschool/20lessoncode14.jpg',
                'price' => 3999.99
            ],
            [
                'name' => '20 X Code14 Lesson',
                'director' => 'Heavy Motor Vehicle',
                'poster' => 'drivingschool/20lessoncode10.jpg',
                'price' => 6999.99
            ]
        ];
        foreach ($Movies as $key => $value) {
            Movie::create($value);
        }
    }
}
