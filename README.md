# Umbrella Research Division

Frontend ficticio de ecommerce inspirado en Umbrella Corporation, construido sobre **Laravel 13 + Blade + Tailwind v4 + GSAP + Lenis + Tabler Icons**.

> Pieza de ficción narrativa para la materia *Portales y Comercio Electrónico* (Escuela Da Vinci). El sitio simula la interfaz interna de una corporación farmacéutica clasificada, ofreciendo réplicas de colección, dossiers digitales y equipamiento de utilería ficticio. **No vende ni referencia productos, armas ni actividades reales.**

---

## Stack

| Capa | Tooling |
|---|---|
| Framework | Laravel 13, PHP ^8.3 |
| Vistas | Blade (`@extends` + `@section`) |
| Estilo | Tailwind CSS v4 + variables CSS personalizadas |
| Motion | GSAP 3 + ScrollTrigger, Lenis smooth scroll |
| Iconografía | `secondnetwork/blade-tabler-icons` |
| Build | Vite 7 |
| Datos | Mock estático en `app/Support/MockData.php` |

---

## Levantar el proyecto

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
npm run build           # o `npm run dev` para hot reload con Vite
php artisan serve
```

Abrir `http://localhost:8000`.

> El proyecto usa `SESSION_DRIVER=file` y `CACHE_STORE=file` por defecto, así que **no necesita base de datos** para correr el frontend.

---

## Rutas

| URL | Vista | Controller |
|---|---|---|
| `/` | `pages/home` | `HomeController@index` |
| `/products` | `products/index` | `ProductController@index` |
| `/products/{slug}` | `products/show` | `ProductController@show` |
| `/blog` | `blog/index` | `BlogController@index` |
| `/blog/{slug}` | `blog/show` | `BlogController@show` |
| `/security-levels` | `pages/security-levels` | `PageController@securityLevels` |
| `/about` | `pages/about` | `PageController@about` |
| `/contact` | `pages/contact` | `PageController@contact` |
| `/cart` | `pages/cart` | `PageController@cart` |

---

## Estructura

```
app/
├── Http/Controllers/
│   ├── HomeController.php
│   ├── ProductController.php
│   ├── BlogController.php
│   └── PageController.php
└── Support/
    └── MockData.php          # único punto de datos mock

resources/
├── css/app.css               # design system + componentes Tailwind v4
├── js/
│   ├── app.js                # entrypoint
│   ├── animations.js         # reveals GSAP + ScrollTrigger
│   ├── lenis.js              # smooth scroll
│   ├── navigation.js         # menú mobile accesible
│   └── filters.js            # filtros visuales del catálogo
└── views/
    ├── layouts/app.blade.php
    ├── partials/             # header, footer, cards, panels, badges, mark
    ├── pages/                # home, security-levels, about, contact, cart
    ├── products/             # index, show
    └── blog/                 # index, show

routes/web.php                # 9 rutas thin
```

---

## Design system

### Paleta

| Token | Hex | Uso |
|---|---|---|
| `--umbrella-red` | `#ED1C24` | Marca, CTAs, alertas críticas |
| `--crimson-shadow` | `#830F14` | Hover, profundidad, restricted |
| `--obsidian-brown` | `#2F1B15` | Fondos cálidos casi-negros |
| `--slate-steel` | `#5D6E6E` | Bordes, divisores, instrumentación |
| `--cool-grey` | `#9CACAD` | Texto secundario, superficies |
| `--pure-white` | `#FFFFFF` | Contraste, fondos clínicos |
| `--void` | `#050505` | Fondo del sitio |

### Tipografía

- **Display:** Michroma (uppercase, letter-spacing técnico)
- **Body:** Inter
- **Classified:** Special Elite (IDs, fechas, badges, metadata)

Importadas vía Google Fonts en `resources/css/app.css`.

### Componentes (`@layer components`)

`btn-primary` · `btn-secondary` · `btn-ghost` · `btn-restricted` · `card-classified` · `card-technical` · `clearance-panel` · `technical-panel` · `badge-critical` · `badge-restricted` · `badge-nominal` · `badge-standby` · `badge-classified` · `badge-clear` · `data-table` · `input-control` · `icon-frame` · `barcode-line` · `corner-frame` · `scan-frame`.

---

## Animaciones

Todas se aplican via `data-animate` en HTML para no acoplar markup con JS:

| Atributo | Efecto |
|---|---|
| `data-hero-reveal` + `data-hero-item` | Stagger de hero al cargar |
| `data-animate="fade-up"` | Reveal con ScrollTrigger |
| `data-animate="line"` | scaleX de líneas técnicas |
| `data-animate="panel"` | Slide lateral sutil |
| `data-animate="table-row"` | Reveal por fila |
| `data-stagger` + `data-stagger-item` | Cards con stagger |
| `data-card-hover` | TranslateY al pasar mouse/foco |

Lenis se desactiva automáticamente con `prefers-reduced-motion`.

---

## Scripts

```bash
npm run dev      # Vite watch
npm run build    # build de producción
composer test    # PHPUnit
```

---

## Próximos pasos (cuando se conecte el backend)

`MockData.php` está estructurado para mapear 1-a-1 a Eloquent. El plan natural es:

1. Migrar `posts` (research logs) y `products` (catalog) con campos del mock.
2. Convertir `MockData::*` en seeders (`PostSeeder`, `ProductSeeder`).
3. Reemplazar las llamadas estáticas en los controllers por queries Eloquent.
4. Sumar el módulo de carrito real (sesión + checkout simulado).

---

## Commits sugeridos

```
feat(frontend): scaffold Laravel 13 Blade ecommerce structure
style(theme): implement Umbrella Tailwind design system
feat(ui): integrate Tabler Icons for technical interface system
feat(ui): add catalog, product detail and pending cart pages
feat(content): add research logs and classified document views
feat(animation): add GSAP reveals and Lenis smooth scroll
refactor(frontend): extract reusable Blade partials
chore(env): switch session/cache drivers to file for DB-less demo
```

---

**Property of Umbrella Corporation · Internal Use Only**
