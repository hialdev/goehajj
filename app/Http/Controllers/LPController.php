<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\LpJumbotron;
use App\Models\LpPackage;
use Illuminate\Http\Request;

class LPController extends Controller
{
    public function index($slug){
        $lp = LandingPage::where('slug', $slug)->firstOrFail();
        $jumbo = LpJumbotron::where('lp_id', $lp->id)->where('is_active', 1)->latest()->first();
        $packages = LpPackage::where('lp_id', $lp->id)->get();

        return view('pages.landing.'.$lp->view_name, compact('lp','jumbo', 'packages'));
    }
}
