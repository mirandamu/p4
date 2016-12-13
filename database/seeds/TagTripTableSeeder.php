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
            '1' => ['domestic', 'work', 'carry on'],
            '2' => ['international', 'checked baggage', 'leisure'],
            '3' => ['domestic', 'leisure', 'checked baggage'],
            '4' => ['domestic', 'leisure', 'carry on'],
            '5' => ['international', 'checked baggage', 'leisure'],
            '6' => ['domestic', 'leisure', 'checked baggage']
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
