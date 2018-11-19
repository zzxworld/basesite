<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function showBySlug(Request $request)
    {
        $page = Page::where('slug', $request->path())->first();

        if ($page->view) {
            return view('page.'.$page->view, ['page' => $page]);
        }

        return response($page->content, 200)
            ->header('Content-Type', 'text/plain');
    }
}
