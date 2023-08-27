<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\RecipeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Request\RecipeRequest;

class RecipeController extends Controller
{
    public function __construct(private RecipeService $recipeService)
    {
    }
    /**
     * Display a listing of the users recipes.
     * @return View
     */
    public function index(): View
    {
        $recipes = $this->recipeService->index();

        return view('recipe.index')->compact('recipes');
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param RecipeRequest $request
     * @return 
     */
    public function store(RecipeRequest $request)
    {
        $this->recipeService->store(
            $request->name,
            $request->description,
            $request->cooking_time
        );

        return Redirect::route('recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $recipe = $this->recipeService->show($id);
        return view('recipe.show')->compact('recipe');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $recipe = $this->recipewService->show($id);
        return view('recipe.edit')->compact('recipe');
    }

    /**
     * Update the specified resource in storage.
     * @param
     */
    public function update(RecipeRequest $request, int $id)
    {
        $this->recipeService->update(
            $id,
            $request->name,
            $request->description,
            $request->cooking_time
        );

        return Redirect::route('recipe.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->recipeService->destroy($id);
        return Redirect::route('recipes.index');
    }
}
