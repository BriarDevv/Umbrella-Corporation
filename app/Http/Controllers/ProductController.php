<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Support\MockData;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index', [
            'products' => MockData::products(),
            'categories' => MockData::categories(),
            'clearanceFilters' => MockData::clearanceFilters(),
        ]);
    }

    public function show(string $slug): View
    {
        $product = MockData::findProduct($slug);

        if ($product === null) {
            throw new NotFoundHttpException();
        }

        return view('products.show', [
            'product' => $product,
            'related' => MockData::relatedProducts($slug, 3),
        ]);
    }
}
