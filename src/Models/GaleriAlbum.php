<?php

namespace Ombimo\LarawebGaleri\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GaleriAlbum extends Model
{
    protected $table = 'galeri_album';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function scopePublish($query)
    {
        return $query->where('publish', true);
    }

    public function cover()
    {
        return $this->hasOne('Ombimo\LarawebGaleri\Models\Galeri', 'album_id')->orderBy('cover');
    }

    public function data()
    {
        return $this->hasMany('Ombimo\LarawebGaleri\Models\Galeri', 'album_id');
    }

    public function getLinkDetailAttribute()
    {
        return route('galeri-detail', [
            'id' => $this->id,
            'slug' => Str::slug($this->nama)
        ]);
    }

    public function getSinopsisAttribute()
    {
        if (empty($this->sinopsis)) {
            $sinopsis = Str::limit(strip_tags($this->isi), 100, '...');
        } else {
            $sinopsis = $this->sinopsis;
        }

        return $sinopsis;
    }
}
