@extends('layouts.app')

@section('title', 'Internal Catalog')
@section('description', 'Classified ecommerce interface for fictional research files, containment equipment and biological simulation assets.')

@section('content')

{{-- HERO --}}
<section class="section-shell pt-12 lg:pt-16 pb-20 overflow-hidden relative" data-hero-reveal>
    <div class="scan-beam" aria-hidden="true"></div>

    <div class="container-tech relative">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-16 items-start">
            {{-- HERO COPY --}}
            <div class="lg:col-span-7 flex flex-col gap-7">
                <div class="flex flex-wrap items-center gap-3 font-classified text-[0.72rem] tracking-[0.32em] text-[#ED1C24]" data-hero-item>
                    <span class="inline-flex items-center gap-2">
                        <span class="status-dot" aria-hidden="true"></span>
                        Authorized Personnel Only
                    </span>
                    <span aria-hidden="true" class="text-[#5D6E6E]">/</span>
                    <span class="text-[#9CACAD]">UC-1968-A</span>
                    <span aria-hidden="true" class="text-[#5D6E6E]">/</span>
                    <span class="text-[#9CACAD]">CLEARANCE 04</span>
                </div>

                <div class="space-y-3" data-hero-item>
                    <h1 class="text-[clamp(2.4rem,5.5vw+0.5rem,5rem)] leading-[1] tracking-[0.04em]">
                        <span class="block text-[#FFFFFF]">Umbrella</span>
                        <span class="block text-[#ED1C24]">Research<span class="opacity-50">.</span>Division</span>
                    </h1>
                    <p class="font-classified text-[0.7rem] tracking-[0.32em] text-[#5D6E6E]">// INTERNAL NETWORK · ENCRYPTED FEED</p>
                </div>

                <blockquote class="max-w-xl border-l border-[#ED1C24] pl-5 py-1 flex flex-col gap-2" data-hero-item>
                    <p class="font-classified text-[1rem] text-[#FFFFFF]">"Our business is life itself."</p>
                    <p class="text-sm text-[#9CACAD]">Obedience breeds discipline. Discipline breeds unity. Unity breeds power. Power is life.</p>
                </blockquote>

                <p class="max-w-xl text-base text-[#9CACAD] leading-relaxed" data-hero-item>
                    Classified ecommerce interface for research files, containment equipment and biological simulation assets. Inventory exists strictly as fictional narrative material, replicas and design references.
                </p>

                <div class="flex flex-col sm:flex-row gap-3" data-hero-item>
                    <a href="{{ route('products.index') }}" class="btn btn-primary">
                        <x-tabler-grid-dots class="size-4" aria-hidden="true" />
                        View Classified Catalog
                    </a>
                    <a href="{{ route('blog.index') }}" class="btn btn-secondary">
                        <x-tabler-file-text class="size-4" aria-hidden="true" />
                        Open Research Logs
                    </a>
                </div>

                {{-- ANIMATED METRICS --}}
                <dl class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-4 border-t border-[#5D6E6E]/20 pt-6" data-hero-item>
                    <div class="flex flex-col gap-1">
                        <dt class="font-classified text-[0.62rem] tracking-[0.32em] text-[#5D6E6E]">FACILITIES</dt>
                        <dd class="font-display text-[#FFFFFF] text-2xl tracking-[0.16em] stat-counter" data-counter="7">07</dd>
                    </div>
                    <div class="flex flex-col gap-1">
                        <dt class="font-classified text-[0.62rem] tracking-[0.32em] text-[#5D6E6E]">ARCHIVES</dt>
                        <dd class="font-display text-[#FFFFFF] text-2xl tracking-[0.16em] stat-counter" data-counter="2418">2,418</dd>
                    </div>
                    <div class="flex flex-col gap-1">
                        <dt class="font-classified text-[0.62rem] tracking-[0.32em] text-[#5D6E6E]">REPLICAS</dt>
                        <dd class="font-display text-[#FFFFFF] text-2xl tracking-[0.16em] stat-counter" data-counter="184">184</dd>
                    </div>
                    <div class="flex flex-col gap-1">
                        <dt class="font-classified text-[0.62rem] tracking-[0.32em] text-[#5D6E6E]">CLEARANCE</dt>
                        <dd class="font-display text-[#ED1C24] text-2xl tracking-[0.16em] stat-counter" data-counter="04" data-counter-decimals="0">04</dd>
                    </div>
                </dl>
            </div>

            {{-- HERO PANELS --}}
            <div class="lg:col-span-5 flex flex-col gap-6" data-hero-item>
                {{-- BRAND BACKPLATE --}}
                <div class="relative scan-frame scanlines p-8 corner-frame">
                    <span class="corner-mark tl" aria-hidden="true"></span>
                    <span class="corner-mark tr" aria-hidden="true"></span>
                    <span class="corner-mark bl" aria-hidden="true"></span>
                    <span class="corner-mark br" aria-hidden="true"></span>

                    <div class="flex items-center justify-between mb-6 relative z-10">
                        <span class="font-classified text-[0.7rem] tracking-[0.32em] text-[#9CACAD]">CORPORATE MARK · v8</span>
                        <span class="inline-flex items-center gap-1.5 font-classified text-[0.7rem] tracking-[0.32em] text-[#ED1C24]">
                            <span class="status-dot" aria-hidden="true"></span>
                            REC
                        </span>
                    </div>

                    <div class="flex items-center justify-center py-6 relative z-10">
                        @include('partials.umbrella-mark', ['size' => 168])
                    </div>

                    <div class="mt-2 flex flex-col items-center gap-1 relative z-10">
                        <p class="font-display text-center text-[0.85rem] tracking-[0.34em] text-[#FFFFFF]">UMBRELLA</p>
                        <p class="font-classified text-center text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">RESEARCH&nbsp;DIVISION</p>
                    </div>

                    <div class="mt-6 flex items-center justify-between gap-3 relative z-10 border-t border-dashed border-[#9CACAD]/25 pt-4">
                        <span class="font-classified text-[0.62rem] tracking-[0.32em] text-[#5D6E6E]">SIGNAL</span>
                        <span class="flex-1 mx-3 h-[1px] bg-gradient-to-r from-transparent via-[#ED1C24] to-transparent"></span>
                        <span class="font-classified text-[0.62rem] tracking-[0.32em] text-[#ED1C24]">LIVE</span>
                    </div>
                </div>

                @include('partials.clearance-panel', [
                    'badgeId' => 'UC-1968-A',
                    'level' => '4',
                    'facility' => 'Raccoon Division',
                    'status' => 'Authorized Personnel Only',
                ])
            </div>
        </div>
    </div>

    <div class="container-tech mt-16">
        <span class="hairline-red block" data-animate="line"></span>
    </div>
</section>

{{-- CATEGORIES --}}
<section class="section-shell pt-2 pb-20" aria-labelledby="categories-heading">
    <div class="container-tech">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
            <div class="section-heading">
                <span class="section-heading-eyebrow" data-animate="fade-up">Section 02 · Inventory Map</span>
                <h2 id="categories-heading" data-animate="fade-up">Classified Categories</h2>
                <p class="text-[#9CACAD] text-base max-w-xl" data-animate="fade-up">
                    Five inventory pillars route classified narrative items toward their destination archive.
                </p>
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-ghost self-start lg:self-end">
                <x-tabler-arrow-up-right class="size-4" aria-hidden="true" />
                Browse Catalog
            </a>
        </div>

        <ul class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-5" data-stagger>
            @foreach ($categories as $index => $category)
                <li>
                    <a
                        href="{{ route('products.index') }}#{{ $category['slug'] }}"
                        class="card-technical h-full flex flex-col gap-4 relative"
                        data-stagger-item
                        data-card-hover
                    >
                        <span class="font-classified text-[0.62rem] tracking-[0.32em] text-[#5D6E6E] absolute top-4 right-4">{{ str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) }} / 05</span>
                        <span class="icon-frame">
                            <x-dynamic-component
                                :component="'tabler-' . $category['icon']"
                                class="size-5"
                                aria-hidden="true"
                            />
                        </span>
                        <h3 class="text-[0.95rem] tracking-[0.06em] text-[#FFFFFF]">{{ $category['name'] }}</h3>
                        <p class="text-sm text-[#9CACAD]">{{ $category['description'] }}</p>
                        <span class="font-classified text-[0.65rem] tracking-[0.32em] text-[#ED1C24] inline-flex items-center gap-1 mt-auto">
                            EXPLORE
                            <x-tabler-chevron-right class="size-3.5" aria-hidden="true" />
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>

