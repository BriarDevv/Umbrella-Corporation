<?php

declare(strict_types=1);

namespace App\Support;

/**
 * Static mock data provider for the Umbrella Research Division frontend.
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
            // ============== CLASSIC UMBRELLA STRAINS ==============
            [
                'name' => 'Progenitor Virus',
                'slug' => 'progenitor-virus',
                'category' => 'Classic Umbrella Strains',
                'type' => 'Viral Strain',
                'id_code' => 'PV-001',
                'price' => 15000000,
                'stock' => '1 muestra primaria',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'Africa Research Archive',
                'risk_index' => '100/100',
                'containment_class' => 'Absolute',
                'format' => 'Cryogenic origin sample',
                'color_visual' => 'Ámbar / dorado antiguo',
                'image' => 'images/products/progenitor-virus.png',
                'icon' => 'biohazard',
                'description' => 'La cepa madre de la bioingeniería moderna. El origen de los principales desarrollos virales de Umbrella.',
                'body' => 'El Progenitor Virus representa la base fundacional de los programas de investigación biológica de Umbrella Corporation. Su valor no reside únicamente en su rareza, sino en su potencial como matriz genética para el desarrollo de cepas derivadas, mutaciones controladas y proyectos avanzados de bioingeniería. Esta muestra está reservada exclusivamente para personal ejecutivo con autorización máxima.',
                'origin' => 'Progenitor lineage',
                'storage' => 'Cryogenic sealed chamber',
                'stability' => 'Unstable under non-controlled conditions',
                'mutation_potential' => 'Extreme',
                'applications' => 'Executive Research Only',
                'distribution' => 'Internal / Restricted Archive',
                'availability' => 'Pending Authorization',
                'last_revision' => '1968-04-22',
            ],
            [
                'name' => 'T-Virus',
                'slug' => 't-virus',
                'category' => 'Classic Umbrella Strains',
                'type' => 'Viral Strain',
                'id_code' => 'TV-002',
                'price' => 6500000,
                'stock' => '12 muestras',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Level 5',
                'clearance_key' => 'critical',
                'facility' => 'Arklay Laboratory',
                'risk_index' => '96/100',
                'containment_class' => 'Maximum',
                'format' => 'Sealed viral canister',
                'color_visual' => 'Rojo intenso',
                'image' => 'images/products/t-virus.png',
                'icon' => 'flask',
                'description' => 'El agente viral más icónico de Umbrella. Base operativa para múltiples líneas B.O.W. y proyectos militares.',
                'body' => 'El T-Virus, también conocido como Tyrant Virus, es uno de los desarrollos más reconocidos de Umbrella Corporation. Diseñado para inducir mutaciones agresivas y alterar radicalmente las capacidades físicas del organismo huésped, se convirtió en el núcleo de varios programas de armas biológicas y experimentación aplicada. Su manipulación requiere instalaciones de contención de alto nivel.',
                'origin' => 'Umbrella viral program',
                'storage' => 'Red containment vial',
                'stability' => 'Medium',
                'mutation_potential' => 'High',
                'applications' => 'B.O.W. development, combat enhancement',
                'distribution' => 'Military Research Division',
                'availability' => 'In Stock',
                'last_revision' => '1998-09-29',
            ],
            [
                'name' => 'G-Virus',
                'slug' => 'g-virus',
                'category' => 'Classic Umbrella Strains',
                'type' => 'Viral Strain',
                'id_code' => 'GV-003',
                'price' => 8900000,
                'stock' => '3 muestras',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'NEST Laboratory',
                'risk_index' => '99/100',
                'containment_class' => 'Maximum',
                'format' => 'Genetic mutation capsule',
                'color_visual' => 'Violeta / azul eléctrico',
                'image' => 'images/products/g-virus.png',
                'icon' => 'dna',
                'description' => 'Cepa avanzada asociada a mutaciones extremas, regeneración agresiva y evolución biológica impredecible.',
                'body' => 'El G-Virus es una de las cepas más peligrosas y sofisticadas del catálogo de Umbrella. Su principal valor está en su capacidad de inducir evolución biológica acelerada, regeneración masiva y alteraciones genéticas profundas. A diferencia de otras cepas, su comportamiento es altamente impredecible, lo que lo convierte en un activo de investigación reservado solo para laboratorios de máxima seguridad.',
                'origin' => 'NEST genetic program',
                'storage' => 'Reinforced genetic capsule',
                'stability' => 'Low',
                'mutation_potential' => 'Extreme',
                'applications' => 'Regeneration, forced evolution',
                'distribution' => 'Classified Research Only',
                'availability' => 'Limited Stock',
                'last_revision' => '1998-10-02',
            ],
            [
                'name' => 'T-Veronica Virus',
                'slug' => 't-veronica-virus',
                'category' => 'Classic Umbrella Strains',
                'type' => 'Viral Strain',
                'id_code' => 'TVR-004',
                'price' => 7750000,
                'stock' => '2 muestras criogénicas',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'Antarctic Base',
                'risk_index' => '94/100',
                'containment_class' => 'Cryogenic',
                'format' => 'Cryogenic strain tube',
                'color_visual' => 'Naranja / rojo cálido',
                'image' => 'images/products/t-veronica-virus.png',
                'icon' => 'snowflake',
                'description' => 'Cepa experimental asociada a procesos criogénicos, linajes genéticos selectivos y mutación controlada.',
                'body' => 'El T-Veronica Virus pertenece a una línea de investigación más refinada y selectiva dentro de los programas virales de Umbrella. Su valor está vinculado a la criopreservación, la adaptación biológica prolongada y la posibilidad de alcanzar mutaciones superiores bajo condiciones controladas. Su almacenamiento requiere baja temperatura constante y supervisión de personal autorizado.',
                'origin' => 'Ashford research line',
                'storage' => 'Cryogenic tube',
                'stability' => 'Conditional',
                'mutation_potential' => 'Very High',
                'applications' => 'Long-term adaptation, elite mutation',
                'distribution' => 'Antarctic Research Archive',
                'availability' => 'Pending Authorization',
                'last_revision' => '1998-12-31',
            ],

            // ============== ADVANCED VIRAL STRAINS ==============
            [
                'name' => 'Uroboros Virus',
                'slug' => 'uroboros-virus',
                'category' => 'Advanced Viral Strains',
                'type' => 'Viral Strain',
                'id_code' => 'UV-005',
                'price' => 12000000,
                'stock' => '1 muestra activa',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Level 5',
                'clearance_key' => 'critical',
                'facility' => 'Tricell / Africa Division',
                'risk_index' => '100/100',
                'containment_class' => 'Absolute',
                'format' => 'Black biomass culture',
                'color_visual' => 'Negro con brillo ámbar',
                'image' => 'images/products/uroboros-virus.png',
                'icon' => 'atom',
                'description' => 'Cepa avanzada de selección biológica extrema. Una masa orgánica oscura, agresiva y altamente invasiva.',
                'body' => 'El Uroboros Virus representa una etapa avanzada de bioingeniería viral orientada a la selección biológica radical. Su manifestación visual suele adoptar formas oscuras, filamentosas y tentaculares, con comportamiento invasivo y altamente dominante. Esta muestra está clasificada como material de riesgo absoluto y solo puede ser manipulada en cámaras selladas de contención total.',
                'origin' => 'Advanced selection program',
                'storage' => 'Biomass containment chamber',
                'stability' => 'Extremely unstable',
                'mutation_potential' => 'Absolute',
                'applications' => 'Forced selection, biomass assimilation',
                'distribution' => 'Executive Clearance Only',
                'availability' => 'Pending Authorization',
                'last_revision' => '2009-03-11',
            ],
            [
                'name' => 'C-Virus',
                'slug' => 'c-virus',
                'category' => 'Advanced Viral Strains',
                'type' => 'Viral Strain',
                'id_code' => 'CV-006',
                'price' => 9200000,
                'stock' => '4 muestras',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Level 5',
                'clearance_key' => 'critical',
                'facility' => 'Neo-Umbrella Archive',
                'risk_index' => '95/100',
                'containment_class' => 'Maximum',
                'format' => 'Chrysalid viral capsule',
                'color_visual' => 'Naranja / rojo incandescente',
                'image' => 'images/products/c-virus.png',
                'icon' => 'flame',
                'description' => 'Cepa viral avanzada asociada a mutaciones crisálidas y transformaciones biológicas violentas.',
                'body' => 'El C-Virus es una cepa mutagénica avanzada con una fuerte tendencia a producir cambios físicos extremos mediante procesos de transformación acelerada. Su presentación en el catálogo se vincula a la idea de crisálida biológica, evolución forzada y conversión agresiva del huésped. Por su inestabilidad, se comercializa únicamente bajo autorización de nivel máximo.',
                'origin' => 'Neo-Umbrella program',
                'storage' => 'Chrysalid containment pod',
                'stability' => 'Low',
                'mutation_potential' => 'Very High',
                'applications' => 'Rapid transformation, bio-adaptive mutation',
                'distribution' => 'Restricted Military Research',
                'availability' => 'In Stock',
                'last_revision' => '2013-06-14',
            ],
            [
                'name' => 't-Abyss Virus',
                'slug' => 't-abyss-virus',
                'category' => 'Advanced Viral Strains',
                'type' => 'Viral Strain',
                'id_code' => 'TAV-007',
                'price' => 8400000,
                'stock' => '5 muestras acuáticas',
                'status' => 'RESTRICTED',
                'status_key' => 'restricted',
                'clearance' => 'Level 4',
                'clearance_key' => 'restricted',
                'facility' => 'Marine Research Division',
                'risk_index' => '88/100',
                'containment_class' => 'Aquatic',
                'format' => 'Deep-sea viral capsule',
                'color_visual' => 'Azul / cyan',
                'image' => 'images/products/t-abyss-virus.png',
                'icon' => 'droplet',
                'description' => 'Cepa viral orientada a mutaciones acuáticas, presión extrema y adaptación abisal.',
                'body' => 'El t-Abyss Virus es una cepa especializada en adaptación acuática y mutación bajo condiciones de presión extrema. Su perfil lo convierte en un activo valioso para investigaciones marítimas, desarrollo de organismos anfibios y escenarios de contención oceánica. Requiere almacenamiento en cápsulas presurizadas y monitoreo constante de temperatura.',
                'origin' => 'Marine viral research',
                'storage' => 'Pressurized aquatic canister',
                'stability' => 'Medium',
                'mutation_potential' => 'High',
                'applications' => 'Aquatic mutation, deep-sea adaptation',
                'distribution' => 'Marine Operations Unit',
                'availability' => 'In Stock',
                'last_revision' => '2012-04-08',
            ],
            [
                'name' => 't-Phobos Virus',
                'slug' => 't-phobos-virus',
                'category' => 'Advanced Viral Strains',
                'type' => 'Viral Strain',
                'id_code' => 'TPV-008',
                'price' => 8750000,
                'stock' => '6 muestras',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'Sejm Island Research Site',
                'risk_index' => '91/100',
                'containment_class' => 'Psychological Trigger',
                'format' => 'Fear-response viral capsule',
                'color_visual' => 'Violeta / magenta',
                'image' => 'images/products/t-phobos-virus.png',
                'icon' => 'brain',
                'description' => 'Cepa experimental asociada a respuestas extremas de miedo, estrés y activación psicológica.',
                'body' => 'El t-Phobos Virus es una cepa diseñada para responder a condiciones psicológicas específicas. Su activación está vinculada a estrés, miedo y respuestas neurobiológicas extremas, lo que lo convierte en uno de los agentes más complejos del catálogo. Su almacenamiento requiere monitoreo bioquímico y protocolos de observación avanzada.',
                'origin' => 'Psychological viral program',
                'storage' => 'Neuro-reactive vial',
                'stability' => 'Conditional',
                'mutation_potential' => 'High',
                'applications' => 'Stress-triggered mutation',
                'distribution' => 'Classified Behavioral Research',
                'availability' => 'Limited Stock',
                'last_revision' => '2014-09-21',
            ],

            // ============== PARASITIC BIO-AGENTS ==============
            [
                'name' => 'Las Plagas',
                'slug' => 'las-plagas',
                'category' => 'Parasitic Bio-Agents',
                'type' => 'Parasite',
                'id_code' => 'LP-009',
                'price' => 5100000,
                'stock' => '9 especímenes',
                'status' => 'RESTRICTED',
                'status_key' => 'restricted',
                'clearance' => 'Level 4',
                'clearance_key' => 'restricted',
                'facility' => 'Rural Spain Archive',
                'risk_index' => '87/100',
                'containment_class' => 'Parasitic',
                'format' => 'Preserved parasite specimen',
                'color_visual' => 'Ámbar / amarillo oscuro',
                'image' => 'images/products/las-plagas.png',
                'icon' => 'bug',
                'description' => 'Parásito biológico capaz de alterar la conducta del huésped y establecer control interno.',
                'body' => 'Las Plagas constituyen una familia parasitaria de alto valor táctico por su capacidad de modificar la conducta del organismo huésped. Su naturaleza no viral permite una línea de investigación distinta, enfocada en control biológico, obediencia inducida y adaptación simbiótica. Cada espécimen se conserva en cápsulas selladas para evitar activación o exposición accidental.',
                'origin' => 'Parasitic lineage',
                'storage' => 'Amber specimen chamber',
                'stability' => 'Medium',
                'mutation_potential' => 'High',
                'applications' => 'Host control, parasitic adaptation',
                'distribution' => 'Restricted Field Research',
                'availability' => 'In Stock',
                'last_revision' => '2005-01-15',
            ],
            [
                'name' => 'Dominant Plaga',
                'slug' => 'dominant-plaga',
                'category' => 'Parasitic Bio-Agents',
                'type' => 'Superior Parasite',
                'id_code' => 'DLP-010',
                'price' => 6800000,
                'stock' => '2 especímenes dominantes',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'Los Illuminados Archive',
                'risk_index' => '93/100',
                'containment_class' => 'Dominant Parasitic',
                'format' => 'Superior parasite specimen',
                'color_visual' => 'Rojo / naranja intenso',
                'image' => 'images/products/dominant-plaga.png',
                'icon' => 'spider',
                'description' => 'Variante superior de Las Plagas, diseñada para control jerárquico y dominio biológico avanzado.',
                'body' => 'La Dominant Plaga es una variante superior del linaje Plaga, asociada a mayor capacidad de control, resistencia y jerarquía sobre organismos subordinados. A diferencia de una Plaga estándar, este espécimen presenta una morfología más agresiva, mayor tamaño, ramificaciones defensivas y un núcleo biológico activo. Su uso está reservado para operaciones de control avanzado.',
                'origin' => 'Superior Plaga lineage',
                'storage' => 'Reinforced parasite chamber',
                'stability' => 'Low',
                'mutation_potential' => 'Very High',
                'applications' => 'Hierarchical control, dominant host command',
                'distribution' => 'Classified Parasitic Research',
                'availability' => 'Limited Stock',
                'last_revision' => '2005-04-30',
            ],
            [
                'name' => 'NE-α Parasite',
                'slug' => 'ne-alpha-parasite',
                'category' => 'Parasitic Bio-Agents',
                'type' => 'Control Parasite',
                'id_code' => 'NEA-011',
                'price' => 7200000,
                'stock' => '1 espécimen',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'European Division',
                'risk_index' => '97/100',
                'containment_class' => 'Neural Control',
                'format' => 'Neural parasite container',
                'color_visual' => 'Rojo oscuro',
                'image' => 'images/products/ne-alpha-parasite.png',
                'icon' => 'parking',
                'description' => 'Parásito de control neural diseñado para mejorar la obediencia, dirección y capacidad operativa de unidades B.O.W.',
                'body' => 'El NE-α Parasite es uno de los activos parasitarios más sensibles de Umbrella. Su función principal está vinculada al control neural y la mejora de respuesta en organismos modificados. Es especialmente valioso por su capacidad de convertir unidades biológicas agresivas en activos dirigibles, reduciendo el comportamiento errático típico de otras armas biológicas.',
                'origin' => 'European control program',
                'storage' => 'Neural containment capsule',
                'stability' => 'Very low',
                'mutation_potential' => 'High',
                'applications' => 'B.O.W. control, neural command',
                'distribution' => 'Nemesis Program Archive',
                'availability' => 'Pending Authorization',
                'last_revision' => '1999-08-12',
            ],
            [
                'name' => 'Cadou Parasite',
                'slug' => 'cadou-parasite',
                'category' => 'Parasitic Bio-Agents',
                'type' => 'Experimental Parasite',
                'id_code' => 'CAD-012',
                'price' => 10800000,
                'stock' => '2 especímenes',
                'status' => 'CRITICAL / BIOHAZARD',
                'status_key' => 'critical',
                'clearance' => 'Level 5',
                'clearance_key' => 'critical',
                'facility' => 'Eastern Europe Division',
                'risk_index' => '98/100',
                'containment_class' => 'Experimental',
                'format' => 'Mutagenic parasite capsule',
                'color_visual' => 'Violeta / magenta oscuro',
                'image' => 'images/products/cadou-parasite.png',
                'icon' => 'virus',
                'description' => 'Parásito experimental con alto potencial de mutación, adaptación y alteración biológica extrema.',
                'body' => 'El Cadou Parasite es un activo experimental de gran valor por su capacidad de inducir mutaciones físicas severas y adaptaciones biológicas inusuales. Su comportamiento varía según el huésped y las condiciones de exposición, lo que lo convierte en una muestra altamente impredecible. Solo puede ser almacenado bajo protocolos de contención absoluta.',
                'origin' => 'Eastern European biological archive',
                'storage' => 'Mutagenic parasite capsule',
                'stability' => 'Unpredictable',
                'mutation_potential' => 'Extreme',
                'applications' => 'Host mutation, adaptive transformation',
                'distribution' => 'Level 5 Experimental Research',
                'availability' => 'Limited Stock',
                'last_revision' => '2021-05-07',
            ],

            // ============== EXPERIMENTAL MUTAGENS ==============
            [
                'name' => 'Mold / Mutamycete',
                'slug' => 'mold-mutamycete',
                'category' => 'Experimental Mutagens',
                'type' => 'Fungal Mutagen',
                'id_code' => 'MM-013',
                'price' => 9400000,
                'stock' => '4 cultivos',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'Dulvey Incident Archive',
                'risk_index' => '96/100',
                'containment_class' => 'Fungal Network',
                'format' => 'Fungal culture chamber',
                'color_visual' => 'Blanco hueso / crema contaminado',
                'image' => 'images/products/mold-mutamycete.png',
                'icon' => 'plant-2',
                'description' => 'Agente fúngico capaz de formar redes biológicas, preservar información y alterar organismos infectados.',
                'body' => 'El Mold, también conocido como Mutamycete, es un agente fúngico de comportamiento colectivo y altamente anómalo. Su interés corporativo reside en la capacidad de crear redes orgánicas, alterar cuerpos infectados y funcionar como soporte biológico de memoria e información. Requiere aislamiento total y monitoreo constante de crecimiento.',
                'origin' => 'Fungal bioweapon program',
                'storage' => 'Sealed fungal chamber',
                'stability' => 'Expansive',
                'mutation_potential' => 'Very High',
                'applications' => 'Organic network, host alteration',
                'distribution' => 'Classified Bio-Archive',
                'availability' => 'Pending Authorization',
                'last_revision' => '2017-01-23',
            ],
            [
                'name' => 'A-Virus / Animality Virus',
                'slug' => 'a-virus-animality-virus',
                'category' => 'Experimental Mutagens',
                'type' => 'Viral Strain',
                'id_code' => 'AV-014',
                'price' => 7900000,
                'stock' => '7 muestras',
                'status' => 'RESTRICTED',
                'status_key' => 'restricted',
                'clearance' => 'Level 4',
                'clearance_key' => 'restricted',
                'facility' => 'Vendetta Incident Archive',
                'risk_index' => '89/100',
                'containment_class' => 'Aggression Trigger',
                'format' => 'Aggression viral canister',
                'color_visual' => 'Verde ácido',
                'image' => 'images/products/a-virus-animality-virus.png',
                'icon' => 'paw',
                'description' => 'Cepa viral asociada a agresividad extrema, pérdida de control y alteración violenta del huésped.',
                'body' => 'El A-Virus, también conocido como Animality Virus, es un agente viral orientado a provocar alteraciones de conducta y agresividad biológica extrema. A diferencia de cepas más evolutivas, su valor reside en el disparo rápido de estados violentos y respuestas físicas intensas. Su almacenamiento requiere cápsulas selladas y autorización de seguridad avanzada.',
                'origin' => 'Vendetta incident archive',
                'storage' => 'Aggression-response vial',
                'stability' => 'Medium',
                'mutation_potential' => 'High',
                'applications' => 'Aggression amplification, outbreak scenarios',
                'distribution' => 'Restricted Tactical Research',
                'availability' => 'In Stock',
                'last_revision' => '2017-05-19',
            ],
            [
                'name' => 't+G Virus',
                'slug' => 't-g-virus',
                'category' => 'Experimental Mutagens',
                'type' => 'Hybrid Viral Strain',
                'id_code' => 'TGV-015',
                'price' => 11200000,
                'stock' => '1 muestra híbrida',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'Umbrella Europe Archive',
                'risk_index' => '98/100',
                'containment_class' => 'Hybrid',
                'format' => 'Dual-strain capsule',
                'color_visual' => 'Rojo + violeta',
                'image' => 'images/products/t-g-virus.png',
                'icon' => 'topology-star',
                'description' => 'Cepa híbrida que combina propiedades del T-Virus y del G-Virus en una muestra altamente inestable.',
                'body' => 'El t+G Virus es una cepa híbrida de alto valor experimental. Su composición combina la agresividad mutagénica del T-Virus con la evolución impredecible asociada al G-Virus, resultando en una muestra extremadamente inestable y peligrosa. Su comercialización queda restringida a laboratorios con doble sistema de contención y personal de clearance nivel 5.',
                'origin' => 'Umbrella Europe hybrid program',
                'storage' => 'Dual-strain containment pod',
                'stability' => 'Very low',
                'mutation_potential' => 'Extreme',
                'applications' => 'Hybrid mutation, adaptive combat research',
                'distribution' => 'Classified Hybrid Research',
                'availability' => 'Pending Authorization',
                'last_revision' => '2003-11-30',
            ],
            [
                'name' => 'Prototype Virus',
                'slug' => 'prototype-virus',
                'category' => 'Experimental Mutagens',
                'type' => 'Experimental Viral Strain',
                'id_code' => 'PTV-016',
                'price' => 13500000,
                'stock' => '1 muestra archivada',
                'status' => 'CLASSIFIED',
                'status_key' => 'classified',
                'clearance' => 'Level 5',
                'clearance_key' => 'classified',
                'facility' => 'Project W Archive',
                'risk_index' => '99/100',
                'containment_class' => 'Experimental / Legacy',
                'format' => 'Archived prototype sample',
                'color_visual' => 'Dorado oscuro / negro',
                'image' => 'images/products/prototype-virus.png',
                'icon' => 'crown',
                'description' => 'Cepa experimental vinculada a programas de selección humana, mejora biológica y supervivencia genética extrema.',
                'body' => 'El Prototype Virus es una muestra experimental de altísimo valor histórico dentro de los archivos privados de Umbrella. Asociado a programas de selección, adaptación y mejora biológica, representa una etapa temprana pero decisiva en la evolución de las investigaciones virales corporativas. Su rareza y conexión con proyectos internos lo convierten en uno de los activos más protegidos del catálogo.',
                'origin' => 'Project W Archive',
                'storage' => 'Archived prototype chamber',
                'stability' => 'Unknown',
                'mutation_potential' => 'Extreme',
                'applications' => 'Human selection, biological enhancement, survival adaptation',
                'distribution' => 'Executive Clearance Only',
                'availability' => 'Pending Authorization',
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
            ['name' => 'Classic Umbrella Strains', 'slug' => 'classic-umbrella-strains', 'icon' => 'flask', 'description' => 'Cepas fundacionales de Umbrella Corporation. La base sobre la que se construyó toda la investigación viral.'],
            ['name' => 'Advanced Viral Strains', 'slug' => 'advanced-viral-strains', 'icon' => 'biohazard', 'description' => 'Cepas evolucionadas con comportamiento mutagénico avanzado y adaptaciones biológicas extremas.'],
            ['name' => 'Parasitic Bio-Agents', 'slug' => 'parasitic-bio-agents', 'icon' => 'bug', 'description' => 'Agentes parasitarios diseñados para control de huésped, comportamiento simbiótico y dominio biológico.'],
            ['name' => 'Experimental Mutagens', 'slug' => 'experimental-mutagens', 'icon' => 'atom', 'description' => 'Mutágenos híbridos, fúngicos y experimentales del archivo restringido de programas atípicos.'],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function clearanceFilters(): array
    {
        return [
            ['key' => 'clear', 'label' => 'CLEAR'],
            ['key' => 'standby', 'label' => 'STANDBY'],
            ['key' => 'nominal', 'label' => 'NOMINAL'],
            ['key' => 'restricted', 'label' => 'RESTRICTED'],
            ['key' => 'critical', 'label' => 'CRITICAL'],
            ['key' => 'classified', 'label' => 'CLASSIFIED'],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function posts(): array
    {
        return [
            [
                'title' => 'Raccoon City Incident Report',
                'slug' => 'raccoon-city-incident-report',
                'category' => 'Incident Report',
                'security' => 'CLASSIFIED',
                'security_key' => 'classified',
                'author' => 'Internal Affairs Division',
                'date' => '1998-09-30',
                'document_id' => 'RC-1998-IR',
                'icon' => 'file-alert',
                'excerpt' => 'Internal review of a fictional containment failure scenario across the urban perimeter.',
                'body' => 'The following document is a fictional internal review summarizing operational findings, civilian impact estimates and corporate communications protocol following the simulated Raccoon City containment scenario. All references are presented as narrative material for archival purposes within Umbrella Research Division.',
                'facility' => 'Raccoon Division',
                'last_revision' => '1998-10-02',
            ],
            [
                'title' => 'Containment Protocols for Class V Materials',
                'slug' => 'containment-protocols-class-v',
                'category' => 'Security Protocols',
                'security' => 'CRITICAL / BIOHAZARD',
                'security_key' => 'critical',
                'author' => 'Biohazard Control Unit',
                'date' => '1998-10-04',
                'document_id' => 'CV-004-P',
                'icon' => 'biohazard',
                'excerpt' => 'Updated handling protocol for fictional Class V samples within sealed laboratory environments.',
                'body' => 'This narrative protocol consolidates internal handling procedures applied to Class V fictional samples, including airflow segmentation, suit decontamination cycles and revised escalation paths. The procedure replaces all prior memos issued before fiscal Q3 and operates as in-universe documentation only.',
                'facility' => 'NEST Laboratory',
                'last_revision' => '1998-10-09',
            ],
            [
                'title' => 'Cryogenic Storage Standards Update',
                'slug' => 'cryogenic-storage-standards-update',
                'category' => 'Laboratory Operations',
                'security' => 'NOMINAL',
                'security_key' => 'nominal',
                'author' => 'Medical Systems',
                'date' => '1998-10-12',
                'document_id' => 'CS-112-S',
                'icon' => 'snowflake',
                'excerpt' => 'Operational baselines for fictional cryogenic storage units across Umbrella research wings.',
                'body' => 'Standardized parameters for fictional cryogenic storage units across all research wings. Internal calibration windows, redundancy thresholds and audit cadence are described as part of the narrative operational baseline.',
                'facility' => 'Medical Wing',
                'last_revision' => '1998-10-12',
            ],
            [
                'title' => 'Difference Between B.O.W. and Conventional Assets',
                'slug' => 'bow-and-conventional-assets',
                'category' => 'Research Notes',
                'security' => 'RESTRICTED',
                'security_key' => 'restricted',
                'author' => 'Weapons Development',
                'date' => '1998-10-18',
                'document_id' => 'BW-778-N',
                'icon' => 'dna',
                'excerpt' => 'Internal narrative note framing conceptual differences between fictional asset categories.',
                'body' => 'A narrative-only briefing intended to differentiate fictional bio-organic asset categories from conventional logistics inventory. Document is framed strictly as in-universe material for design and archival purposes.',
                'facility' => 'European Division',
                'last_revision' => '1998-10-21',
            ],
            [
                'title' => 'Spencer Mansion Archive: Internal Review',
                'slug' => 'spencer-mansion-archive-internal-review',
                'category' => 'Historical Archive',
                'security' => 'CLASSIFIED',
                'security_key' => 'classified',
                'author' => 'Executive Oversight',
                'date' => '1998-11-01',
                'document_id' => 'SM-001-A',
                'icon' => 'archive',
                'excerpt' => 'Fictional review of the Spencer Mansion archive collection and its narrative significance.',
                'body' => 'A fictional review of the Spencer Mansion archive collection, including correspondence excerpts, blueprint references and internal memos. Material is preserved as narrative artifact within the Umbrella Research Division.',
                'facility' => 'Arklay Archives',
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
            ['name' => 'Bioengineering', 'icon' => 'dna', 'description' => 'Narrative research framework around fictional sample design and replication scenarios.'],
            ['name' => 'Pharmaceutical Research', 'icon' => 'flask', 'description' => 'Fictional pharmaceutical pipeline used for visual storytelling and design references.'],
            ['name' => 'Containment Systems', 'icon' => 'shield-lock', 'description' => 'Imagined containment infrastructure represented through props, layouts and reports.'],
            ['name' => 'Private Security', 'icon' => 'user-shield', 'description' => 'Fictional security operatives and protocols documented as part of corporate lore.'],
            ['name' => 'Corporate Oversight', 'icon' => 'building', 'description' => 'Executive layer responsible for narrative continuity and access governance.'],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function timeline(): array
    {
        return [
            ['year' => '1968', 'title' => 'Founding', 'note' => 'Establishment of Umbrella as a pharmaceutical conglomerate within the project lore.'],
            ['year' => '1978', 'title' => 'NEST Laboratory', 'note' => 'Underground research facility brought online in narrative continuity.'],
            ['year' => '1988', 'title' => 'Arklay Operations', 'note' => 'Expansion of fictional research grounds and archive consolidation.'],
            ['year' => '1998', 'title' => 'Raccoon Incident', 'note' => 'Reference event used as canonical narrative anchor across this archive.'],
            ['year' => '2003', 'title' => 'Restructure', 'note' => 'Internal reorganization that frames the current archive layout.'],
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
