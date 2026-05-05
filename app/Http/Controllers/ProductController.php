<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Support\MockData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $categorySlug = trim((string) $request->query('categoria', ''));
        $clearanceKey = trim((string) $request->query('autorizacion', ''));

        $products = $this->filterProducts(
            MockData::products(),
            $categorySlug,
            $clearanceKey,
        );

        return view('products.index', [
            'products' => $products,
            'categories' => MockData::categories(),
            'clearanceFilters' => MockData::clearanceFilters(),
            'selectedCategory' => $categorySlug,
            'selectedClearance' => $clearanceKey,
            'totalAll' => count(MockData::products()),
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

    /**
     * @param array<int, array<string, mixed>> $products
     * @return array<int, array<string, mixed>>
     */
    private function filterProducts(array $products, string $categorySlug, string $clearanceKey): array
    {
        return array_values(array_filter(
            $products,
            static function (array $product) use ($categorySlug, $clearanceKey): bool {
                if ($categorySlug !== '' && Str::slug((string) $product['category']) !== $categorySlug) {
                    return false;
                }

                if ($clearanceKey !== '' && ($product['clearance_key'] ?? '') !== $clearanceKey) {
                    return false;
                }

                return true;
            }
        ));
    }
}
