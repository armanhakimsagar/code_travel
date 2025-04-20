<?php

namespace App\Models;

use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use GlobalStatus;

    protected $casts = [
        'included'    => 'object',
        'excluded'    => 'object',
        'tour_plan'   => 'object',
        'images'      => 'array',
        'seo_content' => 'object'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'plan_id')->where('type', 'tour');
    }
}
