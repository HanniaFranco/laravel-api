<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function list()
    {
        //return Category::all();

        try {
            
            return response()->json(Category::all());

        }catch (\Exception $e) {
            
            return response()->json(['error' => $e->getMessage()], 500);

        }
        
    }

    
    public function selectCategories(Request $request)
    {
        $request->validate([
            'categories' => 'required|array|size:3',
            'categories.*' => 'exists:categories,id'
        ]);

        $user = Auth::user();

        $user->categories()->sync($request->categories);

        return response()->json(['message' => 'Categorías seleccionadas correctamente.']);
    }
    


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
