<?php

namespace App\Http\Controllers\Front\Developro\Current;

use App\Http\Controllers\Controller;
use App\Models\Inline;
use App\Models\Investment;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(3);
        $investments = Investment::whereStatus(1)->get();
        $array = Inline::getElements(1);
        return view('front.developro.current.index', compact('page', 'investments', 'array'));
    }
}
