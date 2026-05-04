@extends('layouts.app')

@section('title', $product['name'])
@section('description', $product['description'])

@section('content')
<section class="section-shell pt-12 pb-12">
    <div class="container-tech">
        @include('partials.breadcrumb', ['items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Catalog', 'url' => route('products.index')],
            ['label' => $product['name']],
        ]])

        <div class="mt-10 grid gap-10 lg:grid-cols-12 items-start">
            {{-- VISUAL --}}
            <div class="lg:col-span-7 flex flex-col gap-6" data-animate="fade-up">
                <div class="product-mockup aspect-[4/3] border border-[#5D6E6E]/30 lg:aspect-[16/11] scanlines">
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
                                alt="{{ $product['name'] }}"
                                class="product-mockup-image product-mockup-image--detail"
                                loading="eager"
                                fetchpriority="high"
                                decoding="async"
                            />
                        @else
                            <x-dynamic-component
                                :component="'tabler-' . ($product['icon'] ?? 'flask')"
                                class="size-32 text-[#ED1C24]"
                            />
                        @endif
                    </figure>

                    <div class="product-mockup-meta">
                        <span>{{ $product['facility'] }}</span>
                        <span>RISK&nbsp;{{ $product['risk_index'] }}</span>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    @php
                        $thumbIcons = ['scan', 'barcode', 'database'];
                        $thumbLabels = ['DEEP SCAN', 'SAMPLE ID', 'ARCHIVE'];
                    @endphp
                    @foreach ($thumbIcons as $tIndex => $thumbIcon)
                        <figure class="aspect-square border border-[#5D6E6E]/25 bg-[#0A0A0A] grid place-items-center hover:border-[#ED1C24] transition-colors relative">
                            <x-dynamic-component
                                :component="'tabler-' . $thumbIcon"
                                class="size-8 text-[#9CACAD]"
                                aria-hidden="true"
                            />
                            <figcaption class="absolute bottom-2 left-0 right-0 text-center font-classified text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">{{ $thumbLabels[$tIndex] }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>

            {{-- META --}}
            <aside class="lg:col-span-5 flex flex-col gap-6" data-animate="panel">
                <div class="flex items-center justify-between">
                    <span class="font-classified text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">{{ strtoupper($product['category']) }}</span>
                    @include('partials.security-badge', ['level' => $product['status']])
                </div>

                <h1 class="text-[clamp(1.6rem,2vw+1rem,2.6rem)]">{{ $product['name'] }}</h1>

                @if (! empty($product['type']))
                    <p class="font-classified text-[0.72rem] tracking-[0.28em] text-[#ED1C24] -mt-3">// {{ strtoupper($product['type']) }}</p>
                @endif

                <p class="text-[#9CACAD] text-base">{{ $product['description'] }}</p>

                @if (! empty($product['body']))
                    <p class="text-[#9CACAD] text-sm leading-relaxed">{{ $product['body'] }}</p>
                @endif

                <div class="border-y border-[#5D6E6E]/25 py-5 grid grid-cols-2 gap-y-3 gap-x-6">
                    <div>
                        <p class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">CLEARANCE</p>
                        <p class="font-display text-[#ED1C24] tracking-[0.2em] mt-1">{{ $product['clearance'] }}</p>
                    </div>
                    <div>
                        <p class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">UNIT&nbsp;PRICE</p>
                        <p class="font-display text-[#FFFFFF] tracking-[0.2em] mt-1 text-xl">${{ number_format($product['price'], 0, ',', '.') }}</p>
                    </div>
                    <div>
                        <p class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">FACILITY</p>
                        <p class="font-classified text-[#FFFFFF] tracking-[0.16em] mt-1">{{ $product['facility'] }}</p>
                    </div>
                    <div>
                        <p class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">SUBJECT&nbsp;ID</p>
                        <p class="font-classified text-[#FFFFFF] tracking-[0.16em] mt-1">{{ $product['id_code'] }}</p>
                    </div>
                    @if (! empty($product['stock']))
                        <div>
                            <p class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">STOCK</p>
                            <p class="font-classified text-[#FFFFFF] tracking-[0.16em] mt-1">{{ $product['stock'] }}</p>
                        </div>
                    @endif
                    @if (! empty($product['risk_index']))
                        <div>
                            <p class="font-classified text-[0.65rem] tracking-[0.28em] text-[#5D6E6E]">RISK&nbsp;INDEX</p>
                            <p class="font-classified text-[#ED1C24] tracking-[0.16em] mt-1">{{ $product['risk_index'] }}</p>
                        </div>
                    @endif
                </div>

                <div class="flex flex-col gap-3">
                    <button type="button" class="btn btn-primary btn-block">
                        <x-tabler-fingerprint class="size-4" aria-hidden="true" />
                        Request Authorization
                    </button>
                    <button type="button" class="btn btn-restricted btn-block">
                        <x-tabler-shopping-cart class="size-4" aria-hidden="true" />
                        Add to Pending Cart
                    </button>
                    <p class="font-classified text-[0.7rem] tracking-[0.24em] text-[#5D6E6E] text-center">
                        Checkout module pending internal approval.
                    </p>
                </div>

                {{-- CONTAINMENT NOTICE --}}
                <div class="clearance-panel">
                    <div class="clearance-panel-header">
                        <span class="font-display text-[0.7rem] tracking-[0.32em] text-[#FFFFFF]">Containment Notice</span>
                        <x-tabler-alert-triangle class="size-4 text-[#ED1C24]" aria-hidden="true" />
                    </div>
                    <p class="font-classified text-[0.78rem] leading-relaxed text-[#9CACAD]">
                        This item is part of a fictional classified inventory. Access requires internal authorization and is intended for narrative, academic and visual design purposes only.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- TECHNICAL SPEC --}}