{{-- FEATURED — BENTO --}}
<section class="section-shell pb-24" aria-labelledby="featured-heading">
    <div class="container-tech">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-10">
            <div class="section-heading">
                <span class="section-heading-eyebrow" data-animate="fade-up">Section 03 · Selected Inventory</span>
                <h2 id="featured-heading" data-animate="fade-up">Featured Items</h2>
                <p class="text-[#9CACAD] max-w-xl" data-animate="fade-up">
                    Highlighted artifacts from the active archive. All entries are fictional simulation assets.
                </p>
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-secondary self-start lg:self-end">
                <x-tabler-grid-dots class="size-4" aria-hidden="true" />
                View All Items
            </a>
        </div>

        @php
            $heroProduct = $featured[0] ?? null;
            $bentoProducts = array_slice($featured, 1, 3);
        @endphp

        <div class="bento-grid" data-stagger>
            @if ($heroProduct)
                <article class="bento-hero product-hero-card scanlines" data-stagger-item data-card-hover>
                    <div class="product-hero-card-visual">
                        <div class="product-mockup-grid" aria-hidden="true"></div>
                        <span class="corner-mark tl" aria-hidden="true"></span>
                        <span class="corner-mark tr" aria-hidden="true"></span>
                        <span class="corner-mark bl" aria-hidden="true"></span>
                        <span class="corner-mark br" aria-hidden="true"></span>

                        <div class="absolute top-4 left-4 font-classified text-[0.7rem] tracking-[0.24em] text-[#9CACAD] z-10">{{ $heroProduct['id_code'] }}</div>
                        <div class="absolute top-4 right-4 z-10">
                            @include('partials.security-badge', ['level' => $heroProduct['status']])
                        </div>

                        <figure class="absolute inset-0 grid place-items-center overflow-hidden" aria-hidden="true">
                            <span class="product-mockup-glow" aria-hidden="true"></span>
                            @if (! empty($heroProduct['image']))
                                <img
                                    src="{{ asset($heroProduct['image']) }}"
                                    alt=""
                                    class="product-mockup-image"
                                    loading="eager"
                                    fetchpriority="high"
                                    decoding="async"
                                />
                            @else
                                <x-dynamic-component
                                    :component="'tabler-' . $heroProduct['icon']"
                                    class="size-32 text-[#ED1C24]"
                                />
                            @endif
                        </figure>

                        <div class="absolute bottom-4 left-4 right-4 flex justify-between text-[#5D6E6E] font-classified text-[0.7rem] tracking-[0.24em] z-10">
                            <span>{{ $heroProduct['facility'] }}</span>
                            <span>RISK&nbsp;{{ $heroProduct['risk_index'] }}</span>
                        </div>
                    </div>

                    <div class="product-hero-card-meta">
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center justify-between gap-3">
                                <span class="font-classified text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">{{ strtoupper($heroProduct['category']) }}</span>
                                <span class="font-classified text-[0.7rem] tracking-[0.28em] text-[#ED1C24]">{{ $heroProduct['clearance'] }}</span>
                            </div>
                            <h3 class="text-[1.5rem] leading-[1.15] tracking-[0.04em] text-[#FFFFFF]">
                                <a href="{{ route('products.show', $heroProduct['slug']) }}" class="transition-colors hover:text-[#ED1C24]">{{ $heroProduct['name'] }}</a>
                            </h3>
                            <p class="text-sm text-[#9CACAD]">{{ $heroProduct['description'] }}</p>

                            <dl class="grid grid-cols-2 gap-3 mt-2 pt-3 border-t border-[#5D6E6E]/20 text-[0.72rem] font-classified tracking-[0.18em]">
                                <div>
                                    <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">CONTAINMENT</dt>
                                    <dd class="text-[#FFFFFF]">{{ $heroProduct['containment_class'] }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">FORMAT</dt>
                                    <dd class="text-[#FFFFFF]">{{ $heroProduct['format'] }}</dd>
                                </div>
                            </dl>
                        </div>

                        <div class="flex flex-col gap-3 mt-4">
                            <div class="flex items-end justify-between border-t border-[#5D6E6E]/20 pt-3">
                                <span class="font-classified text-[0.62rem] tracking-[0.28em] text-[#5D6E6E]">UNIT&nbsp;PRICE</span>
                                <span class="font-display text-2xl tracking-[0.18em] text-[#FFFFFF]">${{ number_format($heroProduct['price'], 0, ',', '.') }}</span>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-2">
                                <a href="{{ route('products.show', $heroProduct['slug']) }}" class="btn btn-primary flex-1">
                                    <x-tabler-fingerprint class="size-4" aria-hidden="true" />
                                    Request Authorization
                                </a>
                                <button type="button" class="btn btn-restricted flex-1">
                                    <x-tabler-shopping-cart class="size-4" aria-hidden="true" />
                                    Add to Pending
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
            @endif

            @foreach ($bentoProducts as $bentoIndex => $product)
                <div class="bento-cell {{ $bentoIndex === 0 ? 'bento-cell-tall' : '' }}">
                    @include('partials.product-card', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CLEARANCE BANNER --}}
