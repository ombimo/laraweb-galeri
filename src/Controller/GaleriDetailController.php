<?php

namespace Ombimo\LarawebGaleri\Controller;

use App\Http\Controllers\Controller;
use Ombimo\LarawebGaleri\Models\GaleriAlbum;

class GaleriDetailController extends Controller
{
    public function get($id, $slug = null)
    {
        $album = GaleriAlbum::with('data')->findOrFail($id);

        return view('galeri.detail', [
            'album' => $album,
            'data' => $album->data,
        ]);
    }
}
