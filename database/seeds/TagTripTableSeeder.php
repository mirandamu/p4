<?php

use Illuminate\Database\Seeder;
use App\Trip;
use App\Tag;

class TagTripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips =[
            '1' => ['domestic', 'work'],
            '2' => ['international', 'checked baggage'],
            '3' => ['domestic', 'leisure'],
            '4' => ['domestic', 'leisure'],
            '5' => ['carry-on', 'international'],
            '6' => ['domestic', 'early flight'],
            '7' => ['red-eye', 'domestic'],
            '8' => ['international', 'early flight'],
            '9' => ['red-eye', 'domestic']
        ];

        foreach($trips as $id => $tags) {
            $trip = Trip::where('id', 'LIKE', $id)->first();
            foreach($tags as $tagName) {
                $tag = Tag::where('name', 'LIKE', $tagName)->first();
                $trip->tags()->save($tag);
            }
        }
    }
}
