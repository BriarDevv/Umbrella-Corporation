<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;

/**
 * Comparte el comportamiento de "nivel de autorización" entre Product y Post:
 * etiquetas legibles en español, tokens de color del design system y un scope
 * de filtrado reutilizable. La columna que guarda el key se inyecta vía
 * $securityKeyColumn en cada modelo que use este trait.
 */
trait HasSecurityLevel
{
    /** @var array<string, array{label: string, tone: string}> */
    private static array $securityMap = [
        'critical'   => ['label' => 'CRÍTICO',     'tone' => 'red'],
        'restricted' => ['label' => 'RESTRINGIDO', 'tone' => 'crimson'],
        'classified' => ['label' => 'CLASIFICADO', 'tone' => 'void'],
        'nominal'    => ['label' => 'NOMINAL',     'tone' => 'green'],
        'standby'    => ['label' => 'EN ESPERA',   'tone' => 'grey'],
        'clear'      => ['label' => 'LIBRE',       'tone' => 'white'],
    ];

    public function getSecurityLabelAttribute(): string
    {
        return self::$securityMap[$this->{$this->securityKeyColumn()}]['label']
            ?? strtoupper((string) $this->{$this->securityKeyColumn()});
    }

    public function getSecurityToneAttribute(): string
    {
        return self::$securityMap[$this->{$this->securityKeyColumn()}]['tone'] ?? 'grey';
    }

    public function scopeBySecurity(Builder $query, ?string $key): Builder
    {
        if ($key === null || $key === '') {
            return $query;
        }

        return $query->where($this->securityKeyColumn(), $key);
    }

    protected function securityKeyColumn(): string
    {
        return property_exists($this, 'securityKey') ? $this->securityKey : 'security_key';
    }
}
