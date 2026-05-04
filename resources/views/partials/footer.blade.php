<footer class="border-t border-[#5D6E6E]/25 bg-[#0A0A0A] mt-24">
    <div class="container-tech grid gap-10 py-14 md:grid-cols-4">
        <div class="md:col-span-2 flex flex-col gap-5">
            <div class="flex items-center gap-3">
                @include('partials.umbrella-mark', ['size' => 40])
                <div>
                    <p class="font-display text-sm tracking-[0.3em] text-[#FFFFFF]">Umbrella</p>
                    <p class="font-classified text-[0.7rem] tracking-[0.28em] text-[#9CACAD]">RESEARCH&nbsp;DIVISION</p>
                </div>
            </div>
            <p class="max-w-md text-sm text-[#9CACAD]">
                Internal classified ecommerce interface for fictional research artifacts, replicas and narrative documentation. All inventory exists strictly as visual design and academic material.
            </p>

            <div class="barcode-line w-44">
                @php
                    $bars = [3, 1, 2, 4, 1, 2, 3, 1, 4, 2, 1, 3, 1, 2, 4, 1, 3, 2];
                @endphp
                @foreach ($bars as $weight)
                    <span style="width: {{ $weight }}px;"></span>
                @endforeach
            </div>
            <p class="font-classified text-[0.7rem] tracking-[0.3em] text-[#5D6E6E]">UC-1968-A · INTERNAL USE ONLY</p>
        </div>

        <nav aria-label="Footer navigation" class="flex flex-col gap-3">
            <p class="font-display text-[0.7rem] tracking-[0.28em] text-[#FFFFFF]">Sections</p>
            <ul class="flex flex-col gap-2 text-sm text-[#9CACAD]">
                <li><a href="{{ route('home') }}" class="transition-colors hover:text-[#FFFFFF]">Home</a></li>
                <li><a href="{{ route('products.index') }}" class="transition-colors hover:text-[#FFFFFF]">Catalog</a></li>
                <li><a href="{{ route('blog.index') }}" class="transition-colors hover:text-[#FFFFFF]">Research Logs</a></li>
                <li><a href="{{ route('about') }}" class="transition-colors hover:text-[#FFFFFF]">About</a></li>
                <li><a href="{{ route('contact') }}" class="transition-colors hover:text-[#FFFFFF]">Request Clearance</a></li>
            </ul>
        </nav>

        <div class="flex flex-col gap-3">
            <p class="font-display text-[0.7rem] tracking-[0.28em] text-[#FFFFFF]">Status</p>
            <ul class="flex flex-col gap-2 text-sm text-[#9CACAD]">
                <li class="flex items-center gap-2">
                    <span class="status-dot status-dot-nominal" aria-hidden="true"></span>
                    System Nominal
                </li>
                <li class="flex items-center gap-2 font-classified text-[0.7rem] tracking-[0.24em]">
                    <x-tabler-shield-lock class="size-4 text-[#ED1C24]" aria-hidden="true" />
                    Containment Active
                </li>
                <li class="flex items-center gap-2 font-classified text-[0.7rem] tracking-[0.24em]">
                    <x-tabler-database class="size-4 text-[#9CACAD]" aria-hidden="true" />
                    Archive&nbsp;v2.4
                </li>
            </ul>
        </div>
    </div>

    <div class="border-t border-[#5D6E6E]/20">
        <div class="container-tech flex flex-col items-start justify-between gap-3 py-5 text-[0.72rem] font-classified tracking-[0.28em] text-[#5D6E6E] sm:flex-row sm:items-center">
            <p>Property of Umbrella Corporation · Unauthorized reproduction is strictly prohibited.</p>
            <p>{{ date('Y') }} · Internal Use Only</p>
        </div>
    </div>
</footer>
