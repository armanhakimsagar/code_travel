<?php

namespace App\Models;

use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use GlobalStatus;

    protected $casts = [
        'included'     => 'object',
        'excluded'     => 'object',
        'seminar_plan' => 'object',
        'images'       => 'array',
        'seo_content'  => 'object'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    // Relations
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'plan_id')->where('type', 'seminar');
    }
}
