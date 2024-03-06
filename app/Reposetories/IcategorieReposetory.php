<?php

namespace App\Reposetories;
use App\Http\Request;

interface IcategorieReposetory{ public function getAll();
    public function getById($id);
    public function create(array $data);
    public function delete($id);
    public function update($id,array $data);
    public function existe($name);//si la categore avec le meme nom est existe dans table categories

}