<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Support\MockData;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home', [
            'categories' => MockData::categories(),
            'featured' => MockData::featuredProducts(4),
            'latestPosts' => MockData::latestPosts(3),
        ]);
    }
}
