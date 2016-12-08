<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allTags = ['domestic', 'international', 'work', 'leisure', 'early flight', 'late flight', 'red-eye', 'carry-on', 'checked baggage'];

        foreach($allTags as $tagName) {
            $tag = new Tag();
            $tag->name = $tagName;
            $tag->save();
        }
    }
}
