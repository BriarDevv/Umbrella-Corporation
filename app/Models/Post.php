<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\HasSecurityLevel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasSecurityLevel;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'security',
        'security_key',
        'author',
        'document_id',
        'icon',
        'excerpt',
        'body',
        'facility',
        'published_at',
        'last_revision',
    ];

    protected $casts = [
        'published_at' => 'date',
        'last_revision' => 'date',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeLatestPublished(Builder $query): Builder
    {
        return $query->orderByDesc('published_at');
    }

    public function scopeByCategory(Builder $query, ?string $category): Builder
    {
        if ($category === null || $category === '') {
            return $query;
        }

        return $query->where('category', $category);
    }
}
