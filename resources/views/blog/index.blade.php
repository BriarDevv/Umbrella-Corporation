@extends('layouts.app')

@section('title', 'Research Logs')
@section('description', 'Internal communications, containment updates and classified research notes from Umbrella facilities.')

@section('content')
<section class="section-shell pt-12 pb-12" aria-labelledby="logs-heading">
    <div class="container-tech">
        @include('partials.breadcrumb', ['items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Research Logs'],
        ]])

        <div class="grid gap-10 lg:grid-cols-12 mt-8 items-end">
            <div class="lg:col-span-8 flex flex-col gap-5">
                <span class="section-heading-eyebrow" data-animate="fade-up">Internal Communications</span>
                <h1 id="logs-heading" data-animate="fade-up">Research Logs</h1>
                <p class="text-[#9CACAD] max-w-2xl" data-animate="fade-up">
                    Internal communications, containment updates and classified research notes from Umbrella facilities. Documents are presented as narrative archive material.
                </p>
            </div>

            <div class="lg:col-span-4" data-animate="panel">
                <div class="technical-panel">
                    <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#9CACAD]">ARCHIVE STATUS</p>
                    <p class="font-display text-[#FFFFFF] text-xl tracking-[0.18em] mt-2">{{ count($posts) }} ENTRIES</p>
                    <div class="mt-4 flex items-center gap-3">
                        <span class="status-dot" aria-hidden="true"></span>
                        <span class="font-classified text-[0.7rem] tracking-[0.24em] text-[#9CACAD]">LIVE&nbsp;FEED&nbsp;·&nbsp;ENCRYPTED</span>
                    </div>
                </div>
            </div>
        </div>

        <span class="hairline-red block mt-12" data-animate="line"></span>
    </div>
</section>

<section class="section-shell pt-2 pb-24">
    <div class="container-tech grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-stagger>
        @foreach ($posts as $post)
            @include('partials.blog-card', ['post' => $post])
        @endforeach
    </div>
</section>
@endsection
