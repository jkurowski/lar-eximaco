<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Inline;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function investor()
    {
        $page = Page::find(1);
        $array = Inline::getElements(2);

        return view('front.static.investor', compact('page', 'array'));
    }
}
