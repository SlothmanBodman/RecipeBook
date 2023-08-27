<?php

namespace App\Http\Services;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RecipeService 
{
    /**
     * Return a list of the users recipes 
     */
    public function index(): Recipe 
    {
        return Recipe::where('id', Auth::user()->id)->get();
    }

    /**
     * Get a recipe ensuring it belongs to the user.
     * @param int $id
     * @return Recipe 
     */
    public function show(int $id): Recipe
    {
        return Recipe::find($id)->with([
            'ingredients',
            'instructions',
            'categories',
        ]);
    }

    /**
     * Store a Recipe
     * @param string $name
     * @param string $description 
     * @param string $cooking_time
     * @return void
     */
    public function store(
        string $name,
        string $description,
        string $cookingTime,
    ): void {
        Recipe::create([
            'user_id' => Auth::user()->id,
            'name' => $name,
            'discription' => $discription, 
            'cooking_time' => $cookingTime
        ]);
    }

    /**
     * Update a Recipe
     * @param string $name
     * @param string $description 
     * @param string $cooking_time
     * @return void
     */
    public function update(
        int $id,
        string $name,
        string $description,
        string $cookingTime,
    ): void {
        Recipe::find($id)->update([
            'name' => $name,
            'description' => $description,
            'cooking_time' => $cookingTime,
        ]);
    }

    /**
     * Delete a recipe
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        Recipe::find($id)->delete();
    }


}