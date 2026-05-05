<?php

declare(strict_types=1);

namespace App\Support;

/**
 * Static mock data provider for the Umbrella Corporation frontend.
 * Designed to be moved into Eloquent models / seeders once the backend is wired up.
 */
final class MockData
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public static function products(): array
    {
        return [
            // ============== CEPAS CLÁSICAS DE UMBRELLA ==============
            [
                'name' => 'Progenitor Virus',
                'slug' => 'progenitor-virus',
                'category' => 'Cepas Clásicas de Umbrella',
                'type' => 'Cepa Viral',
                'id_code' => 'PV-001',
                'price' => 15000000,
                'stock' => '1 muestra primaria',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Archivo de Investigación África',
                'risk_index' => '100/100',
                'containment_class' => 'Absoluta',
                'format' => 'Muestra de origen criogénica',
                'color_visual' => 'Ámbar / dorado antiguo',
                'image' => 'images/products/progenitor-virus.png',
                'icon' => 'biohazard',
                'description' => 'La cepa madre de la bioingeniería moderna. El origen de los principales desarrollos virales de Umbrella.',
                'body' => 'El Progenitor Virus representa la base fundacional de los programas de investigación biológica de Umbrella Corporation. Su valor no reside únicamente en su rareza, sino en su potencial como matriz genética para el desarrollo de cepas derivadas, mutaciones controladas y proyectos avanzados de bioingeniería. Esta muestra está reservada exclusivamente para personal ejecutivo con autorización máxima.',
                'origin' => 'Linaje Progenitor',
                'storage' => 'Cámara criogénica sellada',
                'stability' => 'Inestable bajo condiciones no controladas',
                'mutation_potential' => 'Extremo',
                'applications' => 'Sólo investigación ejecutiva',
                'distribution' => 'Interna / Archivo Restringido',
                'availability' => 'Pendiente de Autorización',
                'last_revision' => '1968-04-22',
            ],
            [
                'name' => 'T-Virus',
                'slug' => 't-virus',
                'category' => 'Cepas Clásicas de Umbrella',
                'type' => 'Cepa Viral',
                'id_code' => 'TV-002',
                'price' => 6500000,
                'stock' => '12 muestras',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'critical',
                'facility' => 'Laboratorio Arklay',
                'risk_index' => '96/100',
                'containment_class' => 'Máxima',
                'format' => 'Cilindro viral sellado',
                'color_visual' => 'Rojo intenso',
                'image' => 'images/products/t-virus.png',
                'icon' => 'flask',
                'description' => 'El agente viral más icónico de Umbrella. Base operativa para múltiples líneas B.O.W. y proyectos militares.',
                'body' => 'El T-Virus, también conocido como Tyrant Virus, es uno de los desarrollos más reconocidos de Umbrella Corporation. Diseñado para inducir mutaciones agresivas y alterar radicalmente las capacidades físicas del organismo huésped, se convirtió en el núcleo de varios programas de armas biológicas y experimentación aplicada. Su manipulación requiere instalaciones de contención de alto nivel.',
                'origin' => 'Programa viral de Umbrella',
                'storage' => 'Vial de contención rojo',
                'stability' => 'Media',
                'mutation_potential' => 'Alto',
                'applications' => 'Desarrollo B.O.W., mejora de combate',
                'distribution' => 'División de Investigación Militar',
                'availability' => 'En Stock',
                'last_revision' => '1998-09-29',
            ],
            [
                'name' => 'G-Virus',
                'slug' => 'g-virus',
                'category' => 'Cepas Clásicas de Umbrella',
                'type' => 'Cepa Viral',
                'id_code' => 'GV-003',
                'price' => 8900000,
                'stock' => '3 muestras',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Laboratorio NEST',
                'risk_index' => '99/100',
                'containment_class' => 'Máxima',
                'format' => 'Cápsula de mutación genética',
                'color_visual' => 'Violeta / azul eléctrico',
                'image' => 'images/products/g-virus.png',
                'icon' => 'dna',
                'description' => 'Cepa avanzada asociada a mutaciones extremas, regeneración agresiva y evolución biológica impredecible.',
                'body' => 'El G-Virus es una de las cepas más peligrosas y sofisticadas del catálogo de Umbrella. Su principal valor está en su capacidad de inducir evolución biológica acelerada, regeneración masiva y alteraciones genéticas profundas. A diferencia de otras cepas, su comportamiento es altamente impredecible, lo que lo convierte en un activo de investigación reservado solo para laboratorios de máxima seguridad.',
                'origin' => 'Programa genético NEST',
                'storage' => 'Cápsula genética reforzada',
                'stability' => 'Baja',
                'mutation_potential' => 'Extremo',
                'applications' => 'Regeneración, evolución forzada',
                'distribution' => 'Sólo Investigación Clasificada',
                'availability' => 'Stock Limitado',
                'last_revision' => '1998-10-02',
            ],
            [
                'name' => 'T-Veronica Virus',
                'slug' => 't-veronica-virus',
                'category' => 'Cepas Clásicas de Umbrella',
                'type' => 'Cepa Viral',
                'id_code' => 'TVR-004',
                'price' => 7750000,
                'stock' => '2 muestras criogénicas',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Base Antártica',
                'risk_index' => '94/100',
                'containment_class' => 'Criogénica',
                'format' => 'Tubo criogénico de cepa',
                'color_visual' => 'Naranja / rojo cálido',
                'image' => 'images/products/t-veronica-virus.png',
                'icon' => 'snowflake',
                'description' => 'Cepa experimental asociada a procesos criogénicos, linajes genéticos selectivos y mutación controlada.',
                'body' => 'El T-Veronica Virus pertenece a una línea de investigación más refinada y selectiva dentro de los programas virales de Umbrella. Su valor está vinculado a la criopreservación, la adaptación biológica prolongada y la posibilidad de alcanzar mutaciones superiores bajo condiciones controladas. Su almacenamiento requiere baja temperatura constante y supervisión de personal autorizado.',
                'origin' => 'Línea de investigación Ashford',
                'storage' => 'Tubo criogénico',
                'stability' => 'Condicional',
                'mutation_potential' => 'Muy Alto',
                'applications' => 'Adaptación a largo plazo, mutación de élite',
                'distribution' => 'Archivo de Investigación Antártica',
                'availability' => 'Pendiente de Autorización',
                'last_revision' => '1998-12-31',
            ],

            // ============== CEPAS VIRALES AVANZADAS ==============
            [
                'name' => 'Uroboros Virus',
                'slug' => 'uroboros-virus',
                'category' => 'Cepas Virales Avanzadas',
                'type' => 'Cepa Viral',
                'id_code' => 'UV-005',
                'price' => 12000000,
                'stock' => '1 muestra activa',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'critical',
                'facility' => 'Tricell / División África',
                'risk_index' => '100/100',
                'containment_class' => 'Absoluta',
                'format' => 'Cultivo de biomasa negra',
                'color_visual' => 'Negro con brillo ámbar',
                'image' => 'images/products/uroboros-virus.png',
                'icon' => 'atom',
                'description' => 'Cepa avanzada de selección biológica extrema. Una masa orgánica oscura, agresiva y altamente invasiva.',
                'body' => 'El Uroboros Virus representa una etapa avanzada de bioingeniería viral orientada a la selección biológica radical. Su manifestación visual suele adoptar formas oscuras, filamentosas y tentaculares, con comportamiento invasivo y altamente dominante. Esta muestra está clasificada como material de riesgo absoluto y solo puede ser manipulada en cámaras selladas de contención total.',
                'origin' => 'Programa de selección avanzada',
                'storage' => 'Cámara de contención de biomasa',
                'stability' => 'Extremadamente inestable',
                'mutation_potential' => 'Absoluto',
                'applications' => 'Selección forzada, asimilación de biomasa',
                'distribution' => 'Sólo Autorización Ejecutiva',
                'availability' => 'Pendiente de Autorización',
                'last_revision' => '2009-03-11',
            ],
            [
                'name' => 'C-Virus',
                'slug' => 'c-virus',
                'category' => 'Cepas Virales Avanzadas',
                'type' => 'Cepa Viral',
                'id_code' => 'CV-006',
                'price' => 9200000,
                'stock' => '4 muestras',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'critical',
                'facility' => 'Archivo Neo-Umbrella',
                'risk_index' => '95/100',
                'containment_class' => 'Máxima',
                'format' => 'Cápsula viral de crisálida',
                'color_visual' => 'Naranja / rojo incandescente',
                'image' => 'images/products/c-virus.png',
                'icon' => 'flame',
                'description' => 'Cepa viral avanzada asociada a mutaciones crisálidas y transformaciones biológicas violentas.',
                'body' => 'El C-Virus es una cepa mutagénica avanzada con una fuerte tendencia a producir cambios físicos extremos mediante procesos de transformación acelerada. Su presentación en el catálogo se vincula a la idea de crisálida biológica, evolución forzada y conversión agresiva del huésped. Por su inestabilidad, se comercializa únicamente bajo autorización de nivel máximo.',
                'origin' => 'Programa Neo-Umbrella',
                'storage' => 'Cápsula de contención de crisálida',
                'stability' => 'Baja',
                'mutation_potential' => 'Muy Alto',
                'applications' => 'Transformación rápida, mutación bio-adaptativa',
                'distribution' => 'Investigación Militar Restringida',
                'availability' => 'En Stock',
                'last_revision' => '2013-06-14',
            ],
            [
                'name' => 't-Abyss Virus',
                'slug' => 't-abyss-virus',
                'category' => 'Cepas Virales Avanzadas',
                'type' => 'Cepa Viral',
                'id_code' => 'TAV-007',
                'price' => 8400000,
                'stock' => '5 muestras acuáticas',
                'status' => 'RESTRICTED',
                'status_key' => 'restricted',
                'clearance' => 'Nivel 4',
                'clearance_key' => 'restricted',
                'facility' => 'División de Investigación Marina',
                'risk_index' => '88/100',
                'containment_class' => 'Acuática',
                'format' => 'Cápsula viral de aguas profundas',
                'color_visual' => 'Azul / cyan',
                'image' => 'images/products/t-abyss-virus.png',
                'icon' => 'droplet',
                'description' => 'Cepa viral orientada a mutaciones acuáticas, presión extrema y adaptación abisal.',
                'body' => 'El t-Abyss Virus es una cepa especializada en adaptación acuática y mutación bajo condiciones de presión extrema. Su perfil lo convierte en un activo valioso para investigaciones marítimas, desarrollo de organismos anfibios y escenarios de contención oceánica. Requiere almacenamiento en cápsulas presurizadas y monitoreo constante de temperatura.',
                'origin' => 'Investigación viral marina',
                'storage' => 'Cilindro acuático presurizado',
                'stability' => 'Media',
                'mutation_potential' => 'Alto',
                'applications' => 'Mutación acuática, adaptación abisal',
                'distribution' => 'Unidad de Operaciones Marinas',
                'availability' => 'En Stock',
                'last_revision' => '2012-04-08',
            ],
            [
                'name' => 't-Phobos Virus',
                'slug' => 't-phobos-virus',
                'category' => 'Cepas Virales Avanzadas',
                'type' => 'Cepa Viral',
                'id_code' => 'TPV-008',
                'price' => 8750000,
                'stock' => '6 muestras',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Sitio de Investigación Isla Sejm',
                'risk_index' => '91/100',
                'containment_class' => 'Disparador Psicológico',
                'format' => 'Cápsula viral de respuesta al miedo',
                'color_visual' => 'Violeta / magenta',
                'image' => 'images/products/t-phobos-virus.png',
                'icon' => 'brain',
                'description' => 'Cepa experimental asociada a respuestas extremas de miedo, estrés y activación psicológica.',
                'body' => 'El t-Phobos Virus es una cepa diseñada para responder a condiciones psicológicas específicas. Su activación está vinculada a estrés, miedo y respuestas neurobiológicas extremas, lo que lo convierte en uno de los agentes más complejos del catálogo. Su almacenamiento requiere monitoreo bioquímico y protocolos de observación avanzada.',
                'origin' => 'Programa viral psicológico',
                'storage' => 'Vial neuro-reactivo',
                'stability' => 'Condicional',
                'mutation_potential' => 'Alto',
                'applications' => 'Mutación activada por estrés',
                'distribution' => 'Investigación Conductual Clasificada',
                'availability' => 'Stock Limitado',
                'last_revision' => '2014-09-21',
            ],

            // ============== BIO-AGENTES PARASITARIOS ==============
            [
                'name' => 'Las Plagas',
                'slug' => 'las-plagas',
                'category' => 'Bio-Agentes Parasitarios',
                'type' => 'Parásito',
                'id_code' => 'LP-009',
                'price' => 5100000,
                'stock' => '9 especímenes',
                'status' => 'RESTRICTED',
                'status_key' => 'restricted',
                'clearance' => 'Nivel 4',
                'clearance_key' => 'restricted',
                'facility' => 'Archivo Rural España',
                'risk_index' => '87/100',
                'containment_class' => 'Parasitaria',
                'format' => 'Espécimen parásito preservado',
                'color_visual' => 'Ámbar / amarillo oscuro',
                'image' => 'images/products/las-plagas.png',
                'icon' => 'bug',
                'description' => 'Parásito biológico capaz de alterar la conducta del huésped y establecer control interno.',
                'body' => 'Las Plagas constituyen una familia parasitaria de alto valor táctico por su capacidad de modificar la conducta del organismo huésped. Su naturaleza no viral permite una línea de investigación distinta, enfocada en control biológico, obediencia inducida y adaptación simbiótica. Cada espécimen se conserva en cápsulas selladas para evitar activación o exposición accidental.',
                'origin' => 'Linaje parasitario',
                'storage' => 'Cámara de espécimen ámbar',
                'stability' => 'Media',
                'mutation_potential' => 'Alto',
                'applications' => 'Control de huésped, adaptación parasitaria',
                'distribution' => 'Investigación de Campo Restringida',
                'availability' => 'En Stock',
                'last_revision' => '2005-01-15',
            ],
            [
                'name' => 'Dominant Plaga',
                'slug' => 'dominant-plaga',
                'category' => 'Bio-Agentes Parasitarios',
                'type' => 'Parásito Superior',
                'id_code' => 'DLP-010',
                'price' => 6800000,
                'stock' => '2 especímenes dominantes',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Archivo Los Iluminados',
                'risk_index' => '93/100',
                'containment_class' => 'Parasitaria Dominante',
                'format' => 'Espécimen parásito superior',
                'color_visual' => 'Rojo / naranja intenso',
                'image' => 'images/products/dominant-plaga.png',
                'icon' => 'spider',
                'description' => 'Variante superior de Las Plagas, diseñada para control jerárquico y dominio biológico avanzado.',
                'body' => 'La Dominant Plaga es una variante superior del linaje Plaga, asociada a mayor capacidad de control, resistencia y jerarquía sobre organismos subordinados. A diferencia de una Plaga estándar, este espécimen presenta una morfología más agresiva, mayor tamaño, ramificaciones defensivas y un núcleo biológico activo. Su uso está reservado para operaciones de control avanzado.',
                'origin' => 'Linaje Plaga superior',
                'storage' => 'Cámara parasitaria reforzada',
                'stability' => 'Baja',
                'mutation_potential' => 'Muy Alto',
                'applications' => 'Control jerárquico, mando dominante de huésped',
                'distribution' => 'Investigación Parasitaria Clasificada',
                'availability' => 'Stock Limitado',
                'last_revision' => '2005-04-30',
            ],
            [
                'name' => 'NE-α Parasite',
                'slug' => 'ne-alpha-parasite',
                'category' => 'Bio-Agentes Parasitarios',
                'type' => 'Parásito de Control',
                'id_code' => 'NEA-011',
                'price' => 7200000,
                'stock' => '1 espécimen',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'División Europea',
                'risk_index' => '97/100',
                'containment_class' => 'Control Neural',
                'format' => 'Contenedor parasitario neural',
                'color_visual' => 'Rojo oscuro',
                'image' => 'images/products/ne-alpha-parasite.png',
                'icon' => 'parking',
                'description' => 'Parásito de control neural diseñado para mejorar la obediencia, dirección y capacidad operativa de unidades B.O.W.',
                'body' => 'El NE-α Parasite es uno de los activos parasitarios más sensibles de Umbrella. Su función principal está vinculada al control neural y la mejora de respuesta en organismos modificados. Es especialmente valioso por su capacidad de convertir unidades biológicas agresivas en activos dirigibles, reduciendo el comportamiento errático típico de otras armas biológicas.',
                'origin' => 'Programa europeo de control',
                'storage' => 'Cápsula de contención neural',
                'stability' => 'Muy baja',
                'mutation_potential' => 'Alto',
                'applications' => 'Control B.O.W., mando neural',
                'distribution' => 'Archivo del Programa Nemesis',
                'availability' => 'Pendiente de Autorización',
                'last_revision' => '1999-08-12',
            ],
            [
                'name' => 'Cadou Parasite',
                'slug' => 'cadou-parasite',
                'category' => 'Bio-Agentes Parasitarios',
                'type' => 'Parásito Experimental',
                'id_code' => 'CAD-012',
                'price' => 10800000,
                'stock' => '2 especímenes',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'critical',
                'facility' => 'División Europa del Este',
                'risk_index' => '98/100',
                'containment_class' => 'Experimental',
                'format' => 'Cápsula parasitaria mutagénica',
                'color_visual' => 'Violeta / magenta oscuro',
                'image' => 'images/products/cadou-parasite.png',
                'icon' => 'virus',
                'description' => 'Parásito experimental con alto potencial de mutación, adaptación y alteración biológica extrema.',
                'body' => 'El Cadou Parasite es un activo experimental de gran valor por su capacidad de inducir mutaciones físicas severas y adaptaciones biológicas inusuales. Su comportamiento varía según el huésped y las condiciones de exposición, lo que lo convierte en una muestra altamente impredecible. Solo puede ser almacenado bajo protocolos de contención absoluta.',
                'origin' => 'Archivo biológico de Europa del Este',
                'storage' => 'Cápsula parasitaria mutagénica',
                'stability' => 'Impredecible',
                'mutation_potential' => 'Extremo',
                'applications' => 'Mutación de huésped, transformación adaptativa',
                'distribution' => 'Investigación Experimental Nivel 5',
                'availability' => 'Stock Limitado',
                'last_revision' => '2021-05-07',
            ],

            // ============== MUTÁGENOS EXPERIMENTALES ==============
            [
                'name' => 'Mold / Mutamycete',
                'slug' => 'mold-mutamycete',
                'category' => 'Mutágenos Experimentales',
                'type' => 'Mutágeno Fúngico',
                'id_code' => 'MM-013',
                'price' => 9400000,
                'stock' => '4 cultivos',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Archivo del Incidente Dulvey',
                'risk_index' => '96/100',
                'containment_class' => 'Red Fúngica',
                'format' => 'Cámara de cultivo fúngico',
                'color_visual' => 'Blanco hueso / crema contaminado',
                'image' => 'images/products/mold-mutamycete.png',
                'icon' => 'plant-2',
                'description' => 'Agente fúngico capaz de formar redes biológicas, preservar información y alterar organismos infectados.',
                'body' => 'El Mold, también conocido como Mutamycete, es un agente fúngico de comportamiento colectivo y altamente anómalo. Su interés corporativo reside en la capacidad de crear redes orgánicas, alterar cuerpos infectados y funcionar como soporte biológico de memoria e información. Requiere aislamiento total y monitoreo constante de crecimiento.',
                'origin' => 'Programa de bioarma fúngica',
                'storage' => 'Cámara fúngica sellada',
                'stability' => 'Expansiva',
                'mutation_potential' => 'Muy Alto',
                'applications' => 'Red orgánica, alteración del huésped',
                'distribution' => 'Bio-Archivo Clasificado',
                'availability' => 'Pendiente de Autorización',
                'last_revision' => '2017-01-23',
            ],
            [
                'name' => 'A-Virus / Animality Virus',
                'slug' => 'a-virus-animality-virus',
                'category' => 'Mutágenos Experimentales',
                'type' => 'Cepa Viral',
                'id_code' => 'AV-014',
                'price' => 7900000,
                'stock' => '7 muestras',
                'status' => 'RESTRICTED',
                'status_key' => 'restricted',
                'clearance' => 'Nivel 4',
                'clearance_key' => 'restricted',
                'facility' => 'Archivo del Incidente Vendetta',
                'risk_index' => '89/100',
                'containment_class' => 'Disparador de Agresión',
                'format' => 'Cilindro viral de agresión',
                'color_visual' => 'Verde ácido',
                'image' => 'images/products/a-virus-animality-virus.png',
                'icon' => 'paw',
                'description' => 'Cepa viral asociada a agresividad extrema, pérdida de control y alteración violenta del huésped.',
                'body' => 'El A-Virus, también conocido como Animality Virus, es un agente viral orientado a provocar alteraciones de conducta y agresividad biológica extrema. A diferencia de cepas más evolutivas, su valor reside en el disparo rápido de estados violentos y respuestas físicas intensas. Su almacenamiento requiere cápsulas selladas y autorización de seguridad avanzada.',
                'origin' => 'Archivo del incidente Vendetta',
                'storage' => 'Vial de respuesta de agresión',
                'stability' => 'Media',
                'mutation_potential' => 'Alto',
                'applications' => 'Amplificación de agresión, escenarios de brote',
                'distribution' => 'Investigación Táctica Restringida',
                'availability' => 'En Stock',
                'last_revision' => '2017-05-19',
            ],
            [
                'name' => 't+G Virus',
                'slug' => 't-g-virus',
                'category' => 'Mutágenos Experimentales',
                'type' => 'Cepa Viral Híbrida',
                'id_code' => 'TGV-015',
                'price' => 11200000,
                'stock' => '1 muestra híbrida',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Archivo Umbrella Europa',
                'risk_index' => '98/100',
                'containment_class' => 'Híbrida',
                'format' => 'Cápsula de cepa dual',
                'color_visual' => 'Rojo + violeta',
                'image' => 'images/products/t-g-virus.png',
                'icon' => 'topology-star',
                'description' => 'Cepa híbrida que combina propiedades del T-Virus y del G-Virus en una muestra altamente inestable.',
                'body' => 'El t+G Virus es una cepa híbrida de alto valor experimental. Su composición combina la agresividad mutagénica del T-Virus con la evolución impredecible asociada al G-Virus, resultando en una muestra extremadamente inestable y peligrosa. Su comercialización queda restringida a laboratorios con doble sistema de contención y personal de clearance nivel 5.',
                'origin' => 'Programa híbrido Umbrella Europa',
                'storage' => 'Cápsula de contención de cepa dual',
                'stability' => 'Muy baja',
                'mutation_potential' => 'Extremo',
                'applications' => 'Mutación híbrida, investigación de combate adaptativo',
                'distribution' => 'Investigación Híbrida Clasificada',
                'availability' => 'Pendiente de Autorización',
                'last_revision' => '2003-11-30',
            ],
            [
                'name' => 'Prototype Virus',
                'slug' => 'prototype-virus',
                'category' => 'Mutágenos Experimentales',
                'type' => 'Cepa Viral Experimental',
                'id_code' => 'PTV-016',
                'price' => 13500000,
                'stock' => '1 muestra archivada',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Nivel 5',
                'clearance_key' => 'classified',
                'facility' => 'Archivo Proyecto W',
                'risk_index' => '99/100',
                'containment_class' => 'Experimental / Legado',
                'format' => 'Muestra prototipo archivada',
                'color_visual' => 'Dorado oscuro / negro',
                'image' => 'images/products/prototype-virus.png',
                'icon' => 'crown',
                'description' => 'Cepa experimental vinculada a programas de selección humana, mejora biológica y supervivencia genética extrema.',
                'body' => 'El Prototype Virus es una muestra experimental de altísimo valor histórico dentro de los archivos privados de Umbrella. Asociado a programas de selección, adaptación y mejora biológica, representa una etapa temprana pero decisiva en la evolución de las investigaciones virales corporativas. Su rareza y conexión con proyectos internos lo convierten en uno de los activos más protegidos del catálogo.',
                'origin' => 'Archivo Proyecto W',
                'storage' => 'Cámara de prototipo archivado',
                'stability' => 'Desconocida',
                'mutation_potential' => 'Extremo',
                'applications' => 'Selección humana, mejora biológica, adaptación de supervivencia',
                'distribution' => 'Sólo Autorización Ejecutiva',
                'availability' => 'Pendiente de Autorización',
                'last_revision' => '1978-07-04',
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function categories(): array
    {
        return [
            ['name' => 'Cepas Clásicas de Umbrella', 'slug' => 'classic-umbrella-strains', 'icon' => 'flask', 'description' => 'Cepas fundacionales de Umbrella Corporation. La base sobre la que se construyó toda la investigación viral.'],
            ['name' => 'Cepas Virales Avanzadas', 'slug' => 'advanced-viral-strains', 'icon' => 'biohazard', 'description' => 'Cepas evolucionadas con comportamiento mutagénico avanzado y adaptaciones biológicas extremas.'],
            ['name' => 'Bio-Agentes Parasitarios', 'slug' => 'parasitic-bio-agents', 'icon' => 'bug', 'description' => 'Agentes parasitarios diseñados para control de huésped, comportamiento simbiótico y dominio biológico.'],
            ['name' => 'Mutágenos Experimentales', 'slug' => 'experimental-mutagens', 'icon' => 'atom', 'description' => 'Mutágenos híbridos, fúngicos y experimentales del archivo restringido de programas atípicos.'],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function clearanceFilters(): array
    {
        return [
            ['key' => 'restricted', 'label' => 'RESTRINGIDO'],
            ['key' => 'critical', 'label' => 'CRÍTICO'],
            ['key' => 'classified', 'label' => 'CLASIFICADO'],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function posts(): array
    {
        return [
            [
                'title' => 'Incidente de Raccoon City',
                'slug' => 'raccoon-city-incident-report',
                'category' => 'Incidente',
                'security' => 'CLASSIFIED',
                'security_key' => 'classified',
                'author' => 'División de Asuntos Internos',
                'date' => '1998-09-30',
                'document_id' => 'RC-1998-IR',
                'icon' => 'file-alert',
                'excerpt' => 'Revisión interna de un escenario ficticio de fallo de contención en el perímetro urbano.',
                'body' => 'El siguiente documento es una revisión interna ficticia que resume hallazgos operativos, estimaciones de impacto civil y protocolos de comunicación corporativa tras el escenario de contención simulado en Raccoon City. Todas las referencias se presentan como material narrativo para fines de archivo dentro de Umbrella Corporation.',
                'facility' => 'División Raccoon',
                'last_revision' => '1998-10-02',
            ],
            [
                'title' => 'Contención Clase V',
                'slug' => 'containment-protocols-class-v',
                'category' => 'Protocolo',
                'security' => 'CRITICAL / BIOHAZARD',
                'security_key' => 'critical',
                'author' => 'Unidad de Control Biohazard',
                'date' => '1998-10-04',
                'document_id' => 'CV-004-P',
                'icon' => 'biohazard',
                'excerpt' => 'Protocolo de manejo actualizado para muestras ficticias de Clase V dentro de entornos de laboratorio sellados.',
                'body' => 'Este protocolo narrativo consolida los procedimientos internos de manejo aplicados a muestras ficticias Clase V, incluyendo segmentación de flujo de aire, ciclos de descontaminación de trajes y rutas de escalamiento revisadas. El procedimiento reemplaza todos los memorandos previos al Q3 fiscal y opera únicamente como documentación dentro del universo narrativo.',
                'facility' => 'Laboratorio NEST',
                'last_revision' => '1998-10-09',
            ],
            [
                'title' => 'Almacenamiento Criogénico',
                'slug' => 'cryogenic-storage-standards-update',
                'category' => 'Laboratorio',
                'security' => 'NOMINAL',
                'security_key' => 'nominal',
                'author' => 'Sistemas Médicos',
                'date' => '1998-10-12',
                'document_id' => 'CS-112-S',
                'icon' => 'snowflake',
                'excerpt' => 'Líneas base operativas para unidades ficticias de almacenamiento criogénico en las alas de investigación de Umbrella.',
                'body' => 'Parámetros estandarizados para unidades ficticias de almacenamiento criogénico en todas las alas de investigación. Las ventanas de calibración interna, los umbrales de redundancia y la cadencia de auditoría se describen como parte de la línea base operativa narrativa.',
                'facility' => 'Ala Médica',
                'last_revision' => '1998-10-12',
            ],
            [
                'title' => 'B.O.W. vs Convencionales',
                'slug' => 'bow-and-conventional-assets',
                'category' => 'Investigación',
                'security' => 'RESTRICTED',
                'security_key' => 'restricted',
                'author' => 'Desarrollo de Armamento',
                'date' => '1998-10-18',
                'document_id' => 'BW-778-N',
                'icon' => 'dna',
                'excerpt' => 'Nota narrativa interna que enmarca las diferencias conceptuales entre las categorías ficticias de activos.',
                'body' => 'Un briefing exclusivamente narrativo destinado a diferenciar las categorías ficticias de activos bio-orgánicos del inventario logístico convencional. El documento se enmarca estrictamente como material dentro del universo, con fines de diseño y archivo.',
                'facility' => 'División Europea',
                'last_revision' => '1998-10-21',
            ],
            [
                'title' => 'Mansión Spencer',
                'slug' => 'spencer-mansion-archive-internal-review',
                'category' => 'Histórico',
                'security' => 'CLASSIFIED',
                'security_key' => 'classified',
                'author' => 'Supervisión Ejecutiva',
                'date' => '1998-11-01',
                'document_id' => 'SM-001-A',
                'icon' => 'archive',
                'excerpt' => 'Revisión ficticia de la colección del archivo de la Mansión Spencer y su importancia narrativa.',
                'body' => 'Una revisión ficticia de la colección del archivo de la Mansión Spencer, incluyendo extractos de correspondencia, referencias a planos y memorandos internos. El material se preserva como artefacto narrativo dentro de Umbrella Corporation.',
                'facility' => 'Archivos Arklay',
                'last_revision' => '1998-11-04',
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function divisions(): array
    {
        return [
            ['name' => 'Bioingeniería', 'icon' => 'dna', 'description' => 'Marco de investigación narrativa en torno al diseño ficticio de muestras y escenarios de replicación.'],
            ['name' => 'Investigación Farmacéutica', 'icon' => 'flask', 'description' => 'Pipeline farmacéutico ficticio usado para narrativa visual y referencias de diseño.'],
            ['name' => 'Sistemas de Contención', 'icon' => 'shield-lock', 'description' => 'Infraestructura imaginada de contención representada mediante props, planos e informes.'],
            ['name' => 'Seguridad Privada', 'icon' => 'user-shield', 'description' => 'Operativos y protocolos de seguridad ficticios documentados como parte del lore corporativo.'],
            ['name' => 'Supervisión Corporativa', 'icon' => 'building', 'description' => 'Capa ejecutiva responsable de la continuidad narrativa y la gobernanza de acceso.'],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function timeline(): array
    {
        return [
            ['year' => '1968', 'title' => 'Fundación', 'note' => 'Constitución de Umbrella como conglomerado farmacéutico dentro del lore del proyecto.'],
            ['year' => '1978', 'title' => 'Laboratorio NEST', 'note' => 'Instalación subterránea de investigación puesta en marcha en la continuidad narrativa.'],
            ['year' => '1988', 'title' => 'Operaciones Arklay', 'note' => 'Expansión de los terrenos ficticios de investigación y consolidación del archivo.'],
            ['year' => '1998', 'title' => 'Incidente Raccoon', 'note' => 'Evento de referencia usado como ancla narrativa canónica en todo el archivo.'],
            ['year' => '2003', 'title' => 'Reestructuración', 'note' => 'Reorganización interna que enmarca el layout actual del archivo.'],
        ];
    }

    /**
     * @return array<int, array<string, string|int>>
     */
    public static function cartItems(): array
    {
        return [
            ['slug' => 't-virus', 'qty' => 1],
            ['slug' => 'g-virus', 'qty' => 2],
            ['slug' => 'las-plagas', 'qty' => 1],
        ];
    }

    /**
     * Returns the tabler-icon name for a given category, falling back to 'biohazard'.
     */
    public static function categoryIcon(string $categoryName): string
    {
        foreach (self::categories() as $category) {
            if ($category['name'] === $categoryName) {
                return $category['icon'];
            }
        }
        return 'biohazard';
    }

    /**
     * @param string $slug
     * @return array<string, mixed>|null
     */
    public static function findProduct(string $slug): ?array
    {
        foreach (self::products() as $product) {
            if ($product['slug'] === $slug) {
                return $product;
            }
        }
        return null;
    }

    /**
     * @param string $slug
     * @return array<string, mixed>|null
     */
    public static function findPost(string $slug): ?array
    {
        foreach (self::posts() as $post) {
            if ($post['slug'] === $slug) {
                return $post;
            }
        }
        return null;
    }

    /**
     * Returns related products in the same category, falling back to others.
     *
     * @param string $excludeSlug
     * @param int $limit
     * @return array<int, array<string, mixed>>
     */
    public static function relatedProducts(string $excludeSlug, int $limit = 3): array
    {
        $current = self::findProduct($excludeSlug);
        $all = array_values(array_filter(
            self::products(),
            static fn (array $product): bool => $product['slug'] !== $excludeSlug
        ));

        if ($current !== null) {
            $sameCategory = array_values(array_filter(
                $all,
                static fn (array $product): bool => $product['category'] === $current['category']
            ));

            if (count($sameCategory) >= $limit) {
                return array_slice($sameCategory, 0, $limit);
            }

            $others = array_values(array_filter(
                $all,
                static fn (array $product): bool => $product['category'] !== $current['category']
            ));

            return array_slice(array_merge($sameCategory, $others), 0, $limit);
        }

        return array_slice($all, 0, $limit);
    }

    /**
     * @param int $limit
     * @return array<int, array<string, mixed>>
     */
    public static function featuredProducts(int $limit = 4): array
    {
        return array_slice(self::products(), 0, $limit);
    }

    /**
     * @param int $limit
     * @return array<int, array<string, mixed>>
     */
    public static function latestPosts(int $limit = 3): array
    {
        return array_slice(self::posts(), 0, $limit);
    }
}
