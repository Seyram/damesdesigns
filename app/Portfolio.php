<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Cviebrock\EloquentSluggable\Sluggable;


class Portfolio extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use Sluggable;

    use InteractsWithMedia;

    public $table = 'portfolios';

    protected $dates = [
        'start_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $appends = [
        'thumbnail','photo', 'context_image','challenge_images','research_image','user_image',
        'design_process_image','wireframe_image','interactive_prototype_image','design_iteration_image',
        'final_prototype_image', 'design_system_image','final_design_image','outcome_image','learning_image',
    ];

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'views_count',
        'client_name',
        'duration',
        'team',
        'role',
        'context_text',
        'challenge_text',
        'research_text',
        'user_text',
        'design_process_text',
        'wireframe_text',
        'interactive_prototype_text',
        'design_iteration_text',
        'final_prototype_text',
        'design_system_text',
        'final_design_text',
        'outcome_text',
        'learning_text',
        'testimonial_text',
        'testimonial_name',

    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
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
    public function getContextImageAttribute()
    {
        $file = $this->getMedia('context_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    /*** *
    public function getChallengeImageAttribute()
    {
        $file = $this->getMedia('challenge_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    ***/

    public function getChallengeImagesAttribute()
    {
        $files = $this->getMedia('challenge_images');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }

    public function getResearchImageAttribute()
    {
        $file = $this->getMedia('research_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getUserImageAttribute()
    {
        $file = $this->getMedia('user_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getDesignProcessImageAttribute()
    {
        $file = $this->getMedia('design_process_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getWireframeImageAttribute()
    {
        $file = $this->getMedia('wireframe_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getInteractivePrototypeImageAttribute()
    {
        $file = $this->getMedia('interactive_prototype_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getDesignIterationImageAttribute()
    {
        $file = $this->getMedia('design_iteration_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getFinalPrototypeImageAttribute()
    {
        $file = $this->getMedia('final_prototype_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getDesignSystemImageAttribute()
    {
        $file = $this->getMedia('design_system_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getFinalDesignImageAttribute()
    {
        $file = $this->getMedia('final_design_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getOutcomeImageAttribute()
    {
        $file = $this->getMedia('outcome_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getLearningImageAttribute()
    {
        $file = $this->getMedia('learning_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
