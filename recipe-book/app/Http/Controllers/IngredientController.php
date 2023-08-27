<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\InfredientService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Request\IngredientRequest;

class IngredientController extends Controller
{

    public function __construct(private IngredientService $ingredientService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredients = $this->ingredientService->index();

        return view('ingredient.index')->compact('ingredient');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
