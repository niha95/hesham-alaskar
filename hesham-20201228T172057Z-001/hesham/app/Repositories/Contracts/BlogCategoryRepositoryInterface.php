<?php
namespace App\Repositories\Contracts;

use App\Models\BlogCategory;


interface BlogCategoryRepositoryInterface
{
    public function getAll();


    public function get(BlogCategory $post);


    public function delete(BlogCategory $post);

    public function store($data);

    public function update(BlogCategory $post, $data);



}