<section class="section-shell py-16 bg-[#0A0A0A] border-y border-[#5D6E6E]/20" aria-labelledby="spec-heading">
    <div class="container-tech grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-4 flex flex-col gap-4">
            <span class="section-heading-eyebrow" data-animate="fade-up">Technical Spec</span>
            <h2 id="spec-heading" data-animate="fade-up">File Composition</h2>
            <p class="text-[#9CACAD] max-w-md" data-animate="fade-up">
                Internal metadata associated with this fictional asset. All values are framed as in-universe documentation for narrative context.
            </p>
        </div>

        <div class="lg:col-span-8" data-animate="panel">
            @include('partials.technical-table', [
                'caption' => 'CLASSIFIED METADATA — DO NOT REDISTRIBUTE',
                'rows' => array_filter([
                    ['label' => 'Subject ID', 'value' => $product['id_code']],
                    ['label' => 'Type', 'value' => $product['type'] ?? null],
                    ['label' => 'Clearance Level', 'value' => $product['clearance']],
                    ['label' => 'Containment Class', 'value' => $product['containment_class']],
                    ['label' => 'Facility', 'value' => $product['facility']],
                    ['label' => 'Format', 'value' => $product['format']],
                    ['label' => 'Color Visual', 'value' => $product['color_visual'] ?? null],
                    ['label' => 'Origin', 'value' => $product['origin'] ?? null],
                    ['label' => 'Storage', 'value' => $product['storage'] ?? null],
                    ['label' => 'Stability', 'value' => $product['stability'] ?? null],
                    ['label' => 'Mutation Potential', 'value' => $product['mutation_potential'] ?? null],
                    ['label' => 'Known Applications', 'value' => $product['applications'] ?? null],
                    ['label' => 'Distribution', 'value' => $product['distribution'] ?? null],
                    ['label' => 'Availability', 'value' => $product['availability'] ?? null],
                    ['label' => 'Risk Index', 'value' => $product['risk_index'] ?? null],
                    ['label' => 'Last Revision', 'value' => $product['last_revision'] ?? null],
                ], static fn ($row) => ! empty($row['value'])),
            ])
        </div>
    </div>
</section>

{{-- RELATED --}}
<section class="section-shell pb-24" aria-labelledby="related-heading">
    <div class="container-tech">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
            <div class="section-heading">
                <span class="section-heading-eyebrow" data-animate="fade-up">Related Records</span>
                <h2 id="related-heading" data-animate="fade-up">Adjacent Inventory</h2>
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-ghost self-start lg:self-end">
                <x-tabler-arrow-up-right class="size-4" aria-hidden="true" />
                Browse All
            </a>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-stagger>
            @foreach ($related as $relatedProduct)
                @include('partials.product-card', ['product' => $relatedProduct])
            @endforeach
        </div>
    </div>
</section>
@endsection
