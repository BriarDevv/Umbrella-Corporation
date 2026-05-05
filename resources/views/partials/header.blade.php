@php
    $navItems = [
        ['route' => 'home', 'label' => 'Inicio', 'icon' => 'home'],
        ['route' => 'products.index', 'label' => 'Bioagentes', 'icon' => 'grid-dots'],
        ['route' => 'blog.index', 'label' => 'Registros', 'icon' => 'file-text'],
        ['route' => 'about', 'label' => 'Acerca', 'icon' => 'building'],
        ['route' => 'contact', 'label' => 'Solicitar Acceso', 'icon' => 'id'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-[#5D6E6E]/20 bg-[#050505]/85 backdrop-blur">
    <div class="container-tech">
        <div class="flex h-16 items-center justify-between gap-6">
            <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Umbrella Corporation — Inicio">
                @include('partials.umbrella-mark', ['size' => 36])
                <span class="hidden sm:flex flex-col leading-tight">
                    <span class="font-display text-[0.7rem] tracking-[0.32em] text-[#FFFFFF]">Umbrella</span>
                    <span class="font-classified text-[0.65rem] tracking-[0.28em] text-[#9CACAD]">CORPORATION</span>
                </span>
            </a>

            <nav class="hidden lg:block" aria-label="Navegación principal">
                <ul class="flex items-center gap-7 text-[0.72rem] font-semibold uppercase tracking-[0.22em] text-[#9CACAD]">
                    @foreach ($navItems as $item)
                        <li>
                            <a
                                href="{{ route($item['route']) }}"
                                @class([
                                    'transition-colors hover:text-[#FFFFFF]',
                                    'text-[#FFFFFF]' => request()->routeIs($item['route']),
                                ])
                            >
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="flex items-center gap-3">
                <a
                    href="{{ route('cart') }}"
                    class="inline-flex items-center gap-2 border border-[#5D6E6E]/40 px-3 py-2 text-[0.7rem] font-semibold tracking-[0.2em] uppercase text-[#FFFFFF] transition-colors hover:border-[#ED1C24] hover:text-[#ED1C24]"
                    aria-label="Carrito"
                >
                    <x-tabler-shopping-cart class="size-4" aria-hidden="true" />
                    <span class="hidden sm:inline">Carrito</span>
                </a>

                <button
                    type="button"
                    class="inline-flex h-10 w-10 items-center justify-center border border-[#5D6E6E]/40 text-[#FFFFFF] lg:hidden"
                    aria-controls="primary-mobile-nav"
                    aria-expanded="false"
                    aria-label="Alternar navegación"
                    data-nav-toggle
                >
                    <x-tabler-menu-2 class="size-5" data-nav-icon-open aria-hidden="true" />
                    <x-tabler-x class="size-5 hidden" data-nav-icon-close aria-hidden="true" />
                </button>
            </div>
        </div>
    </div>

    <div
        id="primary-mobile-nav"
        class="lg:hidden border-t border-[#5D6E6E]/20 bg-[#050505] data-[open=false]:hidden"
        data-nav-menu
        data-open="false"
    >
        <nav aria-label="Navegación móvil" class="container-tech py-6">
            <ul class="flex flex-col divide-y divide-[#5D6E6E]/15">
                @foreach ($navItems as $item)
                    <li>
                        <a
                            href="{{ route($item['route']) }}"
                            @class([
                                'flex items-center justify-between py-4 text-sm font-semibold uppercase tracking-[0.22em] text-[#9CACAD] transition-colors hover:text-[#FFFFFF]',
                                'text-[#FFFFFF]' => request()->routeIs($item['route']),
                            ])
                        >
                            <span class="inline-flex items-center gap-3">
                                <x-dynamic-component
                                    :component="'tabler-' . $item['icon']"
                                    class="size-4 text-[#ED1C24]"
                                    aria-hidden="true"
                                />
                                {{ $item['label'] }}
                            </span>
                            <x-tabler-chevron-right class="size-4" aria-hidden="true" />
                        </a>
                    </li>
                @endforeach
            </ul>

            <p class="mt-6 inline-flex items-center gap-2 font-classified text-[0.65rem] tracking-[0.28em] text-[#9CACAD]">
                <span class="status-dot status-dot-nominal" aria-hidden="true"></span>
                Sistema Nominal — Red Interna
            </p>
        </nav>
    </div>
</header>
