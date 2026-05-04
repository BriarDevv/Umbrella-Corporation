@extends('layouts.app')

@section('title', $post['title'])
@section('description', $post['excerpt'])

@section('content')
<section class="section-shell pt-12 pb-12">
    <div class="container-tech">
        @include('partials.breadcrumb', ['items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Research Logs', 'url' => route('blog.index')],
            ['label' => $post['title']],
        ]])
    </div>
</section>

<section class="section-shell pt-2 pb-16">
    <div class="container-tech grid gap-12 lg:grid-cols-12 items-start">
        <article class="lg:col-span-8 flex flex-col gap-8" data-animate="fade-up">
            <header class="flex flex-col gap-5 border-b border-[#5D6E6E]/25 pb-6">
                <div class="flex flex-wrap items-center gap-3">
                    @include('partials.security-badge', ['level' => $post['security']])
                    <span class="font-classified text-[0.7rem] tracking-[0.24em] text-[#9CACAD]">{{ strtoupper($post['category']) }}</span>
                </div>
                <h1 class="text-[clamp(1.7rem,3vw+0.5rem,3rem)] leading-[1.1]">{{ $post['title'] }}</h1>
                <dl class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-[0.72rem] font-classified tracking-[0.2em]">
                    <div>
                        <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">DATE</dt>
                        <dd class="text-[#FFFFFF]">{{ $post['date'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">DOC&nbsp;ID</dt>
                        <dd class="text-[#FFFFFF]">{{ $post['document_id'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">AUTHOR</dt>
                        <dd class="text-[#FFFFFF]">{{ $post['author'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">FACILITY</dt>
                        <dd class="text-[#FFFFFF]">{{ $post['facility'] }}</dd>
                    </div>
                </dl>
            </header>

            <div class="flex flex-col gap-6 text-[#9CACAD] text-base leading-relaxed">
                <p class="font-classified text-[#ED1C24] uppercase tracking-[0.24em] text-sm">// File excerpt</p>
                <p class="text-[#FFFFFF] text-lg italic">{{ $post['excerpt'] }}</p>

                <span class="hairline-red block" data-animate="line"></span>

                <p>{{ $post['body'] }}</p>

                <p>
                    The contents of this archive entry are intended exclusively for narrative continuity within the Umbrella Research Division frontend project. No portion of this document refers to real biological agents, real weapons or real-world events. All references are dramatized for academic and design purposes only.
                </p>

                <h2 class="text-2xl mt-4 text-[#FFFFFF]">Operational Context</h2>
                <p>
                    Containment protocols described in this document operate strictly inside the fictional universe of the project. Procedures, codenames and clearance escalation paths exist as world-building scaffolding for the design system rather than implementable instructions.
                </p>

                <h2 class="text-2xl mt-4 text-[#FFFFFF]">Distribution</h2>
                <p>
                    Distribution is restricted to the internal corporate archive. Reproduction, transmission or external publication is strictly prohibited under fictional Umbrella corporate policy. Audit trails apply at every clearance threshold.
                </p>

                <p class="font-classified text-[#5D6E6E] tracking-[0.24em] uppercase text-sm">END OF DOCUMENT · {{ $post['document_id'] }}</p>
            </div>

            <a href="{{ route('blog.index') }}" class="btn btn-secondary self-start mt-2">
                <x-tabler-arrow-narrow-left class="size-4" aria-hidden="true" />
                Back to Research Logs
            </a>
        </article>

        <aside class="lg:col-span-4 lg:sticky lg:top-24 flex flex-col gap-5" data-animate="panel">
            <div class="clearance-panel">
                <div class="clearance-panel-header">
                    <span class="font-display text-[0.7rem] tracking-[0.3em] text-[#FFFFFF]">Document Metadata</span>
                    <x-tabler-eye class="size-4 text-[#ED1C24]" aria-hidden="true" />
                </div>
                <dl class="grid gap-3 text-[0.85rem]">
                    @php
                        $metadata = [
                            'Document ID' => $post['document_id'],
                            'Clearance' => $post['security'],
                            'Facility' => $post['facility'],
                            'Status' => 'Recorded',
                            'Last Revision' => $post['last_revision'],
                            'Distribution' => 'Internal',
                            'Archive' => 'Umbrella Research Division',
                        ];
                    @endphp
                    @foreach ($metadata as $label => $value)
                        <div class="flex items-start justify-between gap-3 border-b border-dashed border-[#9CACAD]/20 pb-2 last:border-0 last:pb-0">
                            <dt class="font-classified text-[0.7rem] tracking-[0.22em] text-[#9CACAD]">{{ $label }}</dt>
                            <dd class="text-[#FFFFFF] text-right">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            <div class="technical-panel">
                <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#9CACAD]">Related Records</p>
                <ul class="mt-4 flex flex-col gap-3">
                    @foreach ($related as $sibling)
                        <li>
                            <a href="{{ route('blog.show', $sibling['slug']) }}" class="flex items-start gap-3 group">
                                <x-tabler-file-alert class="size-5 text-[#ED1C24] mt-0.5" aria-hidden="true" />
                                <span class="flex flex-col gap-1">
                                    <span class="font-display text-[0.85rem] tracking-[0.06em] text-[#FFFFFF] group-hover:text-[#ED1C24] transition-colors">{{ $sibling['title'] }}</span>
                                    <span class="font-classified text-[0.7rem] tracking-[0.22em] text-[#9CACAD]">{{ $sibling['document_id'] }}</span>
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</section>
@endsection
