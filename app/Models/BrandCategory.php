<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'is_active',
    ];

    /**
     * A brand category has many brands.
     */
    public function brands()
    {
        return $this->hasMany(Brand::class, 'brand_category_id');
    }
}
