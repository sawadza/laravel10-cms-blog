<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_post');
    }

    public function shortBody($words = 10){
        return \Illuminate\Support\Str::words(strip_tags($this->body), $words);
    }

    public function getImage(){
        // if(str_starts_with($this->image, 'http')){
        //     return $this->image;
        // }
        if(!$this->image){
            return '/storage/default_image.png';
        }
        return $this->image;
    }
}
