<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $requers, Post $post)
    {
        $data = $requers->validated();
        
        $post = $this->service->update($data, $post);

        return redirect()->route('admin.post.show', compact('post'));
    }
}
