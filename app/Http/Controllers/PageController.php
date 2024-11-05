<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\FAQ;
use App\Models\Jumbotron;
use App\Models\Package;
use App\Models\Partner;
use App\Models\Proces;
use App\Models\Timeline;
use App\Models\Value;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $jumbo = Jumbotron::where('is_active', 1)->latest()->firstOrFail();
        $values = Value::latest()->get();
        $process = Proces::orderBy('urutan')->get();
        $packages = Package::all();
        $faqs = FAQ::all();
        $articles = Article::limit(5)->latest()->get();
        $partners = Partner::all();
        $timelines = Timeline::orderBy('tgl_masehi', 'asc')->get();
        return view('pages.index', compact('jumbo', 'values', 'process', 'timelines', 'packages', 'faqs', 'articles', 'partners'));
    }

    public function news(Request $req){
        $q = $req->query('q', null);
        $articles = Article::paginate(25);
        if($q)
            $articles = Article::where('title', 'LIKE', '%'.$q.'%')->paginate(25);
        
        return view('pages.news.index', compact('articles', 'q'));
    }

    public function newsShow($slug){
        $article = Article::where('slug', $slug)->firstOrFail();
        $article_suggests = Article::where('slug', '!=', $slug)->latest()->limit(6)->get();
        return view('pages.news.show', compact('article', 'article_suggests'));
    }
}
