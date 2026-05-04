@extends('layouts.app')

@section('title', 'About')
@section('description', 'Institutional profile of the fictional Umbrella Research Division — bioengineering, pharmaceutical research, containment systems, private security and corporate oversight.')

@section('content')
<section class="section-shell pt-12 pb-12" aria-labelledby="about-heading">
    <div class="container-tech">
        @include('partials.breadcrumb', ['items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'About'],
        ]])

        <div class="grid gap-10 lg:grid-cols-12 mt-8 items-end">
            <div class="lg:col-span-7 flex flex-col gap-5">
                <span class="section-heading-eyebrow" data-animate="fade-up">Institutional Profile</span>
                <h1 id="about-heading" data-animate="fade-up">About Umbrella<br />Research Division</h1>
                <p class="text-[#9CACAD] max-w-2xl" data-animate="fade-up">
                    Umbrella Research Division operates as a fictional internal archive for narrative documents, replicas and design reference material. The division is presented as part of a tightly governed, opaque pharmaceutical conglomerate.
                </p>
            </div>
            <div class="lg:col-span-5 technical-panel" data-animate="panel">
                <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#9CACAD]">CORPORATE&nbsp;CHARTER</p>
                <p class="text-[#FFFFFF] mt-3 text-sm">
                    "We exist to advance the boundaries of life science under conditions of absolute discipline, oversight and discretion."
                </p>
                <p class="font-classified text-[0.7rem] tracking-[0.24em] text-[#5D6E6E] mt-4">CHARTER REV.&nbsp;08&nbsp;·&nbsp;UC-1968-A</p>
            </div>
        </div>

        <span class="hairline-red block mt-12" data-animate="line"></span>
    </div>
</section>

<section class="section-shell pt-2 pb-20" aria-labelledby="divisions-heading">
    <div class="container-tech">
        <div class="section-heading mb-10">
            <span class="section-heading-eyebrow" data-animate="fade-up">Operational Divisions</span>
            <h2 id="divisions-heading" data-animate="fade-up">Five Pillars of Oversight</h2>
            <p class="text-[#9CACAD] max-w-xl" data-animate="fade-up">
                Each division enforces narrative continuity within the archive. Together they shape the editorial and design tone of the inventory.
            </p>
        </div>

        <ul class="grid gap-4 md:grid-cols-2 lg:grid-cols-3" data-stagger>
            @foreach ($divisions as $division)
                <li class="card-technical h-full flex flex-col gap-4" data-stagger-item data-card-hover>
                    <span class="icon-frame icon-frame-lg">
                        <x-dynamic-component
                            :component="'tabler-' . $division['icon']"
                            class="size-6"
                            aria-hidden="true"
                        />
                    </span>
                    <h3 class="text-[1.05rem] tracking-[0.06em] text-[#FFFFFF]">{{ $division['name'] }}</h3>
                    <p class="text-sm text-[#9CACAD]">{{ $division['description'] }}</p>
                    <p class="font-classified text-[0.7rem] tracking-[0.28em] text-[#5D6E6E] mt-auto">DIVISION ACTIVE</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>

<section class="section-shell py-16 bg-[#0A0A0A] border-y border-[#5D6E6E]/20" aria-labelledby="timeline-heading">
    <div class="container-tech grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-4 flex flex-col gap-4">
            <span class="section-heading-eyebrow" data-animate="fade-up">Internal Timeline</span>
            <h2 id="timeline-heading" data-animate="fade-up">Reference Milestones</h2>
            <p class="text-[#9CACAD] max-w-md" data-animate="fade-up">
                Narrative anchors used across the archive to provide editorial continuity for documents and inventory.
            </p>
        </div>

        <ol class="lg:col-span-8 flex flex-col" data-animate-table>
            @foreach ($timeline as $entry)
                <li class="grid grid-cols-[120px_1fr] gap-6 items-start py-5 border-b border-[#5D6E6E]/20 last:border-0" data-animate="table-row">
                    <span class="font-display text-[#ED1C24] text-2xl tracking-[0.2em]">{{ $entry['year'] }}</span>
                    <div class="flex flex-col gap-1">
                        <span class="font-display text-[#FFFFFF] text-base tracking-[0.16em]">{{ $entry['title'] }}</span>
                        <p class="text-sm text-[#9CACAD]">{{ $entry['note'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>

<section class="section-shell pt-16 pb-24" aria-labelledby="oversight-heading">
    <div class="container-tech grid gap-10 lg:grid-cols-12 items-center">
        <div class="lg:col-span-7 flex flex-col gap-5">
            <span class="section-heading-eyebrow" data-animate="fade-up">Corporate Oversight</span>
            <h2 id="oversight-heading" data-animate="fade-up">Discretion is the standard</h2>
            <p class="text-[#9CACAD] max-w-xl" data-animate="fade-up">
                The Research Division does not operate in isolation. Every archive entry is reviewed against narrative continuity and executive policy before circulation.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-primary self-start" data-animate="fade-up">
                <x-tabler-id-badge-2 class="size-4" aria-hidden="true" />
                Request Clearance
            </a>
        </div>

        <aside class="lg:col-span-5 grid gap-3" data-animate="panel">
            @php
                $traits = [
                    ['icon' => 'building', 'label' => 'Headquarters', 'value' => 'Raccoon Division'],
                    ['icon' => 'database', 'label' => 'Active Records', 'value' => '24,182'],
                    ['icon' => 'eye', 'label' => 'Review Cadence', 'value' => 'Weekly'],
                    ['icon' => 'user-shield', 'label' => 'Oversight Board', 'value' => '7 members'],
                ];
            @endphp
            @foreach ($traits as $trait)
                <div class="flex items-center gap-4 border border-[#5D6E6E]/20 px-4 py-3">
                    <span class="icon-frame">
                        <x-dynamic-component
                            :component="'tabler-' . $trait['icon']"
                            class="size-5"
                            aria-hidden="true"
                        />
                    </span>
                    <div class="flex flex-col">
                        <span class="font-classified text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">{{ $trait['label'] }}</span>
                        <span class="font-display text-[0.95rem] tracking-[0.18em] text-[#FFFFFF]">{{ $trait['value'] }}</span>
                    </div>
                </div>
            @endforeach
        </aside>
    </div>
</section>
@endsection
