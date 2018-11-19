<?php

use App\Page;

Page::select('slug')->chunk(10, function ($pages) {
    foreach ($pages as $page) {
        Route::get($page->slug, 'PageController@showBySlug');
    }
});
