<?php

namespace Ombimo\LarawebGaleri\Controller;

use App\Http\Controllers\Controller;
use Ombimo\LarawebGaleri\Models\GaleriAlbum;
use Artesaos\SEOTools\Facades\SEOTools as SEO;
use Ombimo\LarawebCore\Breadcrumb;

class GaleriDetailController extends Controller
{
    public function get($id, $slug = null)
    {
        $album = GaleriAlbum::with('data')->findOrFail($id);

        //breadcrumb
        Breadcrumb::add('Gallery', route('galeri-index'));
        Breadcrumb::add($album->nama, $album->link_detail);

        //seo
        SEO::setTitle($album->nama . ' - Gallery');
        SEO::setCanonical($album->link_detail);

        return view('galeri.detail', [
            'album' => $album,
            'data' => $album->data,
        ]);
    }
}
