<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'brand_category_id',
        'brand_category_name',
        'name',
        'slug',
        'logo',
        'title',
        'link',
        'top',
        'meta_title',
        'meta_description',
        'user_id',
        'is_active',
        'active',
    ];

    /**
     * A brand belongs to a brand category.
     */
    public function brandCategory()
    {
        return $this->belongsTo(BrandCategory::class, 'brand_category_id');
    }
}
