<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\HasSecurityLevel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasSecurityLevel;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'type',
        'id_code',
        'price',
        'stock',
        'status',
        'status_key',
        'clearance',
        'clearance_key',
        'facility',
        'risk_index',
        'containment_class',
        'format',
        'color_visual',
        'image',
        'icon',
        'description',
        'body',
        'dossier',
        'last_revision',
    ];

    protected $casts = [
        'price' => 'integer',
        'dossier' => 'array',
        'last_revision' => 'date',
    ];

    /**
     * El trait HasSecurityLevel usa esta columna como llave de autorización.
     * Para productos el "nivel de seguridad" se expone como clearance_key,
     * mientras que el status_key indica el estado operativo.
     */
    protected string $securityKey = 'clearance_key';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFiltered(Builder $query, ?string $categorySlug, ?string $clearanceKey): Builder
    {
        return $query
            ->when($categorySlug, fn (Builder $q, string $slug) => $q->whereHas(
                'category',
                fn (Builder $sub) => $sub->where('slug', $slug)
            ))
            ->when($clearanceKey, fn (Builder $q, string $key) => $q->where('clearance_key', $key));
    }

    public function getRiskPercentageAttribute(): int
    {
        if (preg_match('/(\d+)\s*\/\s*(\d+)/', (string) $this->risk_index, $m) === 1) {
            return (int) round(((int) $m[1] / max(1, (int) $m[2])) * 100);
        }

        return 0;
    }

    public function getCategorySlugAttribute(): string
    {
        return $this->category?->slug ?? Str::slug((string) $this->category?->name);
    }
}