<section class="section-shell py-16 bg-[#0A0A0A] border-y border-[#5D6E6E]/20" aria-labelledby="clearance-heading">
    <div class="container-tech grid gap-10 lg:grid-cols-12 items-center">
        <div class="lg:col-span-7 flex flex-col gap-5">
            <span class="section-heading-eyebrow" data-animate="fade-up">Section 04 · Access Control</span>
            <h2 id="clearance-heading" data-animate="fade-up">Security Clearance Required</h2>
            <p class="text-[#9CACAD] max-w-xl" data-animate="fade-up">
                Every transaction is gated by manual review. Items above clearance level four require executive sign-off and full audit trail across the archive.
            </p>
            <div class="flex flex-col sm:flex-row gap-3" data-animate="fade-up">
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    <x-tabler-id-badge-2 class="size-4" aria-hidden="true" />
                    Request Clearance
                </a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <x-tabler-grid-dots class="size-4" aria-hidden="true" />
                    View Catalog
                </a>
            </div>
        </div>

        <div class="lg:col-span-5 grid gap-3" data-animate="panel">
            @php
                $teaserLevels = [
                    ['code' => '01', 'name' => 'CLEAR', 'badge' => 'badge-clear', 'icon' => 'circle-check'],
                    ['code' => '03', 'name' => 'NOMINAL', 'badge' => 'badge-nominal', 'icon' => 'shield-check'],
                    ['code' => '04', 'name' => 'RESTRICTED', 'badge' => 'badge-restricted', 'icon' => 'lock'],
                    ['code' => '05', 'name' => 'CRITICAL', 'badge' => 'badge-critical', 'icon' => 'alert-triangle'],
                ];
            @endphp
            @foreach ($teaserLevels as $teaser)
                <div class="flex items-center justify-between gap-4 border border-[#5D6E6E]/20 px-4 py-3 hover:border-[#ED1C24] transition-colors">
                    <span class="flex items-center gap-3">
                        <span class="font-classified text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">LV {{ $teaser['code'] }}</span>
                        <span class="font-display text-[0.85rem] tracking-[0.2em] text-[#FFFFFF]">{{ $teaser['name'] }}</span>
                    </span>
                    <span class="badge {{ $teaser['badge'] }}">
                        <x-dynamic-component
                            :component="'tabler-' . $teaser['icon']"
                            class="size-3.5"
                            aria-hidden="true"
                        />
                        {{ $teaser['name'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- LOGS --}}
<section class="section-shell py-20" aria-labelledby="logs-heading">
    <div class="container-tech">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-10">
            <div class="section-heading">
                <span class="section-heading-eyebrow" data-animate="fade-up">Section 05 · Internal Communications</span>
                <h2 id="logs-heading" data-animate="fade-up">Research Logs</h2>
                <p class="text-[#9CACAD] max-w-xl" data-animate="fade-up">
                    Recent classified communications, containment updates and narrative archive notes.
                </p>
            </div>
            <a href="{{ route('blog.index') }}" class="btn btn-secondary self-start lg:self-end">
                <x-tabler-archive class="size-4" aria-hidden="true" />
                Open Archive
            </a>
        </div>

        <div class="grid gap-5 md:grid-cols-3" data-stagger>
            @foreach ($latestPosts as $post)
                @include('partials.blog-card', ['post' => $post])
            @endforeach
        </div>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="section-shell pb-24" aria-labelledby="final-cta-heading">
    <div class="container-tech">
        <div class="technical-panel relative overflow-hidden p-10 lg:p-14">
            <div class="grid gap-10 lg:grid-cols-12 items-center relative z-10">
                <div class="lg:col-span-7 flex flex-col gap-5">
                    <span class="section-heading-eyebrow" data-animate="fade-up">Section 06 · Final Notice</span>
                    <h2 id="final-cta-heading" data-animate="fade-up">Security clearance required<br />before proceeding.</h2>
                    <p class="text-[#9CACAD] max-w-xl" data-animate="fade-up">
                        Submit a clearance request to unlock authorized inventory. Manual review is mandatory for all critical and classified material.
                    </p>
                </div>
                <div class="lg:col-span-5 flex flex-col items-stretch gap-3" data-animate="panel">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-block">
                        <x-tabler-fingerprint class="size-4" aria-hidden="true" />
                        Submit Clearance Request
                    </a>
                    <a href="{{ route('cart') }}" class="btn btn-secondary btn-block">
                        <x-tabler-shopping-cart class="size-4" aria-hidden="true" />
                        Review Pending Cart
                    </a>
                    <p class="font-classified text-[0.7rem] tracking-[0.28em] text-[#5D6E6E] text-center mt-2">
                        Manual Review · Internal Use Only
                    </p>
                </div>
            </div>

            <div class="absolute -right-24 -top-24 opacity-[0.04]" aria-hidden="true">
                @include('partials.umbrella-mark', ['size' => 320])
            </div>
        </div>
    </div>
</section>

@endsection
