<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Foundation\Auth\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::query()->get()->count();
        $data['postsCount'] = Post::query()->get()->count();
        $data['categoriesCount'] = Category::query()->get()->count();
        $data['tagsCount'] = Tag::query()->get()->count();

        return view('admin.main.index', compact('data'));
    }
}
