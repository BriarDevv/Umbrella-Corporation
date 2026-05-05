<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    /**
     * Datos institucionales que viven sólo como copy del about.
     * No corresponden a entidades del dominio (catálogo / blog), por lo
     * que se mantienen como constantes y no como tablas.
     *
     * @var array<int, array<string, string>>
     */
    private const DIVISIONS = [
        ['name' => 'Bioingeniería', 'icon' => 'dna', 'description' => 'Marco de investigación narrativa en torno al diseño ficticio de muestras y escenarios de replicación.'],
        ['name' => 'Investigación Farmacéutica', 'icon' => 'flask', 'description' => 'Pipeline farmacéutico ficticio usado para narrativa visual y referencias de diseño.'],
        ['name' => 'Sistemas de Contención', 'icon' => 'shield-lock', 'description' => 'Infraestructura imaginada de contención representada mediante props, planos e informes.'],
        ['name' => 'Seguridad Privada', 'icon' => 'user-shield', 'description' => 'Operativos y protocolos de seguridad ficticios documentados como parte del lore corporativo.'],
        ['name' => 'Supervisión Corporativa', 'icon' => 'building', 'description' => 'Capa ejecutiva responsable de la continuidad narrativa y la gobernanza de acceso.'],
    ];

    /** @var array<int, array<string, string>> */
    private const TIMELINE = [
        ['year' => '1968', 'title' => 'Fundación', 'note' => 'Constitución de Umbrella como conglomerado farmacéutico dentro del lore del proyecto.'],
        ['year' => '1978', 'title' => 'Laboratorio NEST', 'note' => 'Instalación subterránea de investigación puesta en marcha en la continuidad narrativa.'],
        ['year' => '1988', 'title' => 'Operaciones Arklay', 'note' => 'Expansión de los terrenos ficticios de investigación y consolidación del archivo.'],
        ['year' => '1998', 'title' => 'Incidente Raccoon', 'note' => 'Evento de referencia usado como ancla narrativa canónica en todo el archivo.'],
        ['year' => '2003', 'title' => 'Reestructuración', 'note' => 'Reorganización interna que enmarca el layout actual del archivo.'],
    ];

    /**
     * Carrito demo: tres slugs fijos representando una sesión simulada.
     * El parcial no exige carrito persistente; cuando se implemente,
     * esta lista vendrá de la session/usuario autenticado.
     *
     * @var array<int, array<string, string|int>>
     */
    private const DEMO_CART = [
        ['slug' => 't-virus', 'qty' => 1],
        ['slug' => 'g-virus', 'qty' => 2],
        ['slug' => 'las-plagas', 'qty' => 1],
    ];

    public function about(): View
    {
        return view('pages.about', [
            'divisions' => self::DIVISIONS,
            'timeline' => self::TIMELINE,
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Procesa la solicitud de acceso. La validación vive en ContactRequest;
     * si pasa, devolvemos al usuario al form con un flag de éxito en sesión.
     * No persistimos la solicitud porque la consigna no exige carrito ni
     * envío real, y el sitio es ficcional.
     */
    public function submitContact(ContactRequest $request): RedirectResponse
    {
        $request->validated();

        return redirect()
            ->route('contact')
            ->with('contact_status', 'received')
            ->with('contact_full_name', $request->string('full_name')->toString());
    }

    public function cart(): View
    {
        $items = collect(self::DEMO_CART)
            ->map(function (array $entry): ?array {
                $product = Product::with('category')->where('slug', $entry['slug'])->first();
                if ($product === null) {
                    return null;
                }

                return [
                    'product' => $product,
                    'qty' => $entry['qty'],
                    'subtotal' => $product->price * $entry['qty'],
                ];
            })
            ->filter()
            ->values();

        return view('pages.cart', [
            'items' => $items,
            'subtotal' => $items->sum('subtotal'),
        ]);
    }
}
