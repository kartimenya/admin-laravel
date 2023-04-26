<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::query()->get();
        $tags = Tag::query()->get();
        return view('admin.post.create', compact('categories', 'tags'));
    }
}
