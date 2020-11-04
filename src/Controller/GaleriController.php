<?php

namespace Ombimo\LarawebGaleri\Controller;

use App\Http\Controllers\Controller;
use Ombimo\LarawebGaleri\Models\GaleriAlbum;
use Artesaos\SEOTools\Facades\SEOTools as SEO;
use Ombimo\LarawebCore\Breadcrumb;

class GaleriController extends Controller
{
    public function index()
    {
        $dataAlbum = GaleriAlbum::with('cover')->paginate(10);

        //breadcrumb
        Breadcrumb::add('Gallery', route('galeri-index'));

        //seo
        SEO::setTitle('Gallery');

        return view('galeri.index', [
            'dataAlbum' => $dataAlbum,
        ]);
    }
}
