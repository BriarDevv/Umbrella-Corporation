@extends('layouts.app')

@section('title', 'Classified Catalog')
@section('description', 'Private inventory for authorized Umbrella personnel. All items are fictional simulation assets, replicas or classified research documents.')

@section('content')
<section class="section-shell pt-12 pb-12" aria-labelledby="catalog-heading">
    <div class="container-tech">
        @include('partials.breadcrumb', ['items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Catalog'],
        ]])

        <div class="grid gap-10 lg:grid-cols-12 mt-8 items-end">
            <div class="lg:col-span-8 flex flex-col gap-5">
                <span class="section-heading-eyebrow" data-animate="fade-up">Inventory Index</span>
                <h1 id="catalog-heading" data-animate="fade-up">Classified Catalog</h1>
                <p class="text-[#9CACAD] max-w-2xl text-base" data-animate="fade-up">
                    Private inventory for authorized Umbrella personnel. All items are fictional simulation assets, replicas or classified research documents framed as part of the Umbrella Research Division narrative archive.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-col gap-2" data-animate="panel">
                <div class="technical-panel">
                    <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#9CACAD]">ARCHIVE INDEX</p>
                    <p class="font-display text-[#FFFFFF] text-2xl tracking-[0.18em] mt-2">{{ count($products) }} ITEMS</p>
                    <p class="font-classified text-[0.7rem] tracking-[0.24em] text-[#5D6E6E] mt-2">SYNC&nbsp;COMPLETE · INTERNAL</p>
                </div>
            </div>
        </div>

        <span class="hairline-red block mt-12" data-animate="line"></span>
    </div>
</section>

<section class="section-shell pt-2 pb-24" data-filter-root>
    <div class="container-tech flex flex-col gap-10">
        {{-- FILTERS --}}
        <div class="grid gap-8 lg:grid-cols-12">
            <div class="lg:col-span-7 flex flex-col gap-3" data-animate="fade-up">
                <span class="font-classified text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">FILTER&nbsp;·&nbsp;CATEGORY</span>
                <div class="flex flex-wrap gap-2" data-filter-group="category" role="group" aria-label="Filter by category">
                    <button type="button" class="btn btn-ghost text-[0.7rem]" data-filter-value="all" data-active="true" aria-pressed="true">All</button>
                    @foreach ($categories as $category)
                        <button
                            type="button"
                            class="btn btn-ghost text-[0.7rem]"
                            data-filter-value="{{ \Illuminate\Support\Str::slug($category['name']) }}"
                            data-active="false"
                            aria-pressed="false"
                        >
                            <x-dynamic-component
                                :component="'tabler-' . $category['icon']"
                                class="size-3.5"
                                aria-hidden="true"
                            />
                            {{ $category['name'] }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="lg:col-span-5 flex flex-col gap-3" data-animate="fade-up">
                <span class="font-classified text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">FILTER&nbsp;·&nbsp;CLEARANCE</span>
                <div class="flex flex-wrap gap-2" data-filter-group="clearance" role="group" aria-label="Filter by clearance level">
                    <button type="button" class="btn btn-ghost text-[0.7rem]" data-filter-value="all" data-active="true" aria-pressed="true">All</button>
                    @foreach ($clearanceFilters as $filter)
                        <button
                            type="button"
                            class="btn btn-ghost text-[0.7rem]"
                            data-filter-value="{{ $filter['key'] }}"
                            data-active="false"
                            aria-pressed="false"
                        >
                            {{ $filter['label'] }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- GRID --}}
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4" data-stagger>
            @foreach ($products as $product)
                @include('partials.product-card', ['product' => $product])
            @endforeach
        </div>

        <p class="font-classified text-[0.7rem] tracking-[0.28em] text-[#5D6E6E] text-center" data-animate="fade-up">
            END OF ARCHIVE INDEX · INTERNAL USE ONLY
        </p>
    </div>
</section>

<style>
    [data-filter-root] [data-active='true'] {
        background: var(--umbrella-red);
        color: var(--pure-white);
        border-color: var(--umbrella-red);
    }
</style>
@endsection
