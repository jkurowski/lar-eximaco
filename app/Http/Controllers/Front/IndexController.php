<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Inline;
use App\Models\Investment;
use App\Models\News;
use App\Models\Review;
use App\Models\RodoSettings;
use Illuminate\Http\Request;

// CMS
use App\Models\Slider;
use App\Models\RodoRules;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all()->sortBy("sort");

        $obligation = RodoSettings::find(1);
        $rules = RodoRules::orderBy('sort')->whereStatus(1)->get();
        $popup = 0;

        $investments_soon = Investment::whereStatus(4)->get();
        $investments_planned = Investment::whereStatus(3)->get();

        $news = News::where('status', 1)->orderBy('date', 'DESC')->limit(5)->get();
        $array = Inline::getElements(3);

        if(settings()->get("popup_status") == "1") {
            if(settings()->get("popup_mode") == "1") {
                Cookie::queue('popup', null);
                $popup = 1;
            } else {
                if(Cookie::get('popup') == null){
                    $popup = 1;
                    Cookie::queue('popup', true);
                }
            }
        } else {
            Cookie::queue('popup', null);
        }

        $isAdmin = auth()->check();

        return view('front.homepage.index', compact(
            'rules',
            'obligation',
            'sliders',
            'popup',
            'news',
            'investments_soon',
            'investments_planned',
            'array',
            'isAdmin'
        ));
    }
}
