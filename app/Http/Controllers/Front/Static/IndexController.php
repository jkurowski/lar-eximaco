<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Inline;
use App\Models\Investment;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function investor()
    {
        $investments = Investment::whereStatus(2)->with('carousel')->get();
        $page = Page::find(2);
        $array = Inline::getElements(2);

        return view('front.static.investor', compact('page', 'array', 'investments'));
    }
}
