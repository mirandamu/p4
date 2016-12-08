<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function trips()
    {
        return $this->belongsToMany('App\Trip')->withTimestamps();
    }

    public static function getForCheckboxes()
    {
        $tags = Tag::orderBy('name','ASC')->get();
        $tags_for_checkboxes = [];
        foreach($tags as $tag) {
            $tags_for_checkboxes[$tag->id] = $tag->name;
        }
        return $tags_for_checkboxes;
    }

}
