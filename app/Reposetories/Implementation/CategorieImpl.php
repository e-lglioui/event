<?php
namespace App\Reposetories\Implementation;
use App\Reposetories\IcategorieReposetory;
use App\Models\Categorie;
use App\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategorieImpl implements IcategorieReposetory{

    public function getAll()
    {
        return Categorie::all();
    }

   public function getById($id){
       return Categorie::find($id);
   }

   public function create(array $data){
    return Categorie::create($data);
   }

   public function delete($id)
   {
       return Categorie::destroy($id);
   }

   public function update($id, array $data)
   {
       $categorie = Categorie::find($id);

       if ($categorie) {
           $categorie->update($data);
           return $categorie;
       }

       return null; 
   }


   public function existe($name)
{
    $existingCategory = Categorie::where('name', $name)->first();

    return $existingCategory !== null;
}

}
