<?php

namespace Ombimo\LarawebGaleri\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function scopePublish($query)
    {
        return $query->where('publish', true);
    }
}
