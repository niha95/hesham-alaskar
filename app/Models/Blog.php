<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model implements TranslatableContract
{
    use Translatable;
    protected $guarded = ['tags'];
    public $translatedAttributes = ['title','description','content'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tag', 'blog_id', 'tag_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getPublishAttribute()
    {
        return config('helper.publish_'.app()->getLocale())[$this->status];
    }

    public function publish()
    {
        $this->update([
            "status" =>true ,
            "publish_date" => now()
        ]);

    }
    public function unPublish()
    {
        $this->update(["status" => false]);

    }
}
