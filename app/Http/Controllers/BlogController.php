<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Support\MockData;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', [
            'posts' => MockData::posts(),
        ]);
    }

    public function show(string $slug): View
    {
        $post = MockData::findPost($slug);

        if ($post === null) {
            throw new NotFoundHttpException();
        }

        return view('blog.show', [
            'post' => $post,
            'related' => array_slice(
                array_values(array_filter(
                    MockData::posts(),
                    static fn (array $candidate): bool => $candidate['slug'] !== $slug
                )),
                0,
                2
            ),
        ]);
    }
}
