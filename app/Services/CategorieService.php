<?php

namespace App\Services;

use App\Reposetories\IcategorieReposetory;

class CategorieService
{
    protected $CategorieRepository;

    public function __construct(IcategorieReposetory $CategorieRepository)
    {
        $this->CategorieRepository = $CategorieRepository;
    }

    public function getAllCategories()
    {
        return $this->CategorieRepository->getAll();
    }

    public function getCategoryById($id)
    {
        return $this->CategorieRepository->getById($id);
    }

    public function createCategory(array $data)
    {      //dd($data);
        return $this->CategorieRepository->create($data);
    }

    public function deleteCategory($id)
    {
        return $this->CategorieRepository->delete($id);
    }

    public function updateCategory($id, array $data)
    {
        return $this->CategorieRepository->update($id, $data);
    }

    public function categoryExists($name)
    {
        return $this->CategorieRepository->existe($name);
    }
}
