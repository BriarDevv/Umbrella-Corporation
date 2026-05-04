@extends('layouts.app')

@section('title', 'Pending Authorization Cart')
@section('description', 'Pending classified inventory awaiting internal authorization. Checkout module pending approval.')

@section('content')
<section class="section-shell pt-12 pb-12" aria-labelledby="cart-heading">
    <div class="container-tech">
        @include('partials.breadcrumb', ['items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Pending Authorization Cart'],
        ]])

        <div class="grid gap-10 lg:grid-cols-12 mt-8 items-end">
            <div class="lg:col-span-8 flex flex-col gap-5">
                <span class="section-heading-eyebrow" data-animate="fade-up">Pending Inventory</span>
                <h1 id="cart-heading" data-animate="fade-up">Pending Authorization Cart</h1>
                <p class="text-[#9CACAD] max-w-2xl" data-animate="fade-up">
                    Items reserved for internal review. Checkout is gated by manual authorization. The interface is staged visually — no transactional layer is active.
                </p>
            </div>

            <div class="lg:col-span-4" data-animate="panel">
                <div class="clearance-panel">
                    <div class="clearance-panel-header">
                        <span class="font-display text-[0.7rem] tracking-[0.3em] text-[#FFFFFF]">Cart Status</span>
                        <x-tabler-shopping-cart class="size-4 text-[#ED1C24]" aria-hidden="true" />
                    </div>
                    <p class="font-display text-[#FFFFFF] text-2xl tracking-[0.18em]">{{ count($items) }} ITEMS</p>
                    <p class="font-classified text-[0.7rem] tracking-[0.24em] text-[#ED1C24] mt-2">PENDING REVIEW</p>
                </div>
            </div>
        </div>

        <span class="hairline-red block mt-12" data-animate="line"></span>
    </div>
</section>

<section class="section-shell pt-2 pb-24">
    <div class="container-tech grid gap-10 lg:grid-cols-12 items-start">
        <div class="lg:col-span-8 flex flex-col gap-4" data-animate-table>
            @foreach ($items as $entry)
                @php $item = $entry['product']; @endphp
                <article class="grid gap-6 md:grid-cols-12 items-center border border-[#5D6E6E]/25 bg-[#0A0A0A] p-5 hover:border-[#ED1C24] transition-colors" data-animate="table-row">
                    <div class="md:col-span-2">
                        <figure class="cart-thumb">
                            <span class="cart-thumb-grid" aria-hidden="true"></span>
                            @if (! empty($item['image']))
                                <img
                                    src="{{ asset($item['image']) }}"
                                    alt=""
                                    loading="lazy"
                                    decoding="async"
                                    class="cart-thumb-image"
                                />
                            @else
                                <x-dynamic-component
                                    :component="'tabler-' . ($item['icon'] ?? 'flask')"
                                    class="size-7 text-[#ED1C24]"
                                    aria-hidden="true"
                                />
                            @endif
                        </figure>
                    </div>

                    <div class="md:col-span-6 flex flex-col gap-1">
                        <span class="font-classified text-[0.7rem] tracking-[0.24em] text-[#9CACAD]">{{ $item['id_code'] }}</span>
                        <h2 class="text-[1rem] tracking-[0.06em] text-[#FFFFFF]">
                            <a href="{{ route('products.show', $item['slug']) }}" class="transition-colors hover:text-[#ED1C24]">{{ $item['name'] }}</a>
                        </h2>
                        @include('partials.security-badge', ['level' => $item['status']])
                    </div>

                    <div class="md:col-span-2 flex flex-col gap-1">
                        <span class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">QTY</span>
                        <span class="font-display text-[#FFFFFF] tracking-[0.18em] text-base">{{ str_pad((string) $entry['qty'], 2, '0', STR_PAD_LEFT) }}</span>
                    </div>

                    <div class="md:col-span-2 flex flex-col gap-1 md:text-right">
                        <span class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">SUBTOTAL</span>
                        <span class="font-display text-[#ED1C24] tracking-[0.18em] text-base">${{ number_format($entry['subtotal'], 0, ',', '.') }}</span>
                    </div>
                </article>
            @endforeach

            <div class="border border-[#5D6E6E]/30 bg-[#0A0A0A] p-5 flex items-center justify-between gap-4">
                <span class="inline-flex items-center gap-3 font-classified text-[0.7rem] tracking-[0.28em] text-[#ED1C24]">
                    <x-tabler-alert-triangle class="size-4" aria-hidden="true" />
                    All items pending manual review.
                </span>
                <span class="font-classified text-[0.7rem] tracking-[0.24em] text-[#9CACAD]">CART&nbsp;ID&nbsp;·&nbsp;PA-2024-44</span>
            </div>
        </div>

        <aside class="lg:col-span-4 flex flex-col gap-5" data-animate="panel">
            <div class="technical-panel">
                <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#9CACAD]">Order Summary</p>
                <dl class="mt-4 flex flex-col gap-3 text-sm">
                    <div class="flex items-center justify-between">
                        <dt class="text-[#9CACAD]">Items</dt>
                        <dd class="text-[#FFFFFF]">{{ count($items) }}</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="text-[#9CACAD]">Subtotal</dt>
                        <dd class="text-[#FFFFFF] font-display tracking-[0.18em]">${{ number_format($subtotal, 0, ',', '.') }}</dd>
                    </div>
                    <div class="flex items-center justify-between">
                        <dt class="text-[#9CACAD]">Authorization Fee</dt>
                        <dd class="text-[#9CACAD]">Pending</dd>
                    </div>
                    <div class="flex items-center justify-between border-t border-[#5D6E6E]/25 pt-3 mt-1">
                        <dt class="font-display text-[#FFFFFF] tracking-[0.2em]">Total</dt>
                        <dd class="font-display text-[#ED1C24] tracking-[0.18em] text-lg">${{ number_format($subtotal, 0, ',', '.') }}</dd>
                    </div>
                </dl>
            </div>

            <button type="button" class="btn btn-primary btn-block btn-disabled" disabled aria-disabled="true">
                <x-tabler-lock class="size-4" aria-hidden="true" />
                Proceed to Secure Checkout
            </button>

            <div class="clearance-panel">
                <div class="clearance-panel-header">
                    <span class="font-display text-[0.7rem] tracking-[0.3em] text-[#FFFFFF]">Security Warning</span>
                    <x-tabler-shield-lock class="size-4 text-[#ED1C24]" aria-hidden="true" />
                </div>
                <p class="text-sm text-[#9CACAD]">
                    Checkout module pending internal approval. All items remain in pending state until authorization is recorded by the oversight committee.
                </p>
            </div>

            <a href="{{ route('contact') }}" class="btn btn-secondary btn-block">
                <x-tabler-fingerprint class="size-4" aria-hidden="true" />
                Submit Clearance Request
            </a>
        </aside>
    </div>
</section>
@endsection
