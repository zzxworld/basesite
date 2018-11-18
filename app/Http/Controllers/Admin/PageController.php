<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('updated_at', 'desc')->paginate(50);

        return view('admin.page.index', [
            'pages' => $pages,
        ]);
    }

    public function create()
    {
        $page = new Page;

        return view('admin.page.create', [
            'page' => $page,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        Page::create($request->all());

        return redirect('admin/pages');
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit', [
            'page' => $page,
        ]);
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $page->update($request->all());

        return redirect('admin/pages');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect('admin/pages');
    }
}
