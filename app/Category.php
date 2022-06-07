<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use Sluggable;

    use InteractsWithMedia;

    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $appends = [
        'photo',
        'slug',
    ];

    protected $fillable = [
        'name',
        'description'

    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(325)->height(210);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
