<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Services\CategorieService;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    protected $CategorieService;

    public function __construct(CategorieService $CategorieService)
    {
        $this->CategorieService = $CategorieService;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all(); 
        return view('admin.categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorie-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
       $data= $request->validate([
            'titre' => 'required|unique:categories',
            'descreption' => 'required|unique:categories',
             
        ]);
        $data['statu'] = 1;
           //dd($data);
        $category = $this->CategorieService->createCategory($data);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = $this->CategorieService->getCategoryById($id);
        return view('admin.categorie-show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = $this->CategorieService->getCategoryById($id);
        return view('admin.categorie-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $data = $request->validate([
            'titre' => 'required|unique:categories',
            'descreption' => 'required|unique:categories',
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
