@props([
    'product',
])

<article
    class="card-classified flex flex-col p-0 overflow-hidden"
    data-card-hover
    data-stagger-item
    data-filter-item
    data-filter-category="{{ \Illuminate\Support\Str::slug($product['category']) }}"
    data-filter-clearance="{{ $product['clearance_key'] }}"
>
    <div class="product-mockup">
        <div class="product-mockup-grid" aria-hidden="true"></div>

        <span class="corner-mark tl" aria-hidden="true"></span>
        <span class="corner-mark tr" aria-hidden="true"></span>
        <span class="corner-mark bl" aria-hidden="true"></span>
        <span class="corner-mark br" aria-hidden="true"></span>

        <div class="product-mockup-id">{{ $product['id_code'] }}</div>
        <div class="product-mockup-status">
            @include('partials.security-badge', ['level' => $product['status']])
        </div>

        <figure class="product-mockup-figure" aria-hidden="true">
            <span class="product-mockup-glow" aria-hidden="true"></span>
            @if (! empty($product['image']))
                <img
                    src="{{ asset($product['image']) }}"
                    alt=""
                    class="product-mockup-image"
                    loading="lazy"
                    decoding="async"
                />
            @else
                <x-dynamic-component
                    :component="'tabler-' . ($product['icon'] ?? 'flask')"
                    class="size-20 text-[#ED1C24] opacity-90"
                />
            @endif
        </figure>

        <div class="product-mockup-meta">
            <span>{{ $product['facility'] }}</span>
            <span>RISK&nbsp;{{ $product['risk_index'] ?? '0' }}</span>
        </div>
    </div>

    <div class="flex flex-col gap-4 p-6">
        <div class="flex items-center justify-between gap-3">
            <span class="font-classified text-[0.7rem] tracking-[0.24em] text-[#9CACAD]">{{ strtoupper($product['category']) }}</span>
            <span class="font-classified text-[0.7rem] tracking-[0.24em] text-[#ED1C24]">{{ $product['clearance'] }}</span>
        </div>

        <h3 class="text-[1.05rem] tracking-[0.06em] text-[#FFFFFF]">
            <a href="{{ route('products.show', $product['slug']) }}" class="transition-colors hover:text-[#ED1C24]">
                {{ $product['name'] }}
            </a>
        </h3>

        <p class="text-sm text-[#9CACAD]">{{ $product['description'] }}</p>

        <div class="flex items-end justify-between gap-3 pt-3 border-t border-[#5D6E6E]/15">
            <div>
                <p class="font-classified text-[0.65rem] tracking-[0.28em] text-[#9CACAD]">UNIT&nbsp;PRICE</p>
                <p class="font-display text-[1.05rem] tracking-[0.18em] text-[#FFFFFF]">${{ number_format($product['price'], 0, ',', '.') }}</p>
            </div>
            <a
                href="{{ route('products.show', $product['slug']) }}"
                class="btn btn-secondary text-[0.7rem] py-2 px-3"
                aria-label="View details for {{ $product['name'] }}"
            >
                <x-tabler-arrow-up-right class="size-3.5" aria-hidden="true" />
                View Details
            </a>
        </div>

        <button
            type="button"
            class="btn btn-restricted btn-block text-[0.7rem]"
            aria-label="Add {{ $product['name'] }} to pending cart"
        >
            <x-tabler-shopping-cart class="size-3.5" aria-hidden="true" />
            Add to Pending Cart
        </button>
    </div>
</article>
