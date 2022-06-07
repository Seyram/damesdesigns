<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;



class Sample extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;


    use InteractsWithMedia;

    public $table = 'samples';

    protected $dates = [
        'start_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $appends = [
        'thumbnail','photo', 'sample_one_image','sample_two_image',
    ];

    protected $fillable = [



        'sample_one_title',
        'sample_one_description',
        'sample_one_link',
        'sample_two_title',
        'sample_two_description',
        'sample_two_link',




    ];



    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(325)->height(210);
    }

    public function getSampleOneImageAttribute()
    {
        $file = $this->getMedia('sample_one_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getSampleTwoImageAttribute()
    {
        $file = $this->getMedia('sample_two_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

}
