<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', [
            'posts' => Post::latestPublished()->get(),
        ]);
    }

    public function show(Post $post): View
    {
        $related = Post::latestPublished()
            ->where('id', '!=', $post->id)
            ->take(2)
            ->get();

        return view('blog.show', [
            'post' => $post,
            'related' => $related,
        ]);
    }
}
