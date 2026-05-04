<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Support\MockData;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('pages.about', [
            'divisions' => MockData::divisions(),
            'timeline' => MockData::timeline(),
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function cart(): View
    {
        $items = [];
        foreach (MockData::cartItems() as $entry) {
            $product = MockData::findProduct($entry['slug']);
            if ($product === null) {
                continue;
            }
            $items[] = [
                'product' => $product,
                'qty' => $entry['qty'],
                'subtotal' => $product['price'] * $entry['qty'],
            ];
        }

        $subtotal = array_sum(array_column($items, 'subtotal'));

        return view('pages.cart', [
            'items' => $items,
            'subtotal' => $subtotal,
        ]);
    }
}
