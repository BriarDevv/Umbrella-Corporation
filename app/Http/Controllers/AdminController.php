<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    /**
     * panel del admin con los totales y las ultimas entradas
     *
     * @return View
     */
    public function dashboard(): View
    {
        return view('admin.dashboard', [
            'stats' => [
                'posts' => Post::count(),
                'users' => User::count(),
                'products' => Product::count(),
                'categories' => Category::count(),
            ],
            'recentPosts' => Post::latestPublished()->take(4)->get(),
        ]);
    }
}
