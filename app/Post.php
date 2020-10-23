<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Post extends Model
{
    protected $fillable = [
        'name',
        'birthday',
        'birthplace',
        'religious',
        'ethnicity',
        'nationality',
        'professional',
        'gender',
        'profile',
        'who',
        'career',
        'education',
        'personal',
        'about',
        'facebook',
        'youtube',
        'twitter',
        'linkedin',
        'tiktok',
        'website',
        'published',
        'category_id',

    ];


    /**
     *
     * @return void
     *
     */
         public  function deleteImage(){
             Storage::delete($this->profile);
         }

       public function category(){
             return $this->belongsTo(Category::class);
        }
        public function tag(){
             return $this->belongsToMany(Tag::class);
        }
        public function hasTag($id)
        {
            return in_array($id, $this->tag->pluck('id')->toArray());
        }

}
