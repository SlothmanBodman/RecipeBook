<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'cooking_time',
    ];

    /**
     * Get the Ingredients for the recipe. 
     */
    public function ingredients(): HasMany
    {
        return $this->hasMany(RecipeIngredient::class);
    }

    /**
     * Get the Instructions for the recipe.
     */
    public function instructions(): HasMany
    {
        return $this->hasMany(Instruction::class)->orderBy('order', 'asc');
    }

    /**
     * Get the Categories for the recipe.
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class);
    }


}
