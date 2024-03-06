<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function investor()
    {
        $page = Page::find(1);
        return view('front.static.investor', compact('page'));
    }
}
