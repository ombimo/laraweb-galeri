<?php

namespace Ombimo\LarawebGaleri\Controller;

use App\Http\Controllers\Controller;
use Ombimo\LarawebGaleri\Models\GaleriAlbum;

class GaleriController extends Controller
{
    public function index()
    {
        $dataAlbum = GaleriAlbum::with('cover')->paginate(10);

        return view('galeri.index', [
            'dataAlbum' => $dataAlbum,
        ]);
    }
}
