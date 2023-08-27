<?php

namespace App\Http\Services;

use App\Models\Ingredient;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IngredientService 
{
    /**
     * Return a list of the users Ingredients 
     */
    public function index(): Ingredient 
    {
        return Ingredient::where('id', Auth::user()->id)->get();
    }

    /**
     * Get a ingredient ensuring it belongs to the user.
     * @param int $id
     * @return Ingredient 
     */
    public function show(int $id): Ingredient
    {
        return Ingredient::find($id);
    }

    /**
     * Store a ingredient
     * @param string $name
     * @param string $description 
     * @param string $cooking_time
     * @return void
     */
    public function store(
        string $name,
        IngredientsTypes $type,
    ): void {
        Ingredient::create([
            'user_id' => Auth::user()->id,
            'name' => $name,
            'type' => $type,
        ]);
    }

    /**
     * Update a ingredient
     * @param string $name
     * @param IngredientsTypes $type 
     * @return void
     */
    public function update(
        int $id,
        string $name,
        IngredientsTypes $type,
    ): void {
        Ingredient::find($id)->update([
            'name' => $name,
            'type' => $type,
        ]);
    }

    /**
     * Delete a ingredient
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        Ingredient::find($id)->delete();
    }


}