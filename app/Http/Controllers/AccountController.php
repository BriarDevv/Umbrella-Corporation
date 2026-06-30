<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AccountController extends Controller
{
    /**
     * panel de la cuenta del usuario con sus servicios
     *
     * @return View
     */
    public function index(): View
    {
        $user = auth()->user();
        $user->load('subscriptions.product');

        return view('account.dashboard', [
            'user' => $user,
        ]);
    }
}
