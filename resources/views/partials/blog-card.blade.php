@props([
    'post',
])

<article
    class="card-technical flex flex-col gap-5"
    data-card-hover
    data-stagger-item
>
    <div class="flex items-center justify-between gap-3">
        <span class="inline-flex items-center gap-2 font-classified text-[0.7rem] tracking-[0.24em] text-[#9CACAD]">
            <x-dynamic-component
                :component="'tabler-' . $post['icon']"
                class="size-4 text-[#ED1C24]"
                aria-hidden="true"
            />
            {{ strtoupper($post['category']) }}
        </span>
        @include('partials.security-badge', ['level' => $post['security']])
    </div>

    <h3 class="text-[1.05rem] tracking-[0.06em] text-[#FFFFFF]">
        <a href="{{ route('blog.show', $post['slug']) }}" class="transition-colors hover:text-[#ED1C24]">
            {{ $post['title'] }}
        </a>
    </h3>

    <p class="text-sm text-[#9CACAD]">{{ $post['excerpt'] }}</p>

    <dl class="grid grid-cols-2 gap-3 text-[0.7rem] font-classified tracking-[0.18em] text-[#9CACAD] border-t border-[#5D6E6E]/15 pt-4">
        <div>
            <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">DATE</dt>
            <dd class="text-[#FFFFFF]">{{ $post['date'] }}</dd>
        </div>
        <div>
            <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">DOC&nbsp;ID</dt>
            <dd class="text-[#FFFFFF]">{{ $post['document_id'] }}</dd>
        </div>
        <div class="col-span-2">
            <dt class="text-[0.6rem] tracking-[0.28em] text-[#5D6E6E]">AUTHOR</dt>
            <dd class="text-[#FFFFFF]">{{ $post['author'] }}</dd>
        </div>
    </dl>

    <a href="{{ route('blog.show', $post['slug']) }}" class="btn btn-secondary text-[0.72rem] mt-1 self-start">
        <x-tabler-folder-open class="size-3.5" aria-hidden="true" />
        Open File
    </a>
</article>
