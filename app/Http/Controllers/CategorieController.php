<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Services\CategorieService;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categories');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories',
            // Add other validation rules as needed
        ]);

        $category = $this->CategorieService->createCategory($data);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = $this->CategorieService->getCategoryById($id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = $this->CategorieService->getCategoryById($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            // Add other validation rules as needed
        ]);

        $this->CategorieService->updateCategory($id, $data);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    
     public function destroy($id)
     {
         $this->CategorieService->deleteCategory($id);
         return redirect()->route('categories.index');
     }
}
